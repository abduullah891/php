<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>

    <!-- Bootstrap CSS (lokal) -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('home') }}">MyWebsite</a>
                <button class="navbar-toggler" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{ url('home') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('profil') }}" class="nav-link">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('contact') }}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5">
        <h1>@yield("title")</h1>
        @yield("content")
    </main>

    <!-- Bootstrap JS (lokal) -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
