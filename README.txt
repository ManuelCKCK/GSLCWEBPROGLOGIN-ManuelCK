GSLC WebProg Login Autheticator

Saya menggunakan akun google dan menggunakan Socialite ,jetstream, dan node.js.

Tahap pertama agar project ini berjalan adalah dengan menginstall library yg
diperlukan terlebih dahulu.

Socialite (Digunakan untuk menghubungkan google account dengan project melalui API.
Cara install : composer require laravel/socialite
node.js (untuk menjalankan tampilan login bawaan google)
Cara install : Pertama download node.js , Setelah itu lakukan 'npm install' 
dan 'npm run dev'
Jetstream (Digunakan untuk mempermudah membuat fungsi fungsi login,register,dan email verification)
Cara install : composer require laravel/jetstream , lalu jalankan 'php artisan jetstream:install livewire'->ini akan membuat template login,register,dkk nya.

Blade pada project ini semuanya dari laravel sendiri dan saya hanya memodifikasi pada bagian LoginController,User.php(model),services.php,
file .env, routing pada web.php .

Karena API google berbeda setiap orangnya maka untuk menjaga keamanan akun saya sudah saya rename api saya dan bapak bisa
memasukan milik bapak pada file .env,line 11-13.
