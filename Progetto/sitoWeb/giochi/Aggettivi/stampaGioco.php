<?php 
if ($difficolta == 1) {
    
    echo"<div class='col-3  '></div>";
  for ($i=0; $i < 2; $i++) { 
    $listaaggettivi = <<< LISTA
    <div class="col-3 " id="gioco">
<div class='border rounded m-1 mx-auto text-center' id='mio' data-draggable='item' draggable='true'>mio</div>
<div class='border rounded m-1 mx-auto text-center' id='tuo' data-draggable='item' draggable='true'>tuo</div>
<div class='border rounded m-1 mx-auto text-center' id='Bello' data-draggable='item' draggable='true'>bello</div>
<div class='border rounded m-1 mx-auto text-center' id='Azzurro' data-draggable='item' draggable='true'>azzurro</div>
<div class='border rounded m-1 mx-auto text-center' id='diverso' data-draggable='item' draggable='true'>diverso</div>
</div>
<script>conta=conta+5</script>

LISTA;


echo $listaaggettivi;

  }
}elseif($difficolta == 2) {
  for ($i=0; $i < 4; $i++) { 
    $listaaggettivi = <<< LISTA
    <div class="col-3  ">
<div class='border rounded m-1 mx-auto text-center' id='1' data-draggable='item' draggable='true'>1</div>
<div class='border rounded m-1 mx-auto text-center' id='2' data-draggable='item' draggable='true'>2</div>
<div class='border rounded m-1 mx-auto text-center' id='3' data-draggable='item' draggable='true'>3</div>

</div>

LISTA;
echo $listaaggettivi;
  }
   
}else{
  for ($i=0; $i < 4; $i++) { 
    $listaaggettivi = <<< LISTA
    <div class="col-3  ">
<div class='border rounded m-1 mx-auto text-center' id='1' data-draggable='item' draggable='true'>1</div>
<div class='border rounded m-1 mx-auto text-center' id='2' data-draggable='item' draggable='true'>2</div>
<div class='border rounded m-1 mx-auto text-center' id='1' data-draggable='item' draggable='true'>1</div>
<div class='border rounded m-1 mx-auto text-center' id='3' data-draggable='item' draggable='true'>3</div>
<div class='border rounded m-1 mx-auto text-center' id='1' data-draggable='item' draggable='true'>1</div>
</div>

LISTA;
echo $listaaggettivi;

}
}




?>