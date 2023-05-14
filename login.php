<?php
$server_name= "localhost";
$username="root";
$password="";
$database_name="contact_us";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection 
if (!$conn) {
    die("Connection Failed:".mysqli_connect_error());
      }

if(isset($_POST['save']))
{
$username = $_POST['username'] ;
$psw =$_POST['psw'] ;



$sql_query = "INSERT INTO login_details(username,psw)
VALUES('$username','$psw')";

if (mysqli_query ($conn,$sql_query))
{
echo "New  Entry inserted successfully !";
}
else
{
   echo "Error:".$sql. "".mysqli_error($conn);
}
 mysqli_close ($conn);
}
?>