<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'tes' =>['satu','dua','tiga']
        ];
        return view('pagess/home',$data);
      
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('pagess/about',$data);
        
        }

        public function contact()
    {
        $data = [
            'title' => 'Contact',
            'alamat' => [
                [
                    'Instagram' => 'Instagram: @Cepatudotcom',
                    'Whatsapp' =>   'Whatsapp: 00001111',
                    'Line' =>       'Line:     @Cecepatu'
                ]
            ]
        ];
        return view('pagess/contact',$data);
    }
    public function device()
    {
        $data = [
            'title' => 'Device'
        ];
        return view('device/index',$data);
        
        }
        public function details()
    {
        $data = [
            'title' => 'Details'
        ];
        return view('details/details',$data);
        
        }
}
