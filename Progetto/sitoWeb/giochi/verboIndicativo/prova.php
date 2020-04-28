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

<script>
  function inizio(event){
    var a = event.target.id
    event.dataTransfer.setData('text', a);
  }

  function fine(event){
    event.target.appendChild(document.getElementById(event.dataTransfer.getData('text')));
    var oggetto = document.getElementById(event.dataTransfer.getData('text'));
    oggetto.setAttribute('draggable',false);
    // var oggetto = document.getElementById(event.target.id);
    //
    // // Recupera l'attributo dell'oggetto trascinato
    // var pinco = oggettoo.getAttribute('data-draggable');
    //

    // Recupera l'attributo dell'oggetto contenitore
    var prova = event.target.dataset.draggable;
    alert(prova);


  }

  function passaggio(event){
    event.preventDefault();
  }
</script>




<style>
.articoli {
  float:right;
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
#target
{
    float:left;
    list-style-type:none;
    width:100%;
    height:3em;
    overflow-y:auto;
    margin:0 0.5em 0.5em 0;
    padding:0.5em;
    border:2px solid #888;
    border-radius:0.2em;
    background:#ddd;
    color:#555;
}
/* non usato */
[data-draggable="targetdiv"]
{
    float:left;
    list-style-type:none;
    width:100%;
    height: 30em;
    overflow-y:auto;
    margin:0 0.5em 0.5em 0;
    padding:0.5em;
    border:2px solid #888;
    border-radius:0.2em;
    background:#ddd;
    color:#555;
}
/* draggable items */
[data-draggable="item"]
{
    display:block;
    list-style-type:none;
    margin:0 0 2px 0;
    padding:0.2em 0.4em;
    border-radius:0.2em;
    line-height:1.3;
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
           <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#giochi">Giochi</a> <!-- Icone dei vari giochi -->
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#app">APP</a>
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
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" ><br> dei verbi</h2>
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">
        <i class="fas fa-star"></i>
      </div>
      <div class="divider-custom-line"></div>
    </div>
  </div>
  <form action="../../utente/utente.html" method="post">
    <div class="container">
      <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6">
          <p class="lead text-center">ESSERE PRESENTE</p>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col" class="text-center">Pronome</th>
                <th scope="col">Verbo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-center">IO</th>
                <td  data-draggable="io" draggable="false" class="text-center" ondrop="fine(event)" ondragover="passaggio(event)">
                </td>
              </tr>
              <tr>
                <th scope="row" class="text-center">TU</th>
                <td  data-draggable="tu" draggable="false" class="text-center" ondrop="fine(event)" ondragover="passaggio(event)">
                </td>
              </tr>
              <tr>
                <th scope="row" class="text-center">EGLI</th>
                <td  data-draggable="egli" draggable="false" class="text-center" ondrop="fine(event)" ondragover="passaggio(event)">
                </td>
              </tr>
              <tr>
                <th scope="row" class="text-center">NOI</th>
                <td  data-draggable="noi" draggable="false" class="text-center" ondrop="fine(event)" ondragover="passaggio(event)">
                </td>
              </tr>
              <tr>
                <th scope="row" class="text-center">VOI</th>
                <td  data-draggable="voi" draggable="false" class="text-center" ondrop="fine(event)" ondragover="passaggio(event)">
                </td>
              </tr>
              <tr>
                <th scope="row" class="text-center">ESSI</th>
                <td  data-draggable="essi" draggable="false" class="text-center" ondrop="fine(event)" ondragover="passaggio(event)">
                </td>
              </tr>
            </tbody>
          </table>
          </div>
        <div class="col-3">
          <br><br><br>
              <li data-draggable="item" draggable="true" class="articoli text-center" id="io_drag" ondragstart="inizio(event)">SONO</li>
              <li data-draggable="item" draggable="true" class="articoli text-center" id="tu_drag" ondragstart="inizio(event)">SEI</li>
              <li data-draggable="item" draggable="true" class="articoli text-center" id="egli_drag" ondragstart="inizio(event)">È</li>
              <li data-draggable="item" draggable="true" class="articoli text-center" id="noi_drag" ondragstart="inizio(event)">SIAMO</li>
              <li data-draggable="item" draggable="true" class="articoli text-center" id="voi_drag" ondragstart="inizio(event)">SIETE</li>
              <li data-draggable="item" draggable="true" class="articoli text-center" id="essi_drag" ondragstart="inizio(event)">SONO</li>
        </div>
      </div>
    </div>
  </form>
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
                    <h3 class="mb-5">Nel gioco sono presenti due scatole, una per "Articoli determinativi" e l'altra per "Articoli indeterminativi". Nella parte inferiore ci sono dei mattoncini, al cui interno ci sono degli articoli, determinativi e indeterminativi. Il tuo compito è di inserire i mattoncini all'interno della scatola corretta. Quando i mattoncini saranno finiti, apparirà un messaggio che ti dirà se hai vinto o hai perso, mostrandoti anche gli errori commessi. Più vai avanti con i livelli, più i mattoncini da inserire aumentano.</h3>
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
          <!-- Footer About Text -->
        </div>
      </div>
    </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Contact Form JavaScript -->
  <script src="../../js/jqBootstrapValidation.js"></script>
  <script src="../../js/contact_me.js"></script>
  <!-- Custom scripts for this template -->
  <script src="../../js/freelancer.min.js"></script>
</body>
</html>
