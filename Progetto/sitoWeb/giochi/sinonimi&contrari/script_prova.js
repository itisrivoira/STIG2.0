
var can_play = true;

var listaParole = new Array("DIFFICILE", "SOTTO", "BELLO", "GRANDE", "GIUSTO");
var words = new Array("FACILE","SOPRA","BRUTTO","PICCOLO","SBAGLIATO");



var to_guess = "";
var display_word = "";
var used_letters = "";
var wrong_guesses = 0;


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
            //wait 2 sec
            setTimeout(function(){
                var modal = document.getElementById("myModal");
                modal.style.display = "block";
                txtModal.style.color="green";
                document.getElementById("txtModal").innerText="hai vinto!";
                can_play = false;
            }, 1000);

        }
    }else{
        // incortect letter guess
        wrong_guesses += 1;
        eval("document.hm.src=\"./img/hm" + wrong_guesses + ".gif\"");

        if (wrong_guesses == 10){
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

function reset()
{

document.game.usedLetters.value = "";
used_letters = "";
wrong_guesses = 0;
document.hm.src="./img/hmstart.gif";
document.getElementById("modalLivello").style.display = "block";
}

function setDifficolta(d){
    diff=d
    document.getElementById("modalLivello").style.display = "none";
    selectWord(diff);
  }

function selectWord(diff)
{
can_play = true;
if (diff==0) {
    random_number = Math.round(Math.random() * (facile.length - 1));
    to_guess = listaParole[random_number];
    
}else if (diff==1) {
    random_number = Math.round(Math.random() * (medio.length - 1));
    to_guess = listaParole[random_number];
}else{
    random_number = Math.round(Math.random() * (difficile.length - 1));
    to_guess = listaParole[random_number];
}


// display masked word
masked_word = createMask(to_guess);
document.game.displayWord.value = masked_word;
display_word = masked_word;
}

function createMask(m)
{
mask = "";
word_lenght = m.length;

for (i = 0; i < word_lenght; i ++)
{
mask += "#";
}
return mask;
}
