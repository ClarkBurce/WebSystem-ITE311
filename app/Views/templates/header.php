<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/dashboard">ITE311 LMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/dashboard">Dashboard</a>
                </li>

                <?php if ($role === 'admin'): ?>
                    <li class="nav-item"><a class="nav-link" href="#">Manage Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Reports</a></li>
                <?php elseif ($role === 'teacher'): ?>
                    <li class="nav-item"><a class="nav-link" href="#">Lessons</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Grades</a></li>
                <?php elseif ($role === 'student'): ?>
                    <li class="nav-item"><a class="nav-link" href="#">My Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">My Submissions</a></li>
                <?php endif; ?>
            </ul>
            <span class="navbar-text me-3"><?= esc($user['name']) ?> (<?= esc(ucfirst($role)) ?>)</span>
            <a href="/logout" class="btn btn-outline-light">Logout</a>
        </div>
    </div>
</nav>