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
<!-- DA SPOSTARE DENTRO UN FILE JS -->
<script>
(function()
{

    //exclude older browsers by the features we need them to support
    //and legacy opera explicitly so we don't waste time on a dead browser
    if
    (
        !document.querySelectorAll
        ||
        !('draggable' in document.createElement('span'))
        ||
        window.opera
    )
    { return; }

    //get the collection of draggable items and add their draggable attribute
    for(var
        items = document.querySelectorAll('[data-draggable="item"]'),
        len = items.length,
        i = 0; i < len; i ++)
    {
        items[i].setAttribute('draggable', 'true');
    }

    //variable for storing the dragging item reference
    //this will avoid the need to define any transfer data
    //which means that the elements don't need to have IDs
    var item = null;

    //dragstart event to initiate mouse dragging
    document.addEventListener('dragstart', function(e)
    {
        //set the item reference to this element
        item = e.target;

        //we don't need the transfer data, but we have to define something
        //otherwise the drop action won't work at all in firefox
        //most browsers support the proper mime-type syntax, eg. "text/plain"
        //but we have to use this incorrect syntax for the benefit of IE10+
        e.dataTransfer.setData('text', '');

    }, false);

    //dragover event to allow the drag by preventing its default
    //ie. the default action of an element is not to allow dragging
    document.addEventListener('dragover', function(e)
    {
        if(item)
        {
            e.preventDefault();
        }

    }, false);

    //drop event to allow the element to be dropped into valid targets
    document.addEventListener('drop', function(e)
    {
        //if this element is a drop target, move the item here
        //then prevent default to allow the action (same as dragover)
        if(e.target.getAttribute('data-draggable') == 'target')
        {
            e.target.appendChild(item);

            e.preventDefault();
        }

    }, false);

    //dragend event to clean-up after drop or abort
    //which fires whether or not the drop target was valid
    document.addEventListener('dragend', function(e)
    {
        item = null;

    }, false);

})();
</script>
<style>
[data-draggable="target"]
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
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br><br><br>
  <div class="container">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><br>Sinonimi & Contrari</h2>
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
          <table class="table table-hover">
            <thead>
              <tr>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-center">SEMPLICE</th>
                <td>
                  <ol data-draggable="target" class="text-center">
                  </ol>
                </td>
              </tr>
              <tr>
                <th scope="row" class="text-center">IMPORTANTE</th>
                <td>
                  <ol data-draggable="target" class="text-center">
                  </ol>
                </td>
              </tr>
              <tr>
                <th scope="row" class="text-center">CONFERMARE</th>
                <td>
                  <ol data-draggable="target" class="text-center">
                  </ol>
                </td>
              </tr>
              <tr>
                <th scope="row" class="text-center">PROBLEMA</th>
                <td>
                  <ol data-draggable="target" class="text-center">
                  </ol>
                </td>
              </tr>
              <tr>
                <th scope="row" class="text-center">BUONO</th>
                <td>
                  <ol data-draggable="target" class="text-center">
                  </ol>
                </td>
              </tr>
              <tr>
                <th scope="row" class="text-center">TIMIDO</th>
                <td>
                  <ol data-draggable="target" class="text-center">
                  </ol>
                </td>
              </tr>
            </tbody>
          </table>
          </div>
        <div class="col-3">
          <div class="container">
            <ol data-draggable="targetdiv">
              <li data-draggable="item" draggable="true">GRAVE</li>
              <li data-draggable="item" draggable="true">NEGARE</li>
              <li data-draggable="item" draggable="true">QUESITO</li>
              <li data-draggable="item" draggable="true">CATTIVO</li>
              <li data-draggable="item" draggable="true">DIFFICILE</li>
              <li data-draggable="item" draggable="true">AUDACE</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="form-group text-center">
        <button type="submit" class="btn btn-primary btn-xl" id="inviaRisultato">CONFERMA</button>
      </div>
    </div>
  </form>




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
