<!DOCTYPE html>
<?php
  include_once(__DIR__.'/../../Connessione.php');
  $connessione = Connessione::apriConnessione();

  $query1 = "SELECT DomandaVerb.idDomandaVerb FROM DomandaVerb";
  $risultato1 = $connessione->query($query1);
  $lista1 = array();
  while($row = $risultato1->fetch_assoc()){
    array_push($lista1, $row['idDomandaVerb']);
  }
  $num = array_rand($lista1);

  $query = "SELECT DomandaVerb.testo, RispostaVerbi.testoRisposta, RispostaVerbi.flagPrep FROM DomandaVerb, RispostaVerbi WHERE DomandaVerb.idDomandaVerb = ".$lista1[$num]." AND RispostaVerbi.idDomandaVerb = DomandaVerb.idDomandaVerb ";
  $risultato = $connessione->query($query);
  $lista = array();
  while($row = $risultato->fetch_assoc()){
    array_push($lista, $row);
  }
  echo count($lista);
  // echo $lista[1]['testo'];
  // echo $lista[2]['flagPrep'];


?>

<html lang="en">

<head>

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

  .articoli {
  	float: right;
  	list-style-type:none;
  	width:40%;
  	height:3em;
  	overflow-y:auto;
  	margin:0 1.5em 3em 0;
  	padding:0.5em;
  	border:3px solid #888;
  	border-radius:0.3em;
  	background:#ddd;
  	color:#555;
  }

  .divArticoliTit{
  	float:right;
  	clear: right;
  }

  ul{
    cursor: pointer;
    display: inline;
  }

  img{
  	float:center;
  	width:70%;
  	margin:1em 0 3em 0;
  }

  .regole{
    cursor: pointer;
  }

  .vite img{
    width:10%;
    margin:2em 0.25em 2em 0.25em;
  }

