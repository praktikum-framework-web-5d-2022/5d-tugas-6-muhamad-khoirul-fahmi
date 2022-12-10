<!DOCTYPE html>
<html>

<head>
    <title>Tugas 6 - One to Many</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>

<body>
    <style>
        .bdr{
            border-radius: 8px;
            overflow: hidden;
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
                <a class="navbar-brand" href="/">One to Many</a>
                <form class="d-flex">
                    <a class="btn btn-outline-dark me-2" href="/kategori">Kategori</a>
                    <a class="btn btn-outline-dark" href="/produk">Produk</a>
                </form>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>