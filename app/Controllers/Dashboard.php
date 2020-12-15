<?php

namespace App\Controllers;

use App\Models\MateriModel;
use App\Models\NilaiModel;
use App\Models\SoalModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $db = \Config\Database::connect();

        $this->session = \Config\Services::session();
        $this->userModel = new UserModel();
        $this->nilaiModel = new NilaiModel();
        $this->materiModel = new MateriModel();
        $this->soalModel = new SoalModel();


        // $this->materi = $db->query("SELECT * from `materis`");
        $this->materi  = $this->materiModel->findAll();
        // $this->soal = $db->query("SELECT * from `soals`");
        $this->soal = $this->soalModel->findAll();



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
        $materi = $this->materi;
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
                'materi' => $this->materi,
                'soal' => $this->soal
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
                'materi' => $this->materi,
                'soal' => $this->soal
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
            'materi' => $this->materi,
            'soal' => $this->soal,
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
            'materi' => $materi,
            'soal' => $this->soal
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
            'title' => 'Kuis',
            'materi' => $this->materi,
            'soal' => $this->soal
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
            'materi' => $materi,
            'soal' => $this->soal
        ];
        return view('dashboard/pojokguru/index', $data);
    }

    public function daftarMateri()
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
            'title' => 'Daftar Materi',
            'materi' => $this->materi,
            'soal' => $this->soal
        ];

        return view('dashboard/pojokguru/daftarmateri', $data);
    }

    public function editMateri($kode_materi)
    {
        // $materi  = $this->materiModel->findAll();
        $materiedit = $this->materiModel->where('kode_materi', $kode_materi)->first();

        $user   = $this->user;

        $data = [
            'role' => $user->role_id,
            'nama' => $user->nama,
            'role_name' => $user->roles,
            'email' => $user->email,
            'title' => 'Daftar Materi',
            'kode_materi' => $kode_materi,
            'materi' => $this->materi,
            // 'materiedit' => $materiedit,
            'nama_materi' => $materiedit->nama_materi,
            'deskripsi' => $materiedit->deskripsi,
            'judul_materi' => $materiedit->judul_materi,
            'isi_materi' => $materiedit->isi_materi,
            'soal' => $this->soal
        ];
        return view('dashboard/pojokguru/editmateri', $data);
    }

    public function daftarSoal()
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
            'title' => 'Daftar Soal',
            'materi' => $this->materi,
            'soal' => $this->soal
        ];
        return view('dashboard/pojokguru/daftarsoal', $data);
    }

    public function editSoal($id_soal)
    {
        $soaledit = $this->soalModel->find($id_soal);

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
            'kode_soal' => $id_soal,
            'pertanyaan' => $soaledit->pertanyaan,
            'pilihan_a' => $soaledit->pilihan_a,
            'pilihan_b' => $soaledit->pilihan_b,
            'pilihan_c' => $soaledit->pilihan_c,
            'pilihan_d' => $soaledit->pilihan_d,
            'jawaban' => $soaledit->jawaban,
            'materi' => $this->materi,
            'soal' => $this->soal
        ];
        return view('dashboard/pojokguru/editsoal', $data);
    }
    //--------------------------------------------------------------------


}
