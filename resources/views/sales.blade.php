<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gaya untuk navbar */
        .navbar {
            background-color: #343a40 !important; /* Warna latar belakang navbar */
        }

        .navbar-brand {
            color: #fff !important; /* Warna teks untuk brand navbar */
        }

        .navbar-nav .nav-link {
            color: #fff !important; /* Warna teks untuk link navbar */
        }

        .dropdown-menu .dropdown-item {
            color: #000 !important; /* Warna teks untuk item dropdown */
            background-color: #fff; /* Warna latar belakang item dropdown */
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #007bff !important; /* Warna latar belakang item dropdown saat dihover */
            color: #fff !important; /* Warna teks untuk item dropdown saat dihover */
        }

        /* Gaya untuk konten */
        body {
            background-color: #222; /* Warna latar belakang halaman */
            color: #fff; /* Warna teks */
            text-align: center; /* Posisi teks di tengah */
        }

        .container {
            margin-top: 50px; /* Jarak atas konten dari navbar */
        }

        h1 {
            color: #007bff; /* Warna teks untuk heading */
        }

        p {
            color: #6c757d; /* Warna teks untuk paragraf */
        }

        /* Gaya untuk tabel transaksi */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
            color: black;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="http://localhost/pos/public/">POS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/pos/public/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://localhost/pos/public/category/food-beverage">Food & Beverage</a>
                        <a class="dropdown-item" href="http://localhost/pos/public/category/beauty-health">Beauty & Health</a>
                        <a class="dropdown-item" href="http://localhost/pos/public/category/home-care">Home Care</a>
                        <a class="dropdown-item" href="http://localhost/pos/public/category/baby-kid">Baby & Kid</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/pos/public/sales">Sales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/pos/public/user/22/name/Fanesa">User Profile</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="container mt-5">
    <h1>Sales</h1>
    <p>Welcome to your sales page. Here you can view your POS transactions.</p>
    
    <!-- Detail transaksi POS dalam bentuk tabel -->
    <table>
        <thead>
            <tr>
                <th>Transaction ID</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Product A</td>
                <td>2</td>
                <td>Rp.120000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Product B</td>
                <td>1</td>
                <td>Rp.25000</td>
            </tr>
            <!-- Tambahkan baris data sesuai dengan transaksi POS -->
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
