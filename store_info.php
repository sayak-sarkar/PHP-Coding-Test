<?php
	$con=mysql_connect("localhost","test","test123");

	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("testdb",$con);

	$name=$_POST['name'];
	$email=$_POST['email'];
	$browser=$_POST['browser'];
	$reason=$_POST['reason']; 
	 
	$sql="insert into test values('','$name','$email','$browser','$reason')";
	$row=mysql_query($sql); 

	if($row)
	{	
		echo"$date ";
		$d=Date("d/m/y");
		echo"Response Stored Successfully";
	}
	else
	{
		mysql_error();
	}
?>