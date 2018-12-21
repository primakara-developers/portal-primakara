# Portal Primakara
Repository for Portal Primakara Website


### Ingin kontribusi? Berikut langkahnya!
1. Fork Repository ini
2. Clone Repository hasil fork anda
```sh
$ git clone https://github.com/{username-anda}/portal-primakara.git
```
3. Tambahkan upstream pada hasil clone tersebut
```sh
$ git remote add upstream https://github.com/primakara-developers/portal-primakara.git
```
4. Copy file `.env.example` menjadi `.env`:
```sh
$ cp env-example .env
```
5. Install seluruh package agar bisa dijalankan
```sh
$ composer install
```
6. Setup database. Lalu isi konfigurasinya di `.env` sesuai pengaturan database. Contoh:
```sh
...
DB_DATABASE=portal_primakara
DB_USERNAME=cooluser
DB_PASSWORD=secretpassword
...
```
7. Jalankan command berikut:
```sh
$ php artisan key:generate
$ php artisan migrate --seed
```
8. Jika ingin menjalankan aplikasi, jalankan command berikut:
```sh
$ php artisan serve
```

### Berikut langkah-langkah yang wajib dilakukan dalam proses kontribusi
1. Selalu pull upstream setiap ingin memulai mengembangkan
```sh
$ git pull upstream master
```
2. Buat branch baru pada setiap fitur yang dikembangkan. Contoh:
```sh
$ git branch feature/add-login // Contoh saat membuat branch untuk fitur baru
$ git branch bug/fix-menu // Contoh saat membuat branch untuk fix bug
```
3. Setiap selesai, push ke repo hasil fork anda
```sh
$ git push origin {nama-branch}
```
4. Jika sudah siap untuk dibawa ke repository utama. Lakukanlah Pull Request dari branch anda ke branch `master`. Sebelum pull request pastikan branch sudah bersih. Jika ada conflict silahkan perbaiki conflict tersebut. Pastikan buat judul dan deskripsi yang baik agar mudah dipahami!
5. Semangat!!!

### Sedikit Panduan
- Jika pull request tersebut untuk menyelesaikan sebuah issue. Mohon gunakan Title dengan contoh seperti ini: `Fix issue #25`. Sesuaikan dengan nomer issue yang diselesaikan.
- Dalam membuat pull request, jika terkait dengan Front-End mohon isi reviewer dengan [wahyubucil]. Dan jika terkait dengan Back-End mohon isi Reviewer dengan [kirizu336] & [marvelalexius].
- [Panduan untuk menambah mockup](https://github.com/primakara-developers/portal-primakara/blob/master/resources/assets/mockup/README.md)
- [Panduan untuk development Front-End](https://github.com/primakara-developers/portal-primakara/blob/master/resources/README.md)


License
----

MIT


[wahyubucil]: <https://github.com/wahyubucil>
[kirizu336]: <https://github.com/kirizu336>
[marvelalexius]: <https://github.com/marvelalexius>
