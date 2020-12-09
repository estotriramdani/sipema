<?php

namespace App\Controllers;

class Kuis extends BaseController
{
  public function index()
  {
    $this->request->getVar('jawaban');
    echo "kuis index";
  }

  public function coba()
  {
    echo "test";
  }
}
