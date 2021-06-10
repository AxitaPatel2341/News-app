<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(isset($_SESSION['id']))
        include 'logged_home.php';
    else
        include 'unlogged_home.php'; 
?>
