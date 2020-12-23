<?php

namespace App\Controllers;

use App\Models\NilaiModel;

class Kuis extends BaseController
{
  public function index()
  {
    echo "kuis index";
  }

  public function action()
  {
    $nilaiModel = new NilaiModel();
    $email = session()->get('email');
    $role_id = session()->get('role_id');
    $kode_materi = $this->request->getVar('kode_materi');
    $nama_materi = $this->request->getVar('nama_materi');
    $nilai = $this->request->getVar('nilaiKuis');
    $nilai = ((int)round($nilai));

    $find = $nilaiModel->where('kode_materi', $kode_materi)
      ->where('email', $email)
      ->first();
    if ($role_id == 3) {
      if ($find == null) {
        $data = [
          'email'         => $email,
          'kode_materi'   => $kode_materi,
          'nilai'         => $nilai
        ];
        $nilaiModel->save($data);
        session()->setFlashdata('pesan', 'Nilai Kuis Berhasil tersimpan.');
        return redirect()->to('/dashboard');
      } else {
        $data = [
          'id_nilai'       => $find->id_nilai,
          'email'         => $email,
          'kode_materi'   => $kode_materi,
          'nilai'         => $nilai
        ];
        $nilaiModel->save($data);
        session()->setFlashdata('pesan', 'Nilai Kuis Berhasil terupdate.');
        return redirect()->to('/dashboard');
      }
    } else {
      session()->setFlashdata('pesan', 'Simulasi Kuis selesai.');
      return redirect()->to('/dashboard');
    }
  }
}
