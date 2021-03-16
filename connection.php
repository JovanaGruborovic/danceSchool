<?php
$servername = "localhost";
$username = "root";
$pass = "";
$Dbname = "danceschool";


try
{
	$connection=mysqli_connect($servername,$username,$pass,$Dbname);
	if(!$connection)
    {
		throw new Exception("Greška,posetite nas kasnije!");
	}	
}
catch(Exception $e)
{
	echo $e->getMessage();
}

?>