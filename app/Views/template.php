<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory 1 - CodeIgniter & Bootstrap</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Responsive Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">WebSystem-ITE311</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="container mt-5 flex-grow-1">
        <div class="p-5 mb-4 bg-light rounded-3 border shadow-sm">
            <div class="container-fluid py-4 text-center">
                <h1 class="display-5 fw-bold text-primary">CodeIgniter Setup Complete!</h1>
                <p class="col-md-8 mx-auto fs-5 mt-3">
                    You have successfully integrated Bootstrap into your CodeIgniter framework for Laboratory 1. 
                </p>
                <hr class="my-4">
                <p class="text-muted">Take a screenshot of this page for your Output/Results section.</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p class="mb-0">&copy; 2026 Web Systems and Technologies - ITE311</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle CDN (Required for Navbar toggle) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>