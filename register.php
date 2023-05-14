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
$mobile =$_POST['mobile'] ;
$email_id =$_POST['email_id' ];
$password =$_POST['password'];



$sql_query = "INSERT INTO registration_details(username,mobile,email_id,password)
VALUES('$username','$mobile ','$email_id','$password')";

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