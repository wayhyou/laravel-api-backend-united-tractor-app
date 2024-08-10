<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# United Tractor API

## Overview

The United Tractor API provides endpoints to manage users, categories, and products for a fictional application. It supports authentication, user management, category management, and product management functionalities.

## Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/yourusername/yourproject.git
    ```

2. **Navigate to the project directory:**
    ```bash
    cd yourproject
    ```

3. **Install PHP dependencies:**
    ```bash
    composer install
    ```

4. **Set up the environment file:**
    Copy the `.env.example` file to a new file named `.env`:
    ```bash
    cp .env.example .env
    ```

5. **Generate the application key:**
    ```bash
    php artisan key:generate
    ```

6. **Set up your database:**
    Edit the `.env` file to configure your database connection details.

7. **Run database migrations (if applicable):**
    ```bash
    php artisan migrate
    ```

## Running the Program

To start the Laravel development server, use the following command:
```bash
php artisan serve
```

By default, this will start the application at `http://localhost:8000`.


Access the Swagger Documentation:


Visit `http://127.0.0.1:8000/api/documentation` to view the API documentation.


If you need to run tests or perform other tasks, you can use:
```bash
php artisan test
```

---

## Authentication

To interact with the API, you need to authenticate. You can register, login, and logout to obtain and use a Bearer token.

### Base URL

Base URL of API `http://127.0.0.1:8000/api/`

## Authentication Endpoints

### Register

- **URL:** `http://127.0.0.1:8000/api/register`
- **Method:** `POST`
- **Body:**
  ```json
  {
    "name": "Wahyu Eko Laksono",
    "email": "wahyu@gmail.com",
    "password": "12345678",
    "password_confirmation": "12345678"
  }
  ```

### Login

- **URL:** `http://127.0.0.1:8000/api/login`
- **Method:** `POST`
- **Body:**
  ```json
  {
    "email": "wahyu@gmail.com",
    "password": "12345678"
  }
  ```

### Logout

- **URL:** `http://127.0.0.1:8000/api/logout`
- **Method:** `POST`
- **Headers:**
  ```plaintext
  Accept: application/json
  Content-Type: application/json
  Authorization: Bearer YOUR_ACCESS_TOKEN
  ```

## Users Endpoints

### Get User

- **URL:** `http://127.0.0.1:8000/api/user`
- **Method:** `GET`
- **Headers:**
  ```plaintext
  Accept: application/json
  Content-Type: application/json
  Authorization: Bearer YOUR_ACCESS_TOKEN
  ```

### Delete User

- **URL:** `http://127.0.0.1:8000/api/users/:id`
- **Method:** `DELETE`
- **Headers:**
  ```plaintext
  Authorization: Bearer YOUR_ACCESS_TOKEN
  ```

### Update User

- **URL:** `http://127.0.0.1:8000/api/users/:id`
- **Method:** `PUT`
- **Headers:**
  ```plaintext
  Authorization: Bearer YOUR_ACCESS_TOKEN
  ```
- **Body:**
  ```json
  {
    "name": "New Name",
    "password": "newpassword"
  }
  ```

## Categories Endpoints

### Create Category

- **URL:** `http://127.0.0.1:8000/api/categories`
- **Method:** `POST`
- **Headers:**
  ```plaintext
  Authorization: Bearer YOUR_ACCESS_TOKEN
  Content-Type: application/json
  ```
- **Body:**
  ```json
  {
    "name": "Category Name"
  }
  ```

### Get All Categories

- **URL:** `http://127.0.0.1:8000/api/categories`
- **Method:** `GET`
- **Headers:**
  ```plaintext
  Authorization: Bearer YOUR_ACCESS_TOKEN
  ```

### Get Category By ID

- **URL:** `http://127.0.0.1:8000/api/categories/:id`
- **Method:** `GET`
- **Headers:**
  ```plaintext
  Authorization: Bearer YOUR_ACCESS_TOKEN
  ```

### Update Category

- **URL:** `http://127.0.0.1:8000/api/categories/:id`
- **Method:** `PUT`
- **Headers:**
  ```plaintext
  Authorization: Bearer YOUR_ACCESS_TOKEN
  Content-Type: application/json
  ```
- **Body:**
  ```json
  {
    "name": "New Category Name"
  }
  ```

### Delete Category

- **URL:** `http://127.0.0.1:8000/api/categories/:id`
- **Method:** `DELETE`
- **Headers:**
  ```plaintext
  Authorization: Bearer YOUR_ACCESS_TOKEN
  ```

## Products Endpoints

### Create Product

- **URL:** `http://127.0.0.1:8000/api/products`
- **Method:** `POST`
- **Headers:**
  ```plaintext
  Authorization: Bearer YOUR_ACCESS_TOKEN
  Content-Type: application/json
  ```
- **Body:**
  ```json
  {
    "product_category_id": 1,
    "name": "Product Name",
    "price": 299.99,
    "image": "product_image.jpg"
  }
  ```

### Get Product By ID

- **URL:** `http://127.0.0.1:8000/api/products/:id`
- **Method:** `GET`
- **Headers:**
  ```plaintext
  Authorization: Bearer YOUR_ACCESS_TOKEN
  ```

### Get All Products

- **URL:** `http://127.0.0.1:8000/api/products`
- **Method:** `GET`
- **Headers:**
  ```plaintext
  Authorization: Bearer YOUR_ACCESS_TOKEN
  ```

### Update Product

- **URL:** `http://127.0.0.1:8000/api/products/:id`
- **Method:** `PUT`
- **Headers:**
  ```plaintext
  Authorization: Bearer YOUR_ACCESS_TOKEN
  Content-Type: application/json
  ```
- **Body:**
  ```json
  {
    "product_category_id": 2,
    "name": "New Product Name",
    "price": 290.99,
    "image": "new_product_image.jpg"
  }
  ```

### Delete Product

- **URL:** `http://127.0.0.1:8000/api/products/:id`
- **Method:** `DELETE`
- **Headers:**
  ```plaintext
  Authorization: Bearer YOUR_ACCESS_TOKEN
  ```

## Notes

- Ensure you replace `YOUR_ACCESS_TOKEN` with the actual token obtained from logging in.
- Replace `:id` with the actual ID of the resource you want to access or modify.

---

## API Documentation

For further details, please refer to the Postman documentation files located in the `postman_documentation` directory within this project.

## Contributing

If you would like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit them (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a pull request.

## License

This project is licensed under the Creative Commons Zero (CC0) License.

---