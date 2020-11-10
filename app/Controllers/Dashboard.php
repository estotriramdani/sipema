<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $user = $this->session->get('newdata');

        $data = [
            'role' => 3,
            'name' => 'Esto',
            'rolename' => 'Siswa',
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
        $data = [
            'role' => 3,
            'name' => 'Esto',
            'rolename' => 'Siswa',
            'title' => 'Profile'
        ];
        return view('dashboard/profile', $data);
    }

    public function materi()
    {
        $data = [
            'role' => 3,
            'name' => 'Esto',
            'title' => 'Materi'
        ];
        return view('dashboard/materi', $data);
    }

    public function kuis()
    {
        $data = [
            'role' => 3,
            'name' => 'Esto',
            'title' => 'Kuis'
        ];
        return view('dashboard/kuis', $data);
    }

    //--------------------------------------------------------------------

}
