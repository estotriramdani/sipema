<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;
use App\Models\UserModel;

class User extends BaseController{
    
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->usermodel = new UserModel();
    }

}
