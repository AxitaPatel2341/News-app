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
    echo "<h3 align=center style='margin-top: 50px; margin-bottom: 100px;'>Woohoo!!.... connection established! ^.^ </h3>";
}
else{
    echo "connection not established. :( ";
}
mysqli_select_db($connect, 'mymistakes');

$username = $_POST['username'];
$password = $_POST['password'];

$q = " select * from signup where username = '$username' && password = '$password' ";

$result = mysqli_query($connect, $q);
$number = mysqli_num_rows($result);
if($number == 1){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    session_id();
    header('location: logged_home.php');
}
else{
    echo "<h1 align=center> Sorry (-_-) !!! User does not exists. <br> Or incorrect username or password.... So, </h1>";
    echo "<h2 align=center> Go to <a href='login.php'>login</a> page and enter valid cradentials or...... <br><br>Go to <a href='signup.php'>Signup</a> page and register yourself. ;)</h2></body>";
}
?>