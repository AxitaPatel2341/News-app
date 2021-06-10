<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title> Sign up </title>
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
                width: 200px;
                height: 50px;
                margin: 40px 40px 40px 40px;
                padding: 5px;
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
        <h1 style="font-size: 60px; color:pink; background-color:black; margin-top:40px;"> Sign up</h1>
        <form action="register.php" method="post">
            <table>  
                <tr>  
                    <td>        
                        <label> Email: </label>  
                    </td>
                    <td>
                        <input type="email" name="email" class="control" required>
                    </td>
                </tr>
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
                        <input type="password" name="password" class="control" required>
                    </td>
                </tr>
                <tr>    
                    <td colspan="2" align="center">
                        <button type="submit" class="control"> Signup </button>
                    </td>
                </tr>     
            </table>                  
        </form>
    </center>
    </body>
</html>