<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function login()
    {
        $data = [
            'tittle' => 'Laman Masuk'
        ];
        return view('auth/login', $data);
    }

    public function registration()
    {
        $data = [
            'tittle' => 'Registrasi'
        ];
        return view('auth/registration', $data);
    }

    public function registrationAction()
    {
        // nanti uncomment kalau form processing registrasinya berhasil
        // return redirect()->to(base_url('auth/login'));

    }

    public function guru()
    {
        $data = [
            'tittle' => 'Registrasi guru'
        ];
        return view('auth/registration/guru', $data);
    }

    //--------------------------------------------------------------------

}
