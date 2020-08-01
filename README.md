# Ichsan Blog

Sistem aplikasi CMS BLOG dengan laravel 6

## Preview Aplikasi

-   View Admin

    ![ichsanblog1](https://user-images.githubusercontent.com/41501730/89091342-2aeda900-d3d3-11ea-92f0-f37f3ba64747.png)

-   View User
    ![ichsanblog2](https://user-images.githubusercontent.com/41501730/89091372-71db9e80-d3d3-11ea-9871-004fe70eed65.png)

    ![ichsanblog3](https://user-images.githubusercontent.com/41501730/89091378-828c1480-d3d3-11ea-8151-583bf74bfc0e.png)

# Panduan Installasi

-   Clone Repository

    > git clone https://github.com/mnurichsan/laravel-blog-cms-challenge.git atau langsung download zip

-   Install Composer

    > Composer install

-   Setting Database

    > Buka .env lalu arahkan database ke lokal masing-masing.

-   Migrasi DB

    > Buka .env lalu arahkan database ke lokal masing-masing.

-   Seeding User, Category dan posts

    Pastikan jalankan composer dump autoload untuk mengupdate class cache.

    > composer dump-autoload

    Lalu jalankan seed

    > php artisan db:seed

-   Jalankan mesin MySQL dan start server.

    > php artisan serve

# Masuk Ke Aplikasi

Buka http://localhost:8000 untuk melihat Blog

Buka http://localhost:8000/admin untuk melihat CMS Blog

Berikut untuk login akun admin :

-   Email : admin@gmail.com
-   password : admin
