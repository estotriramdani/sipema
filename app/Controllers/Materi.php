<?php

namespace App\Controllers;

use App\Models\MateriModel;
use CodeIgniter\I18n\Time;

class Materi extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->email = $this->session->get('email');

        $this->materiModel = new MateriModel();
    }

    public function create()
    {
        $validation =  \Config\Services::validation();

        $data = $this->request->getPost();

        $validation->setRules([
            'nama_materi'       => 'required|is_unique[materis.nama_materi]',
            'deskripsi'  => 'required',
            'judul_materi'  => 'required',
            'isi_materi'         => 'required',
        ],    [   // Errors
            'nama_materi'    => [
                'required'    => 'Mohon masukkan Nama Materi.',
                'is_unique'   => 'Nama Materi tidak bisa sama dengan yang sudah ada'
            ],
            'deskripsi' => [
                'required'    => 'Mohon masukkan Deskripsi Materi',
            ],
            'judul_materi' => [
                'required'    => 'Mohon masukkan Judul Materi',
            ],
            'isi_materi' => [
                'required'    => 'Mohon masukkan Isi Materi.',
            ],
        ]);
        // var_dump($validation->run($data));
        // var_dump($validation->getErrors());
        // dd($validation->getErrors());

        if ($validation->run($data) == false) {
            $data = [
                'tittle' => 'Pojok Guru',
            ];

            // $dataerr = $validation->getErrors();
            // dd($dataerr);

            return redirect()->to(base_url('dashboard/pojokguru/index'))->withInput();
        } else {
            $data = [
                'kode_materi'       => $this->request->getPost('kode_materi'),
                'email'             => $this->email,
                'nama_materi'       => $this->request->getPost('nama_materi'),
                'deskripsi'         => $this->request->getPost('deskripsi'),
                'judul_materi'      => $this->request->getPost('judul_materi'),
                'isi_materi'        => $this->request->getPost('isi_materi'),
                'created_at'        => Time::now(),
                'updated_at'        => Time::now(),
            ];
            $this->materiModel->save($data);

            session()->setFlashdata('message', 'Materi telah ditambahkan');
            return redirect()->to(base_url('pojokguru'));
        }
    }

    // public function edit($id)
    // {
    //     # View Edit Materi
    // }

    public function save($kode_materi)
    {
        $validation =  \Config\Services::validation();
        $materiedit = $this->materiModel->where('kode_materi', $kode_materi)->first();
        dd($materiedit);
        $id_materi = $materiedit->id_materi;

        if ($materiedit->judul_materi == $this->request->getPost('judul_materi')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[materis.judul_materi]';
        }

        $data = $this->request->getPost();

        $validation->setRules([
            'nama_materi'       => 'required',
            'deskripsi'  => 'required',
            'judul_materi'  => $rule_judul,
            'isi_materi'         => 'required',
        ],    [   // Errors
            'nama_materi'    => [
                'required'    => 'Mohon masukkan Nama Materi.',
                'is_unique'   => 'Nama Materi tidak bisa sama dengan yang sudah ada'
            ],
            'deskripsi' => [
                'required'    => 'Mohon masukkan Deskripsi Materi',
            ],
            'judul_materi' => [
                'required'    => 'Mohon masukkan Judul Materi',
            ],
            'isi_materi' => [
                'required'    => 'Mohon masukkan Isi Materi.',
            ],
        ]);
        //  var_dump($validation->run($data));
        //  var_dump($validation->getErrors());
        //  dd($validation->getErrors());

        if ($validation->run($data) == false) {
            $data = [
                'tittle' => 'Edit Materi',
            ];

            $dataerr = $validation->getErrors();
            dd($dataerr);

            return redirect()->to(base_url("pojokguru/editmateri/$kode_materi"))->withInput();
        } else {
            $data = [
                'id_materi'          => $id_materi,
                'kode_materi'        => $this->request->getPost('kode_materi'),
                'nama_materi'        => $this->request->getPost('nama_materi'),
                'deskripsi'          => $this->request->getPost('deskripsi'),
                'judul_materi'       => $this->request->getPost('judul_materi'),
                'isi_materi'         => $this->request->getPost('isi_materi'),
                'email'              => $this->email,
                'updated_at'         => Time::now(),
            ];
            $this->materiModel->save($data);

            session()->setFlashdata('pesan', 'Update materi sukses');
            return redirect()->to(base_url('pojokguru/daftarmateri'));
        }
    }

    public function delete($kode_materi)
    {
        $materidelete = $this->materiModel->where('kode_materi', $kode_materi)->first();
        $id_materi = $materidelete->id_materi;
        $this->materiModel->delete($id_materi);
        session()->setFlashdata('pesan', 'Hapus materi sukses');
        return redirect()->to(base_url('pojokguru/daftarmateri'));
    }


    public function bangundatar()
    {
        return view('dashboard/materi/bangundatar');
    }

    public function himpunan()
    {
        return view('dashboard/materi/himpunan');
    }

    public function persamaan()
    {
        return view('dashboard/materi/persamaan');
    }
}
