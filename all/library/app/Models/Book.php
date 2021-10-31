<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use DB;

class Book extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'books';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['name', 'image', 'book_file', 'total_page', 'rating', 
	'isbn', 'published_date', 'lang', 'type', 'topic', 'commentary'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
	
	public static function getAuthors($bookId){
		$collectionAuthors = DB::table('book_authors')->where('book_id', '=', $bookId);
		$authorsC = $collectionAuthors->get();
		return $authorsC;
	}
	
	public static function getThemes($bookId){
		$collectionThemes = DB::table('book_themes')->where('book_id', '=', $bookId);
		$themesC = $collectionThemes->get();
		return $themesC;
	}
	
	public static function boot()
	{
		parent::boot();
		static::deleting(function($obj) {
			Storage::delete(Str::replaceFirst('storage/', 'public/', $obj->image));
		});
	}
	
	public function setImageAttribute($value)
	{
		$attribute_name = "image";
		$destination_path = "public/books";
		if ($value == null) {
			Storage::delete($this->{$attribute_name});
			$this->attributes[$attribute_name] = null;
		}

		if (Str::startsWith($value, 'data:image'))
		{
			$image = Image::make($value)->encode('jpg', 90);
			$image->resize(300,500);
			$filename = md5($value.time()).'.jpg';
			Storage::put($destination_path.'/'.$filename, $image->stream());
			Storage::delete(Str::replaceFirst('storage/', 'public/', $this->{$attribute_name}));
			$public_destination_path = Str::replaceFirst('public/', 'storage/', $destination_path);
			$this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
		}
	}
	
	public function setBookFileAttribute($value)
    {   
        $attribute_name = "book_file";
        $disk = "book";
        $destination_path = "uploads_books";
        $this->uploadPdfToDisk($value, $attribute_name, $disk, $destination_path);
    }
	
	public function uploadPdfToDisk($value, $attribute_name, $disk, $destination_path)
    {   
		$request = \Request::instance();
        if ($request->hasFile($attribute_name) &&
            $this->{$attribute_name} &&
            $this->{$attribute_name} != null) {
            \Storage::disk($disk)->delete($this->{$attribute_name});
            $this->attributes[$attribute_name] = null;
        }
        if (is_null($value) && $this->{$attribute_name} != null) {
            \Storage::disk($disk)->delete($this->{$attribute_name});
            $this->attributes[$attribute_name] = null;
        }
        if ($request->hasFile($attribute_name) && $request->file($attribute_name)->isValid()) {
            $file = $request->file($attribute_name);
            $new_file_name = md5($file->getClientOriginalName(). time()) . '.' . $file->getClientOriginalExtension();            
            $file_path = $file->storeAs("/", $new_file_name, $disk);
            $this->attributes[$attribute_name] = $destination_path.'/'.$new_file_name;
        }
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
	public function authors(){
		return $this->belongsToMany(Author::class, 'book_authors', 'book_id', 'author_id');
	}
	
	public function themes(){
		return $this->belongsToMany(Theme::class, 'book_themes', 'book_id', 'theme_id');
	}
	
	public function keywords(){
		return $this->belongsToMany(Theme::class, 'book_keywords', 'book_id', 'keyword_id');
	}

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
