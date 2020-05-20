<?php
include_once(__DIR__.'/Connessione.php');
$conn = Connessione::apriConnessione();

session_start();

$error = '';
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
		header("location: index.php");
	}
	else{

		$username = $_POST['username'];
		$password = $_POST['password'];

	$rs = mysqli_query($conn, "SELECT email, Password From Utente where email='".$username."'");

		if($row = mysqli_fetch_row($rs)){ //controllo se la mail esiste nel db
			echo $row[1];
			if(password_verify($password, $row[1])){ //controllo password
				$_SESSION['login_user'] = $username;
				header("location: utente/utente.php");
			}else {
				$error = "Username o password non corretti";
				header("location: index.php");
			}
		}else{
			$error = "Username o password non corretti";
			header("location: index.php");
		}


	}
	mysqli_close($conn);
}
?>
