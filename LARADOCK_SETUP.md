# Setup [Laradock](http://laradock.io)
Laradock berfungsi untuk yang ingin menjalankan project ini dengan Docker. Pastikan sudah menginstall [Docker](https://docs.docker.com/install/) terlebih dahulu.

---

## Setup Awal
Berikut langkah-langkahnya:

1. Keluar dari folder project ini, dan clone repository ini. Berikut commandnya:
```sh
$ cd .. # Keluar dari folder project
$ git clone https://github.com/laradock/laradock.git
```
Struktur foldernya nanti akan jadi seperti ini, dimana folder hasil clone Laradock dan folder project Portal Primakara akan sejajar seperti ini:
```
+-- laradock
|
+-- portal-primakara
```
2. Masuk ke folder Laradock:
```sh
$ cd laradock
```
3. Copy file `env-example` menjadi `.env`:
```sh
$ cp env-example .env
```
4. Edit file `.env`. Dalam hal ini karena menggunakan MySQL, contoh yang digunakan adalah untuk mengatur MySQL. Namun jika ingin menggunakan Database yang lain, silahkan lihat [dokumentasinya](http://laradock.io).
5. Ubah versi MySQL menjadi 5.7, untuk mencegah [error karena menggunakan versi yang belum stabil](https://github.com/laradock/laradock/issues/1392#issuecomment-368320353):
```
...
MYSQL_VERSION=5.7
...
```
6. Lalu lakukan pengaturan nama database, user, password, dan password untuk root database tersebut. Seperti contoh ini:
```
...
MYSQL_DATABASE=portalprimakara
MYSQL_USER=portal
MYSQL_PASSWORD=primakara
MYSQL_ROOT_PASSWORD=root
...
```
7. Arahkan APP_CODE_PATH_HOST ke folder project:
```
APP_CODE_PATH_HOST=../portal-primakara/
```
8. Setelah itu, berikut command untuk mulai menjalankan project ini. Contoh ini untuk menjalankan project dengan Nginx dan MySQL. Jika project baru pertama kali dijalankan, maka akan dilakukan instalasi dependensi yang dibutuhkan. Prosesnya akan memakan waktu lama. Disarankan menggunakan koneksi Wi-Fi karena dependensi yang di download memiliki ukuran yang besar.
```sh
$ docker-compose up -d nginx mysql
```
Jika instalasi pertama sudah dilakukan. Ketika menjalankan command tersebut lagi. Project akan langsung jalan tanpa melakukan instalasi lagi.

9. Kembali ke folder dari project ini. Lalu atur `.env` dari project ini agar sesuai dengan yang ada di Laradock. Contoh seperti ini:
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
Mohon perhatikan. Disana untuk `DB_HOST` menggunakan `mysql` karena [alasan ini](https://github.com/laradock/laradock/issues/1299#issuecomment-350290594):

10. Masuk kembali ke folder Laradock.
11. Akses bash container dari workspace project ini:
```sh
$ docker-compose exec workspace bash
```
12. Lalu jalankan command ini untuk mempersiapkan setup awal dari project ini:
```sh
$ composer install
$ php artisan key:generate
$ composer dump-autoload
$ php artisan migrate --seed
$ php artisan storage:link
```
13. Jika sudah, silahkan akses `http://localhost`.
14. Dan selamat, project sudah berjalan dengan baik.

---

## Cara menggunakan
Dalam semua prosesnya. Jangan lupa untuk masuk terlebih dahulu ke folder Laradock nya.

- Menjalankan Project (Dalam hal ini menggunakan Nginx & MySQL):
```sh
$ docker-compose up -d nginx mysql
```
- Menghentikan Project:
```sh
$ docker-compose stop
```
- Menghapus Project (Menghapus aplikasi dari list proses yang ada di Docker Compose):
```sh
$ docker-compose down
```
