<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();

        $db      = \Config\Database::connect();

        $email = $this->session->get('email');

        $query = $db->query("SELECT * FROM users WHERE email='$email' ");
        $user   = $query->getRow();

        if ($user->foto == 'default.jpg')
        {
            session()->setFlashdata('alert', 'Harap atur foto profil');;
        }
    }

    public function index()
    {

        $db      = \Config\Database::connect();

        $email = $this->session->get('email');

        $query = $db->query("SELECT * FROM users WHERE email='$email' ");
        $user   = $query->getRow();

        $query = $db->query("SELECT * FROM roles WHERE role_id='$user->role_id' ");
        $roles = $query->getRow();

        //HARUS DI OPTIMASI ANJRIT WKWKW
        //Perlu dibikin model nya nih 

        
        $data = [
            'role' => $user->role_id,
            'name' => $user->nama,
            'rolename' => $roles->role_name,
            'title' => 'Dashboard',
            'user' => [
                // 'email' => $user['email']
                //nah nanti masukin ke sini data-data usernya. Cukup sekali aja, nanti aing copy ke method yang lainnya
            ]
        ];
        return view('dashboard/index', $data);
    }

    public function profile()
    {

        $db      = \Config\Database::connect();

        $email = $this->session->get('email');

        $query = $db->query("SELECT * FROM users WHERE email='$email' ");
        $user   = $query->getRow();

        $query = $db->query("SELECT * FROM roles WHERE role_id='$user->role_id' ");
        $roles = $query->getRow();

        
        $data = [
            'role' => $user->role_id,
            'name' => $user->nama,
            'rolename' => $roles->role_name,
            'id' => $user->kode_identitas, 
            'gender' => $user->jenis_kelamin,
            'ttl' => $user->tanggal_lahir,
            'email' => $user->email, 
            'address' => $user->alamat,
            'title' => 'Profile'
        ];
        return view('dashboard/profile', $data);
    }

    public function materi()
    {

        $db      = \Config\Database::connect();

        $email = $this->session->get('email');

        $query = $db->query("SELECT * FROM users WHERE email='$email' ");
        $user   = $query->getRow();
        
        $data = [
            'role' => $user->role_id,
            'name' => $user->nama,
            'title' => 'Materi'
        ];
        return view('dashboard/materi', $data);
    }

    public function kuis()
    {

        $db      = \Config\Database::connect();

        $email = $this->session->get('email');

        $query = $db->query("SELECT * FROM users WHERE email='$email' ");
        $user   = $query->getRow();
        
        $data = [
            'role' => $user->role_id,
            'name' => $user->nama,
            'title' => 'Kuis'
        ];
        return view('dashboard/kuis', $data);
    }

    //--------------------------------------------------------------------

}
