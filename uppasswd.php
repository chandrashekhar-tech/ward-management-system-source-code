<?php

$con=pg_connect("host=localhost port=5432 user=postgres dbname=tybcs password=''") or die("Cannot Connect To server");
$uname=$_POST['uname'];
$upass1=$_POST['upass1'];
$upass2=$_POST['upass2'];

$pgsql1="SELECT * FROM reg where username='".$uname."' ";
$result1=pg_query($con,$pgsql1) or die("Can't execute query");
if('$upass1'=='$upass2')
{
        header("Location: http://localhost/wrongpassword.html");
}
else
{

while($row = pg_fetch_array( $result1))
{
        $user=$row['username'];
        //echo "$user";
//      echo "$username";
        if($uname==$user)
        {
                $pgsql2="update reg set password='$upass2' where username='".$uname."' ";
                $result2=pg_query($con,$pgsql2) or die("Cannot Execute Query");
                        header("Location: http://localhost/login.html");
        }
        else
        {
                header("Location: http://localhost/nosuchuser.html");
        }

}
}
pg_close($con);
?>

