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

  <script src="./script2.js"></script>

</head>


<style>
  .bgimg {
    background-repeat:no-repeat;
    background-size: 90% 20%;
    background-position: center;

}

.altezza {
  height:auto;
  min-height:150px;
}


#rcorners1 {
  border-radius: 25px;

}

#rcorners2 {
  border-radius: 20px 0px 0px 0px;

}
#rcorners3 {
  border-radius:  0px 20px 0px 0px;

}

#rcorners4 {
  border-radius:  0px  0px 0px 20px;

}

#rcorners5 {
  border-radius:  0px  0px 20px 0px ;

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

<body id="page-top" onload="loadDifficolta()" >


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
                <form id="formDifficolta" action="difficolta.php" method="POST">
                <button  type="submit" class="btn btn-success btn-lg btn-block text-uppercase" name="difficolta" value="1" >facile</button>
                <button  type="submit" class="btn btn-warning btn-lg btn-block text-uppercase" name="difficolta" value="2" >Normale</button>
                <button  type="submit" class="btn btn-danger btn-lg btn-block text-uppercase" name="difficolta" value="3" >difficile</button>
                </form>

              </div>
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





  <!-- Bootstrap core JavaScript -->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="../../js/jqBootstrapValidation.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../../js/freelancer.min.js"></script>
  
  <script type="text/javascript">
    function loadDifficolta(){ document.getElementById("modalLivello").style.display = "block"; }

  </script>

  <script>
    var fileCsv = <?php echo json_encode($csv); ?>;
    caricaArray(fileCsv);








    function loadDifficolta(){ document.getElementById("modalLivello").style.display = "block"; }

    function nuovoGioco(){ window.open("../../utente/utente.php#giochi", target="_self"); }

    function giocaAncora(){ window.location.reload(); }

    function regole(){ document.getElementById("modalRegole").style.display = "block"; }

    function chiudi(){ document.getElementById("modalRegole").style.display = "none"; }

  </script>


</body>

</html>
