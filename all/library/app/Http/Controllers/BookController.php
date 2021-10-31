<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Theme;
use App\Models\Author;
use DB;
use Carbon\Carbon;
use PDF;

class BookController extends Controller
{
    public function __construct()
    {
		// $this->middleware('auth');
    }
	
    public function collection() {
		$themes = DB::table('themes')->get();		
		return view('collection', compact('themes'));
	}
	
	public function getCollectionById($bookId){
		$collections = DB::table('books')->where('id','=',$bookId)->get();
		$arrayCollection = array();
		foreach($collections as $k => $v) {
			$arrValue = (array)$v;			
			$authors = Book::getAuthors($arrValue['id']);
			$themes = Book::getThemes($arrValue['id']);
			$implodeThemes = array();
			foreach($themes as $theme){
				$collectionTheme = Theme::getThemeById($theme->theme_id);
				array_push($implodeThemes, $collectionTheme->name);
			}			
			$allowThemes = implode(' & ', $implodeThemes);
			if (!$allowThemes) {
				$allowThemes = 'Physiques';
			}			
			$collectionAuthorBook = array();
			foreach($authors as $author){
				$collectionAuthor = Author::getAuthorsById($author->author_id);
				array_push($collectionAuthorBook, $collectionAuthor);
			}			
			$countAuthors = count($authors);			
			$arrValue['id'] = app('encrypter')->encrypt($arrValue['id']);
			$arrValue['authors'] = $collectionAuthorBook;
			$arrValue['themes'] = $allowThemes;
			$arrValue['countAuthors'] = $countAuthors;
			$created_at = Carbon::parse($arrValue['created_at'])->diffForHumans();
			$arrValue['diffforhumans'] = ucfirst($created_at);
			array_push($arrayCollection, $arrValue);
		}
		// dd($arrayCollection);
		return $arrayCollection;
	}
	
	public function getCollection(){
		$collections = DB::table('books')->orderBy('published_date', 'desc')->get();
		$arrayCollection = array();
		foreach($collections as $k => $v) {
			$arrValue = (array)$v;			
			$authors = Book::getAuthors($arrValue['id']);
			$themes = Book::getThemes($arrValue['id']);
			$implodeThemes = array();
			foreach($themes as $theme){
				$collectionTheme = Theme::getThemeById($theme->theme_id);
				array_push($implodeThemes, $collectionTheme->name);
			}			
			$allowThemes = implode(' & ', $implodeThemes);
			if (!$allowThemes) {
				$allowThemes = 'Physiques';
			}			
			$collectionAuthorBook = array();
			foreach($authors as $author){
				$collectionAuthor = Author::getAuthorsById($author->author_id);
				array_push($collectionAuthorBook, $collectionAuthor);
			}			
			$countAuthors = count($authors);			
			$arrValue['id'] = app('encrypter')->encrypt($arrValue['id']);
			$arrValue['authors'] = $collectionAuthorBook;
			$arrValue['themes'] = $allowThemes;
			$arrValue['countAuthors'] = $countAuthors;
			$created_at = Carbon::parse($arrValue['created_at'])->diffForHumans();
			$arrValue['diffforhumans'] = ucfirst($created_at);
			array_push($arrayCollection, $arrValue);
		}
		// dd($arrayCollection);
		return $arrayCollection;
	}
	
