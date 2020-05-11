
var arrayAssAggettivi=[] //verrà caricato dagli aggettivi che chiediamo al server con funzione random


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
            var nome = "rcorners2"
            var c=document.getElementById(nome).children
            c[0].appendChild(item)
        break;
        case "dimostrativi":
            var c=document.getElementById("dimo").children
            c[0].appendChild(item)
        break;
        case "indefiniti":
            var c=document.getElementById("rcorners4").children
            c[0].appendChild(item)
        break;
        case "qualificativi":
            var c=document.getElementById("rcorners3").children
            c[0].appendChild(item)
        break;
        case "numerali":
            var c=document.getElementById("num").children
            c[0].appendChild(item)
        break;
        case "esclamativiInterrogativi":
            var c=document.getElementById("rcorners5").children
            c[0].appendChild(item)
        break;
        case "item":
            try {
                var a = e.target.parentElement
                var c=document.getElementById(a.parentElement.id).children
                c[0].appendChild(item)
              }
              catch(err) {
              
              }
           
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
           //show modal
        }
    } else if(document.getElementById("gioco").children[1].children[0].childElementCount==0) {
        finito = true
    
    }else{
        //show modal
    }

    if(finito){
        //controllo
        
    }
    


}






