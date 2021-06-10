<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title> Alpha NEWs </title>
        <style>
            body{
                background-image: url('black.jpg');
                background-size: 1400px 660px;
                color: white;
            }
            hr{ color: white; }
            .box{
                width: 100%;
                float: right;
                border: 1px dotted rgba(0,0,0,0.9);
            }
            .box ul li{
                float: right;
                text-align: center;
            }
            .box ul li a{
                color: white;
            }
            .box ul li a:hover{ color: black;}
            button{
                border: 1px solid white;
                width: 100px;
                height: 30px;
                margin: 5px 40px 10px 40px;
                padding: 0;
                border-radius: 20px;
                font-size: 10px;
                background-color: navy;
                color: white;
                cursor: pointer;
            }
            button:hover{
                background-color: navy;
                color: yellow;
                align: center;
                width: 120px;
                height: 33px;
                font-size: 14px;
                font-weight: bolder;
            }
            table{
                margin: 10px auto;
                padding: 5px;
                width: 50%;
                margin-bottom: 50px;
            }
            table tr td{
                margin: 10px 10px;
                padding: 15px;
            }
            table tr td #feedback{
                width: 390px;
                height: 120px;
            }
            table tr td #email{
                width: 390px;
                height: 20px;
            }
            .policy{
                margin-top: 120px;
                text-align: center;
                background-color: white; 
                color: black;
                font-size: 20px;
            }
            #about p, #contact p{
                margin: auto 90px;
                font-size: 20px;
                color: palegreen;
            }
            .media{
                width: 100%;
                float: center;
                background-color: white;
                color: black;
            }
            .media img{
                width: 80px;
                height: 80px;
                margin: 10px 70px;
                padding: 10px;
            }
            #contact a{
                color: pink;
            }
        </style>
    </head>
    <body>
        <h1 align="center" style="font-size: 60px; color:pink; margin-top:30px; margin-bottom: 20px;"> WELCOME <?php echo $_SESSION['username']; ?> </h1>
        <hr/>
        <div class="box">
            <ul type="none">
                <li> <a href="logout.php">  <button> LOGOUT </button> </a> </li>
                <li> <a href="#feedback">  <button> FEEDBACK </button> </a> </li>
                <li> <a href="#contact"> <button>CONTACT US </button> </a> </li>
                <li> <a href="#about"> <button> ABOUT US </button> </a> </li>
                <li> <a href=""> <button> HOME </button> </a> </li>
                <!-- <button style="margin-top:4px; margin-left: -90px;">play</button>  -->
            </ul> 
        </div>

        <div>
            <h1 align="center" style="color:pink; font-size: 34px;"> Latest cybersecurity news </h1>
            <?php
                $connect = mysqli_connect('localhost', 'root', '');
                if($connect){
                    echo " ";
                }
                else{
                    echo "connection not established. :( ";
                }
                mysqli_select_db($connect, 'mymistakes');

                $qu = "select * from news LIMIT 5"; 
                $result = mysqli_query($connect,$qu);
                if(mysqli_num_rows($result)> 0){
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<h2 style='margin-top: 50px; margin-left: 130px;; color:pink;'> News article: " . $row["id"]. " </h2>";
                        echo "<h1 style='color:yellow; margin: auto 90px;'>" . $row["heading"]. "</h1>";
                        echo "<p style='margin-left:130px; color:palegreen;'> <i> Date: " . $row["date"]. "</i> </p>";
                        echo " <p style='font-size: 20px; margin: auto 90px;'><i> article: </i> <br> " . $row["article"]. "</p> <br> <br>";
                     }
                }
                else{
                    echo "<h1 align='center'> No latest news. </h1>";
                }
            ?>
        </div>

        <div id="about">
            <h1 align="center" style="color:pink; margin-bottom: 10px;"> About 'Alpha News' Media </h1>
            <p> Since almost every organization in the present world is connected to the Internet in some or the other way, steps must be taken to ensure their networks remain safe and secure, and that's exactly what our mission is about. </p> <br>
            <p> Alpha News (AN) is a leading, trusted, widely-acknowledged dedicated cybersecurity news platform, attracting over 8 million monthly readers including IT professionals, researchers, hackers, technologists, and enthusiasts. </p> <br>
            <p> Alpha News features latest cyber security news and in-depth coverage of current as well as future trends in Infosec and how they are shaping the cyber world. </p> <br>
            <h2 style="color:pink; margin-left: 90px;"> Our Journey </h2>
            <p>    In 2010, we started THN as dedicated cybersecurity and hacking news platform to educate people on how to use the Internet in the safest way. </p> <br>
            <p>    In following years, the website has turned into one of the most significant information security channels and working as a bridge between a large number of communities including leading security researchers, geeks, techies, business grads, CISOs, along with thousands of security professionals. </p> <br>
            <p>    We are continuously working in the direction to better the platform and would love to hear your valuable thoughts and feedback to make it more resourceful. </p> <br>
            <p>    Alpha News also organizes face-to-face meetups, conferences, and events that attract world's best IT professionals and hackers. </p><br>
            <p>    Alpha conference (AC) is one such gathering of ignited minds in the field of Internet security, which is organized every year in Delhi–the heart of India. </p> <br> 
            <p style="margin-bottom: 50px;">    Alpha Conference is a unique event, where the best of minds in the hacking, IT industry, and the cyber community meet face-to-face to join their efforts to cooperate in addressing the most topical problems of the internet security space. </p> <br>
        </div>

        <div id="contact">
            <h1 align="center" style="color:pink; margin-bottom: 10px;"> Submit a Tip - Contact Us </h1><br>
            <p> Got a news tip or more information about a topic we covered? </p> <br> <br> 
            <p> Awesome! Reach out us and get featured—send your exclusive story idea, research, hacks, or ask us a question or leave a comment/feedback! </p> <br> <br>
            <p> Email: <a href="mailto:axipatel2341@gmail.com"> axipatel2341@gmail.com </a></p> <br> <br>
            <p> You can also contact our team on <a href="#feedback">instagram </a> or <a href="#feedback">twitter </a> </p> <br> <br>
            <ul> <li> <p> Official account - @axita_patel_2341 (Instagram) </p></li> <li> <p> Official account - @axitapatel13 (Twitter) </p></li><ul> <br> <br>
            <p style="margin-bottom: 230px;"> You can contact our authors directly via email </p>  
        </div>

        <div id="feedback">  <center> 
            <h1 align="center" style="color:pink; margin-bottom: 0;"> Feedback </h1>
            <form action="mailto:axitapatel2341@yahoo.com">
                <table border='1'>
                    <tr>
                    <td> <label>Your email: </label> </td>
                    <td> <input type="email" name="email" id="email" placeholder="Enter your email here" required> </td>
                    </tr>
                    <tr>
                    <td> <label>Your Response/Feedback</label> </td> 
                    <td> <textarea name="Feedback" id="feedback" placeholder="Enter feedback here.." required></textarea> </td>
                    </tr>
                    <tr>
                    <td colspan="2" align="center"> 
                        <button type="submit" name ="submit" value="Submit" style="background-color:yellow; color:navy; font-size: 14px; "> Submit </button>
                    </td>
                    </tr>
                </table>
            </form>  </center>
            <div class = "media">
		        <h1 align="center"> Follow Us On Social Media </h1>
                <div class='o-follow cf'>
                <a href='https://www.facebook.com/' rel='noopener' target='_blank'> <img src="facebook.png" alt="facebook"> </a>
                <a href='https://twitter.com/axitapatel13' rel='noopener' target='_blank'> <img src="twitter.jfif" alt="twitter"> </a>
                <a href='https://www.linkedin.com/' rel='noopener' target='_blank'> <img src="linkedin.webp" alt="linkedin"> </a>
                <a href='https://www.youtube.com/' rel='noopener' target='_blank'> <img src="youtube.png" alt="Youtube"> </a>
                <a href='https://www.instagram.com/axita_patel_2341/' rel='noopener' target='_blank'> <img src="insta.jfif" alt="Instagram"> </a>
                </div>
	        </div> 
            <footer style="margin-top: 10px; color: white; background-color: black; text-align:center;"> <b> <i> &copy Made by AXITA PATEL </b> </i></footer></center>
        </div>
    </body>
</html>
