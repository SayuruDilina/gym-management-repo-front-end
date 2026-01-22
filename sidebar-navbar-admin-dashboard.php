<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style-navbar-sidebar.css">
</head>

<body>
    <div class="sidebar d-flex flex-column flex-shrink-0">
        <aside class="brand-section">
            <a href="#">
                <img src="fitness-flow-logo.svg" alt="brand-logo" class="brand-logo">
            </a>
        </aside>

        <ul class="nav nav-pills flex-column mb-auto px-3">
            <li class="nav-item mb-2">
                <a href="#" class="nav-link active"><i class="bi bi-grid-fill me-3"></i> Dashboard</a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link"><i class="bi bi-people-fill me-3"></i> Members</a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link"><i class="bi bi-people-fill me-3"></i> Trainers</a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link"><i class="bi bi-journal-text me-3"></i>Workout Plans</a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link"><i class="bi bi-calendar-check-fill me-3"></i> Attendance</a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link"><i class="bi bi-file-earmark-bar-graph-fill me-3"></i> Reports</a>
            </li>
        </ul>
    </div>

    <div class="content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark px-4 py-3">
            <div class="container-fluid">
                <h5 class="mb-0 nav-title">Admin Dashboard</h5>
                                <div class="ms-auto d-flex align-items-center gap-3 flex-wrap justify-content-center">
                    
                <div class="vr text-white-50 mx-2 d-none d-md-block"></div>
                <div class="d-flex align-items-center ms-2">
                    <span class="admin-name me-2 d-none d-sm-inline">Admin</span>
                    <img src="profile.png" class="rounded-circle border border-2 border-info" width="30">
                </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-bell-fill" viewBox="0 0 16 16" title="Notifications">
                        <path
                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                    </svg>

                    <a href="#" class="btn btn-outline-danger btn-sm d-flex align-items-center" title="Logout">Logout
                    </a>
                    
                </div>
            </div>
        </nav>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>