	public function getCollections(Request $request) {
		$searchQuery = $request->get('searchQuery');
		$theme = $request->get('theme');
		$lang = $request->get('lang');
		$year = $request->get('year');
		$type = $request->get('type');	
		$page = $request->get('page_book');
		$arraySearchQuery = explode(",", $searchQuery);
		
		$collections = DB::table('books')->select('books.id')   
									->leftjoin('book_authors','book_authors.book_id','=','books.id')
									->leftjoin('authors','book_authors.author_id','=','authors.id')
									->leftjoin('book_keywords','book_keywords.book_id','=','books.id')
									->leftjoin('keywords','book_keywords.keyword_id','=','keywords.id')
									->leftjoin('book_themes','book_themes.book_id','=','books.id')
									->leftjoin('themes','book_themes.theme_id','=','themes.id');
		if($theme != null) {
			$collections->where('themes.name','=',$theme);
		}		
		if($lang != null) {
			$collections->where('books.lang','=',$lang);
		}
		if($type != null) {
			$collections->where('books.type','=',$type);
		}
		if($page != null) {
			if ($page == 49){
				$collections->where('books.total_page','<',50);
			}
			if ($page == 99){
				$collections->where('books.total_page','<',100);
				$collections->where('books.total_page','>=',50);
			}
			if ($page == 101){
				$collections->where('books.total_page','>=',100);
			}
		}
		if($year != null) {
			$dayFirst = $year . '-01-01';
			$dayFirst = Carbon::parse($dayFirst)->isoFormat('YYYY-MM-DD');
			$dayEnddt = $year . '-12-31';
			$dayEnddt = Carbon::parse($dayEnddt)->isoFormat('YYYY-MM-DD');
			$collections->where('books.published_date','>=',$dayFirst);
			$collections->where('books.published_date','<', $dayEnddt);
		}
		
		$datasCollection = array();
		if( $arraySearchQuery[2] == '-' && $arraySearchQuery[6] == '-'){
			$collections = $collections->groupBy('books.id')->get();
			foreach($collections as $key => $value){
				$book = $this->getCollectionById($value->id);
				array_push($datasCollection, $book[0]);
			}
			return $datasCollection;
		}else{
			if($arraySearchQuery[6] == '-'){
				$searchDatas = $this->setQuerySearch($arraySearchQuery[0], $arraySearchQuery[1], $collections, $arraySearchQuery[2]);
				$dataCollections = $searchDatas->groupBy('books.id')->get();
				foreach($dataCollections as $key => $value){
					$book = $this->getCollectionById($value->id);
					array_push($datasCollection, $book[0]);
				}
				return $datasCollection;
			}else{
				/** AND **/
				if($arraySearchQuery[3] == 'and'){
					$searchDatas = $this->setQuerySearch($arraySearchQuery[0], $arraySearchQuery[1], $collections, $arraySearchQuery[2]);
					$searchDatas = $this->setQuerySearch($arraySearchQuery[4], $arraySearchQuery[5], $searchDatas, $arraySearchQuery[6]);
					$dataCollections = $searchDatas->groupBy('books.id')->get();
					foreach($dataCollections as $key => $value){
						$book = $this->getCollectionById($value->id);
						array_push($datasCollection, $book[0]);
					}
					return $datasCollection;
				}else {
					$searchDatas = $this->setQuerySearch($arraySearchQuery[0], $arraySearchQuery[1], $collections, $arraySearchQuery[2]);
					$dataCollections1 = $searchDatas->groupBy('books.id')->get();
					$searchDatas2 = $this->setQuerySearch($arraySearchQuery[4], $arraySearchQuery[5], $collections, $arraySearchQuery[6]);
					$dataCollections2 = $searchDatas2->groupBy('books.id')->get();
					$allBooksIds = array();
					foreach($dataCollections1 as $k1 => $v1){
						array_push($allBooksIds, (int)$v1->id);
					}
					foreach($dataCollections2 as $k2 => $v2){
						array_push($allBooksIds, (int)$v2->id);
					}
					$allIds = array_unique($allBooksIds);
					foreach($allIds as $bId){
						$book = $this->getCollectionById((int)$bId);
						array_push($datasCollection, $book[0]);
					}
					return $datasCollection;
				}
			}
		}
	}
	
