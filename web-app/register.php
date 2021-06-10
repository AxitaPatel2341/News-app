<html>
    <body>
        <style>
            body{
                background-image: url("map.jpg");
            }
        </style>
    </body>
</html>

<?php

session_start();

$connect = mysqli_connect('localhost', 'root', '');
if($connect){
    echo "<body bgcolor=palegreen><h3 align=center style='margin-top: 50px; margin-bottom: 100px;'>Woohoo!!.... connection established! ^.^ </h3> </body>";
}
else{
    echo "connection not established. :( ";
}
mysqli_select_db($connect, 'mymistakes');

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$q = " select * from signup where email = '$email' ";

$result = mysqli_query($connect, $q);
$number = mysqli_num_rows($result);
if($number == 1){
    echo "<h1 align=center> Sorry (-_-) !!! User already exists. </h1> <h2 align=center> Go to <a href='login.php'>Login</a> page and check yourself. ;)</h2> ";
}
else{
    $query = "insert into signup(email, username,password) values('$email', '$username', '$password') ";
    mysqli_query($connect, $query);
    header('location: login.php');
}
?>