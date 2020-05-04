
var arrayAssociativoAggettivi=new Array();  //verrà caricato dagli aggettivi che chiediamo al server con funzione random
var arrayQualificativi=[];
var arrayPossessivi=[];
var cont=0;

document.addEventListener('dragstart', function(e){
    item = e.target;
    e.dataTransfer.setData('text', item.id);
}, false);

document.addEventListener('dragover', function(e){
    if(item) e.preventDefault();
}, false);

document.addEventListener('drop', function(e){
    if(e.target.getAttribute('data-draggable') == 'qualificativi'){
        aggiungiAggettivo(e,arrayQualificativi,arrayPossessivi);
     
    }
    if(e.target.getAttribute('data-draggable') == 'possessivi'){
        aggiungiAggettivo(e,arrayPossessivi,arrayQualificativi);
    }
    
    
    
}, false);

document.addEventListener('dragend', function(e){}, false);


function showQUAL() {
    alert(arrayQualificativi);
  }


  function showPOSS() {
    alert(arrayPossessivi);
  }

function aggiungiAggettivo(e,arrayPUSH,arrayRM){
    var agg = e.dataTransfer.getData('text');
    if(!arrayPUSH.includes(agg) ){
        if (arrayRM.includes(agg) /* lista degli array */) {
            arrayRM.splice(arrayRM.indexOf(agg),1);
        } 
        arrayPUSH.push(agg);
    }
    e.target.appendChild(item);
    e.preventDefault();
}


      