	public function setQuerySearch($field, $query, $collections, $valueSearch){
		if($field == 'any'){
			if($query == 'contains'){
				$collections->where('books.name','LIKE','%' . $valueSearch . '%')
									->orwhere('books.commentary','LIKE','%' . $valueSearch . '%')
									->orwhere('books.topic','LIKE','%' . $valueSearch . '%')
									->orwhere('authors.lastname','LIKE','%' . $valueSearch . '%')
									->orwhere('keywords.name','LIKE','%' . $valueSearch . '%');
			}
			if($query == 'exact'){
				$collections->where('books.name','=', $valueSearch)
									->orwhere('books.commentary','=', $valueSearch)
									->orwhere('books.topic','LIKE','=', $valueSearch)
									->orwhere('authors.lastname','=', $valueSearch)
									->orwhere('keywords.name','=', $valueSearch);
			}
			if($query == 'startwith'){
				$collections->where('books.name','LIKE','%' . $valueSearch . '%')
							->orwhere('books.commentary','LIKE','%' . $valueSearch)
							->orwhere('books.topic','LIKE','%' . $valueSearch)
							->orwhere('authors.lastname','LIKE','%' . $valueSearch)
							->orwhere('keywords.name','LIKE','%' . $valueSearch);
			}
			if($query == 'notcontains'){
				$collections->where('books.name','NOT LIKE','%' . $valueSearch . '%')
							->orwhere('books.commentary','NOT LIKE','%' . $valueSearch)
							->orwhere('books.topic','NOT LIKE','%' . $valueSearch)
							->orwhere('authors.lastname','NOT LIKE','%' . $valueSearch)
							->orwhere('keywords.name','NOT LIKE','%' . $valueSearch);
			}
		}else{
			if($field == 'title'){
				if ($query == 'contains'){
					$collections->where('books.name','LIKE','%' . $valueSearch . '%');
				}						
				if ($query == 'exact'){
					$collections->where('books.name','=',$valueSearch);
				}						
				if ($query == 'startwith'){
					$collections->where('books.name','LIKE','%' . $valueSearch);
				}
				if ($query == 'notcontains'){
					$collections->where('books.name','NOT LIKE','%' . $valueSearch);
				}
			}			
			if($field == 'desc'){
				if ($query == 'contains'){
					$collections->where('books.commentary','LIKE','%' . $valueSearch . '%')
								->orwhere('books.topic','LIKE','%' . $valueSearch . '%');
				}						
				if ($query == 'exact'){
					$collections->where('books.commentary','=', $valueSearch)
								->orwhere('books.topic','=', $valueSearch);
				}						
				if ($query == 'startwith'){
					$collections->where('books.commentary','LIKE','%' . $valueSearch)
								->orwhere('books.topic','LIKE','%' . $valueSearch);
				}
				if ($query == 'notcontains'){
					$collections->where('books.commentary','NOT LIKE','%' . $valueSearch)
								->orwhere('books.topic','NOT LIKE','%' . $valueSearch);
				}
			}
			/** Authors **/
			if($field == 'author'){
				if ($query == 'contains'){
					$collections->where('authors.lastname','LIKE','%' . $valueSearch . '%');
				}						
				if ($query == 'exact'){
					$collections->where('authors.lastname','=', $valueSearch);
				}						
				if ($query == 'startwith'){
					$collections->where('authors.lastname','LIKE','%' . $valueSearch);
				}
				if ($query == 'notcontains'){
					$collections->where('authors.lastname','NOT LIKE','%' . $valueSearch);
				}
			}
			/** Keywords **/
			if($field == 'keys'){
				if ($query == 'contains'){
					$collections->where('keywords.name','LIKE','%' . $valueSearch . '%');
				}						
				if ($query == 'exact'){
					$collections->where('keywords.name','=', $valueSearch);
				}						
				if ($query == 'startwith'){
					$collections->where('keywords.name','LIKE','%' . $valueSearch);
				}
				if ($query == 'notcontains'){
					$collections->where('keywords.name','NOT LIKE','%' . $valueSearch);
				}
			}
		}
		
		return $collections;
	}
	
	public function detail(Request $request) {
		$id = app('encrypter')->decrypt($request->id);
		$collection = Book::where('id', '=', $id)->get()->load('themes')->load('keywords')->load('authors');
        $first = $collection->first();
        if (!empty($first))
        {
			/** SAVE STATS **/
			DB::table('collection_users_viewed')->insertOrIgnore(array(
                    'user_id' => \Auth::user()->id,
                    'book_id' => $id,
					'created_at' =>  date("Y-m-d H:i:s"),
					'updated_at' =>  date("Y-m-d H:i:s")
			));
            return view('detail', compact('first'));
        } else
        {
            return back();
        }
	}
	
	public function downloadEbook(Request $request){
		$id = app('encrypter')->decrypt($request->id);
		$collection = Book::where('id', '=', $id)->first();
		$file = public_path(). '/storage/' .$collection->book_file;
		/** SAVE STATS **/
		DB::table('collection_users_downloaded')->insertOrIgnore(array(
				'user_id' => \Auth::user()->id,
				'book_id' => $id,
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s")
		));
		return response()->download($file);
	}
}
