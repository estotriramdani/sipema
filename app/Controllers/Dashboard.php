<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'role' => 3,
            'name' => 'Esto',
            'rolename' => 'Siswa',
            'title' => 'Dashboard'
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
