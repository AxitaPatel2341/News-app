<?php

session_start();

$connect = mysqli_connect('localhost', 'root', '');
if($connect){
    echo " ";
}
else{
    echo "connection not established. :( ";
}
mysqli_select_db($connect, 'mymistakes');

?>