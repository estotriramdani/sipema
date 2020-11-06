<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (session() == true) {
            $data = [
                'role' => 3,
                'name' => 'Esto',
                'rolename' => 'Siswa',
                'title' => 'Dashboard',
                'user' => [
                    //nah nanti masukin ke sini data-data usernya. Cukup sekali aja, nanti aing copy ke method yang lainnya
                ]
            ];
            return view('dashboard/index', $data);
        } else {
            return redirect()->to('/auth');
        }
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
