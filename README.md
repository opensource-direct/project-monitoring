## Recompose JOB
Aplikasi untuk memaintain personal work in office dan dapat mencatat, catatan untuk reminder yang perlu dievaluasi secara terus menerus

![GitHub forks](https://img.shields.io/github/forks/aspsptyd/recompose-job.svg) ![GitHub contributors](https://img.shields.io/github/contributors/aspsptyd/recompose-job.svg) ![GitHub top language](https://img.shields.io/github/languages/top/aspsptyd/recompose-job.svg)

## Fitur Update
Berikut fitur-fitur yang di update dan terbaru

- Kelola Data Barang
- Kelola Reminder (Module Task & Notes) :new:

## Install App
Untuk installasi App dapat dilakukan mengikuti step berikut :

Step 1: Jalankan command dibawah ini

```
$ git clone https://github.com/aspsptyd/recompose-job.git
```

Step 2: Open Project dengan VScode kemudian copy file `.env.example` dan rename file menjadi `.env`

Step 3: Buat Database di Local Database Server dengan nama `db_recomposejob`

Step 4: Setup Nama Database pada file .env

```
DB_DATABASE=trial_db_recomposejob
DB_USERNAME=root
DB_PASSWORD=
```

Step 5: Jalankan command dibawah ini

```
$ composer install
```

Step 5: Buat file .gitignore di root foler `/`, kemudian copas line code berikut

```
/node_modules
/public/build
/public/hot
/public/storage
/storage/*.key
/vendor
.env
.env.backup
.env.production
.phpunit.result.cache
Homestead.json
Homestead.yaml
auth.json
npm-debug.log
yarn-error.log
/.fleet
/.idea
/.vscode
```

Step 6: Jalankan command dibawah ini

```
$ git checkout v1.1
```

Step 7: Jalankan command dibawah ini

```
$ composer install
```

Step 8: Jalankan command dibawah ini

```
$ php artisan migrate
$ php artisan key:generate
$ php artisan serve
```

Step 9: Akses Aplikasi & Have fun!

```sh
 INFO  Server running on [http://127.0.0.1:8000].
```

## Record Overview Fitur Reminder

https://user-images.githubusercontent.com/98740335/279990664-cd3b8dbc-6b97-4bed-9b67-596690f4a0b6.mp4
