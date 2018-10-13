# Panduan untuk mengerjakan Front-End

Client
---
### Panduan folder & file
1. Folder & file untuk pengerjaan client berada disini
- [Views](https://github.com/primakara-developers/portal-primakara/tree/master/resources/views/client)
- [Layout Views](https://github.com/primakara-developers/portal-primakara/blob/master/resources/views/layouts/clientLayout.blade.php)
- [Assets Javascript](https://github.com/primakara-developers/portal-primakara/tree/master/resources/assets/js)
- [Assets SCSS](https://github.com/primakara-developers/portal-primakara/tree/master/resources/assets/sass)
- [Assets Images]()
2. Untuk `scss`. Jika ingin membuat style untuk halaman baru. Silahkan tambahkan file `scss` di folder [pages]() dengan nama file yang sesuai seperti halaman yang mau dibuat.
3. Setelah itu jangan lupa import file baru tersebut di [app.scss]()

### Panduan development
1. Pastikan anda sudah menginstall [Node.js](https://nodejs.org/). Versi yang disarankan >= 8
2. Install seluruh dependencies terlebih dahulu:
```sh
$ npm install
```
2. Untuk compile assets bisa lakukan ini:
```sh
$ npm run dev
```
3. Jika ingin otomatis compile assets setiap melakukan save, jalankan command ini:
```sh
$ npm run watch
```
4. Jika ingin membuat assets menjadi production, jalankan command ini:
```sh
$ npm run prod
```
Note: Jangan pernah membawa assets production ke dalam repository. Mohon teliti!


Admin
---
### Panduan folder & file
Folder & file untuk pengerjaan admin berada disini
- [Views](https://github.com/primakara-developers/portal-primakara/tree/master/resources/views/dashboard)
- [Layout Views](https://github.com/primakara-developers/portal-primakara/blob/master/resources/views/layouts/dashboard-app.blade.php)
- [Auth Views](https://github.com/primakara-developers/portal-primakara/tree/master/resources/views/auth)
- [Auth Layout Views](https://github.com/primakara-developers/portal-primakara/blob/master/resources/views/layouts/authLayout.blade.php)
- [Assets](https://github.com/primakara-developers/portal-primakara/tree/master/public/dashboard-theme)

Note: Mohon teliti. Jangan sampai file & folder `admin` campur aduk dengan `client`.

### Panduan development
Tidak ada panduan khusus, karena assets langsung berada di folder `public`. Namun perbedaannya CSS menggunakan CSS biasa tidak SCSS.
Lalu untuk Javascript, tidak ada Webpack maupun Babel. Image juga tidak perlu di compress. Karena hanya untuk internal.
