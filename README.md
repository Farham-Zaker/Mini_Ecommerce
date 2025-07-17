# Laravel Payment API with Zarinpal Integration

This is a Laravel-based skeleton project that includes support for payment processing using the **Zarinpal** gateway.

## Requirements

- PHP ^8.2
- Composer
- Node.js & npm (for Vite asset compilation)
- MySQL
- Laravel 12.x

## Installation

```bash
git clone https://github.com/Farham-Zaker/Mini_Ecommerce.git
cd Mini_Ecommerce
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
