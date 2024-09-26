# Chirper - Laravel Bootcamp Project
[![Laravel CI](https://github.com/gabrielrcosta1/chirper/actions/workflows/laravel-ci.yml/badge.svg)](https://github.com/gabrielrcosta1/chirper/actions/workflows/laravel-ci.yml)

Chirper is a simple microblogging platform built as part of the [Laravel Bootcamp](https://bootcamp.laravel.com/). This project provides a hands-on introduction to the core features of the Laravel framework, offering a real-world application experience.

## Features

- Create, edit, and delete short posts (Chirps).
- User authentication implemented with **Laravel Breeze**.
- Basic microblogging features such as following other users and viewing their Chirps.
- Explore Laravel 11 features, including Eloquent ORM, routing, controllers, and Blade for templating.

## Tech Stack

- **Backend**: Laravel 11
- **Frontend**: Blade, Tailwind CSS (included via Laravel Breeze)
- **Database**: MySQL/PostgreSQL (configurable)
- **Authentication**: Laravel Breeze

## Installation

Follow the steps below to download and set up the project on your local machine.

### 1. Clone the repository

Clone the project from GitHub:

```bash
git clone https://github.com/gabrielrcosta1/chirper
```

### 2. Navigate to the project folder

```bash
cd chirper
```

### 3. Install PHP dependencies

Install the required PHP packages using Composer:

```bash
composer install
```

### 4. Install Node.js dependencies

Install the frontend dependencies with npm:

```bash
npm install
```

### 5. Set up the environment file

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Update the `.env` file with your database and other necessary configurations.

### 6. Generate the application key

```bash
php artisan key:generate
```

### 7. Run database migrations

Make sure your database is running, and then run the migrations:

```bash
php artisan migrate
```

### 8. Compile assets

If your application has frontend assets, run the following to compile them:

```bash
npm run dev
```
### 9. Run the application

To start the application locally, run:

```bash
php artisan serve
```

The application should now be available at `http://localhost:8000`.


## License

This application is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).