# laravel-6-crud
Laravel simple Todo CRUD(Create, Read, Update and Delete) application using laravel inbuild authentication. Here is a step by step guide to install it.

## Setup Guide
Step 1: Clone this project
```
git clone https://github.com/ckpanchal/laravel-crud.git
```

Step 2: Install project dependencies using composer.
```
composer install
```

Step 3: Copy .env.example file to .env file.
```
cp .env.example .env
```

Step 4: Configure database credentials in .env file.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lara-crud
DB_USERNAME=root
DB_PASSWORD=
```

Step 5: Run artisan migration command to migrate table.
```
php artisan migrate
```

Step 6: Run artisan serve command to start app server.
```
php artisan serve
```

Step 7: Generate encryption key using below command
```
php artisan key:generate
```

Step 8: Open browser and navigate http://127.0.0.1:8000

If everything works it will open welcome screen in browser

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
[MIT](https://choosealicense.com/licenses/mit/)
