
var can_play = true;
var facile = new Array("CANE", "CASA");  //sostantivi con poche lettere
var medio = new Array("ALBERO","GENTE"); //sostantivi con lettere normali
var difficile = new Array("ZUZZURELLONE","ALBERTOFRANCO"); //sostantivi con tante lettere

var to_guess = "";
var display_word = "";
var used_letters = "";
var wrong_guesses = 4;


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

            $ (document).ready(function() {
            return $.ajax({
                url: 'finePhp.php',
                type: 'POST',
                data: ({parola: to_guess, punti:5}),
                });
            });

        }
    }else{
        // incortect letter guess
        wrong_guesses += 1;
        eval("document.hm.src=\"img/hm" + wrong_guesses + ".gif\"");

        if (wrong_guesses == 10){
            // lost
            setTimeout(function(){
                var modal = document.getElementById("myModal");
            modal.style.display = "block";


            txtModal.style.color="red";
            document.getElementById("txtModalWord").innerText="Parola --> "+to_guess;
            document.getElementById("txtModal").innerText="hai Perso!";

            $ (document).ready(function() {
            return $.ajax({
                url: 'finePhp.php',
                type: 'POST',
                data: ({parola: to_guess, punti:0}),
                });
            });

            can_play = false;
            }, 1000);

        }
    }
}

function reset()
{

document.game.usedLetters.value = "";
used_letters = "";
wrong_guesses = 4;
document.hm.src="./img/hm4.gif";
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
    to_guess = facile[random_number];
    alert(to_guess)

}else if (diff==1) {
    random_number = Math.round(Math.random() * (medio.length - 1));
    to_guess = medio[random_number];
    alert(to_guess)
}else{
    random_number = Math.round(Math.random() * (difficile.length - 1));
    to_guess = difficile[random_number];
    alert(to_guess)
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
