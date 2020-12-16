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

            return redirect()->to(base_url('dashboard/pojokguru/index'))->withInput();
        } else {
            $kode_materi = $this->request->getPost('kode_materi');
            $query = $this->db->query("SELECT kode_materi FROM materis WHERE kode_materi='$kode_materi'");
            $result   = $query->getRow();
            $kode_materi = $result->kode_materi;

            $data = [
                'kode_materi'     => $this->request->getPost('kode_materi'),
                'pertanyaan'      => $this->request->getPost('pertanyaan'),
                'pilihan_a'       => $this->request->getPost('pilihan_a'),
                'pilihan_b'       => $this->request->getPost('pilihan_b'),
                'pilihan_c'       => $this->request->getPost('pilihan_c'),
                'pilihan_d'       => $this->request->getPost('pilihan_d'),
                'jawaban'         => $this->request->getPost('jawaban'),
            ];
            $this->soalModel->save($data);

            session()->setFlashdata('message', 'Soal telah ditambahkan');
            return redirect()->to(base_url('pojokguru'));
        }
    }

    public function edit($id)
    {
        # View Edit Soal
    }

    public function save($id_soal)
    {
        $validation =  \Config\Services::validation();

        $data = $this->request->getPost();

        $validation->setRules([
            'nama_materi' => 'required',
            'pertanyaan'  => 'required',
            'pilihan_a'   => 'required',
            'pilihan_b'   => 'required',
            'pilihan_c'   => 'required',
            'pilihan_d'   => 'required',
            'jawaban'     => 'required',
        ],    [   // Errors
            'nama_materi'    => [
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
                'tittle' => 'Edit Soal',
            ];

            //$dataerr = $validation->getErrors();

            return redirect()->to(base_url("/pojokguru/editsoal/$id_soal"))->withInput();
        } else {

            $data = [
                'id_soal'         => $id_soal,
                'kode_materi'       => $this->request->getPost('nama_materi'),
                'pertanyaan'      => $this->request->getPost('pertanyaan'),
                'pilihan_a'       => $this->request->getPost('pilihan_a'),
                'pilihan_b'       => $this->request->getPost('pilihan_b'),
                'pilihan_c'       => $this->request->getPost('pilihan_c'),
                'pilihan_d'       => $this->request->getPost('pilihan_d'),
                'jawaban'         => $this->request->getPost('jawaban'),
                'email'           => $this->email,
                'updated_at'      => Time::now(),
            ];
            $this->soalModel->save($data);

            session()->setFlashdata('pesan', 'Update Soal sukses');
            return redirect()->to(base_url('pojokguru/daftarsoal'));
        }
    }

    public function delete($id_soal)
    {
        $this->soalModel->delete($id_soal);
        session()->setFlashdata('pesan', 'Hapus soal sukses');
        return redirect()->to(base_url('pojokguru/daftarsoal'));
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
