# Ujian Pemrograman Web LabTI

Project menggunakan Framework Codeigniter versi 2

### Konfigurasi

Ubah base_url pada file config.php menjadi lokasi tempat menyimpan proyek.

contoh : http://localhost/proyek

```php
$config['base_url'] = '';
```

Ubah konfigurasi database pada file database.php di isi sesuai dengan konfigurasi database pada laptop / komputer.

```php
$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = '';
$db['default']['database'] = '';
$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;
```

Ubah permission folder uploads jika menggunakan sistem operasi linux menjadi 777

```sh
$ chmod 777 uploads -R
```

### Screenshot

1. Tampilan Login

![Tampilan Login](http://i.imgur.com/6WXey0E.png)

2. Tampilan Input Kategori

![Tampilan Input Kategori](http://i.imgur.com/hBI1eln.png)

### Export Database

Pada folder telah disediakan file dengan ekstensi .sql yang langsung dapat di import lewat phpmyadmin.