<?php
$id=$_POST['compid'];
$con=pg_connect("host=localhost port=5432 user=postgres dbname=tybcs password=''") or die("Cannot Connect To server");
echo"<body bgcolor=aqua>";
echo"<table border=1>";
echo"<tbody bgcolor=yellow>";
echo"<th>Full Name</th><th>Complaint Date</th><th>Complaint Id</th><th>Address</th><th>Ward Number</th><th>Complaint Details</th><th>Desired Outcome</th><th>Completion Status</th>";
echo"<tr>";
$query1="select*from complaint where compid='$id'";
$rs=pg_query($con,$query1) or die("Cannot Execute Query:$query1 \n");
while($row=pg_fetch_row($rs))
{
echo"<td>".$row[0]."</td>";
echo"<td>".$row[1]."</td>";
echo"<td>".$row[2]."</td>";
echo"<td>".$row[3]."</td>";
echo"<td>".$row[4]."</td>";
echo"<td>".$row[5]."</td>";
echo"<td>".$row[6]."</td>";
echo"<td>".$row[7]."</td>";
}
echo"</tr>";
echo"</tbody>";
echo"</table>";
echo"</body>";
echo"<a href=mainpage.html>Go To Homepage</a>";
pg_close($con);
?>
