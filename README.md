# The Movie Database App 

This project allows you to import movie and actor data from the TMDB (The Movie Database) API into your Laravel application.

## Prerequisites

Before you begin, ensure you have the following installed:
- [PHP](https://www.php.net/downloads) >= 8.2
- [Composer](https://getcomposer.org/)
- MySQL or any other supported database

## Installation

```bash
git clone <repository_url>
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

## Run Import Commands
```bash
php artisan genres:import
php artisan movies:import
php artisan actors:import-for-movies
```
