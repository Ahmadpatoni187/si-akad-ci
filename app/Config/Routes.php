<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Auth::index');

$routes->get('Auth', 'Auth::index');
$routes->post('Auth/cek_login', 'Auth::cek_login');
$routes->get('Auth/logout', 'Auth::logout');

// Akses oleh admin
$routes->get('Admin', 'Admin::index');
$routes->get('Dashboard', 'Admin::dashboard');

$routes->get('Fakultas', 'Fakultas::index');
$routes->post('Fakultas/Add', 'Fakultas::add');
$routes->add('Fakultas/Edit/(:segment)', 'Fakultas::edit/$1');
$routes->get('Fakultas/Delete/(:segment)', 'Fakultas::delete/$1');

$routes->get('Gedung', 'Gedung::index');
$routes->post('Gedung/Add', 'Gedung::add');
$routes->add('Gedung/Edit/(:segment)', 'Gedung::edit/$1');
$routes->get('Gedung/Delete/(:segment)', 'Gedung::delete/$1');

$routes->get('Ruangan', 'Ruangan::index');
$routes->post('Ruangan/Add', 'Ruangan::add');
$routes->post('Ruangan/Edit/(:segment)', 'Ruangan::edit/$1');
$routes->get('Ruangan/Delete/(:segment)', 'Ruangan::delete/$1');

$routes->get('Prodi', 'Prodi::index');
$routes->post('Prodi/Add', 'Prodi::add');
$routes->post('Prodi/Edit/(:segment)', 'Prodi::edit/$1');
$routes->get('Prodi/Delete/(:segment)', 'Prodi::delete/$1');

$routes->get('Ta', 'Ta::index');
$routes->post('Ta/Add', 'Ta::add');
$routes->post('Ta/Edit/(:segment)', 'Ta::edit/$1');
$routes->get('Ta/Delete/(:segment)', 'Ta::delete/$1');

$routes->get('Matkul', 'Matkul::index');
$routes->post('Matkul/Add', 'Matkul::add');
$routes->get('Matkul/Detail/(:segment)', 'Matkul::detail/$1');
// $routes->post('Matkul/Edit/(:segment)', 'Matkul::edit/$1');
$routes->get('Matkul/Delete/(:segment)', 'Matkul::delete/$1');

$routes->get('Dosen', 'Dosen::index');
$routes->get('Dosen/Add', 'Dosen::add');
$routes->post('Dosen/Insert', 'Dosen::insert');
$routes->get('Dosen/Detail/(:segment)', 'Dosen::detail/$1');
$routes->get('Dosen/Edit/(:segment)', 'Dosen::edit/$1');
$routes->post('Dosen/Update/(:segment)', 'Dosen::update/$1');
$routes->get('Dosen/Delete/(:segment)', 'Dosen::delete/$1');

$routes->get('Mahasiswa', 'Mahasiswa::index');
$routes->get('Mahasiswa/Add', 'Mahasiswa::add');
$routes->post('Mahasiswa/Insert', 'Mahasiswa::insert');
$routes->get('Mahasiswa/Detail/(:segment)', 'Mahasiswa::detail/$1');
$routes->get('Mahasiswa/Edit/(:segment)', 'Mahasiswa::edit/$1');
$routes->post('Mahasiswa/Update/(:segment)', 'Mahasiswa::update/$1');
$routes->get('Mahasiswa/Delete/(:segment)', 'Mahasiswa::delete/$1');


$routes->get('Kelas', 'Kelas::index');
$routes->post('Kelas/Add', 'Kelas::add');
// $routes->post('Kelas/Insert', 'Kelas::insert');
$routes->get('Kelas/Detail/(:segment)', 'Kelas::detail_kelas/$1');
$routes->get('Kelas/AddMhs/(:segment)/(:segment)', 'Kelas::add_anggota_kelas/$1/$2');
$routes->get('Kelas/RemoveMhs/(:segment)/(:segment)', 'Kelas::remove_anggota_kelas/$1/$2');
$routes->get('Kelas/Edit/(:segment)', 'Kelas::edit/$1');
$routes->post('Kelas/Update/(:segment)', 'Kelas::update/$1');
$routes->get('Kelas/Delete/(:segment)', 'Kelas::delete/$1');

$routes->get('Jadwalkuliah', 'Jadwalkuliah::index');
$routes->post('Jadwalkuliah/Add/(:segment)', 'Jadwalkuliah::add/$1');
// $routes->post('Jadwalkuliah/Insert', 'Jadwalkuliah::insert');
$routes->get('Jadwalkuliah/Detail/(:segment)', 'Jadwalkuliah::detailjadwal/$1');
$routes->get('Jadwalkuliah/Edit/(:segment)', 'Jadwalkuliah::edit/$1');
$routes->post('Jadwalkuliah/Update/(:segment)', 'Jadwalkuliah::update/$1');
$routes->get('Jadwalkuliah/Delete/(:segment)/(:segment)', 'Jadwalkuliah::delete/$1/$2');


// akses oleh mahasiswa
$routes->get('Krs', 'Krs::index');
$routes->get('Krs/Tambah_Matkul/(:segment)', 'Krs::tambah_matkul/$1');
$routes->get('Krs/Detail/(:segment)', 'Krs::detail/$1');
$routes->get('Krs/Edit/(:segment)', 'Krs::edit/$1');
$routes->post('Krs/Update/(:segment)', 'Krs::update/$1');
$routes->get('Krs/Delete/(:segment)', 'Krs::delete/$1');

$routes->get('Mhs', 'Mhs::index');
$routes->post('Mhs/UpdatePhoto', 'Mhs::updatePhoto');
$routes->get('Mhs/Absensi', 'Mhs::absensi');
$routes->get('Mhs/Absensi/Tambah_absensi/(:segment)', 'Mhs::/$1');
$routes->get('Mhs/Absensi/Detail/(:segment)', 'Mhs::detail/$1');
$routes->get('Mhs/Absensi/Edit/(:segment)', 'Mhs::edit/$1');
$routes->post('Mhs/Absensi/Update/(:segment)', 'Mhs::update/$1');
$routes->get('Mhs/Absensi/Delete/(:segment)', 'Mhs::delete/$1');


// Akses oleh dosen
$routes->get('Dsn', 'Dsn::index');
$routes->post('Dsn/UpdatePhoto', 'Dsn::updatePhoto');
$routes->get('Dsn/JadwalMengajar', 'Dsn::jadwal');
$routes->get('Dsn/Absen', 'Dsn::AbsenKelas');
$routes->get('Dsn/AbsenKelas/(:segment)', 'Dsn::absensi/$1');
$routes->post('Dsn/IsiAbsen/(:segment)', 'Dsn::SimpanAbsen/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
