<?php
$fname=$_POST['fname'];
$cdate=$_POST['cdate'];
$cid=$_POST['cid'];
$address=$_POST['address'];
$wnumber=$_POST['wnumber'];
$cdetails=$_POST['cdetails'];
$cdesired=$_POST['cdesired'];

$conn=pg_connect("host=localhost port=5432 user=postgres dbname=tybcs password=''") or die("Cannot connect Server");
$query="insert into complaint values('$fname','$cdate','$cid','$address','$wnumber','$cdetails','$cdesired');";
$rs=pg_query($conn,$query) or die("Please Enter Valid info");
if($rs)
header("Location:http://localhost/registrationsuccess1.html");
else
echo"Please Enter Valid Info";
pg_close($conn);

