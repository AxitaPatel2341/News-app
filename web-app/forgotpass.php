<?php
include "connection.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title> Reset password </title>
        <style>
            .control{
                margin: 10px;
                padding: 5px;
            }
            label{
                font-size: 20px;
                font-weight: bold;
                font-family: cursive;
            }
            body{
                background-image: url("unnamed.jpg");
                background-repeat: no-repeat;
                background-size: 1400px 660px;
            }
            button{
                border: 1px;
                width: 250px;
                height: 50px;
                margin: 30px 30px 10px 30px;
                padding: 5px;
                border-radius: 20px;
                font-size: 20px;
                background-color: navy;
                color: white;
                cursor: pointer;
            }
            button:hover{
                background-color: navy;
                color: yellow;
                align: center;
                width: 270px;
                height: 55px;
                font-size: 23px;
                font-weight: bolder;
            }
        </style>
    </head>
    <body>
    <center>
        <audio id="rinkiya" autoplay>
            <source src="khopdi.m4a" type="audio/mpeg">
            <source src="khopdi.ogg" type="audio/mpeg">
        </audio> 
        <h1 style="font-size: 60px; color:pink; background-color:black; margin-top:30px;"> Reset password... </h1>
        <form method="post" class="form">
        <table>
            <tr> 
                <td> <label> Email: </label> </td>
                <td> <input type="email" name="email" class="control" required> </td>
            </tr>
            <tr> 
                <td> <label> New password: </label> </td>
                <td> <input type="password" name="password" class="control" required> </td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <button type="submit" name="submit" >Update Password </button></td>
            </tr>
        </table>
        </form>
    </center>
        <?php
            if(isset($_POST['submit']) != ''){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $qu = "select * from signup where email = '$email' ";
                $result = mysqli_query($connect,$qu);
                $number = mysqli_num_rows($result);
                if($number == 0){
                    echo "<h1 align='center' style='margin:20px; color:navy;' >Your email doesn't exists. :( </h1>";
                }
                else{
                    $query = "update signup SET password= '$password' where email = '$email' ";
                    ?>  
                    <script type="text/javascript">
                        alert("Password updated successfully.");
                    </script>
                    <?php
                    header('location:login.php');
                }
            }
        ?>
    </body>
</html>