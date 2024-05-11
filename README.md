# To Do List

This project is an To Do list made with laravel. The user can add tasks that need to be done, check them when they are done and delete them when they are no longer needed.

To install this project the user will need to follow these steps

## 1. Clone the repository

### Note: PHP 8.2 is required. To install PHP you can find more here => https://www.php.net/manual/en/install.php

```bash
git clomne <this.repository>
```

## Copy env file

```bash 
cp .env.example .env
```

## Make connection with database

### Note: If you are using PHP storm, you can use the build in database

Change in the env file the variables with the right values.

```bash
DB_CONNECTION=sqlite
DB_HOST= Your values
DB_PORT= Your values
DB_DATABASE= Your values
DB_USERNAME= Your values
DB_PASSWORD= Your values
```

## Generate Applixcation key

```bash 
php artisan key:generate
```

## Migrate and seed your database

### Note: In the DatabaseSeeder.php you can change the amount of fake tests

```bash
php artisan migrate
php artisan db:seed
```

## Start the Application

```bash
php artisan serve
```
