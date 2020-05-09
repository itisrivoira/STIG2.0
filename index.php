<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>W O W</title>

  <!-- Custom fonts for this theme -->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="../../css/freelancer.min.css" rel="stylesheet">

</head>


<style>




  ul{
    cursor: pointer;
    margin-top:25%;
  }

  img{
  	float:center;
  	width:70%;
  	margin:1em 0 3em 0;

  }
  .custom {
    width: 45px !important;
}

  .regole{
    cursor: pointer;
  }

  /* The Modal (background) */
   .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

</style>



<body id="page-top" onLoad="reset(); return true;">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">W O W</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
           <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../../utente/utente.php#giochi">Giochi</a> <!-- Icone dei vari giochi -->
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../../utente/profilo.php">Profilo</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1 regole">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" onclick="regole()">Regole</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1 regole">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" onclick="difficolta()" >Difficoltà</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br><br><br>

  <div class="container">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><br>Impiccanome</h2>
    <!-- Icon Divider -->
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
      <div class="divider-custom-line"></div>
    </div>
  </div>




  <!-- Gioco -->
  <div class="container">
    <div class="row">
      <!-- div Immagine -->
      <div class="col-4 pb-5">
        <p class="mb-5"><img src="./img/hmstart.gif" height="250" width="150" name="hm"></p>
      </div>

      <!-- div Lettere -->
      <div class="col-8 mt-5">

        <!-- script per il gioco -->
        <script src="script.js">
        </script>


        <div class="row mb-4">
          <form name="game" class="mx-auto">
            <p class="text-uppercase text-secondary ">Parola : <input type="text" name="displayWord"></p>
            <p class="text-uppercase text-secondary ">Lettere: <input type="text" name="usedLetters"></p>
          </form>
        </div>


        <div>
          <form>
            <div class="row">
              <input type="button"  class="btn btn-secondary mx-1 custom" value="A" onclick="selectLetter('A')"/>
              <input type="button" class="btn btn-secondary mx-1 custom" value="B"  onclick="selectLetter('B')"/>
              <input type="button" class="btn btn-secondary mx-1 custom" value="C"  onclick="selectLetter('C')"/>
              <input type="button" class="btn btn-secondary mx-1 custom" value="D"  onclick="selectLetter('D')"/>
              <input type="button" class="btn btn-secondary mx-1 custom" value="E"  onclick="selectLetter('E')"/>
              <input type="button" value="F" class="btn btn-secondary mx-1 custom" onclick="selectLetter('F')"/>
              <input type="button" value="G" class="btn btn-secondary mx-1 custom" onclick="selectLetter('G')"/>
              <input type="button" value="H" class="btn btn-secondary mx-1 custom" onclick="selectLetter('H')"/>
              <input type="button" value="I" class="btn btn-secondary mx-1 custom" onclick="selectLetter('I')"/>
              <input type="button" value="J" class="btn btn-secondary mx-1 custom" onclick="selectLetter('J')"/>
              <input type="button" value="K" class="btn btn-secondary mx-1 custom" onclick="selectLetter('K')"/>
              <input type="button" value="L" class="btn btn-secondary mx-1 custom" onclick="selectLetter('L')"/>
              <input type="button" value="M" class="btn btn-secondary mx-1 custom" onclick="selectLetter('M')"/>
            </div>
            <div class="row m-1"></div>

            <div class="row">
              <input type="button" value="N" class="btn btn-secondary mx-1 custom" onclick="selectLetter('N')"/>
              <input type="button" value="O" class="btn btn-secondary mx-1 custom" onclick="selectLetter('O')"/>
              <input type="button" value="P" class="btn btn-secondary mx-1 custom" onclick="selectLetter('P')"/>
              <input type="button" value="Q" class="btn btn-secondary mx-1 custom" onclick="selectLetter('Q')"/>
              <input type="button" value="R" class="btn btn-secondary mx-1 custom" onclick="selectLetter('R')"/>
              <input type="button" value="S" class="btn btn-secondary mx-1 custom" onclick="selectLetter('S')"/>
              <input type="button" value="T" class="btn btn-secondary mx-1 custom" onclick="selectLetter('T')"/>
              <input type="button" value="U" class="btn btn-secondary mx-1 custom" onclick="selectLetter('U')"/>
              <input type="button" value="V" class="btn btn-secondary mx-1 custom" onclick="selectLetter('V')"/>
              <input type="button" value="W" class="btn btn-secondary mx-1 custom" onclick="selectLetter('W')"/>
              <input type="button" value="X" class="btn btn-secondary mx-1 custom" onclick="selectLetter('X')"/>
              <input type="button" value="Y" class="btn btn-secondary mx-1 custom" onclick="selectLetter('Y')"/>
              <input type="button" value="Z" class="btn btn-secondary mx-1 custom" onclick="selectLetter('Z')"/>
            </div>
          </form>
        </div>

        <div class="row m-4"></div>

        <div class="row justify-content-end">
          <input type="button" value="Ricomincia" class="btn btn-secondary mx-1 " onclick="reset()"/>
        </div>




      </div>
    </div>
  </div>

  <!-- Modal Livello -->
  <div class="modal" id="modalLivello" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-1">difficoltà</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Text -->
                <button onclick="setDifficolta(0)" type="button" class="btn btn-success btn-lg btn-block text-uppercase">facile</button>
                <button onclick="setDifficolta(1)" type="button" class="btn btn-warning text-white btn-lg btn-block text-uppercase">normale</button>
                <button onclick="setDifficolta(2)" type="button" class="btn btn-danger btn-lg btn-block text-uppercase">difficile</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>










    <!-- Modal fine gioco -->
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Portfolio Modal - Title -->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-1">fine</h2>
                  <!-- Icon Divider -->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                      <i class="fas fa-star"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Portfolio Modal - Text -->
                  <h4 class="mb-5 text-uppercase" id="txtModal"></h4>
                  <h4 class="mb-5 text-uppercase" id="txtModalWord"></h4>
                  <button type="button" onclick="giocaAncora()" class="btn btn-secondary float-left ">Gioca Ancora</button>
                  <button type="button" onclick="nuovoGioco()" class="btn btn-secondary float-right">Altro gioco</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  <!-- Modal regole -->
  <div class="modal" id="modalRegole" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-1">regole</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Text -->
                <h3 class="mb-5">Il gioco presenta un patibolo e una parola da indovinare. Ad ogni turno l'utente prova ad indovinare una lettera: se ha successo questa appare nella sua posizione corrispondente. Altrimenti una parte di un omino impiccato verrà generata, partendo dalla base del patibolo. Il punto va al giocatore a seconda che la parola venga indovinata prima del completamento del disegno o no.</h3>
                <button type="button" onclick="chiudi()" class="btn btn-secondary float-right ">Gioca</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>









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


    <?php

  include_once(__DIR__.'/../../Connessione.php');
  $connessione = Connessione::apriConnessione();

  //Difficoltà Facile
  $resNomi = mysqli_query($connessione, "SELECT DomandaNomi.punti, DomandaNomi.parola, DomandaNomi.difficolta, RispostaNomi.testoRisposta FROM DomandaNomi, RispostaNomi WHERE DomandaNomi.idRispostaNomi = RispostaNomi.idRispostaNomi And DomandaNomi.difficolta = 1");
  $arrFacile = [];
  while($rowNomi = mysqli_fetch_array($resNomi, MYSQLI_ASSOC)){
    array_push($arrFacile, $rowNomi['testoRisposta']);
  }

  //Difficoltà Normale
  $resNomi = mysqli_query($connessione, "SELECT DomandaNomi.punti, DomandaNomi.parola, DomandaNomi.difficolta, RispostaNomi.testoRisposta FROM DomandaNomi, RispostaNomi WHERE DomandaNomi.idRispostaNomi = RispostaNomi.idRispostaNomi And DomandaNomi.difficolta = 2");
  $arrMedio = [];
  while($rowNomi = mysqli_fetch_array($resNomi, MYSQLI_ASSOC)){
    array_push($arrMedio, $rowNomi['testoRisposta']);
  }

  //Difficoltà Difficile
  $resNomi = mysqli_query($connessione, "SELECT DomandaNomi.punti, DomandaNomi.parola, DomandaNomi.difficolta, RispostaNomi.testoRisposta FROM DomandaNomi, RispostaNomi WHERE DomandaNomi.idRispostaNomi = RispostaNomi.idRispostaNomi And DomandaNomi.difficolta = 3");
  $arrDifficile = [];
  while($rowNomi = mysqli_fetch_array($resNomi, MYSQLI_ASSOC)){
    array_push($arrDifficile, $rowNomi['testoRisposta']);
  }

   ?>




  <!-- Bootstrap core JavaScript -->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="../../js/jqBootstrapValidation.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../../js/freelancer.min.js"></script>

  <script type="text/javascript">var facile =<?php echo json_encode($arrFacile); ?>;</script>
  <script type="text/javascript">var medio =<?php echo json_encode($arrMedio); ?>;</script>
  <script type="text/javascript">var difficile =<?php echo json_encode($arrDifficile); ?>;</script>

  <script>


    function difficolta(){ document.getElementById("modalLivello").style.display = "block"; }


    function nuovoGioco(){ window.open("../../utente/utente.php#giochi", target="_self"); }

    function giocaAncora(){ window.location.reload(); }

    function regole(){ document.getElementById("modalRegole").style.display = "block"; }

    function chiudi(){ document.getElementById("modalRegole").style.display = "none"; }


  </script>


</body>

</html>
