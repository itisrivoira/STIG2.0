<?php
include_once(__DIR__.'/../Connessione.php');
$conn = Connessione::apriConnessione();

session_start();

if(!isset($_SESSION['login_user'])){
	header("location: ../controlloDati.php");
}else{
  $rsUtente = mysqli_query($conn, "SELECT * FROM Utente Where Utente.email = '".$_SESSION['login_user']."'");
  $rowUtente = mysqli_fetch_row($rsUtente);
  $pk_utente = $rowUtente[0];
  $nome = $rowUtente[1];
  $cognome = $rowUtente[2];
  $tipologia = $rowUtente[3];
	$mail = $rowUtente[4];
	$passw = $rowUtente[5];
}

echo "TEST1";

if(isset($_POST['nomeMod']) && isset($_POST['cognomeMod']) && isset($_POST['emailMod']) && isset($_POST['passwordMod'])){
	$nomeMod = $_POST['nomeMod'];
	$cognomeMod = $_POST['cognomeMod'];
	$mailMod = $_POST['emailMod'];
	$passwordMod = $_POST['passwordMod'];

	if(password_verify($passwordMod, $passw) || $passwordMod == ""){
		$sql = "UPDATE Utente SET Nome='".$nomeMod."', Cognome='".$cognomeMod."', email='".$mailMod."' WHERE idUtente='".$pk_utente."'";

		if (!$conn->query($sql)) {
			die("Errore nell'inserimento del partecipante ".$conn->error);
		}
	}else{
		$passwordMod = password_hash($passwordMod, PASSWORD_DEFAULT);
		$sql = "UPDATE Utente SET Nome='".$nomeMod."', Cognome='".$cognomeMod."', email='".$mailMod."', Password='".$passwordMod."' WHERE idUtente='".$pk_utente."'";

		if (!$conn->query($sql)) {
			die("Errore nell'inserimento del partecipante ".$conn->error);
		}
	}

	$rsUtente = mysqli_query($conn, "SELECT * FROM Utente Where Utente.email = '".$_SESSION['login_user']."'");
	$rowUtente = mysqli_fetch_row($rsUtente);
	$pk_utente = $rowUtente[0];
	$nome = $rowUtente[1];
	$cognome = $rowUtente[2];
	$tipologia = $rowUtente[3];
	$mail = $rowUtente[4];
	$passw = $rowUtente[5];

}


?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>W O W</title>

    <!-- Custom fonts for this theme -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="../css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top">W O W</a>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
             <a class="nav-link py-3 px-0 px-lg-3 rounded" href="./utente.php">Giochi</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
             <a class="nav-link py-3 px-0 px-lg-3 rounded active" href="./profilo.html">Profilo</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
             <a class="nav-link py-3 px-0 px-lg-3 rounded" href="Logout.php">logout</a>
            </li>
          </ul>
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead bg-primary text-white text-center">
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      <div class="row">
        <div class="col-4">
      	  <!-- Masthead Avatar Image -->
      	  <img class="masthead-avatar mb-5 text-center" src="../img/avataaars.svg" alt="">
      	  <h2 class="text-uppercase mb-0"><?php echo $tipologia ?></h2>
        </div>
        <div class="col-8">
        	<!-- Masthead Heading -->
            <div class="row mb-3">
              <div class=" floating-label-form-group controls mb-0 pb-2">
                <label>Nome</label>
                <input class="mb-0 text-white" id="nome" type="text" value=<?php echo $nome ?> readonly>
              </div>
            </div>
            <div class="row mb-3">
              <div class="floating-label-form-group controls mb-0 pb-2">
                <label>Cognome</label>
                <input class="mb-0 text-white" id="cognome" type="text" value=<?php echo $cognome ?> readonly>
              </div>
            </div>
            <div class="row mb-3">
            <div class=" floating-label-form-group controls mb-0 pb-2">
              <label>Email</label>
              <input class="mb-0 text-white" id="email" type="mail" value=<?php echo $mail ?> readonly>
            </div>
            </div>

            <div class="row mb-3 text-center">
               <!-- Button trigger modal -->
              <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalModifica"> Modifica Profilo </button>
            </div>
          </div>
       </div>
        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon">
            <i class="fas fa-star"></i>
          </div>
          <div class="divider-custom-line"></div>
        </div>
    </header>

    <!-- Footer -->
      <footer class="footer text-center">
        <div class="container">
          <div class="row">

            <!-- Footer Location -->
            <div class="col-lg-6 mb-5 mb-lg-0">
              <h4 class="text-uppercase mb-4">I.T.I.S. Giovanni Rivoira</h4>
              <p class="lead mb-0">Verzuolo,
                <br>Cuneo, Italy</p>
            </div>

            <!-- Footer Social Icons -->
            <div class="col-lg-6 mb-5 mb-lg-0">
              <h4 class="text-uppercase mb-4">Seguici sui social</h4>
              <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/itisrivoira/" target="_blank">
                <i class="fab fa-fw fa-facebook-f"></i>
              </a>
              <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/itisrivoira" target="_blank">
                <i class="fab fa-fw fa-twitter"></i>
              </a>
              <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/itisrivoira/" target="_blank">
                <i class="fab fa-fw fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </footer>

      <!-- Modal modifica -->
