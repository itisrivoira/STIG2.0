
var can_play = true;
var listaParole = new Array("DIFFICILE", "SOTTO", "BELLO", "GRANDE", "GIUSTO");
var words = new Array("FACILE","SOPRA","BRUTTO","PICCOLO","SBAGLIATO");

var to_guess = "";
var display_word = "";
var used_letters = "";
var wrong_guesses = 0;

const queryString = window.location.search;
const urlParametri = new URLSearchParams(queryString);
var livello = urlParametri.get('livello')
livello = parseInt(livello);
if (livello==1){
  wrong_guesses = 4;
}
if (livello==2){
  wrong_guesses = 2;
}
if (livello==3){
  wrong_guesses = 0;
}


function selectLetter(l){
    if (can_play == false){
        return;
    }

    if (used_letters.indexOf(l) != -1){
        return;
    }

    used_letters += l;
    document.game.usedLetters.value = used_letters;

    if (to_guess.indexOf(l) != -1){
        // correct letter guess
        pos = 0;
        temp_mask = display_word;

        while (to_guess.indexOf(l, pos) != -1)
        {
            pos = to_guess.indexOf(l, pos);
            end = pos + 1;

            start_text = temp_mask.substring(0, pos);
            end_text = temp_mask.substring(end, temp_mask.length);

            temp_mask = start_text + l + end_text;
            pos = end;
        }

        display_word = temp_mask;
        document.game.displayWord.value= display_word;

        if (display_word.indexOf("#") == -1)
        {
            // won
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
            txtModal.style.color="green";
            document.getElementById("txtModal").innerText="hai vinto!";
            can_play = false;
        }
    }else{
        // incortect letter guess
        wrong_guesses += 1;
        eval("document.hm.src=\"./img/hm" + wrong_guesses + ".gif\"");
        if (livello == 1 && wrong_guesses == 10) {
          // lost
          var modal = document.getElementById("myModal");
          modal.style.display = "block";


          txtModal.style.color="red";
          document.getElementById("txtModalWord").innerText="Parola --> "+to_guess;
          document.getElementById("txtModal").innerText="hai Perso!";

          can_play = false;
        }
        if (livello == 2 && wrong_guesses == 10) {
          // lost
          var modal = document.getElementById("myModal");
          modal.style.display = "block";


          txtModal.style.color="red";
          document.getElementById("txtModalWord").innerText="Parola --> "+to_guess;
          document.getElementById("txtModal").innerText="hai Perso!";

          can_play = false;
        }
        if (livello == 3 && wrong_guesses == 10) {
          // lost
          var modal = document.getElementById("myModal");
          modal.style.display = "block";


          txtModal.style.color="red";
          document.getElementById("txtModalWord").innerText="Parola --> "+to_guess;
          document.getElementById("txtModal").innerText="hai Perso!";

          can_play = false;
        }
    }
}

function reset(){
  selectWord();
  document.game.usedLetters.value = "";
  used_letters = "";
  wrong_guesses = 0;
  document.hm.src="./img/hmstart.gif";
}

function selectWord(){
  can_play = true;
  var parolaCorrente = document.querySelector("#sinonimoOcontrario").getAttribute("value");
  var posizione = listaParole.indexOf(parolaCorrente);
  to_guess = words[posizione];
  //document.game.theWord.value = to_guess;

  // display masked word
  masked_word = createMask(to_guess);
  document.game.displayWord.value = masked_word;
  display_word = masked_word;
}

function createMask(m){
  mask = "";
  word_lenght = m.length;

  for (i = 0; i < word_lenght; i ++)
  {
  mask += "#";
  }
  return mask;
}
