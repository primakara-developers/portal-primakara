# Setup [Laradock](http://laradock.io)
Laradock berfungsi untuk yang ingin menjalankan project ini dengan Docker. Pastikan sudah menginstall [Docker](https://docs.docker.com/install/) terlebih dahulu.

---

## Setup Awal
Berikut langkah-langkahnya:

1. Masuk ke folder Laradock
```sh
$ cd laradock-portal-primakara
```
2. Copy file env-example menjadi .env
```sh
$ cp env-example .env
```
3. Edit file `.env`. Dalam hal ini karena menggunakan MySQL, contoh yang digunakan adalah untuk mengatur MySQL. Namun jika ingin menggunakan Database yang lain, silahkan lihat [dokumentasinya](http://laradock.io)
4. Ubah versi MySQL menjadi 5.7, untuk mencegah error seperti [ini](https://github.com/laradock/laradock/issues/1392#issuecomment-368320353).
```
...
MYSQL_VERSION=5.7
...
```
5. Lalu lakukan pengaturan nama database, user, password, dan password untuk root database tersebut. Seperti contoh ini:
```
...
MYSQL_DATABASE=portalprimakara
MYSQL_USER=portal
MYSQL_PASSWORD=primakara
MYSQL_ROOT_PASSWORD=root
...
```
6. Setelah itu, berikut command untuk mulai menjalankan aplikasi. Contoh ini untuk menjalankan aplikasi dengan Nginx dan MySQL. Jika aplikasi baru pertama kali dijalankan, maka akan dilakukan instalasi dependensi yang dibutuhkan. Prosesnya akan memakan waktu lama. Disarankan menggunakan koneksi Wi-Fi karena dependensi yang di download memiliki ukuran yang besar.
```sh
$ docker-compose up -d nginx mysql
```
Jika instalasi pertama sudah dilakukan. Ketika menjalankan command tersebut. Aplikasi akan langsung jalan tanpa melakukan instalasi lagi.

7. Kembali ke folder utama dari project ini. Lalu atur `.env` dari project ini agar sesuai dengan yang ada di Laradock. Contoh seperti ini:
```
...
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=portalprimakara
DB_USERNAME=portal
DB_PASSWORD=primakara
...
```
Mohon perhatikan. Disana untuk `DB_HOST` menggunakan `mysql` karena alasan [ini](https://github.com/laradock/laradock/issues/1299#issuecomment-350290594).

8. Masuk ke folder Laradock
```sh
$ cd laradock-portal-primakara
```
9. Akses bash container dari workspace project ini
```sh
$ docker-compose exec workspace bash
```
10. Lalu jalankan command ini untuk mempersiapkan setup awal dari project ini
```sh
$ composer install
$ php artisan key:generate
$ php artisan migrate --seed
```
11. Jika sudah, silahkan akses `http://localhost`. Dan selamat. Aplikasi sudah berjalan dengan baik.

---

## Cara menggunakan
Dalam semua prosesnya. Jangan lupa untuk masuk terlebih dahulu ke folder Laradock nya
```sh
$ cd laradock-portal-primakara
```

- Menjalankan Aplikasi (Dalam hal ini menggunakan Nginx & MySQL)
```sh
$ docker-compose up -d nginx mysql
```
- Mematikan Aplikasi
```sh
$ docker-compose stop
```
- Menghapus Aplikasi
```sh
$ docker-compose down
```
