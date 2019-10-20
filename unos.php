<?php
if(session_status()==PHP_SESSION_NONE){
	session_start();
	}

$con = mysqli_connect("localhost","root","","itskola");
$query = "SELECT `email` FROM `polaznici`"; 
		$x = mysqli_query($con,$query);
$uspesan=1;
if(isset($_POST["registracija"]))
	{    
		unset($_POST["registracija"]);
foreach ($_POST as $key => $value) {
	
	 $value= trim($value);
	 $value = $con->real_escape_string($value);
	 $_SESSION[$key]=$value;
        if($key!="poruka"){


			   
					if(empty($value))
					
					{
	
						$uspesan = 0;
						header("Location:index.php");
					}

				}				
	
			}
		

		


		

if(isset($_POST['email'])){
	$email=$_POST['email'];
while($row = $x->fetch_assoc()){
	
	     
if($row['email']==$email)
	   {

	 
	     $uspesan=0;
	     header("Location:index.php");
	   }
         
	}

}


}
		if($uspesan){
		
$rez = implode("','", $_POST);
             $query ="INSERT INTO `polaznici`( `ime`, `email`, `telefon`, `kurs`, `poruka`) VALUES ('".$rez."')";
			$rezultat = $con->query($query);
			
		
		


header("Location:registracija.php");
return false;

}



?>