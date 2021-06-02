<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;;
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
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function index()
    {
        return view('users.registration');
    }

    private function checkExists($email){
        return User::where('email', $email)->count();
    }

    protected function store(Request $data)
    {

        if ($this->checkExists($data->email)){
            return redirect()->back()->withInput()->withErrors(["E-mail '".$data->email."' já cadastrado!"]);
        }

        $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8',],
            'course' => ['required', 'string', 'min:4', 'max: 255',],
            'registration_number' => ['required', 'string', 'min:8', 'max: 10',],
            'semester' => ['required', 'string', 'min:6', 'max: 6',],
            'link_social' => ['required', 'string', 'url', 'max: 255',],
        ]);

        /*TODO To implement other fields*/
        User::create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => Hash::make($data->password),
            'course' => $data->course,
            'registration_number' => $data->registration_number,
            'semester' => $data->semester,
            'link_social' => $data->link_social
        ]);

//        return $data->name . "successfully registered";
        return view('users.home');
    }
}
