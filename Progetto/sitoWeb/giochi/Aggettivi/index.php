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
           <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../../utente/utente.html#giochi">Giochi</a> <!-- Icone dei vari giochi -->
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../../utente/profilo.html">Profilo</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1 regole">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" onclick="regole()">Regole</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br><br><br>

  <div class="container">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><br>Riconosci l'aggettivo</h2>
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
    <div class="row justify-content-center border" >
      <script src="script.js">
      </script>
      
      
      
      riquadro con gli aggettivi
      Array casuale di aggettivi


    </div>
    <div class="row justify-content-center border">qualificativi</div>
    <div class="row justify-content-center border">possessivi</div>
    <div class="row justify-content-center border">dimostrativi</div>
    <div class="row justify-content-center border">indefiniti</div>
    <div class="row justify-content-center border">numerali</div>
    <div class="row justify-content-center border">interrogativi</div>
    <div class="row justify-content-center border">esclamativi</div>

    
    
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
                    <h3 class="mb-5">Il gioco presenta alcuni aggettivi, i quali devono essere trascinati nella posizione corretta. Possono essere Qualificativi, Possessivi, Dimostrativi, Indefiniti, Numerali, Interrogativi e Esclamativi. Il punteggio viene assegnato a seconda di quanti aggettivi sono stati posizionati correttamente.</h3>
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



  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="../../js/jqBootstrapValidation.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../../js/freelancer.min.js"></script>

  <script>
   


    

    function nuovoGioco(){ window.open("../../utente/utente.html#giochi", target="_self"); }

    function giocaAncora(){ window.location.reload(); }

    function regole(){ document.getElementById("modalRegole").style.display = "block"; }

    function chiudi(){ document.getElementById("modalRegole").style.display = "none"; }

  </script>


</body>

</html>
