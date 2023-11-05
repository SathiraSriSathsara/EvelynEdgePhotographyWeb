<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>EvelynEdge photography Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">EvelynEdge photography Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Albums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Images</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <!-- Sidebar -->
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
                    <a href="#" class="list-group-item list-group-item-action">Albums</a>
                    <a href="#" class="list-group-item list-group-item-action">Images</a>
                    <a href="#" class="list-group-item list-group-item-action">Settings</a>
                </div>
            </div>
            <div class="col-md-9">
                <!-- Main Content -->
                <h1>Dashboard</h1>
                <p>Welcome to the Photographer Admin Dashboard. You can manage your albums, images, and settings from here.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; 2023 Photographer Website
    </footer>

    <!-- Bootstrap Scripts (jQuery and Popper.js are required) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
