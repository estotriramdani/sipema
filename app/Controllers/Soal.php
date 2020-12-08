<?php

namespace App\Controllers;

use App\Models\SoalModel;
use CodeIgniter\I18n\Time;

class Soal extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->email = $this->session->get('email');
        $this->db = \Config\Database::connect();;
        $this->soalModel = new SoalModel();
    }

    public function create()
    {
        $validation =  \Config\Services::validation();

        $data = $this->request->getPost();

        $validation->setRules([
            'kode_materi' => 'required',
            'pertanyaan'  => 'required',
            'pilihan_a'   => 'required',
            'pilihan_b'   => 'required',
            'pilihan_c'   => 'required',
            'pilihan_d'   => 'required',
            'jawaban'     => 'required',
            // 'nilai_soal'  => 'nilai_soal'
        ],    [   // Errors
            'kode_materi'    => [
                'required'    => 'Mohon pilih Nama Materi.',
            ],
            'pertanyaan' => [
                'required'    => 'Mohon masukkan Pertanyaan Soal',
            ],
            'pilihan_a' => [
                'required'    => 'Mohon masukkan Pilihan A',
            ],
            'pilihan_b' => [
                'required'    => 'Mohon masukkan Pilihan B',
            ],
            'pilihan_c' => [
                'required'    => 'Mohon masukkan Pilihan C',
            ],
            'pilihan_d' => [
                'required'    => 'Mohon masukkan Pilihan D',
            ],
            'jawaban' => [
                'required'    => 'Mohon masukkan Jawaban.',
            ],
            // 'isi_materi' => [
            //     'required'    => 'Mohon masukkan Isi Materi.',
            // ],
        ]);
        // var_dump($validation->run($data));
        // var_dump($validation->getErrors());
        // dd($validation->getErrors());

        if ($validation->run($data) == false) {
            $data = [
                'tittle' => 'Pojok Guru',
            ];

            $dataerr = $validation->getErrors();
            dd($dataerr);

            return redirect()->to(base_url('dashboard/pojokguru/index'))->withInput();
        } else {
            $kode_materi = $this->request->getPost('kode_materi');
            $query = $this->db->query("SELECT kode_materi FROM materis WHERE kode_materi='$kode_materi'");
            $result   = $query->getRow();

            $data = [
                'kode_materi'     => $this->request->getPost('kode_materi'),
                'pertanyaan'      => $this->request->getPost('pertanyaan'),
                'pilihan_a'       => $this->request->getPost('pilihan_a'),
                'pilihan_b'       => $this->request->getPost('pilihan_b'),
                'pilihan_c'       => $this->request->getPost('pilihan_c'),
                'pilihan_d'       => $this->request->getPost('pilihan_d'),
                'jawaban'         => $this->request->getPost('jawaban'),
                // 'nilai_soal'      => $this->request->getPost('nilai_soal'),
                // 'created_at'        => Time::now(),
                // 'updated_at'        => Time::now(),
            ];
            $this->soalModel->save($data);

            session()->setFlashdata('message', 'Materi telah ditambahkan');
            return redirect()->to(base_url('dashboard/index'));
        }
    }

    public function edit($id)
    {
        # View Edit Soal
    }

    public function editAction($id)
    {
        $validation =  \Config\Services::validation();

        $data = $this->request->getPost();

        $validation->setRules([
            'kode_materi' => 'required',
            'pertanyaan'  => 'required',
            'pilihan_a'   => 'required',
            'pilihan_b'   => 'required',
            'pilihan_c'   => 'required',
            'pilihan_d'   => 'required',
            'jawaban'     => 'required',
            'nilai_soal'  => 'nilai_soal'
        ],    [   // Errors
            'kode_materi'    => [
                'required'    => 'Mohon pilih Nama Materi.',
            ],
            'pertanyaan' => [
                'required'    => 'Mohon masukkan Pertanyaan Soal',
            ],
            'pilihan_a' => [
                'required'    => 'Mohon masukkan Pilihan A',
            ],
            'pilihan_b' => [
                'required'    => 'Mohon masukkan Pilihan B',
            ],
            'pilihan_c' => [
                'required'    => 'Mohon masukkan Pilihan C',
            ],
            'pilihan_d' => [
                'required'    => 'Mohon masukkan Pilihan D',
            ],
            'jawaban' => [
                'required'    => 'Mohon masukkan Jawaban.',
            ],
            // 'isi_materi' => [
            //     'required'    => 'Mohon masukkan Isi Materi.',
            // ],
        ]);
        //  var_dump($validation->run($data));
        //  var_dump($validation->getErrors());
        //  dd($validation->getErrors());

        if ($validation->run($data) == false) {
            $data = [
                'tittle' => 'Edit Soal',
            ];

            //$dataerr = $validation->getErrors();

            return redirect()->to(base_url('soal/edit'))->withInput();
        } else {
            $data = [
                'id_materi'         => $id,
                'kode_materi'       => $this->request->getPost('kode_materi'),
                'kode_materi'       => $this->request->getPost('kode_materi'),
                'deskripsi_materi'  => $this->request->getPost('deskripsi_materi'),
                'isi_materi'         => $this->request->getPost('isi_materi'),
                'email'             => $this->email,
                'updated_at'        => Time::now(),
            ];
            $this->soalModel->save($data);

            session()->setFlashdata('pesan', 'Update materi sukses');
            return redirect()->to(base_url('dashboard/index'));
        }
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
