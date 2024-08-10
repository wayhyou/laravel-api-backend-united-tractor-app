<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Tractor API Documentation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1, h2, h3 {
            color: #333;
        }
        pre {
            background-color: #333;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
        code {
            background-color: #eee;
            color: #333;
            padding: 2px 4px;
            border-radius: 4px;
        }
        ul, ol {
            padding-left: 20px;
        }
        hr {
            margin: 20px 0;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1 id="united-tractor-api">United Tractor API</h1>
    <h2 id="overview">Overview</h2>
    <p>The United Tractor API provides endpoints to manage users, categories, and products for a fictional application. It supports authentication, user management, category management, and product management functionalities.</p>
    <h2 id="installation">Installation</h2>
    <ol>
        <li>
            <p><strong>Clone the repository:</strong></p>
            <pre><code class="lang-bash">git clone https://github.com/yourusername/yourproject.git</code></pre>
        </li>
        <li>
            <p><strong>Navigate to the project directory:</strong></p>
            <pre><code class="lang-bash">cd yourproject</code></pre>
        </li>
        <li>
            <p><strong>Install PHP dependencies:</strong></p>
            <pre><code class="lang-bash">composer install</code></pre>
        </li>
        <li>
            <p><strong>Set up the environment file:</strong> Copy the <code>.env.example</code> file to a new file named <code>.env</code>:</p>
            <pre><code class="lang-bash">cp .env.example .env</code></pre>
        </li>
        <li>
            <p><strong>Generate the application key:</strong></p>
            <pre><code class="lang-bash">php artisan key:generate</code></pre>
        </li>
        <li>
            <p><strong>Set up your database:</strong> Edit the <code>.env</code> file to configure your database connection details.</p>
        </li>
        <li>
            <p><strong>Run database migrations (if applicable):</strong></p>
            <pre><code class="lang-bash">php artisan migrate</code></pre>
        </li>
    </ol>
    <h2 id="running-the-program">Running the Program</h2>
    <p>To start the Laravel development server, use the following command:</p>
    <pre><code class="lang-bash">php artisan serve</code></pre>
    <p>By default, this will start the application at <code>http://localhost:8000</code>.</p>
    <p>Access the Swagger Documentation:</p>
    <p>Visit <code>http://127.0.0.1:8000/api/documentation</code> to view the API documentation.</p>
    <p>If you need to run tests or perform other tasks, you can use:</p>
    <pre><code class="lang-bash">php artisan test</code></pre>
    <hr>
    <h2 id="authentication">Authentication</h2>
    <p>To interact with the API, you need to authenticate. You can register, login, and logout to obtain and use a Bearer token.</p>
    <h3 id="base-url">Base URL</h3>
    <p>Base URL of API <code>http://127.0.0.1:8000/api/</code></p>
    <h2 id="authentication-endpoints">Authentication Endpoints</h2>
    <h3 id="register">Register</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/register</code></li>
        <li><strong>Method:</strong> <code>POST</code></li>
        <li><strong>Body:</strong>
            <pre><code class="lang-json">{
    "name": "Wahyu Eko Laksono",
    "email": "wahyu@gmail.com",
    "password": "12345678",
    "password_confirmation": "12345678"
}</code></pre>
        </li>
    </ul>
    <h3 id="login">Login</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/login</code></li>
        <li><strong>Method:</strong> <code>POST</code></li>
        <li><strong>Body:</strong>
            <pre><code class="lang-json">{
    "email": "wahyu@gmail.com",
    "password": "12345678"
}</code></pre>
        </li>
    </ul>
    <h3 id="logout">Logout</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/logout</code></li>
        <li><strong>Method:</strong> <code>POST</code></li>
        <li><strong>Headers:</strong>
            <pre><code class="lang-plaintext">Accept: application/json
Content-Type: application/json
Authorization: Bearer YOUR_ACCESS_TOKEN</code></pre>
        </li>
    </ul>
    <h2 id="users-endpoints">Users Endpoints</h2>
    <h3 id="get-user">Get User</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/user</code></li>
        <li><strong>Method:</strong> <code>GET</code></li>
        <li><strong>Headers:</strong>
            <pre><code class="lang-plaintext">Accept: application/json
Content-Type: application/json
Authorization: Bearer YOUR_ACCESS_TOKEN</code></pre>
        </li>
    </ul>
    <h3 id="delete-user">Delete User</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/users/:id</code></li>
        <li><strong>Method:</strong> <code>DELETE</code></li>
        <li><strong>Headers:</strong>
            <pre><code class="lang-plaintext">Authorization: Bearer YOUR_ACCESS_TOKEN</code></pre>
        </li>
    </ul>
    <h3 id="update-user">Update User</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/users/:id</code></li>
        <li><strong>Method:</strong> <code>PUT</code></li>
        <li><strong>Headers:</strong>
            <pre><code class="lang-plaintext">Authorization: Bearer YOUR_ACCESS_TOKEN</code></pre>
        </li>
        <li><strong>Body:</strong>
            <pre><code class="lang-json">{
    "name": "New Name",
    "password": "newpassword"
}</code></pre>
        </li>
    </ul>
    <h2 id="categories-endpoints">Categories Endpoints</h2>
    <h3 id="create-category">Create Category</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/categories</code></li>
        <li><strong>Method:</strong> <code>POST</code></li>
        <li><strong>Headers:</strong>
            <pre><code class="lang-plaintext">Authorization: Bearer YOUR_ACCESS_TOKEN
Content-Type: application/json</code></pre>
        </li>
        <li><strong>Body:</strong>
            <pre><code class="lang-json">{
    "name": "Category Name"
}</code></pre>
        </li>
    </ul>
    <h3 id="get-all-categories">Get All Categories</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/categories</code></li>
        <li><strong>Method:</strong> <code>GET</code></li>
        <li><strong>Headers:</strong>
            <pre><code class="lang-plaintext">Authorization: Bearer YOUR_ACCESS_TOKEN</code></pre>
        </li>
    </ul>
    <h3 id="get-category-by-id">Get Category by ID</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/categories/:id</code></li>
        <li><strong>Method:</strong> <code>GET</code></li>
        <li><strong>Headers:</strong>
            <pre><code class="lang-plaintext">Authorization: Bearer YOUR_ACCESS_TOKEN</code></pre>
        </li>
    </ul>
    <h3 id="update-category">Update Category</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/categories/:id</code></li>
        <li><strong>Method:</strong> <code>PUT</code></li>
        <li><strong>Headers:</strong>
            <pre><code class="lang-plaintext">Authorization: Bearer YOUR_ACCESS_TOKEN
Content-Type: application/json</code></pre>
        </li>
        <li><strong>Body:</strong>
            <pre><code class="lang-json">{
    "name": "Updated Category Name"
}</code></pre>
        </li>
    </ul>
    <h3 id="delete-category">Delete Category</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/categories/:id</code></li>
        <li><strong>Method:</strong> <code>DELETE</code></li>
        <li><strong>Headers:</strong>
            <pre><code class="lang-plaintext">Authorization: Bearer YOUR_ACCESS_TOKEN</code></pre>
        </li>
    </ul>
    <h2 id="products-endpoints">Products Endpoints</h2>
    <h3 id="create-product">Create Product</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/products</code></li>
        <li><strong>Method:</strong> <code>POST</code></li>
        <li><strong>Headers:</strong>
            <pre><code class="lang-plaintext">Authorization: Bearer YOUR_ACCESS_TOKEN
Content-Type: application/json</code></pre>
        </li>
        <li><strong>Body:</strong>
            <pre><code class="lang-json">{
    "name": "Product Name",
    "price": 100,
    "description": "Product Description",
    "category_id": 1
}</code></pre>
        </li>
    </ul>
    <h3 id="get-all-products">Get All Products</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/products</code></li>
        <li><strong>Method:</strong> <code>GET</code></li>
        <li><strong>Headers:</strong>
            <pre><code class="lang-plaintext">Authorization: Bearer YOUR_ACCESS_TOKEN</code></pre>
        </li>
    </ul>
    <h3 id="get-product-by-id">Get Product by ID</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/products/:id</code></li>
        <li><strong>Method:</strong> <code>GET</code></li>
        <li><strong>Headers:</strong>
            <pre><code class="lang-plaintext">Authorization: Bearer YOUR_ACCESS_TOKEN</code></pre>
        </li>
    </ul>
    <h3 id="update-product">Update Product</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/products/:id</code></li>
        <li><strong>Method:</strong> <code>PUT</code></li>
        <li><strong>Headers:</strong>
            <pre><code class="lang-plaintext">Authorization: Bearer YOUR_ACCESS_TOKEN
Content-Type: application/json</code></pre>
        </li>
        <li><strong>Body:</strong>
            <pre><code class="lang-json">{
    "name": "Updated Product Name",
    "price": 150,
    "description": "Updated Product Description",
    "category_id": 2
}</code></pre>
        </li>
    </ul>
    <h3 id="delete-product">Delete Product</h3>
    <ul>
        <li><strong>URL:</strong> <code>http://127.0.0.1:8000/api/products/:id</code></li>
        <li><strong>Method:</strong> <code>DELETE</code></li>
        <li><strong>Headers:</strong>
            <pre><code class="lang-plaintext">Authorization: Bearer YOUR_ACCESS_TOKEN</code></pre>
        </li>
    </ul>
</body>
</html>
