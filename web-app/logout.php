<?php
session_start();
session_destroy();
header('location:unlogged_home.php');
?>