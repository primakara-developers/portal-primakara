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
4. Buat file baru `.env`. Isi file `.env` tersebut dengan isi dari file `.env.example`
5. Install seluruh package agar bisa dijalankan
```sh
$ composer install
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
3. Setiap selesai push ke repo hasil fork anda
```sh
$ git push origin {nama-branch}
```
4. Jika sudah siap untuk dibawa ke repository utama. Lakukanlah Pull Request dari branch anda ke branch `master`. Sebelum pull request pastikan branch sudah bersih. Jika ada conflict silahkan perbaiki conflict tersebut. Pastikan buat judul dan deskripsi yang baik agar mudah dipahami!
5. Semangat!!!


License
----

MIT
