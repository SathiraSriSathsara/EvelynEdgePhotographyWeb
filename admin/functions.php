<?php
function getName(){
    $name = 'EvelynEdge';
    echo $name;
}

function getAdminHome(){
    include '../components/layout.php';
    include './includes/admin_home.php';
}

function getSidebar(){
    include './includes/side_bar.php';
}

function album(){
    include './includes/album.php';
}

function createAlbum(){
    include './includes/create_album.php';
}

function customHeader(){
    include './includes/header.php';
}

function files(){
    include './file_manager/files.php';
}

function homePage(){
    include './includes/index.php';
}
?>