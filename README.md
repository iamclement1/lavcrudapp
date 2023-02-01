# LARAVEL CRUD APPLICATION

A crud application developed with laravel.

## Installation

Clone the repo locally:

```sh
git clone git@github.com:iamclement1/lavcrudapp.git
cd lavcrudapp
```

Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm install
```

Build assets:

```sh
npm run dev
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create a MySQL database called "lavcrudapp". You can also use another database (SQLite, Postgres), simply update your configuration accordingly.

```mysql
CREATE DATABASE drippiper;
```

Run database migrations:

```sh
php artisan migrate
```

Run the dev server (the output will give the address):

```sh
php artisan serve
```
