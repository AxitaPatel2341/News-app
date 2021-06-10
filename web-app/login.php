<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title> Login </title>
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
                background-size: 1400px 680px;
            }
            button{
                border: 1px;
                width: 200px;
                height: 50px;
                margin: 5px 40px 10px 40px;
                padding: 0;
                border-radius: 20px;
                font-size: 30px;
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
                font-size: 33px;
                font-weight: bolder;
            }
        </style>
    </head>
    <body>
    <center>
        <h1 style="font-size: 60px; color:pink; background-color:black; margin-top:40px;"> Login</h1>
        <h3> Didn't Sign up??? (^_^) .... <br> <a href="signup.php">Click me.. *.^</a></h3>
        <form action="validate.php" method="post">
            <table>
                <tr>
                    <td>
                        <label> Username: </label> 
                    </td>
                    <td> 
                        <input type="text" name="username" class="control" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Password: </label> 
                    </td>
                    <td>
                        <input type="password" name="password" class="control" required><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" class="control"> Log in </button>
                        <!-- <button onclick="document.getElementById('sound').play();" style="margin-left: -150px; opacity: 0.01; width:20px; height:5px;"> play </button> -->
                    </td>
                </tr>
            </table>
            <div style="magin-left: 0px;"> <a href="forgotpass.php"> forgot password??? </a></div>
        </form>
    </center>
    </body>
</html>



