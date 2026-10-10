<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | WebSystem-ITE311</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">WebSystem-ITE311</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="/dashboard">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
        <?php endif; ?>

        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h2 class="card-title mb-3">User Dashboard</h2>
                <p class="lead">Welcome, <?= esc(session()->get('name')) ?>!</p>
                <p><strong>Email:</strong> <?= esc(session()->get('email')) ?></p>
                <p><strong>Role:</strong> <?= esc(session()->get('role')) ?></p>
                <a href="/logout" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>