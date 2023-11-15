<?php
  session_start();
  if (!isset($_SESSION['username'])) {
  header("Location: ./index.php");
  exit();
  }
include './functions.php';
?> 
<head>
    <?php customHeader(); ?>
    <style>
        .createAlbum{
            padding: 20px;
            background-color: #151c2b;
            text-decoration: none;
            color: #ffffff;
        }
        .button{
            padding: 35px;
            position: relative;
            float: right;
        }
        .createAlbum:hover{
            background-color: #565657;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!--Top menu -->
        <?php getSidebar(); ?>
    <section class="container">
        <div class="button">
            <a class="createAlbum" href="./createAlbum.php">New Album</a>
        </div>
        <h2 style="margin-left: 240px; font-size: 30px; padding: 20px">Hello 👋, <?php getName(); ?></h2>
        <?php album();?>
    </section>
</body>
</html>