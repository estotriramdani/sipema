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
            'tittle' => 'Registrasi Siswa'
        ];
        return view('auth/registration', $data);
    }

    public function siswaAction()
    {
        echo "berhasil!";
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
