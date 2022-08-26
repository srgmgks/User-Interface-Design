<?php
	session_start();
	if(!$_SESSION['auth']){
		#echo "Unauthorised user";
		header('location: index.html');
	}

?>

<html>
<html>
<head>
	<title>Amrita</title>
	<link rel = "icon" href ="https://amrita.edu/wp-content/uploads/2019/05/amrita-new-favicon.ico" type = "image/x-icon">
</head>
<body>
    <div class = "header">
        <br>
        <center><img src="1.png" height="168" width="613"></img>
            <h3> <span> AVP CHENNAI CAMPUS <br> STUDENT HOME PAGE </span> </h3>
    </div>
    <div class = "nav_menu">
        <a href = "#">Home</a>
        <a href = "ht.html" target="_blank">Click Here To Attend Quiz</a>
        <a href = "logout.php">LogOut</a>
    </div>
    <br>
    <center style = "background-color:yellow;border-radius: 10px; font-size:200%;">AVP CHENNAI CAMPUS PROVIDES SEATS ON JEE MAINS AND CAMPUS EXAM <br> PREPARE WELL TO GRAB A SEAT AT AMRITA FOR UPCOMING BATCHES </center>
    
    <marquee><b> <font size="3" color="black">COURSES WE OFFER ARE BTECH,BCOM,MEDICINE,MBA,PHD,MS AND SO MANY CERTIFICATION PROGRAMS.</font></b> </marquee>
    <center> <img src="avpchennai.jpg" width="1400" height="500" style="border-radius: 10px;"></center>
    <br>
    <center>
    <div class="column">
        The 40 acre campus is well planned with infrastructure like academic buildings, adminstration wing, central library, hostels, guest house, staff-quarters, shopping complex, swimming pool and play grounds.
        <p>The campus has built-up area of over 28 lakhs sq. feet linked by 7 km black topped roads. Four hostels accomodated 5000 students.</p> 
        A swimming pool meeting Olympic standards is utlized by students, staff and others in the campus.
        <p> Two power houses are installed with total generating capacity of 1660KVA to meet the shortage in power supply. Amrita also provides uninterrupted power and water supply round the clock.</p>
    </div>
    <br>
    <div class="cd">
        <p>AVP,CHENNAI</p>
        <p>Phone: 90567892341</p>
        <p>Email: avpchennai@gmail.com</p>
        <p></i> Facebook: avpchennai@fb.com</p>
    </div>
    <br>
    <form action="signup.php" method="POST">
        <table>
            <td>
                <center><div id="C1"><b style="font-size: 20px;">Have any queries, Send me a message:</b><br><br></div></center>
            </td>
            <tr>
                <td>
                    <label for="uname"><b>Name</b></label>
                    <br>
                    <input type="text" placeholder="Enter Full Name" name="uname" id="uname" required pattern="[A-Za-z0-9]+{3,}">
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email"><b>Email</b></label>
                    <br>
                    <input type="email" placeholder="Enter Email" name="email" id="email" required>
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="subject"><b>Subject</b></label>
                    <br>
                    <input type="text" placeholder="Enter Subject" name="subject" id="Subject" required>
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="message"><b>Course</b></label>
                    <br>
                    <input type="text" placeholder="Enter Your Message" name="message" id="message" required>
                    <br>
                </td>
            </tr>
        </table>
        <br>
        <button type="submit" name="submit" value="submit">Send Message</button>
        <br><br>
    </form>
    </center>
    <style>
        .header {
            text-align: center;
            background: Skyblue;
            animation : example 1.5s;
            border-radius: 10px;
            animation-iteration-count: infinite;
        }
        @keyframes example
        {
            0%  {background-color: tomato;}
            25%  {background-color: blue;}
            50%  {background-color: orange;}
            100% {background-color: gray;}
        }
        .nav_menu {
            overflow: hidden;
            border-radius: 10px;
            background-color:purple;
        }
        .nav_menu a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            border-radius: 10px;
        }
        .nav_menu a:hover {
            background-color: yellow;
            border-radius: 10px;
            color: black;
        }
        * {
            box-sizing: border-box;
        }
        
        @media screen and (max-width:300px){
        .column {
            float: left;
            width: 50%;
            padding: 10px;
            border-radius: 10px;
            height: 300px; 
            }
        }
        @media screen and (max-width:400px){
            .column {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            height: 300px; 
        }
        }        
        h3 span {
            display: block;
            margin: 11px 0 17px 0;
            font-size: 40px;
            line-height: 80px;
            color: #f1ebe5;
            text-shadow: 0 13.36px 8.896px #c4b59d,0 -2px 1px #fff;
            border-radius: 10px;
            letter-spacing: -1px;
        }
        .banking {
            width: 33.3%;
            float: left;
            padding: 3px;
            border-radius: 10px;
            border: 10px solid black;
        }
        .footer {
            position: relative;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color:#36454F;
            color: white;
            border-radius: 10px;
            text-align: center;
        }
        html { 
            background: url(https://www.w3schools.com/howto/img_girl.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        input[type=text], input[type=password], input[type=tel], input[type=date],input[type=email],option,select {
			width: auto;
			padding: 15px;
			margin: 15px;
			display: inline-block;
			border: none;
			background: #f1f1f1;
			border-radius: 10px;
		}
		input[type=text]:focus, input[type=password]:focus, input[type=tel]:focus, input[type=date]:focus, input[type=email]:focus {
			background-color: #ddd;
			outline: none;
		}
		button[name='login']{
			background-color: rgb(52, 52, 211);
		}
		button{
			background-color: #df38d1;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			border-radius: 15px;
			text-align: center;
		}
        table{
			background-color: rgb(110, 218, 137);
			opacity: 0.90;
			border-radius: 10px;
			padding: 15px;
		}
        .column{
            background-color:lightblue;
            border-radius: 10px; 
            padding: 5px; 
            width: fit-content;
            font-size: 20px;
        }
        .cd{
            background-color: rgb(241, 137, 88);
            width: fit-content;
            padding: 5px; 
            border-radius: 10px;
            font-weight: bolder;
            font-size: 20px;
        }
        </style>
</body>
</html>