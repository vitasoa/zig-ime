<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Member;
use App\Models\Contact;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:members'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
			'formation' => 'required',
			'genre' => ['required', 'in:male,female'],
        ]);
    }

    /**
     * Create a new member instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Member
     */
    protected function create(array $data)
    {
		$share = 0;
		if ($data['share'] == 'on'){
			$share = 1;
		}
		
		$member = Member::create([
            'name' => $data['name'],
			'lastname' => $data['lastname'],
            'email' => $data['email'],
			'share' => $share,
			'formation' => $data['formation'],
            'password' => Hash::make($data['password']),
        ]);
		
		$titre = 'Monsieur';
		if ($data['genre'] == 'female'){
			$titre = 'Madame';
		}			
		
		Contact::create([
            'prenom' => $data['name'],
			'nom' => $data['lastname'],
            'email' => $data['email'],
			'share' => $share,
			'formation' => $data['formation'],
            'member_id' => $member->id,
			'titre' => $titre,
        ]);
        
		return $member;
    }
}
