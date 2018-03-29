<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Organization;
use App\Country;
use App\ParticipantType;
use App\Title;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/home';

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
    * Show the registration form
    *
    */
    public function showRegistrationForm()
    {
        $participantType = ParticipantType::all();
        $organizationType = Organization::all();
        $countries = Country::orderBy('country_name', 'asc')->get();
        $titles = Title::all();
        return view("auth.register", compact("participantType", "organizationType", "countries", "titles"));
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
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'captcha' => 'required|captcha',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $id = "3ICTB-";
        switch($data['typeparti']){
        case 1:
            $id = $id."OR-";
            $no = User::where('type_participant_id', '=', 1)->count() + 1;
            break;
        case 2:
            $id = $id."EX-";
            $no = User::where('type_participant_id', '=', 2)->count() + 1;
            break;
        case 3: 
            $id = $id."PA-";
            $no = User::where('type_participant_id', '=', 3)->count() + 1;
            break;
        }
         $id = $id.str_pad($no,4,"0",STR_PAD_LEFT);
        

        return User::create([
            'registration_id' => $id,
            'firstname' => $data['fname'],
            'lastname' => $data['lname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'organization' => $data['organi'],
            'type_organization_id' => $data['typeorga'],
            'type_title_id' => $data['title'],
            'countries_id' => $data['country'],
            'type_participant_id' => $data['typeparti'],
        ]);
    }


    public function checkmail(Request $request)
    {
        if(User::where('email', '=', $request->input('email'))->count() == 0){
            echo "true";
        }else{
            echo "false";
        }

    }


    public function checksubtheme(Request $request)
    {
        $subthemes = App\Theme::find($request->input('id'))->subthemes;
        foreach($subthemes as $sub){
            echo "<option value='".$sub->id."'>".$sub->sub_theme."</option>";
        }
    }
}
