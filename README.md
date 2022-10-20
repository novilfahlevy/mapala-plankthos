# Panduan Instalasi
Requirement:
1. XAMPP
2. PHP 8
3. Mysql 5
4. Composer 2 [disini](https://getcomposer.org/Composer-Setup.exe)
5. Pastikan sudah membuat databasenya

Jalankan dilokal:
1. Clone atau download zip
2. Buka terminal
3. Masuk ke dalam folder mapala-plankthos yang barusan diclone atau ekstrak (zip)
4. Copy file .env
    ```bash
    cp .env.example .env
    ```
5. Generate key
    ```bash
    php artisan key:generate
    ```
6. Isi variabel env
    ```bash
    DB_DATABASE=nama_database
    DB_USERNAME=username
    DB_PASSWORD=password
    ```
7. Install semua package
    ```bash
    composer install
    ```
8. Migrate database
    ```bash
    php artisan migrate --seed
    ```
9. Storage link
    ```bash
    php artisan storage:link
    ```
10. Jalankan
    ```bash
    php artisan serve
    ```

Lalu coba jalankan localhost:8000 di browser
