<?php 
  echo "<div class='col-4 '>
  <div class='row justify-content-center' name='boxAggettivi' > 
    <div class='border bgimg altezza border-primary my-2 '  id='rcorners2' style='background-image: url(img/poss.png);' data-draggable='possessivi' draggable='false'>
      <div class='boxAgg mt-5 mx-auto' ></div>
    </div>
  </div>
  <div class='row justify-content-center'name='boxAggettivi' > 
    <div class='border bgimg altezza border-success my-2 ' id='dimo'  style='background-image: url(img/dimo.png);' data-draggable='dimostrativi' draggable='false'>
      <div class='boxAgg mt-5 mx-auto' ></div>
    </div>
  </div>
  <div class='row justify-content-center' name='boxAggettivi'> 
    <div class='border bgimg altezza border-info my-2 '  id='rcorners4' style='background-image: url(img/indef.png);' data-draggable='indefiniti' draggable='false'>
      <div class='boxAgg mt-5 mx-auto' ></div>
    </div>
  </div>
 </div>";

if ($difficolta == 1) {
  $arrayAggFinale=getArrayAggDaStampare(10); 
    echo "<div class='col-4 ' id='gioco'>";
    echo "<div class='row ' >";
    echo "<div class='col text-center' >";
    echo "<button type='button' onclick='fine()' class='btn btn-secondary  '  >Fine</button>";
    echo "</div>";
    echo "</div>";
    echo "<div class='row mt-5 ' >";
    echo "<div class='col ' >";
    for ($i=0; $i <count($arrayAggFinale) ; $i++) { 
      echo "<div class='border rounded m-1 mx-auto text-center text-uppercase' id='$arrayAggFinale[$i]' data-draggable='item' draggable='true'>$arrayAggFinale[$i]</div>";
    }

    echo"</div>";
    echo"</div>";
    

   
  
   echo"</div>";
    
  
}elseif($difficolta == 2) {
  $arrayAggFinale=getArrayAggDaStampare(16); 
  echo "<div class='col-4 ' id='gioco'>";
  echo "<div class='row ' >";
  echo "<div class='col text-center' >";
  echo "<button type='button' onclick='fine()' class='btn btn-secondary  '  >Fine</button>";
  echo "</div>";
  echo "</div>";
  echo "<div class='row mt-5 ' >";
  echo "<div class='col ' >";
  for ($i=0; $i <count($arrayAggFinale) ; $i++) { 
    echo "<div class='border rounded m-1 mx-auto text-center text-uppercase' id='$arrayAggFinale[$i]' data-draggable='item' draggable='true'>$arrayAggFinale[$i]</div>";
  }

  echo"</div>";
  echo"</div>";
  

 

 echo"</div>";
   
}else{
  $arrayAggFinale=getArrayAggDaStampare(24); 



   echo "<div class='col-4 ' id='gioco'>";
    echo "<div class='row ' >";
    echo "<div class='col text-center' >";
    echo "<button type='button' onclick='fine()' class='btn btn-secondary  '  >Fine</button>";
    echo "</div>";
    echo "</div>";
    echo "<div class='row mt-5 ' >";
    echo "<div class='col ' >";
    echo "<div class='row ' >";
   echo"<div class='col-6 my-auto' name='divDifficile'>";
   for ($i=0; $i <count($arrayAggFinale)/2 ; $i++) { 
     echo "<div class='border rounded m-1 mx-auto text-center text-uppercase' id='$arrayAggFinale[$i]' data-draggable='item' draggable='true'>$arrayAggFinale[$i]</div>";
   }
   echo"</div>";
   echo"<div class='col-6 my-auto' name='divDifficile' >";
   for ($i=count($arrayAggFinale)/2; $i <count($arrayAggFinale) ; $i++) { 
     echo "<div class='border rounded m-1 mx-auto text-center text-uppercase' id='$arrayAggFinale[$i]' data-draggable='item' draggable='true'>$arrayAggFinale[$i]</div>";
   }
   echo"</div>";

   echo"</div>";

    echo"</div>";
    echo"</div>";
    

   
  
   echo"</div>";






   


   
   
  
 
}

function getArrayAggDaStampare($nAgg){
  include_once(__DIR__.'/../../Connessione.php');
  $conn = Connessione::apriConnessione();
  $conn->query("SET NAMES 'utf8'");
  $contQualificativi=1;
  $contIndefiniti=1;
  $contPossessivi=1;
  $contNumerali=1;
  $contIntEscl=1;
  $contDimostrativi=1;
  $arrayAggTrovati=array();

  
  for ($i=0; $i < $nAgg ; $i++) { 
    $nRand=rand(1, 5); //cambiare al 6
    $trovato=true;
    
      switch ($nRand) {
        case 1:
          //controllare se > 5 non entra
          $query = getQuery("qualificativi");
          $agg = mysqli_query($conn, $query);
          $contQualificativi++;
          $trovato=false;
          break;
        case 2:
          $query = getQuery("dimostrativi");
          $agg = mysqli_query($conn, $query);
          $contDimostrativi++;
          $trovato=false;
          break;
        case 3:
          $query = getQuery("indefiniti");
          $agg = mysqli_query($conn, $query);
          $contIndefiniti++;
          $trovato=false;
        break;
        case 4:
          $query = getQuery("numerali");
          $agg = mysqli_query($conn, $query);
          $contNumerali++;
          $trovato=false;
        break;
        case 5:
          $query = getQuery("possessivi");
          $agg = mysqli_query($conn, $query);
          $contPossessivi++;
          $trovato=false;
        break;
        case 6:
          $contIntEscl++; //da fare bene
        break;
      }
      
    
   
    while($rowAgg = mysqli_fetch_array($agg)){
      //controllare se già presente non salva e rifare il ciclo
      array_push($arrayAggTrovati,$rowAgg[0]);
    break;
    }

   
  }

  return $arrayAggTrovati;
}

function getQuery($tipo){
  return "SELECT DomandaAgg.testo, RispostaAgg.testoRisposta 
  From RispostaAgg, DomandaAgg 
  Where RispostaAgg.idRispostaAgg = DomandaAgg.idRispostaAgg
  AND RispostaAgg.testoRisposta = '".$tipo."'
  ORDER BY RAND()";
}




echo "<div class='col-4 '>
  <div class='row justify-content-center'name='boxAggettivi' > 
    <div class='border bgimg altezza border-danger my-2 '  id='rcorners3' style='background-image: url(img/qual.png);'data-draggable='qualificativi' draggable='false' >
      <div class='boxAgg mt-5 mx-auto' ></div>
    </div>
  </div>
  <div class='row justify-content-center' name='boxAggettivi' > 
    <div class='border bgimg altezza border-secondary my-2 '  id='num' style='background-image: url(img/num.png);' data-draggable='numerali' draggable='false'>
      <div class='boxAgg mt-5 mx-auto' ></div>
    </div>
  </div>
  <div class='row justify-content-center' name='boxAggettivi'> 
    <div class='border bgimgEsclInterr altezza border-warning my-2 '  id='rcorners5' ' data-draggable='esclamativiInterrogativi' draggable='false'>
      <div class='boxAgg  mt-5 mx-auto' ></div>
    </div>
  </div>
 </div>";


?>