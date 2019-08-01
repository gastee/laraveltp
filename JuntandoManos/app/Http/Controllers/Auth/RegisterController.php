<?php

namespace App\Http\Controllers\Auth;

use App\User;
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
    protected $redirectTo = '/';

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
            'name' => ['required', 'string', 'max:25'],
            'username' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:25', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
            //'password_confirmation' => ['required', 'min:8', '', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
            'country' => ['required', 'string', 'max:25'],
            'avatar' => ['required', 'image'],
        ], [
					'required' => 'El campo :attribute es obligatorio',
					'password.min' => 'La contraseña debe tener 8 caracteres como mínimo',
          'confirmed' => 'Las contraseñas no coinciden',
					'password.regex' => 'La contraseña debe tener una mayuscula, una minuscula y un numero'
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

      $request = request();

      $profileImage = $request->file('avatar');

      $profileImageName = uniqid('img-') . '.' . $profileImage->extension();

      $profileImage->storePubliclyAs("public/avatars", $profileImageName);

        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'country' => $data['country'],
            'avatar' => $profileImageName,
            'password' => Hash::make($data['password']),
        ]);
    }
}
