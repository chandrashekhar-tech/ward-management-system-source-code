<?php
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$bday=$_POST['bday'];
$email=$_POST['email'];
$usr=$_POST['username'];
$pass=$_POST['password'];

$conn=pg_connect("host=localhost port=5432 user=postgres dbname=tybcs password=''") or die("Cannot connect Server");
$query="insert into reg values('$name','$mobile','$gender','$bday','$email','$usr','$pass');";
$rs=pg_query($conn,$query) or die("Please Enter Correct Email Id,Mobile Number and Username");
if($rs)
header("Location:http://localhost/registrationsuccess.html");
else
echo"Please Enter Correct email and username";
pg_close($conn);
?>

