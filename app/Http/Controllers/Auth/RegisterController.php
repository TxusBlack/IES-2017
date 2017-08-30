<?php

namespace IES\Http\Controllers\Auth;

use IES\User;
use IES\Http\Controllers\Controller;
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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'apellidos' => 'required|string|max:20',
            'tipo_id' => 'required|string',
            'doc_id' => 'required|string|max:20|unique:users',
            'cod_ocupacion' => 'required|string',
            'universidad' => 'string|max:100',
            'programa' => 'string',
            'semestre' => 'string',
            'telefono' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'estado_cuenta' => 'string',
            'ciudad' => 'required|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \IES\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'apellidos' => $data['apellidos'],
            'tipo_id' => $data['tipo_id'],
            'doc_id' => $data['doc_id'],
            'cod_ocupacion' => $data['cod_ocupacion'],
            'universidad' => $data['universidad'],
            'programa' => $data['programa'],
            'semestre' => $data['semestre'],
            'telefono' => $data['telefono'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'estado_cuenta' => 'Pre-inscrito',
            'ciudad' => $data['ciudad'],
        ]);
    }
}
