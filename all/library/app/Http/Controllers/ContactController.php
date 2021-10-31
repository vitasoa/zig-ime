<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
	public function __construct()
    {
		// $this->middleware('auth');
    }
	
    public function getAnnuaire(){
		$contacts = DB::table('contacts')->orderBy('promotion', 'desc')->get();
		return $contacts;
	}
	
	public function getAnnuaires(Request $request) {		
		$query_name = $request->get('query_name');
		$parcours = $request->get('parcours');
		$promotion = $request->get('promotion');
		$domaines = $request->get('domaines');
		$nationality = $request->get('nationality');
		$genre = $request->get('genre');
		$employer = $request->get('employer');

		if( $query_name == null && $parcours == null && $promotion == null && $nationality == null && $genre == null && $employer == null && $domaines == null){
			$annuaire = $this->getAnnuaire();
			return $annuaire;
		}else{
			$contacts = DB::table('contacts');
			if ($query_name != null){
				$contacts = $contacts->where(function($qct) use($query_name){
								$qct->where('nom', 'LIKE', "%{$query_name}%")
								->orWhere('prenom', 'LIKE', "%{$query_name}%");
				});
			}
			
			if ($parcours != null){
				$contacts = $contacts->where(function($qct) use($parcours){
								$qct->where('formation', '=', "{$parcours}");
				});
			}
			
			if ($promotion != null){
				$contacts = $contacts->where(function($qct) use($promotion){
								$qct->where('promotion', '=', "{$promotion}");
				});
			}
			
			if ($domaines != null){
				$contacts = $contacts->where(function($qct) use($domaines){
								$qct->where('domaines', 'LIKE', "%{$domaines}%");
				});
			}
			
			if ($nationality != null){
				$contacts = $contacts->where(function($qct) use($nationality){
								$qct->where('nationality', 'LIKE', "%{$nationality}%");
				});
			}
			
			if ($genre != null){
				$contacts = $contacts->where(function($qct) use($genre){
								$qct->where('genre', '=', "{$genre}");
				});
			}
			
			if ($employer != null){
				$contacts = $contacts->where(function($qct) use($employer){
								$qct->where('employer', '=', "{$employer}");
				});
			}
			
			$contacts = $contacts->get();
			return $contacts;
		}
	}
	
	public function index() {
		$nationalities = DB::table('contacts')
            ->select('nationality')
            ->distinct()
			->where('nationality', '!=', NULL)
			->orderBy('nationality', 'asc')->get();
			
		$domaines = DB::table('contacts')
            ->select('domaines')
            ->distinct()
			->where('domaines', '!=', NULL)
			->orderBy('domaines', 'asc')->get();
			
		$employers = DB::table('contacts')
            ->select('employer')
            ->distinct()
			->where('employer', '!=', NULL)
			->orderBy('employer', 'asc')->get();

		return view('etudiants', compact('nationalities', 'domaines', 'employers'));
	}
}
