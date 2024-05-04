<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Auth;
use Mail;
use DB;
use Session;

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
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    protected function registered(Request $request, $user)
    {
        $this->middleware('guest');

        $params = array('name'=>Auth::user()->name,'email'=>Auth::user()->email);
        Mail::send('mail/register', $params, function($message) {
            $message->to(Auth::user()->email,Auth::user()->name)->subject
               ('Caprus Digital Registration Successfull');
            $message->from('caprusdigital@gmail.com','Caprus Digital');
         });
         Session::flash('success', 'Registration Done Successfully!');

        return Redirect::to(''.$request->url);
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customer'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'g-recaptcha-response' => 'required|recaptcha'
            // 'contacts' => ['required'],
            // 'countryid' => ['required'],
            // 'website' => ['required'],
            // 'file' => ['required'],
            // 'address' => ['required'],
        ]);
    }

    public function index()
    {
      
        $countries = DB::table('country');
        $data['countries']=DB::table('country')->where('is_delete',0)->orderBy('cname', 'ASC')->get();
        //array_push($data['countries'],$get2->countries);

        return view('auth/register', $data);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $user = new User();
        Session::flash('success', 'Registration Done Successfully!');

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'contacts' => $data['contacts'],
            'countryid' => $data['countryid'],
            'website' => $data['website'],
            'address' => $data['address'],
            'ip'=> request()->ip()
        ]);

        
    }
}
