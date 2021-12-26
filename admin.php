<?php
$option=$_POST['option'];
$perdis=$_POST['perdis'];
$wardis=$_POST['wardis'];
$perdisp=$_POST['perdis1'];
$status=$_POST['status'];
$perstatus=$_POST['perstatus'];
$delete=$_POST['delete'];
$con=pg_connect("host=localhost port=5432 user=postgres dbname=tybcs password=''") or die("Cannot Connect To server");
switch($option)
{
case 'display':
echo"<body bgcolor=aqua>";
echo"<table border=1>";
echo"<tbody bgcolor=yellow>";
echo"<tr><th>Full Name</th><th>Complaint Date</th><th>Complaint Id</th><th>Address</th><th>Ward Number</th><th>Complaint Details</th><th>Desired Outcome</th><th>Completion Status</th></tr>";


$query1="select * from complaint";
$rs=pg_query($con,$query1) or die("Cannot Execute Query:$query1 \n");
while($row=pg_fetch_row($rs))
{
echo"<tr>";
echo"<td>".$row[0]."</td>";
echo"<td>".$row[1]."</td>";
echo"<td>".$row[2]."</td>";
echo"<td>".$row[3]."</td>";
echo"<td>".$row[4]."</td>";
echo"<td>".$row[5]."</td>";
echo"<td>".$row[6]."</td>";
echo"<td>".$row[7]."</td>";
echo"</tr>";
}
echo"</tbody>";
echo"</table>";
echo"</body>";
echo"<a href=mainpage.html>Go To Homepage</a>";
break;
case 'perdisplay':
echo"<body bgcolor=aqua>";
echo"<table border=1>";
echo"<tbody bgcolor=yellow>";
echo"<tr><th>Full Name</th><th>Complaint Date</th><th>Complaint Id</th><th>Address</th><th>Ward Number</th><th>Complaint Details</th><th>Desired Outcome</th><th>Completion Status</th></tr>";
echo"<tr>";
$query2="select*from complaint where compid='$perdis'";
$rs1=pg_query($con,$query2) or die("Cannot Execute Query:$query2 \n");
while($row1=pg_fetch_row($rs1))
{
echo"<td>".$row1[0]."</td>";
echo"<td>".$row1[1]."</td>";
echo"<td>".$row1[2]."</td>";
echo"<td>".$row1[3]."</td>";
echo"<td>".$row1[4]."</td>";
echo"<td>".$row1[5]."</td>";
echo"<td>".$row1[6]."</td>";
echo"<td>".$row1[7]."</td>";
}
echo"</tr>";
echo"</tbody>";
echo"</table>";
echo"</body>";
echo"<a href=mainpage.html>Go To Homepage</a>";
break;
case 'wardisplay':
echo"<body bgcolor=aqua>";
echo"<table border=1>";
echo"<tbody bgcolor=yellow>";
echo"<tr><th>Full Name</th><th>Complaint Date</th><th>Complaint Id</th><th>Address</th><th>Ward Number</th><th>Complaint Details</th><th>Desired Outcome</th><th>Completion Status</th></tr>";
$query3="select*from complaint where wnumber='$wardis'";
$rs2=pg_query($con,$query3) or die("Cannot Execute Query:$query3 \n");
while($row2=pg_fetch_row($rs2))
{
echo"<tr>";
echo"<td>".$row2[0]."</td>";
echo"<td>".$row2[1]."</td>";
echo"<td>".$row2[2]."</td>";
echo"<td>".$row2[3]."</td>";
echo"<td>".$row2[4]."</td>";
echo"<td>".$row2[5]."</td>";
echo"<td>".$row2[6]."</td>";
echo"<td>".$row2[7]."</td>";
echo"</tr>";
}
echo"</tr>";
echo"</tbody>";
echo"</table>";
echo"</body>";
echo"<a href=mainpage.html>Go To Homepage</a>";
break;

case 'update':

$query4="update complaint set status='$status',statusper='$perstatus' where compid='$perdisp'";
$rs3=pg_query($con,$query4) or die("Cannot Execute Query:$query4 \n");
if($rs3)
{
echo"<body bgcolor=aqua>Updated Successfully</body>";
}
else
{
echo"Not Updated";
}
echo"<a href=mainpage.html>Go To Homepage</a>";
break;
case 'regdisplay':
echo"<body bgcolor=aqua>";
echo"<table border=1>";
echo"<tbody bgcolor=yellow>";
echo"<th>Full Name</th><th>Mobile Number</th><th>Gender</th><th>Date Of Birth</th><th>Email Address</th><th>Username</th>";

$query5="select*from reg";
$rs4=pg_query($con,$query5) or die("Cannot Execute Query:$query5 \n");
while($row3=pg_fetch_row($rs4))
{
echo"<tr>";
echo"<td>".$row3[0]."</td>";
echo"<td>".$row3[1]."</td>";
echo"<td>".$row3[2]."</td>";
echo"<td>".$row3[3]."</td>";
echo"<td>".$row3[4]."</td>";
echo"<td>".$row3[5]."</td>";
echo"</tr>";
}
echo"</tbody>";
echo"</table>";
echo"</body>";
echo"<a href=mainpage.html>Go To Homepage</a>";
break;
case 'deluser':
$query6="delete from reg where username='$delete'";
$rs5=pg_query($con,$query6) or die("Cannot Execute Query:$query6 \n");
if($rs5)
echo"<body bgcolor=aqua>Deleted Successfully</body>";
else
echo"Not Deleted";
echo"<a href=mainpage.html>Go To Homepage</a>";
break;
}
pg_close($con);
?>
