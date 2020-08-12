<?php

namespace App\Http\Controllers\Formateur\Auth;

use App\Formateur;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new admins as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect formateurs after registration.
     *
     * @var string
     */
    protected $redirectTo = '/formateur';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('formateur.guest:formateur');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:formateurs'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new formateur instance after a valid registration.
     *
     * @param array $data
     *
     * @return \App\Formateur
     */
    protected function create(array $data)
    {
        $data['profil_img'] = null;
        
        if(!is_null($data['profil_img'])){

            $extension = $data['profil_img']->getClientOriginalExtension();
            $filename = time().rand(10, 1000).'.'.$extension;
            $data['profil_img']->move(public_path('images/profil'), $filename);

            $data['profil_img'] = $filename;
        }

        return Formateur::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'region' => $data['region'],
            'region' => $data['region'],
            'tel' => $data['tel'],
            'email' => $data['email'],
            'grade' => $data['grade'],
            'specialite' => $data['specialite'],
            'password' => Hash::make($data['password']),
            'profil_img' => $data['profil_img'],
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('formateur.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('formateur');
    }
}
