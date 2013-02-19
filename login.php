<?php

showSubmit();
exit;

function showSubmit()
{
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$con=mysql_connect('localhost:3306','root','');
	if(!$con)
	{
		die('Could not connect: '.mysql_error());
	}

	$ret=mysql_select_db("myblog",$con);
	if(!$con)
	{
		die('Cannot select db: '.mysql_error());
	}

	$sql="select * from `users`
	where `username` ='$user'
	and `password`='$pass'";
	$ret=mysql_query($sql, $con);
	if(!$ret)
	{
		die('Select error '.mysql_error());
		return;
	}

<<<<<<< HEAD
$login_check=mysql_num_rows($ret);
mysql_close($con);
var_dump($login_check);
if($login_check <= 0)
{
echo"<p>Login error...</p>";
header('location: register.php');
return;
}
header("location:home.php");
=======
	$login_check=mysql_num_rows($ret);
	mysql_close($con);
	var_dump($login_check);
	if($login_check <= 0)
	{
		echo"<p>Login error...</p>";
		header('location: register.php');
		return;
	}
	echo "<p>Login secceed!!!</p>";
>>>>>>> branch 'master' of https://github.com/tangzhileo/MyBlog.git
}

?>
