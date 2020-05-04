
var arrayAssociativoAggettivi=new Array();  //verrà caricato dagli aggettivi che chiediamo al server con funzione random
var arrayQualificativi=[];
var arrayDimostrativi=[];
var arrayNumerali=[];
var arrayIndefiniti=[];
var arrayEsclamativi=[];
var arrayInterrogativi=[];
var arrayPossessivi=[];
var cont=0;


function reset()
{

document.getElementById("modalLivello").style.display = "block";
}


function setDifficolta(d){ 
    diff=d
    document.getElementById("modalLivello").style.display = "none";
    alert(d)
  }



document.addEventListener('dragstart', function(e){
    item = e.target;
    e.dataTransfer.setData('text', item.id);
}, false);

document.addEventListener('dragover', function(e){
    if(item) e.preventDefault();
}, false);

document.addEventListener('drop', function(e){
    addAggettivo(e);


    
    
    
}, false);

document.addEventListener('dragend', function(e){}, false);

function addAggettivo(evento) {
    var tipo=evento.target.getAttribute('data-draggable')
    var arrayPrima=getArrayAggettivi(evento.dataTransfer.getData('text'))
  

    switch(tipo) {
        case "qualificativi":
            aggiungiAggettivo(evento,arrayQualificativi,arrayPrima);
          break;
        case "possessivi":
            aggiungiAggettivo(evento,arrayPossessivi,arrayPrima);
          break;
        case "dimostrativi":
            aggiungiAggettivo(evento,arrayDimostrativi,arrayPrima);
            break;
        case "numerali":
            aggiungiAggettivo(evento,arrayNumerali,arrayPrima);
            break;
        case "indefiniti":
            aggiungiAggettivo(evento,arrayIndefiniti,arrayPrima);
          break;
        case "esclamativi":
            aggiungiAggettivo(evento,arrayEsclamativi,arrayPrima);
          break;
        case "interrogativi":
            aggiungiAggettivo(evento,arrayInterrogativi,arrayPrima);
            break;

        default:
          // code block
      }


function getArrayAggettivi(agg) {
    if(arrayQualificativi.includes(agg) ){
        return arrayQualificativi;
    }
    else if(arrayDimostrativi.includes(agg) ){
        return arrayDimostrativi;
    }
    else if(arrayEsclamativi.includes(agg) ){
        return arrayEsclamativi;
    }
    else if(arrayIndefiniti.includes(agg) ){
        return arrayIndefiniti;
    }
    else if(arrayPossessivi.includes(agg) ){
        return arrayPossessivi;
    }
    else if(arrayInterrogativi.includes(agg) ){
        return arrayInterrogativi;
    }
    else if(arrayNumerali.includes(agg) ){
        return arrayNumerali;
    }
    else{
        return 0;
    }

   
}

    
}


function aggiungiAggettivo(e,arrayPUSH,arrayRM){
    var agg = e.dataTransfer.getData('text');
    if(!arrayPUSH.includes(agg) ){
        if (arrayRM!=0 /* lista degli array */) {
            arrayRM.splice(arrayRM.indexOf(agg),1);
        } 
        arrayPUSH.push(agg);
    }
    e.target.appendChild(item);
    e.preventDefault();
}
