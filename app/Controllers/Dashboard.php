<?php

namespace App\Controllers;

use App\Models\NilaiModel;
use App\Models\UserModel;
use App\Models\MateriModel;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $db = \Config\Database::connect();

        $this->session = \Config\Services::session();
        $this->userModel = new UserModel();
        $this->nilaiModel = new NilaiModel();


        $this->materi = $db->query("SELECT * from `materis`");

        $email = $this->session->get('email');

        $this->user = $this->userModel->Where('email', $email)
            ->first();
        $this->nilai = $this->nilaiModel->Where('email', $email)
            ->first();

        if ($this->user->foto == 'default.jpg') {
            session()->setFlashdata('alert', 'Harap atur foto profil');;
        }

        if ($this->user->role_id == 1) {
            $this->user->roles = 'Admin';
        } elseif ($this->user->role_id == 2) {
            $this->user->roles = 'Guru';
        } else {
            $this->user->roles = 'Siswa';
        }
    }

    public function index()
    {
        $user = $this->user;
        $nilai = $this->nilai;

        if ($user->role_id == 3) {
            $data = [
                'role' => $user->role_id,
                'nama' => $user->nama,
                'role_name' => $user->roles,
                'kode_identitas' => $user->kode_identitas,
                'jenis_kelamin' => $user->jenis_kelamin,
                'tanggal_lahir' => $user->tanggal_lahir,
                'tempat_lahir' => $user->tempat_lahir,
                'email' => $user->email,
                'alamat' => $user->alamat,
                'quiz1' => $nilai->quiz1,
                'quiz2' => $nilai->quiz2,
                'quiz3' => $nilai->quiz3,
                'uts' => $nilai->uts,
                'uas' => $nilai->uas,
                'title' => 'Dashboard',
                'user' => [
                    // 'email' => $user['email']
                    //nah nanti masukin ke sini data-data usernya. Cukup sekali aja, nanti aing copy ke method yang lainnya
                ]
            ];
            return view('dashboard/index', $data);
        } else {
            $data = [
                'role' => $user->role_id,
                'nama' => $user->nama,
                'role_name' => $user->roles,
                'kode_identitas' => $user->kode_identitas,
                'jenis_kelamin' => $user->jenis_kelamin,
                'tanggal_lahir' => $user->tanggal_lahir,
                'tempat_lahir' => $user->tempat_lahir,
                'email' => $user->email,
                'alamat' => $user->alamat,
                'title' => 'Dashboard',
                'user' => [
                    // 'email' => $user['email']
                    //nah nanti masukin ke sini data-data usernya. Cukup sekali aja, nanti aing copy ke method yang lainnya
                ]
            ];
            return view('dashboard/index', $data);
        }
    }

    public function profile()
    {
        $user   = $this->user;

        $data = [
            'role' => $user->role_id,
            'nama' => $user->nama,
            'role_name' => $user->roles,
            'kode_identitas' => $user->kode_identitas,
            'jenis_kelamin' => $user->jenis_kelamin,
            'tanggal_lahir' => $user->tanggal_lahir,
            'tempat_lahir' => $user->tempat_lahir,
            'email' => $user->email,
            'alamat' => $user->alamat,
            'title' => 'Profile',
            'validation' => \Config\Services::validation()
        ];
        return view('dashboard/profile', $data);
    }

    public function updateprofil()
    {
        $validation =  \Config\Services::validation();

        $user   = $this->user;

        $data = $this->request->getPost();

        $validation->setRules([
            'nama'          => 'required',
            'jenis_kelamin' => 'required',
            'alamat'        => 'required',
            //'foto'          => '',
            'tempat_lahir'  => 'required',
        ],    [   // Errors
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
        ]);
        //  var_dump($validation->run($data));
        //  var_dump($validation->getErrors());
        //  dd($validation->getErrors());

        if ($validation->run($data) == false) {
            $data = [
                'tittle' => 'Profil',
            ];

            //$dataerr = $validation->getErrors();

            return redirect()->to(base_url('dashboard/profile'))->withInput();
        } else {
            $data = [
                'user_id'      => $user->user_id,
                'nama'          => $this->request->getPost('nama'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'alamat'        => $this->request->getPost('alamat'),
                // 'foto'          => 'default.jpg',
                'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
            ];
            $this->userModel->save($data);

            //tambahan ngisi nilai

            session()->setFlashdata('pesan', 'Update profil sukses');
            return redirect()->to(base_url('dashboard/index'));
        }
    }

    public function updatepassword()
    {
        $validation =  \Config\Services::validation();
        $db = \Config\Database::connect();

        $user   = $this->user;
        $password = $this->request->getPost('oldpassword');

        $data = $this->request->getPost();

        $validation->setRules([
            'oldpassword'        => 'required',
            'newpassword'        => 'required',
            'newpasswordconfirm' => 'required|matches[newpassword]',
        ],    [   // Errors
            'oldpassword' => [
                'required'    => 'Mohon masukkan password lama anda.',
            ],
            'newpassword' => [
                'required'    => 'Mohon masukkan password baru anda.',
            ],
            'newpasswordconfirm' => [
                'required'    => 'Mohon konfirmasi password baru anda.',
                'matches'     => 'Passord tidak cocok'
            ],
        ]);
        // var_dump($validation->run($data));
        // var_dump($validation->getErrors());
        // dd($validation->getErrors());

        if ($validation->run($data) == false) {
            $data = [
                'tittle' => 'Profil',
            ];

            //$dataerr = $validation->getErrors();

            return redirect()->to(base_url('dashboard/profile'))->withInput();
        } else {

            if (password_verify($password, $user->password)) {
                $data = [
                    'user_id'      => $user->user_id,
                    'password'     => password_hash($this->request->getPost('newpassword'), PASSWORD_DEFAULT),
                ];
                $this->userModel->save($data);

                session()->setFlashdata('pesan', 'Update password sukses');
                return redirect()->to(base_url('dashboard/index'));
            } else {
                session()->setFlashdata('pesan', 'Update password gagal, password lama anda salah');
                return redirect()->to(base_url('dashboard/index'));
            }
        }
    }

    public function materi()
    {

        $user   = $this->user;
        $materi = $this->materi;

        $data = [
            'role' => $user->role_id,
            'nama' => $user->nama,
            'title' => 'Materi',
            'materi' => $materi
        ];
        return view('dashboard/materi', $data);
    }

    public function kuis()
    {

        $db      = \Config\Database::connect();

        $user   = $this->user;

        $data = [
            'role' => $user->role_id,
            'nama' => $user->nama,
            'title' => 'Kuis'
        ];
        return view('dashboard/kuis', $data);
    }

    public function pojokGuru()
    {

        $user   = $this->user;

        $materi = $this->materi;

        $data = [
            'role' => $user->role_id,
            'nama' => $user->nama,
            'role_name' => $user->roles,
            'kode_identitas' => $user->kode_identitas,
            'jenis_kelamin' => $user->jenis_kelamin,
            'tanggal_lahir' => $user->tanggal_lahir,
            'tempat_lahir' => $user->tempat_lahir,
            'email' => $user->email,
            'alamat' => $user->alamat,
            'title' => 'Pojok Guru',
            'materi' => $materi
        ];
        return view('dashboard/pojokguru/index', $data);
    }

    public function daftarMateri()
    {
        $db      = \Config\Database::connect();

        $user   = $this->user;

        $data = [
            'role' => $user->role_id,
            'nama' => $user->nama,
            'role_name' => $user->roles,
            'kode_identitas' => $user->kode_identitas,
            'jenis_kelamin' => $user->jenis_kelamin,
            'tanggal_lahir' => $user->tanggal_lahir,
            'tempat_lahir' => $user->tempat_lahir,
            'email' => $user->email,
            'alamat' => $user->alamat,
            'title' => 'Daftar Materi'
        ];
        return view('dashboard/pojokguru/daftarmateri', $data);
    }

    public function editMateri($kode_materi)
    {
        $db      = \Config\Database::connect();

        $user   = $this->user;

        $data = [
            'role' => $user->role_id,
            'nama' => $user->nama,
            'role_name' => $user->roles,
            'kode_identitas' => $user->kode_identitas,
            'jenis_kelamin' => $user->jenis_kelamin,
            'tanggal_lahir' => $user->tanggal_lahir,
            'tempat_lahir' => $user->tempat_lahir,
            'email' => $user->email,
            'alamat' => $user->alamat,
            'title' => 'Daftar Materi',
            'kode_materi' => $kode_materi
        ];
        return view('dashboard/pojokguru/editmateri', $data);
    }

    public function daftarSoal()
    {
        $db      = \Config\Database::connect();

        $user   = $this->user;

        $data = [
            'role' => $user->role_id,
            'nama' => $user->nama,
            'role_name' => $user->roles,
            'kode_identitas' => $user->kode_identitas,
            'jenis_kelamin' => $user->jenis_kelamin,
            'tanggal_lahir' => $user->tanggal_lahir,
            'tempat_lahir' => $user->tempat_lahir,
            'email' => $user->email,
            'alamat' => $user->alamat,
            'title' => 'Daftar Materi'
        ];
        return view('dashboard/pojokguru/daftarsoal', $data);
    }

    public function editSoal($kode_soal)
    {
        $db      = \Config\Database::connect();

        $user   = $this->user;

        $data = [
            'role' => $user->role_id,
            'nama' => $user->nama,
            'role_name' => $user->roles,
            'kode_identitas' => $user->kode_identitas,
            'jenis_kelamin' => $user->jenis_kelamin,
            'tanggal_lahir' => $user->tanggal_lahir,
            'tempat_lahir' => $user->tempat_lahir,
            'email' => $user->email,
            'alamat' => $user->alamat,
            'title' => 'Daftar Materi',
            'kode_soal' => $kode_soal
        ];
        return view('dashboard/pojokguru/editsoal', $data);
    }
    //--------------------------------------------------------------------


}
