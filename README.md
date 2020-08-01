# Ichsan Blog

Sistem aplikasi CMS BLOG dengan laravel 6

# Panduan Installasi

-   Installasi

*   Clone Repository

    > git clone https://github.com/mnurichsan/laravel-blog-cms-challenge.git atau langsung download zip

*   Install Composer

    > Composer install

-   Database

*   Setting Database

    > Buka .env lalu arahkan database ke lokal masing-masing.

-   Migrate

*   Migrasi DB

    > Buka .env lalu arahkan database ke lokal masing-masing.

-   Seeding

*   Seeding User, Category dan posts

    Pastikan jalankan composer dump autoload untuk mengupdate class cache.

    > composer dump-autoload

    Lalu jalankan seed

    > php artisan db:seed

-   Start Server

*   Jalankan mesin MySQL dan start server.

    > php artisan serve

# Masuk Ke Aplikasi

Buka http://localhost:8000 untuk melihat Blog

Buka http://localhost:8000/admin untuk melihat CMS Blog

-   Berikut untuk login akun admin

*   Email : admin@gmail.com
*   password : admin
