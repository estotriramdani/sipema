<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

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
    public function loginAction()
    {
        return redirect()->to('/dashboard');
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
        $validation =  \Config\Services::validation();
        $data = $this->request->getPost();

        if ($validation->run($data, 'registrasi') == false) {
            $data = [
                'tittle' => 'Registrasi'
            ];
            return view('auth/registration', $data);
        } else {
            // $email = $this->input->post('email', true);
            // $kelas2 = "$tingkat $jurusan $kelas";

            $data = [
                'email'         => $this->request->getPost('email'),
                'password'      => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'kode_identitas'=> $this->request->getPost('kode_identitas'),
                'name'          => $this->request->getPost('name'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'alamat'        => $this->request->getPost('alamat'),
                'foto'          => 'default.jpg',
                'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
                'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
                'role_id'       => $this->request->getPost('role_id'),
                'created_at'    => Time::now(),
                'updated_at'    => Time::now(),
            ];
/*
            // siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];
*/
            $this->db->insert('user', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created.</div>');
        return redirect()->to(base_url('auth/login'));         // nanti uncomment kalau form processing registrasinya berhasil
    }

}
