<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | ITE311 LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?= $this->include('templates/header') ?>

    <div class="container mt-5">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
        <?php endif; ?>

        <h2>Dashboard</h2>
        <p class="lead mb-1">Welcome, <?= esc($user['name']) ?>!</p>
        <p>Role: <strong><?= esc(ucfirst($role)) ?></strong></p>

        <?php if ($role === 'admin'): ?>
            <div class="card mt-3 shadow-sm">
                <div class="card-header bg-danger text-white">Admin Dashboard</div>
                <div class="card-body">
                    <p>Manage users, courses, system settings, and reports.</p>
                    <a href="#" class="btn btn-danger">Manage Users</a>
                    <a href="#" class="btn btn-secondary">System Reports</a>
                </div>
            </div>
        <?php elseif ($role === 'teacher'): ?>
            <div class="card mt-3 shadow-sm">
                <div class="card-header bg-primary text-white">Teacher Dashboard</div>
                <div class="card-body">
                    <p>Create lessons, manage student submissions, and update grades.</p>
                    <a href="#" class="btn btn-primary">Manage Lessons</a>
                    <a href="#" class="btn btn-secondary">View Grades</a>
                </div>
            </div>
        <?php elseif ($role === 'student'): ?>
            <div class="card mt-3 shadow-sm">
                <div class="card-header bg-success text-white">Student Dashboard</div>
                <div class="card-body">
                    <p>View enrolled courses, submit activities, and check grades.</p>
                    <a href="#" class="btn btn-success">My Courses</a>
                    <a href="#" class="btn btn-secondary">My Grades</a>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-warning mt-3">No valid role assigned to this account.</div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>