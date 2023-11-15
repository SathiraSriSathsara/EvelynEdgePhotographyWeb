<?php
  session_start();
  if (!isset($_SESSION['username'])) {
  header("Location: ./index.php");
  exit();
  }
include './functions.php';
?> 
<head>
    <?php 
    customHeader(); 
    ?>
    <style>
    </style>
</head>
<body>
    <div class="wrapper">
        <!--Top menu -->
        <?php getSidebar(); ?>
    <section class="container">
        <div class="files">
            <?php files(); ?>
        </div>
    </section>
</body>
</html>