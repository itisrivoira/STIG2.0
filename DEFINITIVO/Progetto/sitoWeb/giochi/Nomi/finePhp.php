<?php
  session_start();
  include_once(__DIR__.'/../../Connessione.php');
  $conn = Connessione::apriConnessione();

  if(isset($_SESSION['login_user'])){
    $mail = $_SESSION["login_user"];
    $nome = $_POST["parola"];

    $rsUtente = mysqli_query($conn, "SELECT Utente.idUtente From Utente where email='".$mail."'");
    $resultUtente = mysqli_fetch_array($rsUtente, MYSQLI_ASSOC);

    $rsRisNome = mysqli_query($conn, "SELECT RispostaNomi.idRispostaNomi From RispostaNomi where RispostaNomi.testoRisposta = '".$nome."'");
    $resultRisNome = mysqli_fetch_array($rsRisNome, MYSQLI_ASSOC);

    $idRisposta = $resultRisNome["idRispostaNomi"];

    $rsNome = mysqli_query($conn, "SELECT DomandaNomi.idDomanda From DomandaNomi where DomandaNomi.idRispostaNomi = '".$idRisposta."'");
    $resultNome = mysqli_fetch_array($rsNome, MYSQLI_ASSOC);

    $idUtente = $resultUtente['idUtente'];
    $idDomanda = $resultNome['idDomanda'];
    $punti = $_POST['punti'];

    $data = date("Y-m-d");
    $ora = date("h:i:s");

    $temp_str = "INSERT INTO RispoSingola (dataRisposta, ora, punteggio, idDomanda, idUtente) VALUES ('$data', '$ora','".$punti."', '".$idDomanda."', '".$idUtente."')";


    if (!$conn->query($temp_str)) {
      die("Errore nell'inserimento del partecipante ".$conn->error);
    }else{
      header("location: ../../index.php");
    }


  }
 ?>
