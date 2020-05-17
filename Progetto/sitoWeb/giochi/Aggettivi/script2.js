
var arrayAssAggettivi=[] //verrà caricato dagli aggettivi che chiediamo al server con funzione random
var arrayAssAggettiviFinale=[]

function caricaArray(provaArrayPassato) {
    
    for (const key in provaArrayPassato) {
        arrayAssAggettivi.push({aggettivo:key,tipologia:provaArrayPassato[key]})
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
   
   switch (e.target.getAttribute('data-draggable')) {
       case "possessivi":
          
            caricaArrayFinale("possessivi",item)
            var nome = "rcorners2"
            var c=document.getElementById(nome).children
            c[0].appendChild(item)
            
        break;
        case "dimostrativi":
            caricaArrayFinale("dimostrativi",item)
            var c=document.getElementById("dimo").children
            c[0].appendChild(item)
        break;
        case "indefiniti":
            caricaArrayFinale("indefiniti",item)
            var c=document.getElementById("rcorners4").children
            c[0].appendChild(item)
        break;
        case "qualificativi":
            caricaArrayFinale("qualificativi",item)
            var c=document.getElementById("rcorners3").children
            c[0].appendChild(item)
        break;
        case "numerali":
            caricaArrayFinale("numerali",item)
            var c=document.getElementById("num").children
            c[0].appendChild(item)
        break;
        case "esclamativiInterrogativi":
            caricaArrayFinale("esclamativiInterrogativi",item)
            var c=document.getElementById("rcorners5").children
            c[0].appendChild(item)
        break;
        case "item":
            try {
                var a = e.target.parentElement
                caricaArrayFinale(a.parentElement.getAttribute("data-draggable"),item)
                var c=document.getElementById(a.parentElement.id).children
                c[0].appendChild(item)
                
              }
              catch(err) { }
           
        break;
        
   
       default:
           
           break;
   }
    

}, false);

document.addEventListener('dragend', function(e){}, false);



function fine() {
    var NumAgg = 0;
    var finito=false;

    var contAgg = document.getElementsByName("boxAggettivi")
    contAgg.forEach(divPadre => {
       var nFigliFinale = divPadre.children[0].children[0].childElementCount
       NumAgg = Number(NumAgg)+Number(nFigliFinale)
       
    });
    
    var nFigliRimasti=document.getElementById("gioco").children[1].children[0];
    console.log(nFigliRimasti.childElementCount )
    var string1 = "divDifficile"
    if (nFigliRimasti.childElementCount==1 && string1.localeCompare(nFigliRimasti.children[0].children[0].getAttribute("name"))==0) {
        var contaFigliRimasti = nFigliRimasti.children[0].children[0].childElementCount
        contaFigliRimasti = contaFigliRimasti + nFigliRimasti.children[0].children[1].childElementCount
        if (contaFigliRimasti == 0) {
            finito = true
        }else{
            //quando non ha finito in modalità difficile
            document.getElementById("modalFine").style.display = "block";
        }
    } else if(document.getElementById("gioco").children[1].children[0].childElementCount==0) {
        finito = true
    
    }else{
        //quando non ha finito in modalità facile e medio
        document.getElementById("modalFine").style.display = "block";
    }

    if(finito){
        //quando  ha finito 
        //controllo vittoria o sconfitta
        var contaGiuste = 0;
        arrayAssAggettiviFinale.forEach(oggetto => {
            var getAgg = arrayAssAggettivi.find(jsonAgg => jsonAgg.aggettivo === oggetto.aggettivo);
            document.getElementById(oggetto.aggettivo).setAttribute('draggable', false);
            if (getAgg.tipologia === oggetto.tipologia) {
                document.getElementById(oggetto.aggettivo).style.backgroundColor="green"
                contaGiuste++;
            }else{
                document.getElementById(oggetto.aggettivo).style.backgroundColor="red"
                var agg=oggetto.aggettivo
                var tipo = getAgg.tipologia
                if(agg.includes("?")){
                    document.getElementById(oggetto.aggettivo).innerText = oggetto.aggettivo + " > INTERROGATIVI"
                }else if(agg.includes("!")){
                    document.getElementById(oggetto.aggettivo).innerText = oggetto.aggettivo + " > ESCLAMATIVI"
                }else{
                    document.getElementById(oggetto.aggettivo).innerText = oggetto.aggettivo + " > " + getAgg.tipologia
                }
                
                
                
            }
            
        });

        if (contaGiuste==arrayAssAggettiviFinale.length) {
            setTimeout(function(){
                var modal = document.getElementById("myModal");
                modal.style.display = "block";
                txtModal.style.color="green";
                document.getElementById("txtModal").innerText="hai vinto!";
                
            }, 500);
        }else{
            setTimeout(function(){
                var modal = document.getElementById("myModal");
                modal.style.display = "block";
                txtModal.style.color="red";
                document.getElementById("txtModal").innerText="hai perso!";
                
            }, 500);
        }

        
    }


    


}


function caricaArrayFinale(tipologia,item) {
    if(item.parentElement.parentElement.getAttribute('data-draggable') !== null){
        

        var objNew = {aggettivo:item.id,tipologia:tipologia}
        var objOld = {aggettivo:item.id,tipologia:item.parentElement.parentElement.getAttribute('data-draggable')}

        arrayAssAggettiviFinale.splice(arrayAssAggettiviFinale.indexOf(objOld),1);
        
        arrayAssAggettiviFinale.push(objNew)

    }else{
        arrayAssAggettiviFinale.push({aggettivo:item.id,tipologia:tipologia})

    }
    
}



