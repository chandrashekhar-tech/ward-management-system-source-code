<?php



session_start();

$username=$_POST['uname'];

$userpass=$_POST['upass'];





$con=pg_connect("host=localhost port=5432 user=postgres dbname=tybcs password=''") or die("Cannot Connect to server");

if($username==null||$userpass==null)

{

        header("Location: http://localhost/project/unsuccessfullogin2.html");

}

$pgsql1="SELECT * FROM reg where username='".$username."'";

$pgsql2="SELECT * FROM reg where password='".$userpass."'";

$pgsql3="SELECT * From reg";

$result1 = pg_query($con,$pgsql1) or die("Cannot Execute Query");

$result2 = pg_query($con,$pgsql2) or die("Cannot Execute Query");

$result3 = pg_query($con,$pgsql3) or die("Cannot Execute Query");

$num_rows1 = pg_num_rows($result1);

$num_rows2 = pg_num_rows($result2);

if($num_rows1!==0 && $num_rows2==0 )

{

header("Location: http://localhost/wrongpassword.html");

}

else if($num_rows1==0 && $num_rows2!=0)

{

header("Location: http://localhost/wronguser.html");

}

        while($row = pg_fetch_array( $result3 )) {



                 if($row['username']==$username && $row['password']==$userpass)
                {

 
                $_SESSION['username']=$username;

                header("Location: http://localhost/complaint.html");

                 }
	

        }
pg_close($con);
?>