</style>

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
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../../utente/utente.php#giochi">Giochi</a> <!-- Icone dei vari giochi -->
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../../utente/profilo.php">Profilo</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1 regole">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="modal" data-target="#modalRegole" >Regole</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1 regole">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="modal" data-target="#modalLivello" >Difficoltà</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br><br><br>

  <div class="container">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><br>Drag the Article</h2>
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
      <!-- div Scatole -->
      <div class="col-5">
        <div class="divArticoliTit">
          <h3>Corrette</h3>
          <img data-draggable="corretto" draggable="false" src="./img/corretto.png">
        </div>
        </br>
        <div class="divArticoliTit">
          <h3>Scorrette</h3>
          <img data-draggable="scorretto" draggable="false" src="./img/scorretto.png">
        </div>
      </div>
      <div class="col-1"></div>
      <!-- div Articoli -->
      <div class="col-6">
        <div class="vite text-center mb-5">
          <img id="vita0" src="./img/cuore.png">
          <img id="vita1" src="./img/cuore.png">
          <img id="vita2" src="./img/cuore.png">
          <img id="vita3" src="./img/cuore.png">
          <img id="vita4" src="./img/cuore.png">
        </div>

        <h4 class="mb-4"><?php echo $lista[0]['testo'];?></h4>
        <ul class="text-center">
          <?php
          for ($i = 0; $i < count($lista); $i++){
            ?>
            <li data-draggable="item" draggable="true" class="articoli text-center" id="<?php echo $lista[$i]['flagPrep'];?>"><?php echo $lista[$i]['testoRisposta'];?></li>
            <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </div>

  <!-- Modal fine gioco -->
  <div class="portfolio-modal modal fade" data-backdrop="static" data-keyboard="false"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-uppercase mb-1" id="titModal"></h2>
                <!-- Icon Divider -->
                <div class="divider-custom mb-5">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Text -->
                <h4 class="mb-5" id="txtModal"></h4>
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
  <div class="portfolio-modal modal" id="modalRegole" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="chiudi()" >
        <span aria-hidden="true">
        <i class="fas fa-times"></i>
        </span>
        </button>
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
                <h3 class="mb-5">Nel gioco sono presenti due scatole, una per "Articoli determinativi" e l'altra per "Articoli indeterminativi". Nella parte inferiore ci sono dei mattoncini, al cui interno ci sono degli articoli, determinativi e indeterminativi. Il tuo compito è di inserire i mattoncini all'interno della scatola corretta. Quando i mattoncini saranno finiti, apparirà un messaggio che ti dirà se hai vinto o hai perso, mostrandoti anche gli errori commessi. Più vai avanti con i livelli, più i mattoncini da inserire aumentano.</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Livello -->
  <div class="portfolio-modal modal fade" data-backdrop="static" data-keyboard="false"  id="modalLivello" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-uppercase text-secondary mb-1">difficoltà</h2>
                <!-- Icon Divider -->
                <div class="divider-custom mb-5">
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

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
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

    <script>

      var cont=0;
      var arrayItem=[];
      var classeTitolo=titModal.className;
      var correttoUtente = [];
      var scorrettoUtente = [];
      var corrette = "";
      var scorrette = "";


      $('#modalLivello').modal('show');

      document.addEventListener('dragstart', function(e){
          item = e.target;
          e.dataTransfer.setData('text', item.id);
      }, false);

      document.addEventListener('dragover', function(e){
          if(item) e.preventDefault();
      }, false);

      document.addEventListener('drop', function(e){
          if(e.target.getAttribute('data-draggable') == 'corretto'){
              correttoUtente.push(item.id);
              corrette = corrette + item.textContent + " ";
              item.style.display="none";
              arrayItem.push(item);
              e.preventDefault();
              cont++;
          }
          if(e.target.getAttribute('data-draggable') == 'scorretto'){
              scorrettoUtente.push(item.id);
              scorrette = scorrette + item.textContent + " ";
              item.style.display="none";
              arrayItem.push(item);
              e.preventDefault();
              cont++;
          }
      }, false);

      document.addEventListener('dragend', function(e){
        item = null;
        if(cont==3){
          var vinto=false;
          var c=0;
          for (var k=0; k < correttoUtente.length; k++){
            if (correttoUtente[k] == 1){
              vinto = true;
            }else{
              vinto = false;
              break;
            }
          }
          for (var k=0; k < scorrettoUtente.length; k++){
            if (scorrettoUtente[k] == 0){
              vinto = true;
            }else{
              vinto = false;
              break;
            }
          }

          if(vinto) fineGioco(" text-success","hai vinto!");
          else{
            if(tentativi>1){
              document.getElementById("vita"+(5-tentativi)).style.opacity=0.5;
              correttoUtente=[];
              scorrettoUtente=[];
              corrette = "";
              scorrette = "";
              cont=0;
              tentativi--;
              arrayItem.forEach(element => { element.style.display="inline"; });
            }else fineGioco(" text-danger","hai perso!");
          }
        }

      }, false);

      function fineGioco(colore,testo){
        titModal.className=classeTitolo+colore;
        titModal.innerText=testo;
        txtModal.innerText="Le tue scelte: \nCorrette: " + corrette + "\nScorrette: " + scorrette;
        $('#myModal').modal('show');
      }

      function nuovoGioco(){ window.open("../../utente/utente.php#giochi", target="_self"); }

      function giocaAncora(){
        gioca();
        arrayItem.forEach(element => { element.style.display="inline"; });
        $('#myModal').modal('hide');
        correttoUtente=[];
        scorrettoUtente=[];
        corrette = "";
        scorrette = "";
        cont=0;
      }

      function setDifficolta(d){
        difficolta=d;
        gioca();
        $('#modalLivello').modal('hide');
       }

      function gioca(){
        for (let i=0; i<5; i++){
          document.getElementById("vita"+i).style.display="inline";
          document.getElementById("vita"+i).style.opacity=1;
        }
        if(difficolta==0) tentativi=5;
        else if(difficolta==1){
          tentativi=3;
          for (let i=0; i<5-tentativi; i++) document.getElementById("vita"+i).style.display="none";
        }else{
          tentativi=1
          for (let i=0; i<5-tentativi; i++) document.getElementById("vita"+i).style.display="none";
        }
      }

    </script>

  </body>
</html>
