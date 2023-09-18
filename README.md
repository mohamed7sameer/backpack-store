# Backpack-store

[![Build Status](https://travis-ci.org/mohamed7sameer/backpack-store.svg?branch=master)](https://travis-ci.org/mohamed7sameer/backpack-store)
[![Coverage Status](https://coveralls.io/repos/github/mohamed7sameer/backpack-store/badge.svg?branch=master)](https://coveralls.io/github/mohamed7sameer/backpack-store?branch=master)

[![Packagist](https://img.shields.io/packagist/v/mohamed7sameer/backpack-store.svg)](https://packagist.org/packages/mohamed7sameer/backpack-store)
[![Packagist](https://poser.pugx.org/mohamed7sameer/backpack-store/d/total.svg)](https://packagist.org/packages/mohamed7sameer/backpack-store)
[![Packagist](https://img.shields.io/packagist/l/mohamed7sameer/backpack-store.svg)](https://packagist.org/packages/mohamed7sameer/backpack-store)

This package provides a quick starter kit for implementing a store for Laravel Backpack. Provides a database, CRUD interface, API routes and more.

## Installation

Install via composer
```bash
composer require mohamed7sameer/backpack-store
```

Migrate
```bash
php artisan migrate
```

### Publish

Configuration File
```bash
php artisan vendor:publish --provider="Backpack\Store\ServiceProvider" --tag="config"
```

Views File
```bash
php artisan vendor:publish --provider="Backpack\Store\ServiceProvider" --tag="views"
```

Languages File
```bash
php artisan vendor:publish --provider="Backpack\Store\ServiceProvider" --tag="langs"
```

Migrations File
```bash
php artisan vendor:publish --provider="Backpack\Store\ServiceProvider" --tag="migrations"
```

Routes File
```bash
php artisan vendor:publish --provider="Backpack\Store\ServiceProvider" --tag="routes"
```

Traits File
```bash
php artisan vendor:publish --provider="Backpack\Store\ServiceProvider" --tag="traits"
```

## Usage

### Seeders
```bash
php artisan db:seed --class="Backpack\Store\database\seeders\StoreSeeder"
```

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [](https://github.com/mohamed7sameer/backpack-store)
- [All contributors](https://github.com/mohamed7sameer/backpack-store/graphs/contributors)
