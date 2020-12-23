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
        $this->session = \Config\Services::session();
        $email = $this->session->get('email');
        $this->db = \Config\Database::connect();

        $this->userModel = new UserModel();
        $this->nilaiModel = new NilaiModel();
        $this->materiModel = new MateriModel();
        $this->soalModel = new SoalModel();

        // $this->materi = $db->query("SELECT * from `materis`");
        $this->materi  = $this->materiModel->findAll();
        // $this->soal = $db->query("SELECT * from `soals`");
        $this->soal = $this->soalModel->findAll();

        $this->user = $this->userModel->getUser($email);

        $this->nilai = $this->nilaiModel->Where('email', $email)
            ->first();

        // if ($this->user->foto == 'default.jpg') {
        //     session()->setFlashdata('alert', 'Harap atur foto profil');;
        // }

        // if ($this->user->role_id == 1) {
        //     $this->user->roles = 'Admin';
        // } 
        if ($this->user->role_id == 2) {
            $this->user->roles = 'Guru';
        } else {
            $this->user->roles = 'Siswa';
        }
    }

    public function index()
    {
        $user = $this->user;
        if ($user->role_id == 3) {
            $query = $this->db->query("SELECT id_nilai, nilais.email, nilais.kode_materi, nama_materi, nilai, nilais.created_at, nilais.updated_at from nilais left join materis on nilais.kode_materi=materis.kode_materi where nilais.email='$user->email'");
            $nilai = $query->getResult();

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
                'soal' => $this->soal,
                'nilai' => $nilai,
            ];
            return view('dashboard/index', $data);
        } else {
            $query = $this->db->query("SELECT COUNT(*) as total FROM `materis` where email='$this->email'");
            $result = $query->getRow();
            $jumlahmaterianda = $result->total;

            $query = $this->db->query("SELECT COUNT(*) as total FROM `soals` ");
            $result = $query->getRow();
            $jumlahsoal = $result->total;

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
                'soal' => $this->soal,
                'jumlahmaterianda' => $jumlahmaterianda,
                'jumlahsoal' => $jumlahsoal,
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
            'nama'          => 'required|max_length[100]',
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
        $data = [
            'title' => 'Materi',
            'role' => $user->role_id,
            'nama' => $user->nama,
            'materi' => $this->materi,
            'soal' => $this->soal
        ];
        if (empty($_GET)) {
            return redirect()->to('/');
        }
        return view('dashboard/materi', $data);
    }

    public function kuis()
    {
        $user   = $this->user;

        $data = [
            'title' => 'Kuis',
            'role' => $user->role_id,
            'nama' => $user->nama,
            'materi' => $this->materi,
            'soal' => $this->soal
        ];

        if (empty($_GET)) {
            return redirect()->to('/');
        }
        return view('dashboard/kuis', $data);
    }

    public function pojokGuru()
    {

        $user   = $this->user;

        $materi = $this->materi;

        $data = [
            'title' => 'Pojok Guru',
            'role' => $user->role_id,
            'nama' => $user->nama,
            'role_name' => $user->roles,
            'kode_identitas' => $user->kode_identitas,
            'jenis_kelamin' => $user->jenis_kelamin,
            'tanggal_lahir' => $user->tanggal_lahir,
            'tempat_lahir' => $user->tempat_lahir,
            'email' => $user->email,
            'alamat' => $user->alamat,
            'materi' => $materi,
            'soal' => $this->soal,
            'validation' => \Config\Services::validation()
        ];
        return view('dashboard/pojokguru/index', $data);
    }

    public function daftarMateri()
    {
        $user   = $this->user;

        $data = [
            'title' => 'Daftar Materi',
            'role' => $user->role_id,
            'nama' => $user->nama,
            'role_name' => $user->roles,
            'kode_identitas' => $user->kode_identitas,
            'jenis_kelamin' => $user->jenis_kelamin,
            'tanggal_lahir' => $user->tanggal_lahir,
            'tempat_lahir' => $user->tempat_lahir,
            'email' => $user->email,
            'alamat' => $user->alamat,
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
            'title' => 'Daftar Materi',
            'role' => $user->role_id,
            'nama' => $user->nama,
            'role_name' => $user->roles,
            'email' => $user->email,
            'kode_materi' => $kode_materi,
            'materi' => $this->materi,
            // 'materiedit' => $materiedit,
            'id_materi' => $materiedit->id_materi,
            'nama_materi' => $materiedit->nama_materi,
            'deskripsi' => $materiedit->deskripsi,
            'judul_materi' => $materiedit->judul_materi,
            'isi_materi' => $materiedit->isi_materi,
            'soal' => $this->soal,
            'validation' => \Config\Services::validation()
        ];
        return view('dashboard/pojokguru/editmateri', $data);
    }

    public function daftarSoal()
    {
        $user   = $this->user;
        $data = [
            'title' => 'Daftar Soal',
            'role' => $user->role_id,
            'nama' => $user->nama,
            'role_name' => $user->roles,
            'kode_identitas' => $user->kode_identitas,
            'jenis_kelamin' => $user->jenis_kelamin,
            'tanggal_lahir' => $user->tanggal_lahir,
            'tempat_lahir' => $user->tempat_lahir,
            'email' => $user->email,
            'alamat' => $user->alamat,
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
            'title' => 'Daftar Materi',
            'role' => $user->role_id,
            'nama' => $user->nama,
            'role_name' => $user->roles,
            'kode_identitas' => $user->kode_identitas,
            'jenis_kelamin' => $user->jenis_kelamin,
            'tanggal_lahir' => $user->tanggal_lahir,
            'tempat_lahir' => $user->tempat_lahir,
            'email' => $user->email,
            'alamat' => $user->alamat,
            'kode_soal' => $id_soal,
            'pertanyaan' => $soaledit->pertanyaan,
            'pilihan_a' => $soaledit->pilihan_a,
            'pilihan_b' => $soaledit->pilihan_b,
            'pilihan_c' => $soaledit->pilihan_c,
            'pilihan_d' => $soaledit->pilihan_d,
            'jawaban' => $soaledit->jawaban,
            'materi' => $this->materi,
            'soal' => $this->soal,
            'validation' => \Config\Services::validation()
        ];
        return view('dashboard/pojokguru/editsoal', $data);
    }
    //--------------------------------------------------------------------


}
