<?php

namespace App\Controllers;
use App\Models\ModelAuth;

class Auth extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelAuth = new ModelAuth();
    }


    public function index()
    {
        return view('v_login');
    }

    public function cek_login()
    {
        $level = $this->request->getPost('level');

        if( ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib isi !!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib isi !!'
                ]
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib isi !!'
                ]
            ],
        ]))) {
            //jika valid
            $level = $this->request->getPost('level');
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            if ($level == 1) {
                $cek_user = $this->ModelAuth->login_user($username, $password);
                if ($cek_user) {
                    //jika data cocok
                    session()->set('log', true);
                    session()->set('username', $cek_user['username']);
                    session()->set('nama_user', $cek_user['nama_user']);
                    session()->set('photo', $cek_user['photo']);
                    session()->set('level', $level);
                    //login
                    return redirect()->to(base_url('Dashboard'));
                } else {
                    //jika data tidak cocok
                    session()->setFlashdata('pesan', 'Login gagal!, Username atau Password salah');
                    return redirect()->to(base_url('/'));
                }
            } elseif ($level == 2) {
                $cek_mhs = $this->ModelAuth->login_mhs($username, $password);
                if ($cek_mhs) {
                    //jika data cocok
                    session()->set('log', true);
                    session()->set('username', $cek_mhs['nim']);
                    session()->set('nama_user', $cek_mhs['nama_mhs']);
                    session()->set('photo', $cek_mhs['photo']);
                    session()->set('level', $level);
                    //login
                    return redirect()->to(base_url('Mhs'));
                } else {
                    //jika data tidak cocok
                    session()->setFlashdata('pesan', 'Login gagal!, Username atau Password salah');
                    return redirect()->to(base_url('/'));
                }
            } elseif ($level == 3) {
                $cek_dosen = $this->ModelAuth->login_dosen($username, $password);
                if ($cek_dosen) {
                    //jika data cocok
                    session()->set('log', true);
                    session()->set('username', $cek_dosen['nidn']);
                    session()->set('nama_user', $cek_dosen['nama_dosen']);
                    session()->set('photo', $cek_dosen['photo']);
                    session()->set('level', $level);
                    //login
                    return redirect()->to(base_url('Dsn'));
                } else {
                    //jika data tidak cocok
                    session()->setFlashdata('pesan', 'Login gagal!, Username atau Password salah');
                    return redirect()->to(base_url('/'));
                }
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('/'));
        }

        if ($level == 1) {
            echo 'Admin';
        } elseif ($level == 2) {
            echo 'Mahasiswa';
        } elseif ($level == 3) {
            echo 'Dosen';
        }
    }

    // public function logout()
    // {
    //     session()->remove('log');
    //     session()->remove('username');
    //     session()->remove('nama_user');
    //     session()->remove('photo');
    //     session()->remove('level');
    //     session()->setFlashdata('success', 'Logout Sukses !!!');
    //     return redirect()->to(base_url('/'));
    // }

    public function logout()
    {
        session()->remove('log');
        session()->remove('username');
        session()->remove('nama_user');
        session()->remove('photo');
        session()->remove('level');
        return redirect('Auth');
    }
}
