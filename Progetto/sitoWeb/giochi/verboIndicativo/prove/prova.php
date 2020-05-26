<?php
  include_once(__DIR__.'../../../../Connessione.php');
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
