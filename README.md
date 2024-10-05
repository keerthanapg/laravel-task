# Timesheet Management API

This is a Laravel-based API for managing users, projects, and timesheets. It includes user authentication, relationships between models, and CRUD operations for each entity.

## Prerequisites

- PHP 7.4 or higher
- Composer
- MySQL or any database of your choice
- Postman (for API testing)
- Laravel installed (can be done via Composer)

## Installation

1. **Clone the repository**:

    ```bash
    git clone https://github.com/keerthanapg/laravel-task.git
    ```

2. **Install dependencies**:

    ```bash
    composer install
    ```

3. **Set up environment variables**:

    Copy `.env.example` to `.env`:

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database credentials:

    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name // root
    DB_USERNAME=your_database_user // root
    DB_PASSWORD=your_database_password
    ```

4. **Generate the application key**:

    ```bash
    php artisan key:generate
    ```

5. **Run the migrations**:

    ```bash
    php artisan migrate
    ```

6. **Run the Laravel server**:

    ```bash
    php artisan serve
    ```

    The API will now be available at `http://localhost:8000`.

Please check read.md for further documentation
