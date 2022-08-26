<?php
	$email = $_POST["email"];
	$host = "sql310.unaux.com";
	$dbUsername = "unaux_29370846";
	$dbPassword = "Kishore1746@#";
	$dbname = "unaux_29370846_uid";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    $query = "SELECT UName,Course From details Where Email='$email'";
	$result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)) {
?>
<!DOCTYPE html>
<html lang="en" style="background-color: rgb(247, 244, 118);">
<head>
    <meta charset="UTF-8" />
    <title>Hall Ticket</title>
    <link rel = "icon" href ="https://amrita.edu/wp-content/uploads/2019/05/amrita-new-favicon.ico" type = "image/x-icon">
</head>
<body>
    <center>
        <table title="admit card">
            <tr><td><center><div id="C1"><b style="font-size: 30px;">Admit Card - 2021</b><br><br></div></center></td></tr>
            <br><br><br><br><br><br>
            <tr>
                <td>
                    <center><img src="https://epicpersia.com/wp-content/uploads/2018/08/visa-photo-sample.jpg" id="image" style="width: 1.5in; height: 1.5in;" ></center>
                </td>
            </tr>
            <tr>
                <td> <b>Name: </b><?php echo $row["UName"];?><br><br></td>
            </tr>                
               <!---<tr>
                   <td><b>DOB:</b> 01/01/2001 <br><br></td>
               </tr>--->
               
           <tr>
               <td><b>Course: </b><?php echo $row["Course"];?><br><br></td>
           </tr>
           
           <tr>
               <td><b>Exam Duration:</b> 5 minutes <br><br></td>
           </tr>
       </table>
       <br>
       <br>
        <form action="quiz.html" method="GET">
            <table>
                <tr>
                    <td>
                        <input type="checkbox" id="Ack" required onclick="myFunction()">
                    </td>
                    <td>
                        <label for="Ack">
                        I will give the test honestly, ethically and will follow all the instructions.<br>
                        I agree that in case of mischief or malpratice, I shall be immediately disbarred from the test.<br>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                        <br><button type="submit">Countinue with Quiz</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>   
    <style>
        table{
            background-color: white;
            padding: 15px;
            border-radius: 10px;
        }
        button{
            background-color: #979df0;
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
        #image{
            margin: 5px;
            border: 1px solid black ;
        }
    </style>
    <script> 
        function myFunction()
        {
            var checkBox = document.getElementById("Ack");
            var text = document.getElementById("text");
            if (checkBox.checked == true)
            {
                text.style.display = "block";
            }
            else{
                text.style.display = "none";
            }
        }
    </script>               
</body>
</html>
<?php
       }
       mysqli_free_result($result);
   } else{
       echo "No records matching your query were found.";
   }
   $conn->close();
?>