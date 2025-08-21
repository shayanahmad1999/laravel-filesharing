# Laravel Project Setup

This README will guide you through setting up and running the Laravel project locally.

## Prerequisites

Ensure the following tools are installed on your system:
🔧 Tech Stack:

-   PHP >= 8.4
-   Laravel = 12
-   Composer
-   MySQL or any supported database

## Installation & Setup

Follow the steps below to get started:

```bash
# Clone the repository
git clone https://github.com/shayanahmad1999/laravel-filesharing.git
cd laravel-filesharing

# Install PHP dependencies
composer install

# Copy and set up the environment configuration
cp .env.example .env

# Generate application key
php artisan key:generate

# Run database migrations
php artisan migrate --seed

# Run the development server
php artisan serve

```

# Installation of FileSharing From scratch

Follow the steps below to get started:

## Prerequisites

Ensure the following tools are
🔧 Tech Stack:

-   PHP 8.3+
-   Laravel 11.0+ | 12.0+

```bash
# install the laravel
laravel new example-app
cd example-app

# Open Terminal and install the package
composer require grazulex/laravel-sharelink

# Publish and run the migrations:
php artisan vendor:publish --tag="sharelink-migrations"
php artisan migrate

# Optionally, publish the configuration file:
php artisan vendor:publish --tag="sharelink-config"

# Quick Examples
$file = public_path('/path/to/document.pdf');
    $link = ShareLink::create($file)
        ->expiresIn(60) // 60 minutes
        ->maxClicks(5)
        ->withPassword('secret123')
        ->generate();
    echo $link->url;

# Visit the below links for more details
1. Open GitHub **https://github.com/Grazulex/laravel-sharelink**
2. Open packagist **https://packagist.org/packages/grazulex/laravel-sharelink**
3. Open Medium **https://medium.com/@developerawam/file-sharing-in-laravel-just-got-10x-safer-with-this-package-065192dfaae8**


```
