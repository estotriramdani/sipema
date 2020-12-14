<?php

namespace App\Controllers;

class Kuis extends BaseController
{
  public function index()
  {
    echo "kuis index";
  }

  public function action()
  {
    $db = \Config\Database::connect();

    $nilai = $db->query("SELECT * from `nilais` where email='$email'");

    $nama_materi = $this->request->getVar('nama_materi');
    $kode_materi = $this->request->getVar('kode_materi');
    
    echo "test";
    echo "$kode_materi";
    echo "$nama_materi";
  }
}