<form method="post" id="formModifica" action="profilo.php">
      <div class="portfolio-modal modal fade" data-backdrop="static" data-keyboard="false" id="modalModifica" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <i class="fas fa-times"></i>
                </span>
              </button>
              <div class="modal-body text-center">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-8">
                      <!-- Portfolio Modal - Title -->
                      <h2 class="portfolio-modal-title text-secondary text-uppercase mb-1">Modifica</h2>
                      <!-- Icon Divider -->
                      <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon">
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="divider-custom-line"></div>
                      </div>
                      <!-- Portfolio Modal - Text -->
                      <div class="row mb-3">
                        <div class="floating-label-form-group controls mb-0 pb-2">
                          <label>Nome</label>
                          <input class="mb-0" id="nomeModifica" name="nomeMod" type="text" value=<?php echo $nome; ?> onclick="select_all(this)" placeholder="nome">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="floating-label-form-group controls mb-0 pb-2">
                          <label>Cognome</label>
                          <input class="mb-0" id="cognomeModifica" name="cognomeMod" type="text" value=<?php echo $cognome; ?> onclick="select_all(this)" placeholder="cognome">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="floating-label-form-group controls mb-0 pb-2" id="divEmail">
                          <label>Email</label>
                          <input class="mb-0" id="emailModifica" name="emailMod" type="email" value=<?php echo $mail; ?> onclick="select_all(this)" placeholder="email">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="floating-label-form-group controls mb-0 pb-2" id="divPsw">
                          <label>Password</label>
                          <input class="mb-0" id="passwordModifica" name="passwordMod" type="password" value="" onclick="select_all(this)" placeholder="password">
                        </div>
                      </div>
                      <div class="row mb-5">
                        <div class="floating-label-form-group controls mb-0 pb-2">
                          <p>Conferma Password</p>
                          <input class="mb-0" id="passwordConferma" name="confMod" type="password" value="" onclick="select_all(this)" placeholder="conferma password">
                        </div>
                      </div>
                      <div class="row mb-0 text-center">
                         <button type="button" onclick="modificaDati()" class="btn-secondary btn" id="btnModifica">Aggiorna profilo</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</form>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>

    <!-- Custom scripts for this template -->
    <!-- <script src="../js/freelancer.min.js"></script> -->

    <script type="text/javascript">

      function modifica(){ document.getElementById("modalModifica").style.display = "block"; }

      function modificaDati(){
        var nome = document.getElementById("nomeModifica");
        var cognome = document.getElementById("cognomeModifica");
        var email = document.getElementById("emailModifica");
        var passwordModifica = document.getElementById("passwordModifica");
        var passwordConferma = document.getElementById("passwordConferma");
        var confEmail = false;
        var confPsw = false;

				document.getElementById("nome").value=nome.value;
        document.getElementById("cognome").value=cognome.value;

        if(email.value.includes("@")) confEmail=true;

				if(passwordModifica.value == passwordConferma.value) confPsw=true;

				if(confPsw==true && confEmail==true){

          //document.getElementById("password").value=passwordModifica.value;
        //  document.getElementById("email").value=email.value;
document.getElementById("formModifica").submit();


          $('#modalModifica').modal('toggle');
          alert("Dati Aggiornati");
        }
        else{
          alert("Controllare i dati");

					if(!confPsw){
            passwordConferma.value="";
            passwordModifica.value="";
            passwordModifica.focus();
          }

					if(!confEmail){
            email.focus();
            email.value=" ";
          }
        }
      }

      function select_all(txtArea) {
      	var text_val=eval("txtArea");
      	text_val.focus();
      	text_val.select();
      }

    </script>

  </body>
</html>
