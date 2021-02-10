Initializing project


## Setup Guide For Run Project
Step 1: Clone this project
```
git clone git@gitlab.com:luisfergago/expo-landivar-2021-frontend.git
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
DB_DATABASE=expolandivar_db
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


## Setup Guide For Run Dev

After done above instruction

Step 1: Install npm dependencies using yarn.
```
npm i -g yarn
yarn
```

Step 2: Run yarn watch command to watching Vue components.
```
yarn watch
```

