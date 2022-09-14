<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // $data = [
        //     'title' => 'Home',
        //     'isi' => 'v_dashboard'
        // ];
        // return view('layout/v_wrapper', $data);
        return view('v_login');
    }
}
