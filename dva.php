<?php
    function console_log($output, $with_script_tags = true) {
     $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
 ');';
     if ($with_script_tags) {
         $js_code = '<script>' . $js_code . '</script>';
     }
     echo $js_code;
 }
    
    require('connection.php');

    if(isset($_POST['send']))
    {
          $name=$_POST['name'];
          $surname=$_POST['surname'];
          $email=$_POST['email'];
          $course=$_POST['course'];
          $upit=mysqli_query($connection,"INSERT INTO `user`(`name`, `surname`, `email`) VALUES ('$name','$surname','$email')");
          
          
          
          
          
          
          echo "<script> alert($upit);</script>";

          console_log('TEST JOVANA');
          if($upit)
          {
               
               $red=mysqli_num_rows($upit);
               $userId= $red['id'];
               $upit2=mysqli_query($connection,"INSERT INTO `checkin`(`id_user`, `id_course`) VALUES ($userId,$course)");
               echo "<script> alert('Uspešno ste rezervisali putovanje.');</script>";
          }
          else
          {
             /*echo "<script> alert('Došlo je do greške. Pokušajte ponovo.');
              </script>";*/
          }



        /* $korisnik=mysqli_query($konekcija,"SELECT jmbg FROM korisnik WHERE email='".$_SESSION['korisnik']."'");
         $koris=mysqli_fetch_assoc($korisnik);
         $korisnik1=$koris['jmbg'];
         $_SESSION['jmbg']=$korisnik1;


         $destinacija=$_POST['destinacija'];
         $br_osoba=$_POST['broj_osoba'];

         
         $upit=mysqli_query($konekcija,"INSERT INTO rezervise(sif_korisnika,sif_putovanje,broj_osoba) VALUES($korisnik1,$destinacija,$br_osoba)");*/
        
    }



//empty($name)
          /*if($upit)
          {
               $upit=mysqli_query($connection,"INSERT INTO user(`name`, `surname`, `email`) VALUES ($name,$surname,$email)");
              echo "<javascript>alert('Morate uneti sve podatke')</javascript>";
          }
          else if(empty($name)||empty($surname)|| empty($email))
          {
              
              echo "<script> alert('Usafs.');
			
			</script>";
          }
          else
          {
               echo "<javascript>alert('NEVER GIVE UP!!!')</javascript>";
          }
          
          /*$upit=mysqli_query($connection,"INSERT INTO `user`(`name`, `surname`, `email`) VALUES ($name,$surname,$email)");
          $user=mysqli_query($connection,"SELECT `id` FROM `user` WHERE name= $upit['name']");
          $upit2=mysqli_query($connection,"INSERT INTO checkin(id_user,id_course) VALUES($upit,$course)");*/

          

          
          //echo "<javascript>alert('Morate uneti sve podatke')</javascript>";
	//}
     /*else
		{
			echo "<script> alert('Došlo je do greške. Pokušajte ponovo.');
			/*window.location.assign('rezervacija.php');</script>";
		}*/



?>