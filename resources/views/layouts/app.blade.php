<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Bài Viết</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        header {
            background-color: #505c5a;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            margin: 10px 0;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #555;
            margin: 0 5px;
            border-radius: 5px;
        }
        nav a:hover {
            background-color: #777;
        }
        .card {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(215, 181, 181, 0.1);
        }
        .card-header {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .btn {
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin: 5px;
        }
        .btn-primary {
            background-color: #e74c3c; /* Đỏ */
        }
        .btn-primary:hover {
            background-color: #c0392b;
        }
        .btn-secondary {
            background-color: #f39c12; /* Cam */
        }
        .btn-secondary:hover {
            background-color: #e67e22;
        }
        .btn-success {
            background-color: #f1c40f; /* Vàng */
        }
        .btn-success:hover {
            background-color: #f39c12;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group textarea {
            height: 150px;
        }
        .alert {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            color: #fff;
        }
        .alert-success {
            background-color: #28a745;
        }
        .alert-danger {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <header>
        <h1>Quản lý Bài Viết</h1>
    </header>
    <nav>
        <a href="{{ route('articles.index') }}">Danh Sách Bài Viết</a>
        <a href="{{ route('articles.create') }}">Tạo Bài Viết Mới</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
