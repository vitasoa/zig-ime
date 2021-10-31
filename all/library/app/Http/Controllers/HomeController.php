<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Contact;
use DB;
use Carbon\Carbon;
use App\Http\Controllers\BookController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$member = \Auth::user();
		
		$collection_users_viewed = DB::table('collection_users_viewed')
								->where('user_id', '=', \Auth::user()->id)->get();
		
		$collection_books_user = array();
		$bookCtrl = new BookController;
		foreach($collection_users_viewed as $v){
			$bookUser = $bookCtrl->getCollectionById($v->book_id);
			if (!empty($bookUser)){
				$bookViews = $bookUser[0];
				$bookViews['created_at'] = $v->created_at;
				$bookViews['updated_at'] = $v->updated_at;
				array_push($collection_books_user, $bookViews);
			}
		}
		
		$collection_users_downloaded = DB::table('collection_users_downloaded')
								->where('user_id', '=', \Auth::user()->id)->get();
		$collection_download_user = array();
		foreach($collection_users_downloaded as $d){
			$bookDownload = $bookCtrl->getCollectionById($d->book_id);
			if (!empty($bookDownload)){
				$bookDowns = $bookDownload[0];
				$bookDowns['created_at'] = $d->created_at;
				$bookDowns['updated_at'] = $d->updated_at;
				array_push($collection_download_user, $bookDowns);
			}
		}

        return view('home', ['member' => $member, 'collection_download_user' => $collection_download_user, 'collection_users_viewed' => $collection_books_user]);
    }
	
	/**
     * Update member profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
	public function profile()
    {
		$member = \Auth::user();
		$contactMember = Contact::where('member_id', '=', \Auth::user()->id)->first();
		return view('profile', ['member' => $member, 'contactMember' => $contactMember]);
    }
	
	public function postProfile(Request $request)
    {
		$validatedData = $request->validate([
			'titre' => 'required|string|max:255',
            'name' => 'required|string|max:255',
			'lastname' => 'required|string|max:255',
			'mobile' => 'required|string|max:15'            
        ]);
		
		$register = Member::find(\Auth::user()->id);
        $register->name = $request->name;
		$register->lastname = $request->lastname;
		$register->description = $request->notes;
		$register->adresse = $request->adresse;
		// $register->complement_adresse = $request->complement_adresse;
		$register->city = $request->city;
		$register->code_postal = $request->code_postal;
		$register->country = $request->country;
		$register->phone = $request->mobile;
		$register->mobile = $request->mobile;
		$register->facebook = $request->facebook;
		// $register->linkedin = $request->linkedin;
		// $register->courriel = \Auth::user()->email;
		$register->twiteer = $request->twitter;
		$register->site_web = $request->website;
		$register->share = isset($request->share) ? 1 : 0;
		$register->formation = $request->formation;
		
		$contact = DB::table('contacts')->where('member_id', '=', \Auth::user()->id)->first();
		$contactObj = Contact::find($contact->id);
		if(isset($request->member_profile_photo)){
			$file = $request->file('member_profile_photo');
			$ext = 'png';
			if($file->getClientOriginalExtension() != ''){
				$ext = $file->getClientOriginalExtension();
			}
			$contents = $file->openFile()->fread($file->getSize());
			$imgAll = 'data:image/' . $ext . ';base64,' . base64_encode($contents);
			$contactObj->photo = $imgAll;
		}
		$contactObj->titre = $request->titre;
		$contactObj->prenom = $request->name;
		$contactObj->nom = $request->lastname;
		$contactObj->phone = $request->mobile;
		$contactObj->mobile = $request->mobile;
		$contactObj->adresse = $request->adresse;
		$contactObj->ville = $request->code_postal . ", " . $request->city;
		$contactObj->pays = $request->country;
		$contactObj->job = $request->poste;
		$contactObj->entreprise = $request->entreprise;
		$contactObj->formation = $request->formation;
		$contactObj->promotion = $request->promotion;
		$contactObj->facebook = $request->facebook;
		$contactObj->twitter = $request->twitter;
		$contactObj->siteweb = $request->website;
		$contactObj->notes = $request->notes;
		$contactObj->domaines = $request->domaines;
		$contactObj->nationality = $request->nationality;
		$contactObj->employer = $request->employer;
		$contactObj->share = isset($request->share) ? 1 : 0;
		$contactObj->member_id = \Auth::user()->id;
		$contactObj->save();

		$request->session()->put('register-member', $register);
 
        if ($register->save())
            return redirect()->back()->with('success', 'Votre profil a été mise à jour !');   
        else
            return redirect()->back()->with('errors', 'Le processus rencontre une erreur, veuillez réessayer plus tard !');   
    }
}
