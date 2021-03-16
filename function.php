<?php
	require('connection.php');
	/*function console_log($output, $with_script_tags = true) {
		$js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
	');';
		if ($with_script_tags) {
			$js_code = '<script>' . $js_code . '</script>';
		}
		echo $js_code;
	}*/
	if(isset($_POST['send']))
	{
		$name=$_POST['name'];
          $surname=$_POST['surname'];
          $email=$_POST['email'];
          $course=$_POST['course'];

		  if($name == "" || $surname =="" || $email =="")
		  {
			echo "<script> alert('Morate uneti sve podatke');
					window.location.assign('prijava.php');
				</script>";
		  }
		  else
		  {
			$sql1=mysqli_query($connection,"INSERT INTO `user`(`name`, `surname`, `email`) VALUES ('$name','$surname','$email')");
			if($sql1)
			{
				$sql2=mysqli_query($connection,"SELECT `id` FROM `user` WHERE email='$email'");
				$row=mysqli_fetch_assoc($sql2);
               	$userId= $row['id'];
               	$upit2=mysqli_query($connection,"INSERT INTO `checkin`(`id_user`, `id_course`) VALUES ($userId,$course)");
			   if($sql2)
			   {
               		echo "<script> alert('Uspešno ste se prijavili.');
					   window.location.assign('prijava.php')</script>";
			   }
			   else
			   {
				   echo "<script> alert('Prijava nije uspela, pokušajte ponovo.');
				   window.location.assign('prijava.php')</script>";
			   }
			}
			else
			{
				echo "<script> alert('Prijava nije uspela, pokušajte ponovo.');
				window.location.assign('prijava.php')</script>";
			}
	}}
	else
	{
		header('Location:prijava.html');
	}
?>