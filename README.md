# Laravel Products CRUD Workshop

A Laravel web application demonstrating a complete CRUD (Create, Read, Update, Delete) system for managing products. This workshop project showcases Laravel's core features including routing, controllers, models, views, and database migrations.

## Features

- **Product Management**: Full CRUD operations for products
- **Database Integration**: MySQL database with Eloquent ORM
- **Form Validation**: Server-side validation for product data
- **Responsive UI**: Built with TailwindCSS for modern styling
- **RESTful Routing**: Clean, resourceful URL structure

## Project Structure

```
├── app/
│   ├── Http/Controllers/
│   │   └── ProductController.php    # Handles all product operations
│   └── Models/
│       └── Product.php              # Eloquent model for products
├── database/
│   └── migrations/
│       └── 2025_11_14_110944_create_products_table.php
├── resources/views/
│   └── products/                    # Blade templates for product views
└── routes/
    └── web.php                      # Web routes definition
```

## Database Schema

The `products` table includes the following fields:

- `id` (Primary Key)
- `name` (string, required) - Product name
- `description` (text, nullable) - Product description
- `price` (decimal, required) - Product price (8,2 precision)
- `quantity` (integer, required) - Available quantity
- `timestamps` - Created and updated timestamps

## Installation & Setup

### Prerequisites

- PHP >= 8.2
- Composer
- Node.js & NPM
- Database (MySQL/PostgreSQL/SQLite)

### Steps

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd workshop_3
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database**
   - Edit `.env` file with your database credentials
   - Create database and run migrations:
   ```bash
   php artisan migrate
   ```

5. **Build assets**
   ```bash
   npm run build
   ```

6. **Start development server**
   ```bash
   php artisan serve
   ```

   Or use the convenient development script:
   ```bash
   composer run dev
   ```

## Available Routes

| Method | URI | Name | Action |
|--------|-----|------|--------|
| GET | `/products/index` | `index` | Display all products |
| GET | `/products/create` | `create` | Show create product form |
| POST | `/products/store` | `store` | Store new product |
| GET | `/products/show/{id}` | `show` | Display specific product |
| GET | `/products/edit/{id}` | `edit` | Show edit product form |
| PUT | `/products/update/{id}` | `update` | Update product |
| DELETE | `/products/delete/{id}` | `destroy` | Delete product |

## Usage Examples

### Creating a Product

Navigate to `/products/create` and fill in the form:
- **Name**: Required, max 255 characters
- **Description**: Optional text field
- **Price**: Required numeric value
- **Quantity**: Required integer

### Managing Products

- **View all products**: Visit `/products/index`
- **View product details**: Click on any product to see `/products/show/{id}`
- **Edit product**: Use the edit button to access `/products/edit/{id}`
- **Delete product**: Use the delete button (requires confirmation)

## Development Commands

### Available Composer Scripts

- `composer run setup` - Complete project setup (install, migrate, build)
- `composer run dev` - Start development server with hot reload
- `composer run test` - Run PHPUnit tests

### Useful Artisan Commands

```bash
# Database operations
php artisan migrate              # Run migrations
php artisan migrate:fresh        # Fresh migration with seeding
php artisan migrate:rollback     # Rollback last migration

# Development
php artisan serve               # Start development server
php artisan route:list         # List all routes
php artisan make:controller     # Create new controller
php artisan make:model         # Create new model
php artisan make:migration     # Create new migration
```

## Technologies Used

- **Backend**: Laravel 12.0
- **Frontend**: Blade Templates, TailwindCSS 4.0
- **Build Tool**: Vite 7.0
- **Database**: Eloquent ORM with migrations
- **Validation**: Laravel Form Request Validation
- **Testing**: PHPUnit 11.5

## Learning Objectives

This workshop demonstrates:
- Laravel MVC architecture
- RESTful routing and resource controllers
- Database migrations and Eloquent models
- Form validation and error handling
- Blade templating and view composition
- Asset compilation with Vite
- TailwindCSS integration

## Contributing

This is a workshop project for educational purposes. Feel free to experiment with the code and implement additional features like:
- Image uploads for products
- Product categories
- Search and filtering
- API endpoints
- Authentication and authorization

## License

This project is open-sourced software licensed under the MIT license.
