<?php
registerSubmit();
exit;

function registerSubmit()
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

	$sql="insert into users
		(username, password)
		values ('$user', '$pass')";
	//var_dump($sql);
	$result=mysql_query($sql, $con);
	//var_dump($result);
	if(!$result)
	{
		die("Inset Table error".mysql_error());
	}
	mysql_close($con);
	echo "<p>Register secceed!!!</p>";
}

?>