<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Routes client
$route['default_controller'] = 'home_c';
$route['form-pengaduan'] = 'Admin/aduan_c/add';

$route['auth-login'] = 'auth_c/login_user';
$route['logout-user'] = 'auth_c/logout_user';
$route['auth-proses'] = 'Admin/aduan_c/proses';

$route['sig-desa'] = 'Client/data_all_home';
$route['sig-opd'] = 'Client/data_all_home/opd';
$route['sig-upt'] = 'Client/data_all_home/upt';

$route['pengaduan'] = 'Client/data_all_home/pengaduan';
$route['edit-pengaduan/(:num)'] = 'Client/data_all_home/edit_pengaduan/$1';

//routes admin 
$route['administrator'] = 'Admin/home_admin_c';

$route['laporan%20pengaduan'] = 'Admin/aduan_c';
$route['data-pengaduan'] = 'Admin/aduan_c/data_pengaduan';
$route['data-pengaduan/edit/(:num)'] = 'Admin/aduan_c/edit_aduan/$1';
$route['laporan-pengaduan/download-laporan'] = 'Admin/aduan_c/downloadAll';
$route['download/download-(:num)'] = 'Admin/aduan_c/downloadById/$1';

$route['data-desa'] = 'Admin/data_all_c';
$route['data-opd'] = 'Admin/data_all_c/opd';
$route['data-upt'] = 'Admin/data_all_c/upt';

$route['users'] = 'Admin/user_c';
$route['data-teknisi'] = 'Admin/user_c/get_teknisi';
$route['tambah-user'] = 'Admin/user_c/add_user';
$route['register-proses'] = 'Admin/user_c/proses';
$route['add-teknisi'] = 'Admin/user_c/add_teknisi';
$route['edit-user/(:num)'] = 'Admin/user_c/edit_user/$1';
$route['edit-teknisi/(:num)'] = 'Admin/user_c/edit_teknisi/$1';

$route['login'] = 'auth_c/login';
$route['auth'] = 'auth_c/proses';
$route['logout'] = 'auth_c/logout';

/* Routes Teknisi */
$route['teknisi'] = 'teknisi/home_teknisi_c';
$route['teknisi-data-pengaduan'] = 'teknisi/home_teknisi_c/data_pengaduan';
$route['teknisi-login'] = 'auth_c/login_teknisi';
$route['teknisi-logout'] = 'auth_c/logout_teknisi';


/* custom error */
$route['404_override'] = 'error_page';
$route['translate_uri_dashes'] = FALSE;
