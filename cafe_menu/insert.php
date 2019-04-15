<html>
  <head>
        <style>
            body{
                background-color:darksalmon;
            }
            
            #first{
                color: chocolate;
                font-style: italic;
                font-size: 80px;
                text-align: center;
            }
            #second{
                color:floralwhite;
                font-style: italic;
                font-size: 40px;
                text-align: center;
            }
        </style>
    </head>
<body>
<?php
$conn = new mysqli('localhost','root','');
if($conn->connect_error)
{
	die("connection failed:" .$conn->connect_error);
}
//echo"Db connected successfully";
mysqli_select_db($conn,"contact");
$sql = "INSERT INTO contacttable (firstname,lastname,country,subject) VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[country]','$_POST[subject]')";
if($conn->query($sql)===TRUE)
{
	//echo"new record created successfully";
	   echo "<p id='first'>Thank You for your visit!</p>";
       echo "<p id='second'>It was our greatest pleasure to serve you. Hoping to have your next visit real soon.</p>";
}
else
{
	echo "error:".$sql."<br>".$conn->error;
}
mysqli_close($conn);
?>
</body>
</html>