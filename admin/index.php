<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-header text-center">
                    User Login
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Hardcoded username and password
$correct_username = "user";
$correct_password = "password";

if (isset($_POST['login'])) {
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    if ($entered_username === $correct_username && $entered_password === $correct_password) {
        echo '<div class="alert alert-success text-center mt-3">Login successful!</div>';
        header("Location: create_album.php");
        exit();
    } else {
        echo '<div class="alert alert-danger text-center mt-3">Invalid username or password. Please try again.</div>';
    }
}
?>

</body>
</html>
