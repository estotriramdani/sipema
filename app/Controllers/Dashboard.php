<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'name' => 'Esto',
            'title' => 'Dashboard'
        ];
        return view('dashboard/index', $data);
    }

    public function coba()
    {
        echo "test";
    }

    //--------------------------------------------------------------------

}
