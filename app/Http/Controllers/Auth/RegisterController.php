<?php

namespace IES\Http\Controllers\Auth;

use IES\User;
use IES\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Psy\Util\Json;
use Mail;

use Illuminate\Http\Request;

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
            'doc_id' => 'required|string|max:30|unique:users',
            'cod_ocupacion' => 'required|string',
            'universidad' => 'sometimes|max:100',
            'programa' => 'sometimes|max:50',
            'semestre' => 'sometimes|max:50',
            'telefono' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'estado_cuenta' => 'string',
            'ciudad' => 'required|string',
            'pago_monto' => 'string',
            'fecha_lim_pago' => 'string',
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
        // QR Random
        $data['qr_code'] = str_random(100);

        $user = User::create([
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
            'pago_monto' => '$150.000',
            'fecha_lim_pago' => '9 de Septiembre de 2017',
            'qr_code' => $data['qr_code'],
        ]);

        // Email
        Mail::send('emails.mail_register', $data, function($message) use($data){
            $message->to($data['email'], $data['name'])->subject('Gracias por registrarte');
        });

        /*
        $URL = "127.0.0.1:8000/mail/index.php?correo=".$data['email'];

        $peticion = curl_init();

        curl_setopt($peticion, CURLOPT_URL, $URL);
        curl_setopt($peticion, CURLOPT_HTTPGET, TRUE);
        curl_setopt($peticion, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($peticion, CURLOPT_SSLVERSION, 6);
        curl_setopt($peticion, CURLOPT_RETURNTRANSFER, 1);

        $respuesta = curl_exec($peticion);
        */
        
        /*
        if($respuesta == "exito")
            //el correo se envio
            echo "Funcionó puto";
        else
            // el correo no se envio
            echo "No funcionó :(";*/

        return $user;

        /*$user = array(
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
            'pago_monto' => '$150.000',
            'fecha_lim_pago' => '9 de Septiembre de 2017',
        );

        $data = array(
            "operation" => "register_user",
            "user"=>$user

        );

        $dataToString = json_encode($data);

        return $dataToString;

        $URL = "ies.unisangil.edu.co/api";
        $ch = curl_init();

        $ch = curl_init($URL);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataToString);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($dataToString))
        );

        $result = curl_exec($ch);

        return User::where('email' , '=', $data['email'])->first();

        */

    }

    // protected function sendMail()
    // {
    //     // Email
    //     Mail::send('emails.mail_register', $data, function($message) use ($data){
    //         $message->to($data['email'], $data['name'])->subject('Gracias por registrarte');
    //     });
    // }
}
