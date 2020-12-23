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
            'kode_materi'       => 'required|exact_length[6]|is_unique[materis.kode_materi]',
            'deskripsi'         => 'required',
            'nama_materi'       => 'required|is_unique[materis.nama_materi]|max_length[50]',
            'isi_materi'        => 'required',
        ],    [   // Errors
            'kode_materi'    => [
                'required'    => 'Mohon masukkan Kode Materi.',
                'is_unique'   => 'Kode Materi tidak bisa sama dengan yang sudah ada',
                'exact_length'   => 'Kode Materi harus berjumlah 6 digit',
            ],
            'nama_materi'    => [
                'required'    => 'Mohon masukkan Nama Materi.',
                'is_unique'   => 'Nama Materi tidak bisa sama dengan yang sudah ada',
                'max_length'   => 'Nama Materi tidak bisa lebih dari 50 digit'
            ],
            'deskripsi' => [
                'required'    => 'Mohon masukkan Deskripsi Materi',
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
                'isi_materi'        => $this->request->getPost('isi_materi'),
            ];
            $this->materiModel->insert($data);

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
        //Konvesional tidak duplikat judul / unik judul
        // $materiedit = $this->materiModel->where('kode_materi', $kode_materi)->first();
        // $id_materi = $materiedit->id_materi;

        // if ($materiedit->judul_materi == $this->request->getPost('judul_materi')) {
        //     $rule_judul = 'required';
        // } else {
        //     $rule_judul = 'required|is_unique[materis.judul_materi]';
        // }

        $data = $this->request->getPost();

        $validation->setRules([
            'kode_materi'        => 'required|exact_length[6]|is_unique[materis.kode_materi,kode_materi,{kode_materi}]',
            'nama_materi'        => 'required|max_length[50]|is_unique[materis.nama_materi,nama_materi,{nama_materi}]',
            'deskripsi'          => 'required',
            'isi_materi'         => 'required',
        ],    [   // Errors
            'kode_materi'    => [
                'required'    => 'Mohon masukkan Kode Materi.',
                'is_unique'   => 'Kode Materi tidak bisa sama dengan yang sudah ada',
                'exact_length'   => 'Kode Materi harus berjumlah 6 digit',
            ],
            'nama_materi'    => [
                'required'    => 'Mohon masukkan Nama Materi.',
                'is_unique'   => 'Nama Materi tidak bisa sama dengan yang sudah ada',
                'max_length'   => 'Nama Materi tidak bisa lebih dari 50 digit'
            ],
            'deskripsi' => [
                'required'    => 'Mohon masukkan Deskripsi Materi',
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
                'tittle' => 'Edit Materi',
            ];

            // $dataerr = $validation->getErrors();
            // dd($dataerr);

            return redirect()->to(base_url("pojokguru/editmateri/$kode_materi"))->withInput();
        } else {

            $data = [
                'kode_materi'        => $this->request->getPost('kode_materi'),
                'nama_materi'        => $this->request->getPost('nama_materi'),
                'deskripsi'          => $this->request->getPost('deskripsi'),
                'isi_materi'         => $this->request->getPost('isi_materi'),
                'email'              => $this->email,
            ];
            $this->materiModel->save($data);

            session()->setFlashdata('pesan', 'Update materi sukses');
            return redirect()->to(base_url('pojokguru/daftarmateri'));
        }
    }

    public function delete($kode_materi)
    {
        // $materidelete = $this->materiModel->where('kode_materi', $kode_materi)->first();
        // $id_materi = $materidelete->id_materi;
        $this->materiModel->delete($kode_materi);
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
