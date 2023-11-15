<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "photo_admin";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // You can add more validation or checks here

  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    // Successful login
    session_start();
    $_SESSION['username'] = $username;
    header("Location: albums.php");
    exit();
  } else {
    // Failed login
    echo "Login failed!";
  }
}

mysqli_close($conn);
?>
