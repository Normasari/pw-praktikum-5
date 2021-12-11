<?php

namespace App\Controllers;

class Device extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Device'
        ];

        $db = \Config\Database::connect();
        
        return view('device/index', $data);
    }
}