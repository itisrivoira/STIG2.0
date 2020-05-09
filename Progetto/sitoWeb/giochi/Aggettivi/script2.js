
var arrayAggettivi=[] //verrà caricato dagli aggettivi che chiediamo al server con funzione random
var arrayQualificativi=[];
var arrayDimostrativi=[];
var arrayNumerali=[];
var arrayIndefiniti=[];
var arrayEsclamativi=[];
var arrayInterrogativi=[];
var arrayPossessivi=[];
var conta = 0;
var listaTotale=[];

function caricaArray(fileCsv) {

    for (let index = 0; index < fileCsv.length; index++) {
        var agg = fileCsv[index].aggettivo
        var tipo = fileCsv[index].tipologia
        arrayAggettivi.push({aggettivo:agg,tipologia:tipo})
    }



}





document.addEventListener('dragstart', function(e){
    item = e.target;

    e.dataTransfer.setData('text', item.id);
}, false);

document.addEventListener('dragover', function(e){
    if(item) e.preventDefault();
}, false);

document.addEventListener('drop', function(e){
    addAggettivo(e,item);





}, false);

document.addEventListener('dragend', function(e){}, false);

function addAggettivo(evento,item) {
    var tipo=evento.target.getAttribute('data-draggable')
    var arrayPrima=getArrayAggettivi(evento.dataTransfer.getData('text'))

    if (!listaTotale.includes(item)) {
        listaTotale.push(item)

    }

    switch(tipo) {
        case "qualificativi":
            aggiungiAggettivo(evento,arrayQualificativi,arrayPrima);
            controllaAggettivo(item, "qualificativi")
          break;
        case "possessivi":
            aggiungiAggettivo(evento,arrayPossessivi,arrayPrima);
            controllaAggettivo(item, "possessivi")
          break;
        case "dimostrativi":
            aggiungiAggettivo(evento,arrayDimostrativi,arrayPrima);
            controllaAggettivo(item, "dimostrativi")
            break;
        case "numerali":
            aggiungiAggettivo(evento,arrayNumerali,arrayPrima);
            controllaAggettivo(item, "numerali")
            break;
        case "indefiniti":
            aggiungiAggettivo(evento,arrayIndefiniti,arrayPrima);
            controllaAggettivo(item, "indefiniti")
          break;
        case "esclamativi":
            aggiungiAggettivo(evento,arrayEsclamativi,arrayPrima);
            controllaAggettivo(item, "esclamativi")
          break;
        case "interrogativi":
            aggiungiAggettivo(evento,arrayInterrogativi,arrayPrima);
            controllaAggettivo(item, "interrogativi")
            break;
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


function controllaAggettivo(item,tipo){

    var trovato = 0

    arrayAggettivi.forEach(element => {
        if(trovato == 0){
            if(element.tipologia == tipo){
                var string1 = item.getAttribute("id")
                var string2 = element.aggettivo

                var res = string1.localeCompare(string2)
                if(res==0){
                    item.style.backgroundColor = "green"
                    trovato = 1
                    var contaGiuste = 0;
                    if(listaTotale.length == conta){
                        listaTotale.forEach(element => {
                           if(element.style.backgroundColor=="green"){
                                contaGiuste++;
                           }
                           if(contaGiuste == conta){
                            setTimeout(function(){
                                var modal = document.getElementById("myModal");
                                modal.style.display = "block";
                                txtModal.style.color="green";
                                document.getElementById("txtModal").innerText="hai vinto!";
                            }, 1000);
                           }
                        });
                    }


                }else{
                    item.style.backgroundColor = "red"
                }

            }

        }


    });



}
