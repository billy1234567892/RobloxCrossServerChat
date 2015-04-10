<html>
<head>
<?php
session_start();
$gameid = $_POST["gameid"];
$con = mysqli_connect("mysql.grendelhosting.com","u859381282_1","password","u859381282_1");
if(mysqli_connect_errno()){
echo("Failed to connect to database");
}
else{
$data = mysqli_query($con,"SELECT * FROM Games WHERE gameid='$gameid' ORDER BY messageid");
$empty=true;
while($row=mysqli_fetch_array($data)){
echo("<username>" . $row['username'] . "</username><message>" . $row['message'] . "</message><mid>" . $row['messageid'] . "</mid><br>");
$empty=false;
}
if($empty==true){
echo("Empty");
}
}
?>
</head>
<body></body>
</html>