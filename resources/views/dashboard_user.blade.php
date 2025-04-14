<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1;
        }
        .carousel img {
            height: 450px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">AmbatuBook</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Books</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Account</a></li>
                    <form action="{{ route('logout') }}" method="post">
                         @csrf
                     <button type="submit" class="btn btn-warning">Log out</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <!-- Slider -->
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-wrap="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/4.jpg') }}" class="d-block w-100" alt="Buku 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/5.jpg') }}" class="d-block w-100" alt="Buku 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/6.jpg') }}" class="d-block w-100" alt="Buku 3">
                </div>
            </div>
        </div>

        <!-- Daftar Buku -->
        <div class="container my-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/4.jpg') }}" class="img-fluid" alt="Buku">
                </div>
                <div class="col-md-8">
                    <h2>Judul Buku</h2>
                    <p><strong>Kategori:</strong>Buatan</p>
                    <p><strong>Penulis:</strong> Nama Penulis</p>
                    <p><strong>Penerbit:</strong> Nama Penerbit</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget velit vitae nunc fermentum posuere.</p>
                </div>
            </div>
        </div>
    </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/5.jpg') }}" class="img-fluid" alt="Buku">
                </div>
                <div class="col-md-8">
                    <h2>Judul Buku</h2>
                    <p><strong>Kategori:</strong> Fiksi</p>
                    <p><strong>Penulis:</strong> Nama Penulis</p>
                    <p><strong>Penerbit:</strong> Nama Penerbit</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget velit vitae nunc fermentum posuere.</p>
                </div>
            </div>
        </div>
    </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/6.jpg') }}" class="img-fluid" alt="Buku">
                </div>
                <div class="col-md-8">
                    <h2>Judul Buku</h2>
                    <p><strong>Kategori:</strong> Fiksi</p>
                    <p><strong>Penulis:</strong> Nama Penulis</p>
                    <p><strong>Penerbit:</strong> Nama Penerbit</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget velit vitae nunc fermentum posuere.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p>&copy; 2025 AmbatuBook. Hak Cipta Dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const carousel = document.querySelector('#carouselExample');
        const carouselInstance = new bootstrap.Carousel(carousel, {
            interval: 4000,
            ride: 'carousel',
            wrap: true,
            pause: false
        });
    </script>
</body>
</html>
