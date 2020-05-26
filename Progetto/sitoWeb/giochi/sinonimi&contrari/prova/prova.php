<?php
  include_once(__DIR__.'/../../../Connessione.php');
  $connessione = Connessione::apriConnessione();

  $query = "SELECT DomandaSinCon.parola, RispostaSinCon.testoRisposta FROM RispostaSinCon, DomandaSinCon WHERE RispostaSinCon.idRispostaSinCon = DomandaSinCon.idRispostaSinCon";
  $risultato = $connessione->query($query);
  $lista = array();
  while($row = $risultato->fetch_assoc()){
    array_push($lista, $row);
  }
  $num = array_rand($lista);
  echo $lista[$num]['parola'];
  echo $lista[$num]['testoRisposta'];

?>
