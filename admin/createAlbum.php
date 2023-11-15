<?php
//   session_start();
//   if (!isset($_SESSION['username'])) {
//   header("Location: ./index.php");
//   exit();
//   }
include './functions.php';
?> 
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.discordapp.com/attachments/799393124740759592/1172824588640600144/style.css?ex=6561b903&is=654f4403&hm=ecb829a151c9001dd047bd586c34a3e0120de34578e5ff371b5ccfcd171ed294&">
    <link rel="stylesheet" href="home.css">
    <link rel="icon" type="image/x-icon" href="../../assets/favicons/enf.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | <?php getName(); ?></title>
    <style>

    </style>
</head>
<body>
    <div class="wrapper">
        <!--Top menu -->
        <?php getSidebar(); ?>
    <section class="container">
        <?php createAlbum();?>
    </section>
</body>
</html>