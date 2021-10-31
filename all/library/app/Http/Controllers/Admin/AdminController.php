<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use DB;

use App\Models\Book;
use App\Models\Member;

class AdminController extends Controller
{
    protected $data = []; // the information we send to the view

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(backpack_middleware());
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin')     => backpack_url('dashboard'),
            trans('backpack::base.dashboard') => false,
        ];

		$collections = DB::table('books')->orderBy('created_at', 'desc')->get();
		$themes = DB::table('themes')->get();
		$nbr_collections = count($collections);
		$new_collections = Book::where('created_at', '>=', date('Y-m-d', strtotime("-15 days")))->get();
		$new_collections = count($new_collections);
		$keywords = DB::table('keywords')->get();
		$authors = DB::table('authors')->get();
		
		$collections_download = DB::table('collection_users_downloaded')->get();
		
		$this->data['nbr_collections'] = $nbr_collections;
		$this->data['authors'] = count($authors);
		$this->data['keywords'] = count($keywords);
		$this->data['themes'] = count($themes);
		$this->data['new_collections'] = $new_collections;
		$this->data['collections_download'] = count($collections_download);
		
		$member_info = DB::table('collection_users_downloaded')
			->select('user_id', DB::raw('count(*) as nbr'))
			->groupBy('user_id')->get();
		
		$countLicence = 0;
		$countMaster = 0;
		$countDoctorat = 0;
		$countEnseignant = 0;
		$countOthers = 0;
		$allDownload = DB::table('collection_users_downloaded')->get();
		foreach($member_info as $m) {
			$mInfos = Member::where('id', '=', $m->user_id)->first();
			if($mInfos->formation == 'Autres'){
				$countOthers = round(($m->nbr / count($allDownload)) * 100, 2);
			}elseif($mInfos->formation == 'Licence'){
				$countLicence = round(($m->nbr / count($allDownload)) * 100, 2);
			}elseif($mInfos->formation == 'Master'){
				$countMaster = round(($m->nbr / count($allDownload)) * 100, 2);
			}elseif($mInfos->formation == 'Doctorat'){
				$countDoctorat = round(($m->nbr / count($allDownload)) * 100, 2);
			}elseif($mInfos->formation == 'Enseignant'){
				$countEnseignant = round(($m->nbr / count($allDownload)) * 100, 2);
			}else{
				$countLicence = 0;
				$countMaster = 0;
				$countDoctorat = 0;
				$countEnseignant = 0;
				$countOthers = 0;
			}
		}
		
		$this->data['countLicence'] = $countLicence;
		$this->data['countMaster'] = $countMaster;
		$this->data['countDoctorat'] = $countDoctorat;
		$this->data['countEnseignant'] = $countEnseignant;
		$this->data['countOthers'] = $countOthers;

        return view(backpack_view('dashboard'), $this->data);
    }

    /**
     * Redirect to the dashboard.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(backpack_url('dashboard'));
    }
}
