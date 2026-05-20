# Product CRUD Laravel

Simple Product CRUD application built using **Laravel**, **Blade Template**, **Blade Components**, and **Bootstrap**.

---

# Features

* Product List
* Create Product
* Edit Product
* Show Product Detail
* Bootstrap UI
* Blade Components
* Route Grouping
* MySQL Database Integration
* Random Product Seeder Logic
* Back to List Navigation

---

# Technologies

* Laravel 13
* PHP 8.4
* MySQL
* Bootstrap 5
* Blade Template Engine

---

# Installation

## Clone Repository

```bash
git clone https://github.com/SahrilRyu08/Web-Development-laravel
```

## Move to Project

```bash
cd Web-Development-laravel
```

## Install Dependency

```bash
composer install
```

---

# Environment Setup

Copy `.env` file:

```bash
cp .env.example .env
```

# Database Configuration

Update `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_product
DB_USERNAME=root
DB_PASSWORD=root
```

---

# Run Migration

```bash
php artisan migrate
```

---

# Run Application

```bash
php artisan serve
```

Application URL:

```plaintext
http://127.0.0.1:8000/products
```

---

# Routes
| GET    | /products             | products        | Product List        |
| GET    | /products/create      | products.create | Create Product Page |
| GET    | /products/edit/{id}   | products.edit   | Edit Product        |
| POST   | /products/store       | products.store  | Store Product       |
| POST   | /products/update/{id} | products.update | Update Product      |
| GET    | /products/show/{id}   | products.show   | Product Detail      |
---

# Features Detail

## Product List

* Display 20 random products
* Bootstrap Card UI
* Blade Directives (`@foreach`)
* Product Detail Button
* Product Edit Button
* Add New Product Button

---

## Create Product

Form fields:

* Product Name
* Description
* Price

Submit form to:

```plaintext
/products/store
```

---

## Edit Product

* Update existing product
* Reuse same form component

---

## Product Detail

Display:

* Product Name
* Description
* Product Price

---

# Blade Components

## Layout Component

```plaintext
resources/views/components/layout.blade.php
```

Reusable layout wrapper using Bootstrap.

---

## Product Card Component

```plaintext
resources/views/components/product-card.blade.php
```

Reusable product card component.

---

# Controller

```plaintext
app/Http/Controllers/ProductController.php
```

Contains:

* index()
* create()
* edit()
* show()
* store()
* update()

---

# Model

```plaintext
app/Models/Product.php
```

Fillable fields:

```php
protected $fillable = [
    'name',
    'description',
    'price',
];
```

---

# Migration

```plaintext
database/migrations/create_products_table.php
```

Columns:

* id
* name
* description
* price
* timestamps

---

# UI Preview

Pages included:

* Product List
* Create Product
* Edit Product
* Product Detail

---

# Future Improvements

* Delete Product
* Product Search
* Pagination
* Validation Error UI
* Flash Success Message
* Authentication
* API Version
* Image Upload
* Responsive Dashboard

---

# Author

Sahril Saepuloh

GitHub:

[https://github.com/SahrilRyu08](https://github.com/SahrilRyu08)
