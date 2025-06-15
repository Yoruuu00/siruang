<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('peminjamanwefcwf','ListPeminjamanRuang::index', ['as' => 'peminjaman']);
$routes->get('fasilitas-ruanganonewsikuf', 'ListFasilitasRuangan::index', ['as' => 'fasilitas_ruangan']);

$routes->get('loginwedAWecfwed', 'Authentication::login', ['as' => 'login']);
$routes->post('loginhwdsecawe', 'Authentication::loginauth', ['as' => 'login_auth']);

$routes->get('registervfdertgv', 'Authentication::register', ['as' => 'register']);
$routes->post('registerumjiy', 'Authentication::registerauth', ['as' => 'register_auth']);

$routes->get('forgot-pwdsdfrtbgv', 'Authentication::forgotPwdForm', ['as' => 'forgot_password']);
$routes->post('forgot-pwdfdrs', 'Authentication::sendResetLink', ['as' => 'send_reset_link']);

$routes->get('reset-pwdkuims', 'Authentication::resetPwdForm', ['as' => 'reset_password_form']);
$routes->post('reset-pwdwecv', 'Authentication::updatePwd', ['as' => 'reset_password']);

$routes->get('logout','Authentication::logout');

$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('dashboardfdrtb', 'Admin\Dashboard::index', ['as' => 'admin_dashboard']);
    // $routes->get('peminjaman','Admin\Peminjaman::index', ['as' => 'admin_peminjaman']);
    $routes->get('peminjaman/editdser/(:num)','Admin\Peminjaman::edit/$1', ['as' => 'admin_edit_peminjaman']);
    $routes->get('peminjaman/deletedswev/(:num)', 'Admin\Peminjaman::delete/$1', ['as' => 'admin_delete_peminjaman']);
    $routes->post('peminjaman/savevews','Admin\Peminjaman::save', ['as' => 'admin_save_peminjaman']);
});

$routes->group('user', ['filter' => 'auth'], function($routes) {
    $routes->get('dashboardwecsds', 'User\Dashboard::index', ['as' => 'user_dashboard']);
    $routes->get('peminjamanfdrstb','User\Peminjaman::index', ['as' => 'user_add_peminjaman']);
    $routes->get('peminjamandse/editfder/(:num)','User\Peminjaman::edit/$1', ['as' => 'user_edit_peminjaman']);
    $routes->get('peminjaman/deleteesrf4/(:num)', 'User\Peminjaman::delete/$1', ['as' => 'user_delete_peminjaman']);
    $routes->post('peminjaman/savewecdewc','User\Peminjaman::save', ['as' => 'user_save_peminjaman']);
});