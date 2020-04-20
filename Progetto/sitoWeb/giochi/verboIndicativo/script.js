var io = "sono";
var tu = "sei";
var egli = "è";
var noi  = "siamo";
var voi = "siete";
var essi = "sono";

var cont = 0;
var corrette = 0
document.addEventListener('dragstart', function(e){
    item = e.target;
    e.dataTransfer.setData('text', item.id);
}, false);

document.addEventListener('dragover', function(e){
    if(item)e.preventDefault()
}, false);

document.addEventListener('drop', function(e){
    if(e.target.getAttribute('id') == 'io' && e.dataTransfer.getAttribute('id') == 'io_drag'){
      corrette++;
      cont++;
      e.target.appendChild(item);
      e.preventDefault();
    }else if(e.target.getAttribute('id') == 'tu' && e.dataTransfer.getAttribute('id') == 'tu_drag'){
      corrette++;
      cont++;
      e.target.appendChild(item);
      e.preventDefault();
    }else if(e.target.getAttribute('id') == 'egli' && e.dataTransfer.getAttribute('id') == 'egli_drag'){
      corrette++;
      cont++;
      e.target.appendChild(item);
      e.preventDefault();
    }else if(e.target.getAttribute('id') == 'noi' && e.dataTransfer.getAttribute('id') == 'noi_drag'){
      corrette++;
      cont++;
      e.target.appendChild(item);
      e.preventDefault();
    }else if(e.target.getAttribute('id') == 'voi' && e.dataTransfer.getAttribute('id') == 'voi_drag'){
      corrette++;
      cont++;
      e.target.appendChild(item);
      e.preventDefault();
    }else if(e.target.getAttribute('id') == 'essi' && e.dataTransfer.getAttribute('id') == 'essi_drag'){
      corrette++;
      cont++;
      e.target.appendChild(item);
      e.preventDefault();
    }else{
      cont++;
      e.target.appendChild(item);
      e.preventDefault();
    }
}, false);

document.addEventListener('dragend', function(e){
    item = null;
    if(cont==6){
      const queryString = window.location.search;
      const urlParametri = new URLSearchParams(queryString);
      const livello = urlParametri.get('livello')
      var livelloDifficolta = parseInt(livello);
      var vinto=false;
      var c=0;
      alert(corrette + " " + cont);
      if(livelloDifficolta == 1 && corrette == 6){
        vinto = true;
      }else if(livelloDifficolta == 2 && corrette == 5){
        vinto = true;
      }else if(livelloDifficolta == 3 && corrette == 4){
        vinto = true;
      }

      //Modal fine gioco
      var modal = document.getElementById("myModal");
      var span = document.getElementsByClassName("close")[0];
      modal.style.display = "block";
      if(vinto){
        txtModal.style.color="green";
        document.getElementById("txtModal").innerText="hai vinto!";
      }else{
        txtModal.style.color="red";
        document.getElementById("txtModal").innerText="hai perso!";
      }
    };
}, false);

function nuovoGioco(){ window.open("../../utente/utente.html#giochi", target="_self"); }

function giocaAncora(){ window.location.reload(); }

function regole(){ document.getElementById("modalRegole").style.display = "block"; }

function chiudi(){ document.getElementById("modalRegole").style.display = "none"; }
