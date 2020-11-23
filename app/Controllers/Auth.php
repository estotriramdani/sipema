<?php

namespace App\Controllers;

use App\Models\NilaiModel;
use CodeIgniter\I18n\Time;
use config\Validation;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = new UserModel();
        $this->nilaiModel = new NilaiModel();
    }

    public function index()
    {
        $data = [
            'tittle' => 'Laman Masuk',
            'validation' => \Config\Services::validation()
        ];
        return view('auth/login', $data);
    }

    public function login()
    {

        $data = [
            'tittle' => 'Laman Masuk',
            'validation' => \Config\Services::validation()
        ];

        return view('auth/login', $data);
    }
    public function loginAction()
    {
        $validation =  \Config\Services::validation();
        $db      = \Config\Database::connect();
        $session = session();
        //$builder = $db->table('users');

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $data = $this->request->getPost();

        $validation->setRules([
            'email'            => 'required|valid_email',
            'password'      => 'required',
        ],    [   // Errors
            'email'    => [
                'required'    => 'Mohon masukkan alamat email.',
                'valid_email' => 'Email yang dimasukkan tidak valid.'
            ],
            'password' => [
                'required'    => 'Mohon masukkan password anda.',
            ],
        ]);

        if ($validation->run($data) == false) {
            $data = [
                'tittle' => 'Registrasi',
            ];

            return redirect()->to(base_url('auth/login'))->withInput();
        } else {

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
                    session()->setFlashdata('message', 'Password Salah');
                    return redirect()->to('/auth/login');
                }
            } else {
                session()->setFlashdata('message', 'Email tidak terdaftar');
                return redirect()->to('/auth/login');
            }
        }
    }

    public function logout()
    {
        $session = session();
        //dd(session()->get('email'));

        $session->remove('email');
        $session->remove('role_id');

        session()->setFlashdata('pesan', 'Anda Berhasil Logout.');

        return redirect()->to('/');
    }

    public function registration()
    {

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
            'email'            => 'required|valid_email|is_unique[users.email]',
            'password'      => 'required',
            'kode_identitas' => 'required',
            'nama'          => 'required',
            'jenis_kelamin' => 'required',
            'alamat'        => 'required',
            //'foto'          => '',
            'tempat_lahir'  => 'required',
            'tanggal_lahir' => 'required',
            'role_id'       => 'required',
        ],    [   // Errors
            'email'    => [
                'required'    => 'Mohon masukkan alamat email.',
                'valid_email' => 'Email yang dimasukkan tidak valid.',
                'is_unique'   => 'Email sudah terdaftar, silahkan gunakan email lain'
            ],
            'password' => [
                'required'    => 'Mohon masukkan Password',
            ],
            'kode_identitas' => [
                'required'    => 'Mohon masukkan NIS/NIP.',
            ],
            'nama' => [
                'required'    => 'Mohon masukkan nama anda.',
            ],
            'jenis_kelamin' => [
                'required'    => 'Mohon masukkan jenis kelamin.',
            ],
            'alamat' => [
                'required'    => 'Mohon masukkan alamat anda.',
            ],
            'tempat_lahir' => [
                'required'    => 'Mohon masukkan tempat lahir.',
            ],
            'tanggal_lahir' => [
                'required'    => 'Mohon masukkan tanggal lahir.',
            ],
            'role_id' => [
                'required'    => 'Role ID error, mohoh kontak adminsipema@gmail.com',
            ],
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
                // 'foto'          => 'default.jpg',
                'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
                'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
                'role_id'       => $this->request->getPost('role_id'),
                'created_at'    => Time::now(),
                'updated_at'    => Time::now(),
            ];
            $this->userModel->save($data);


            //Masukan nilai jika user adalah siswa
            if ($this->request->getPost('role_id') == 3) {
                $data = [
                    'email'         => $this->request->getPost('email'),
                ];
                $this->nilaiModel->save($data);
            }

            session()->setFlashdata('message', 'Pendaftaran sukses, silakan login');
            return redirect()->to(base_url('auth/login'));
        }
    }
}
