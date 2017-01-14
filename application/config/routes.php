<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

$route['default_controller'] = "welcome";
$route['404_override'] = '';

/**
 *
 * Route Authentikasi & Login
 *
 */

$route['auth'] = "authcontroller/auth";
$route['logout'] = "authcontroller/logout";

/**
 *
 * Route Dashboard
 *
 */

$route['dashboard'] = "dashboardcontroller/dashboard";

/**
 *
 * Route Menu Lokasi
 *
 */

$route['lokasi/index'] = "lokasicontroller/index";
$route['lokasi/tambah'] = "lokasicontroller/tambah";
$route['lokasi/simpandata'] = "lokasicontroller/simpandata";
$route['lokasi/delete/:num'] = "lokasicontroller/delete";
$route['lokasi/edit/:num'] = "lokasicontroller/edit";
$route['lokasi/doupdate'] = "lokasicontroller/doupdate";

/**
 *
 * Route Menu Kategori
 *
 */

$route['kategori/index'] = "kategoricontroller/index";
$route['kategori/tambah'] = "kategoricontroller/tambah";
$route['kategori/simpandata'] = "kategoricontroller/simpandata";
$route['kategori/delete/:num'] = "kategoricontroller/delete";
$route['kategori/edit/:num'] = "kategoricontroller/edit";
$route['kategori/doupdate'] = "kategoricontroller/doupdate";