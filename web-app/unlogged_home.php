<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title> Alpha NEWS </title>
        <style>
            body{
                background-color: palegreen;
                background-image: url("map.jpg");
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
            .policy{
                margin-top: 120px;
                text-align: center; 
                color: black;
                font-size: 20px;
            }
        </style>
    </head>
    <body> <center> 
        <header>
        <h1 align="center" style="background-color:black; color:pink; font-size:50px;"> WELCOME TO ALPHA NEWS </a> </h1> <br> <br> <br>
        </header>
       <!-- <h2 style="color: gray;"> Wanna see our homepage???? .... <br> <br> Huh... LOGIN first ;) </h2> -->
        <dialog id="dialogue">  
            <h2> Wanna see our Actual homepage??? <br> <br> Huh..... LOGIN FIRST ;) </h2>
            <button id="close"> Okay :) </button>
        </dialog>
            <button id="home"> Home </button>
        <script type="text/JavaScript">
            (function() {  
                var dialogue = document.getElementById('dialogue');  
                document.getElementById('home').onclick = function() {  
                    dialogue.show();  
                };  
                document.getElementById('close').onclick = function() {  
                    dialogue.close();  
                };  
            })(); 
        </script>
            <a href="login.php"> <button> Login </button> </a>
            <a href="contact.html"> <button> Contact us </button> </a> <br> <br> <br>
            <div class = "policy">
		    <p>
			    * By logging in, you agree to our <a href="terms.html">Terms of Use</a> and to <br>&nbsp &nbsp receive our emails & updates and acknowledge that<br> you read our <a href="terms.html">Privacy Policy.</a>
		    </p>
	        </div>
            <footer style="margin-top: 10px; color: white; background-color: black;"> <b> <i> &copy Made by AXITA PATEL </b> </i></footer></center>
    </body>
</html>