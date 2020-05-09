
<?php
include_once(__DIR__.'/../Connessione.php');
$conn = Connessione::apriConnessione();

if(isset($_POST['nome']) && isset($_POST['cognome']) && isset($_POST['tipologia']) && isset($_POST['email']) && isset($_POST['password'])){
	$nome = $_POST['nome'];
	$cognome = $_POST['cognome'];
	$tipologia = $_POST['tipologia'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$bottone = $_POST['invia'];

	$conn->query("SET NAMES 'utf8'");
  if($nome != "" && $cognome != "" && $email != "" && $password != ""){

    $controlloMailReuslt = mysqli_query($conn, "SELECT * FROM Utente WHERE Utente.email = '".$email."'");
    $controlloMail = mysqli_fetch_array($controlloMailReuslt, MYSQLI_ASSOC);

		$password = password_hash($password, PASSWORD_DEFAULT);

    if(!isset($controlloMail)){

      $temp_str = "INSERT INTO `Utente`  (nome, cognome, tipologia, email, password) VALUES ('".$nome."', '".$cognome."', '".$tipologia."', '".$email."', '".$password."')";

      if (!$conn->query($temp_str)) {
        die("Errore nell'inserimento del partecipante ".$conn->error);
      }else{
				header("location: ../index.php");
			}
    }
  }
}



include_once(__DIR__.'/../controlloDati.php');
if(isset($_SESSION['login_user'])){
  header("location: utente/utente.php");
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
      <a class="navbar-brand js-scroll-trigger" href="#page-top">W O W</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

      </div>
    </div>
  </nav>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><br>Iscriviti</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">

          <form action="registrazione.php" method="post">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nome</label>
                <input class="form-control" id="name" name="nome" type="text" placeholder="Username" required="required" data-validation-required-message="Inserisci il nome">
                <p class="help-block text-danger"></p>
              </div>
            </div>
						<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Cognome</label>
                <input class="form-control" name="cognome" id="cognome" type="text" placeholder="Cognome" required="required" data-validation-required-message="Inserisci il cognome">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Mail</label>
                <input class="form-control" name="email" id="email" type="text" placeholder="Mail" required="required" data-validation-required-message="Inserisci la mail">
                <p class="help-block text-danger"></p>
              </div>
            </div>
						<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Password</label>
                <input class="form-control" name="password" id="password" type="password" placeholder="Password" required="required" data-validation-required-message="Inserisci la password">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
						<div id="iscrizione"> <p style="font-size:20px;">Tipologia:</p><label> <input type="radio" name="tipologia" value="Insegnante"> Insegnante <span></span></label>
						<label> <input type="radio" name="tipologia" value="Alunno"> Alunno <span></span></label></div>
						<div class="form-group text-center">
              <input class="btn btn-primary btn-xl" type="submit" name="invia" value="Iscriviti" class="btn">
            </div>
          </form>

          <ul class="login-more p-t-190">
            <li>
              <span class="txt1">
                Hai gia un account?
              </span>

              <a href="../index.php" class="txt2">
                Log In
              </a>
            </li>


        </div>
      </div>

    </div>
  </section>

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

        <!-- Footer About Text -->


      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="../js/jqBootstrapValidation.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/freelancer.min.js"></script>

</body>

</html>
