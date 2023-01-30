### Admin panel to manage companies

---

#### Installation

after clone this repo, you should run this commands in your terminal inside project directory


```
composer install
```

then copy `` .env.example `` file and rename to `` .env `` and generate application key by run 
```
php artisan key:generate 
```
after that create your local database and configure credentials inside `` .env`` file
then run migrations and seed data using 
```
php artisan migrate --seed
```

 run ``` php artisan storage:link ``` to link storage to public folder

 run ``` php artisan serve ``` to start application server

visit http://127.0.0.1:8000 
```
email => admin@admin.com
password => password
```



