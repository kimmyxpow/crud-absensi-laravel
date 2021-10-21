## Crud Absensi

```
git clone https://github.com/abinoval/crud-absensi-laravel.git
```

```
cd crud-absensi-laravel
```

```
composer install
```

```
cp .env.example .env
```

```
php artisan key:generate
```

```
php artisan migrate:fresh
```
If you're using valet :
```
valet park
```
Then open `crud-absensi-laravel.test/students` in browser, if the page instead shows `valet not found`, try running the following command:
```
valet link
```
If you're not using valet :
```
php artisan serve
```
Then open `http://127.0.0.1:8000/students` in your browser.
