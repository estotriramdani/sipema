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
            'deskripsi_materi'  => 'required',
            'isimateri'         => 'required',
        ],    [   // Errors
            'nama_materi'    => [
                'required'    => 'Mohon masukkan Nama Materi.',
                'is_unique'   => 'Nama Materi tidak bisa sama dengan yang sudah ada'
            ],
            'deskripsi_materi' => [
                'required'    => 'Mohon masukkan Deskripsi Materi',
            ],
            'isimateri' => [
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

            //$dataerr = $validation->getErrors();

            return redirect()->to(base_url('dashboard/pojokguru/index'))->withInput();
        } else {
            $data = [
                'nama_materi'       => $this->request->getPost('nama_materi'),
                'deskripsi_materi'  => $this->request->getPost('deskripsi_materi'),
                'isimateri'         => $this->request->getPost('isimateri'),
                //'email'          => $this->email,
                'created_at'    => Time::now(),
                'updated_at'    => Time::now(),
            ];
            $this->materiModel->save($data);

            session()->setFlashdata('message', 'Materi telah ditambahkan');
            return redirect()->to(base_url('dashboard/pojokguru/index'));
        }
    }

    public function editAction($id)
    {
        $validation =  \Config\Services::validation();

        $data = $this->request->getPost();

        $validation->setRules([
            'nama_materi'       => 'required',
            'deskripsi_materi'  => 'required',
            'isimateri'         => 'required',
        ],    [   // Errors
            'nama_materi'    => [
                'required'    => 'Mohon masukkan Nama Materi.',
                //'is_unique'   => 'Nama Materi tidak bisa sama dengan yang sudah ada'
            ],
            'deskripsi_materi' => [
                'required'    => 'Mohon masukkan Deskripsi Materi',
            ],
            'isimateri' => [
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

            //$dataerr = $validation->getErrors();

            return redirect()->to(base_url('materi/edit'))->withInput();
        } else {
            $data = [
                'kode_materi'       => $id,
                'nama_materi'       => $this->request->getPost('nama_materi'),
                'deskripsi_materi'  => $this->request->getPost('deskripsi_materi'),
                'isimateri'         => $this->request->getPost('isimateri'),
                //'email'           => $this->email,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now(),
            ];
            $this->materiModel->save($data);

            //tambahan ngisi nilai

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
