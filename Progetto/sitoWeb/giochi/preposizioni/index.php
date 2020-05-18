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

  <style>
    .selezione:hover{
      opacity: 0.5;
      cursor: pointer;
    }

    .table td, .table th{
      padding: 18px;
    }

    .regole{
      cursor: pointer;
    }

    img{
      float:center;
      width:35px;
      margin:1em 0.25em 0em 0.25em;
    }

  </style>

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

  <div class="container mb-3">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><br>The Preposition’s Table</h2>

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
  <div class="container mb-5 text-center">
    <div class="row">

      <!--div Tabella e Frase -->
      <div class="col-lg-12 mb-5">
        <div class="text-center mb-5">
          <img id="vita0" src="./img/cuore.png">
          <img id="vita1" src="./img/cuore.png">
          <img id="vita2" src="./img/cuore.png">
          <img id="vita3" src="./img/cuore.png">
          <img id="vita4" src="./img/cuore.png">
        </div>
        <div class="mb-5 text-center"><h4 id="frase" class="text-dark"></h4></div>

        <table class="table table-striped shadow">
          <tbody>
            <tr>
              <th scope="row" class="bg-dark text-white boder-bottom border-secondary"></th>
              <th scope="col" onclick="selezione()" class="selezione" id="di">DI</th>
              <th scope="col" onclick="selezione()" class="selezione" id="a">A</th>
              <th scope="col" onclick="selezione()" class="selezione" id="da">DA</th>
              <th scope="col" onclick="selezione()" class="selezione" id="in">IN</th>
              <th scope="col" onclick="selezione()" class="selezione" id="con">CON</th>
              <th scope="col" onclick="selezione()" class="selezione" id="su">SU</th>
              <th scope="col" onclick="selezione()" class="selezione" id="per">PER</th>
              <th scope="col" onclick="selezione()" class="selezione" id="tra">TRA</th>
              <th scope="col" onclick="selezione()" class="selezione border-right" id="fra">FRA</th>
            </tr>
            <tr>
              <th scope="row" class="bg-dark text-white border-secondary">IL</th>
              <td onclick="selezione()" class="selezione font-italic" id="del">DEL</td>
              <td onclick="selezione()" class="selezione font-italic" id="al">AL</td>
              <td onclick="selezione()" class="selezione font-italic" id="dal">DAL</td>
              <td onclick="selezione()" class="selezione font-italic" id="nel">NEL</td>
              <td onclick="selezione()" class="selezione font-italic" id="col">COL</td>
              <td onclick="selezione()" class="selezione font-italic" id="sul">SUL</td>
              <td>/</td>
              <td>/</td>
              <td class="border-right">/</td>
            </tr>
            <tr>
              <th scope="row" class="bg-dark text-white border-secondary">LO</th>
              <td onclick="selezione()" class="selezione font-italic" id="dello">DELLO</td>
              <td onclick="selezione()" class="selezione font-italic" id="allo">ALLO</td>
              <td onclick="selezione()" class="selezione font-italic" id="dallo">DALLO</td>
              <td onclick="selezione()" class="selezione font-italic" id="nello">NELLO</td>
              <td>/</td>
              <td onclick="selezione()" class="selezione font-italic" id="sullo">SULLO</td>
              <td>/</td>
              <td>/</td>
              <td class="border-right">/</td>
            </tr>
            <tr> 
              <th scope="row" class="bg-dark text-white border-secondary ">LA</th>
              <td onclick="selezione()" class="selezione font-italic" id="della">DELLA</td>
              <td onclick="selezione()" class="selezione font-italic" id="alla">ALLA</td>
              <td onclick="selezione()" class="selezione font-italic" id="dalla">DALLA</td>
              <td onclick="selezione()" class="selezione font-italic" id="nella">NELLA</td>
              <td>/</td>
              <td onclick="selezione()" class="selezione font-italic" id="sulla">SULLA</td>
              <td>/</td>
              <td>/</td>
              <td class="border-right">/</td>
            </tr>
            <tr>
              <th scope="row" class="bg-dark text-white border-secondary">L'</th>
              <td onclick="selezione()" class="selezione font-italic" id="dell">DELL'</td>
              <td onclick="selezione()" class="selezione font-italic" id="all">ALL'</td>
              <td onclick="selezione()" class="selezione font-italic" id="dall">DALL'</td>
              <td onclick="selezione()" class="selezione font-italic" id="nell">NELL'</td>
              <td>/</td>
              <td onclick="selezione()" class="selezione font-italic" id="sull">SULL'</td>
              <td>/</td>
              <td>/</td>
              <td class="border-right">/</td>
            </tr>
            <tr>
              <th scope="row" class="bg-dark text-white border-secondary">I</th>
              <td onclick="selezione()" class="selezione font-italic" id="dei">DEI</td>
              <td onclick="selezione()" class="selezione font-italic" id="ai">AI</td>
              <td onclick="selezione()" class="selezione font-italic" id="dai">DAI</td>
              <td onclick="selezione()" class="selezione font-italic" id="nei">NEI</td>
              <td onclick="selezione()" class="selezione font-italic" id="coi">COI</td>
              <td onclick="selezione()" class="selezione font-italic" id="sui">SUI</td>
              <td onclick="selezione()" class="selezione font-italic" id="pei">PEI</td>
              <td>/</td>
              <td class="border-right">/</td>
            </tr>
            <tr>
              <th scope="row" class="bg-dark text-white border-secondary">GLI</th>
              <td onclick="selezione()" class="selezione font-italic" id="degli">DEGLI</td>
              <td onclick="selezione()" class="selezione font-italic" id="agli">AGLI</td>
              <td onclick="selezione()" class="selezione font-italic" id="dagli">DAGLI</td>
              <td onclick="selezione()" class="selezione font-italic" id="negli">NEGLI</td>
              <td >/</td>
              <td onclick="selezione()" class="selezione font-italic" id="sugli">SUGLI</td>
              <td>/</td>
              <td>/</td>
              <td class="border-right">/</td>
            </tr>
            <tr>
              <th scope="row" class="bg-dark text-white border-secondary">LE</th>
              <td onclick="selezione()" class="selezione font-italic border-bottom" id="delle">DELLE</td>
              <td onclick="selezione()" class="selezione font-italic border-bottom" id="alle">ALLE</td>
              <td onclick="selezione()" class="selezione font-italic border-bottom" id="dalle">DALLE</td>
              <td onclick="selezione()" class="selezione font-italic border-bottom" id="nelle">NELLE</td>
              <td class="border-bottom">/</td>
              <td onclick="selezione()" class="selezione font-italic border-bottom" id="sulle">SULLE</td>
              <td class="border-bottom">/</td>
              <td class="border-bottom">/</td>
              <td class="border-right border-bottom">/</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal fine gioco -->
  <div class="portfolio-modal modal fade" data-backdrop="static" data-keyboard="false"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <!-- Portfolio Modal - Title -->
            <h2 class="portfolio-modal-title text-uppercase mb-1 mx-auto" id="titModal"></h2>
            <!-- Icon Divider -->
            <div class="divider-custom mb-5">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
              </div>
              <div class="divider-custom-line"></div>
            </div>
          </div>
          <div class="row text-left">
            <!-- Portfolio Modal - Text -->
            <div class="col-3"></div>
            <div class="col-8">
              <h4 class="mb-5" id="txtModal"></h4>
              <h5 class="text-left" id="modalFrasi"></h5>
              <div class="modal-footer p-0 m-0">
                <button type="button" onclick="nuovoGioco()" class="btn btn-secondary text-uppercase mt-5  mr-1">Altro gioco</button>
                <button type="button" onclick="giocaAncora()" class="btn btn-primary text-uppercase mt-5">Gioca Ancora</button>
              </div>
            </div>
            <div class="col"></div>                 
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
                <h3 class="mb-5"> Nel gioco si trova una tabella dove le colonne corrispondono agli articoli determinativi mentre, le righe, corrispondo alle preposizioni semplici. Usando la frase che trovi nella parte superiore dello schermo, inserisci la preposizione corretta. Con qualsiasi livello di difficoltà, il tuo compito è quello di inserire correttamente tre preposizione e, più si va avanti di livello, più diminuiscono i tentativi.</h3>
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
                <button onclick="setDifficolta(1)" type="button" class="btn btn-success btn-lg btn-block text-uppercase">facile</button>
                <button onclick="setDifficolta(2)" type="button" class="btn btn-warning text-white btn-lg btn-block text-uppercase">normale</button>
                <button onclick="setDifficolta(3)" type="button" class="btn btn-danger btn-lg btn-block text-uppercase">difficile</button>
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

      <?php
        //Connessione
        include_once(__DIR__.'/../../Connessione.php');
        $connessione = Connessione::apriConnessione();
      ?>

      $('#modalLivello').modal('show'); 
      var classeTitolo=titModal.className;

      function selezione(e){
        if (!e) var e = window.event;
        if (e.stopPropagation) e.stopPropagation();
        
        if (numFrasi==1) fineGioco(" text-success","hai vinto!","Hai inserito tutte le preposizioni giuste");
        else{
          if(frase["preposizione"]==e.target.id) {
            numFrasi--;
            i++;
            frase=frasi[i];
            fraseDiv=document.getElementById("frase");
            fraseDiv.innerHTML=frase["frase"];
          }else{
            if(tentativi>1){
              document.getElementById("vita"+(5-tentativi)).style.opacity=0.5;
              tentativi--;
            }else fineGioco(" text-danger","hai perso!","Non hai inserito tutte le preposizioni giuste");
          }
        }
      }

      function fineGioco(colore,titolo,testo){
        titModal.className=classeTitolo+colore;
        titModal.innerText=titolo;
        txtModal.innerText=testo;
        frasi.forEach(frase => {
          var s=frase['frase'].split("______");
          document.getElementById('modalFrasi').innerHTML+='- '+s[0]+'<span class="text-info text-uppercase"> '+frase["preposizione"]+'</span>'+s[1]+'<br/><br/>';
        });
        $('#myModal').modal('show');
      }

      function nuovoGioco(){ window.open("../../utente/utente.php#giochi", target="_self"); }

      function giocaAncora(){
        gioca();
        $('#myModal').modal('hide');
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
        if(difficolta==1) {
          //Facile
          frasi=[];
          <?php
            //Frasi
            $querypreposizioni="SELECT DomandaPrep.testo, RispostaPrep.testoRisposta FROM DomandaPrep, RispostaPrep WHERE DomandaPrep.difficolta=1 AND DomandaPrep.idDomandaPrep=RispostaPrep.idDomandaPrep AND RispostaPrep.flagPrep=true"; 
            $risultato1=$connessione->query($querypreposizioni);
            while($tab=$risultato1->fetch_array(MYSQLI_NUM)){
              echo 'frasi.push({"frase":"'.$tab[0].'","preposizione":"'.$tab[1].'"});';
            }
            //Numero di Frasi
            $querypreposizioni="SELECT count(DomandaPrep.testo) FROM DomandaPrep WHERE DomandaPrep.difficolta=1"; 
            $risultato1=$connessione->query($querypreposizioni);
            while($tab=$risultato1->fetch_array(MYSQLI_NUM)) echo 'numFrasi='.$tab[0];
          ?> 
          tentativi=5;
        }else if(difficolta==2){ 
          //Normale
          frasi=[];
          <?php
            //Frasi
            $querypreposizioni="SELECT DomandaPrep.testo, RispostaPrep.testoRisposta FROM DomandaPrep, RispostaPrep WHERE DomandaPrep.difficolta=2 AND DomandaPrep.idDomandaPrep=RispostaPrep.idDomandaPrep AND RispostaPrep.flagPrep=true"; 
            $risultato1=$connessione->query($querypreposizioni);
            while($tab=$risultato1->fetch_array(MYSQLI_NUM)) echo 'frasi.push({"frase":"'.$tab[0].'","preposizione":"'.$tab[1].'"});';
            //Numero di Frasi
            $querypreposizioni="SELECT count(DomandaPrep.testo) FROM DomandaPrep WHERE DomandaPrep.difficolta=2"; 
            $risultato1=$connessione->query($querypreposizioni);
            while($tab=$risultato1->fetch_array(MYSQLI_NUM)){
              echo 'numFrasi='.$tab[0];
            }  
          ?> 
          tentativi=3;
          for (let i=0; i<5-tentativi; i++) document.getElementById("vita"+i).style.display="none";
        }else{ 
          // Difficile
          frasi=[];
          <?php
            //Frasi
            $querypreposizioni="SELECT DomandaPrep.testo, RispostaPrep.testoRisposta FROM DomandaPrep, RispostaPrep WHERE DomandaPrep.difficolta=3 AND DomandaPrep.idDomandaPrep=RispostaPrep.idDomandaPrep AND RispostaPrep.flagPrep=true"; 
            $risultato1=$connessione->query($querypreposizioni);
            while($tab=$risultato1->fetch_array(MYSQLI_NUM)) echo 'frasi.push({"frase":"'.$tab[0].'","preposizione":"'.$tab[1].'"});';
            //Numero di Frasi
            $querypreposizioni="SELECT count(DomandaPrep.testo) FROM DomandaPrep WHERE DomandaPrep.difficolta=3"; 
            $risultato1=$connessione->query($querypreposizioni);
            while($tab=$risultato1->fetch_array(MYSQLI_NUM)){
              echo 'numFrasi='.$tab[0];
            }
          ?> 
          tentativi=1 
          for (let i=0; i<5-tentativi; i++) document.getElementById("vita"+i).style.display="none";
        }
        i=0;
        frase=frasi[i];
        fraseDiv=document.getElementById("frase");
        fraseDiv.innerHTML=frase["frase"];
      }

    </script>

  </body>

</html>
<?php
  $connessione->close();
?>