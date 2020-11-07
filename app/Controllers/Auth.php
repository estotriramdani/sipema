<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use config\Validation;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data = [
            'tittle' => 'Laman Masuk'
        ];
        return view('auth/login', $data);
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
        $db      = \Config\Database::connect();
        $session = session();
        //$builder = $db->table('users');

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $query = $db->query("SELECT * FROM users WHERE email='$email' ");
        $user   = $query->getRow();

        // jika usernya ada
        if ($user) {
            // cek password
            if (password_verify($password, $user->password)) {
                $newdata = [
                    'email' => $user->email,
                    'role_id' => $user->role_id
                ];
                $session->set($newdata);
                session()->setFlashdata('pesan', 'Login sukses.');
                return redirect()->to('/dashboard');
            } else {
                return redirect()->to('/auth');
            }
        } else {
            return redirect()->to('/auth');
        }
    }

    public function logout()
    {
        $session = session();

        $session->remove('email');
        $session->remove('role_id');

        session()->setFlashdata('pesan', 'Anda Berhasil Logout.');

        return redirect()->to('/auth');
    }

    public function registration()
    {
        $validation =  \Config\Services::validation();
        $data = [
            'tittle' => 'Registrasi',
            'validation' => \Config\Services::validation()
        ];
        return view('auth/registration', $data);
    }

    public function registrationAction()
    {
        $validation =  \Config\Services::validation();
        $db = \Config\Database::connect();

        $data = $this->request->getPost();

        $validation->setRules([
            'email'            => 'required|valid_email',
            'password'      => 'required',
            'kode_identitas' => 'required',
            'nama'          => 'required',
            'jenis_kelamin' => 'required',
            'alamat'        => 'required',
            //'foto'          => '',
            //'tempat_lahir'  => 'required',
            'tanggal_lahir' => 'required',
            'role_id'       => 'required',
        ]);

        //  var_dump($validation->run($data));
        //  var_dump($validation->getErrors());
        //  dd($validation->getErrors());

        if ($validation->run($data) == false) {
            $data = [
                'tittle' => 'Registrasi',

            ];

            //$dataerr = $validation->getErrors();
            
            return redirect()->to(base_url('auth/registration'))->withInput();
        } else {
            $data = [
                'email'         => $this->request->getPost('email'),
                'password'      => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'kode_identitas' => $this->request->getPost('kode_identitas'),
                'nama'          => $this->request->getPost('nama'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'alamat'        => $this->request->getPost('alamat'),
                'foto'          => 'default.jpg',
                //'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
                'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
                'role_id'       => $this->request->getPost('role_id'),
                'created_at'    => Time::now(),
                'updated_at'    => Time::now(),
            ];
            $db->table('users')->insert($data);

            session()->setFlashdata('message', 'Pendaftaran sukses, silakan login');
            return redirect()->to(base_url('auth/login')); 
        }
    }
}
