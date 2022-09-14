<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin',
            'isi' => 'admin/v_dashboard_admin'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard Admin',
            'isi' => 'admin/v_dashboard_admin'
        ];
        return view('layout/v_wrapper', $data);
    }
}
