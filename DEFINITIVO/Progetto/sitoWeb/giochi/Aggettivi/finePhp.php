<?php
session_start();
  include_once(__DIR__.'/../../Connessione.php');
  $conn = Connessione::apriConnessione();

  if(isset($_SESSION['login_user'])){
    $mail = $_SESSION["login_user"];
    $aggettivo = $_POST ["aggettivo"];

    $rsUtente = mysqli_query($conn, "SELECT Utente.idUtente From Utente where email='".$mail."'");
    $resultUtente = mysqli_fetch_array($rsUtente, MYSQLI_ASSOC);

    $rsAgg = mysqli_query($conn, "SELECT DomandaAgg.idDomanda From DomandaAgg where DomandaAgg.testo = '".$aggettivo."'");
    $resultAgg = mysqli_fetch_array($rsAgg, MYSQLI_ASSOC);

    $idUtente = $resultUtente['idUtente'];
    $idDomanda = $resultAgg['idDomanda'];
    $punti = $_POST ['punti'];

    $data=date("Y-m-d");
    $ora = date("h:i:s");

    $temp_str = "INSERT INTO RispoSingola (dataRisposta, ora, punteggio, idDomanda, idUtente) VALUES ('$data', '$ora','".$punti."', '".$idDomanda."', '".$idUtente."')";

    if (!$conn->query($temp_str)) {
      die("Errore nell'inserimento del partecipante ".$conn->error);
    }else{
      header("location: ../../index.php");
    }


  }
 ?>
