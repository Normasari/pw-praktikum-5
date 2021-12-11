<?php

namespace App\Controllers;

class DeviceDetail extends BaseController
{
    public function details()
    {
        $data = [
            'title' => 'Details Device'
        ];

        $db = \Config\Database::connect();
        
        return view('details/details', $data);
    }
}