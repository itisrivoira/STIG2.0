<?php
// Salvo il DataBase, Password, user, host
$db='5C_STIG';
$host='127.0.0.1';
$user='root';
$psw='';

//Connessione al DB
$connessione= new mysqli($host, $user, $psw, $db);

//Controllo Connessione
if($connessione->connect_error){
  echo "La connessione non è andata a buon fine!". $connessione->connect_error.".";
}
$connessione->query("SET NAMES 'utf8'");
?>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col"></th>
        <th scope="col">ID GIOCO</th>
        <th scope="col">NOME</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contatore=0;
            $query="SELECT * FROM Gioco";
            $risultatoquery1=$connessione->query($query);
            while($tab=$risultatoquery1->fetch_array(MYSQLI_NUM)){
              $contatore+=1;
              echo <<< TABELLAGIOCHI
              <tr>
              <th scope="row">$contatore</th>
              <td>$tab[0]</td>
              <td>$tab[1]</td>
              </tr>
TABELLAGIOCHI;
            }
        ?>
    </tbody>
</table>
<br>
<br>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col"></th>
        <th scope="col">ID UTENTE</th>
        <th scope="col">NOME</th>
        <th scope="col">COGNOME</th>
        <th scope="col">TIPOLOGIA</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM Utente";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLAUTENTE
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
                <td>$tab[3]</td>
              </tr>
TABELLAUTENTE;
            }
        ?>
    </tbody>
</table>
<br>
<br>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col"></th>
        <th scope="col">ID Sede</th>
        <th scope="col">NOME</th>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
    </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM Sede";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLASEDE
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
                <td>$tab[3]</td>
              </tr>
TABELLASEDE;
            }
        ?>
    </tbody>
</table>
<br>
<br>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col"></th>
        <th scope="col">ID Sede</th>
        <th scope="col">ID Utente</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM Frequenta";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLAFREQUENTA
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
              </tr>
TABELLAFREQUENTA;
            }
        ?>
    </tbody>
</table>
<br>
<br>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col"></th>
        <th scope="col">ID Giocata</th>
        <th scope="col">Data</th>
        <th scope="col">Ora</th>
        <th scope="col">ID Gioco</th>
        <th scope="col">ID Utente</th>
        <th scope="col">Punteggio</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM Gioca";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLAGIOCA
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
                <td>$tab[3]</td>
                <td>$tab[4]</td>
                <td>$tab[5]</td>
              </tr>
TABELLAGIOCA;
            }
        ?>
    </tbody>
</table>
<br>
<br>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col"></th>
        <th scope="col">ID Domanda</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM DomandeTot";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLADOMANDETOT
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
              </tr>
TABELLADOMANDETOT;
            }
        ?>
    </tbody>
</table>
<br>
<br>
<table class="table">
    <thead class="thead-dark">
      <tr>
          <th scope="col"></th>
          <th scope="col">ID RispoSingola</th>
          <th scope="col">Data</th>
          <th scope="col">Ora</th>
          <th scope="col">Punteggio</th>
          <th scope="col">ID Domanda</th>
          <th scope="col">ID Utente</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM RispoSingola";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLARISPOSINGOLA
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
                <td>$tab[3]</td>
                <td>$tab[4]</td>
                <td>$tab[5]</td>
              </tr>
TABELLARISPOSINGOLA;
            }
        ?>
    </tbody>
</table>
<br>
<br>
<table class="table">
    <thead class="thead-dark">
      <tr>
          <th scope="col"></th>
          <th scope="col">ID DomandaAgg</th>
          <th scope="col">Punti</th>
          <th scope="col">Testo</th>
          <th scope="col">Difficolta</th>
          <th scope="col">Versione</th>
          <th scope="col">ID Gioco</th>
          <th scope="col">ID Domanda</th>
          <th scope="col">ID RispostaAgg</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM DomandaAgg";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLADOMANDAAGG
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
                <td>$tab[3]</td>
                <td>$tab[4]</td>
                <td>$tab[5]</td>
                <td>$tab[6]</td>
                <td>$tab[7]</td>
              </tr>
TABELLADOMANDAAGG;
            }
        ?>
    </tbody>
</table>

<table class="table">
    <thead class="thead-dark">
      <tr>
          <th scope="col"></th>
          <th scope="col">ID RispostaAgg</th>
          <th scope="col">Punti</th>
          <th scope="col">Testo Risposta</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM RispostaAgg";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLARISPOSTAAGG
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
              </tr>
TABELLARISPOSTAAGG;
            }
        ?>
    </tbody>
</table>
<br>
<br>

<table class="table">
    <thead class="thead-dark">
      <tr>
          <th scope="col"></th>
          <th scope="col">ID DomandaPrep</th>
          <th scope="col">Punti</th>
          <th scope="col">Testo</th>
          <th scope="col">Difficolta</th>
          <th scope="col">Versione</th>
          <th scope="col">ID Gioco</th>
          <th scope="col">ID Domanda</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM DomandaPrep";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLADOMANDAPREP
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
                <td>$tab[3]</td>
                <td>$tab[4]</td>
                <td>$tab[5]</td>
                <td>$tab[6]</td>
              </tr>
TABELLADOMANDAPREP;
            }
        ?>
    </tbody>
</table>

<table class="table">
    <thead class="thead-dark">
      <tr>
          <th scope="col"></th>
          <th scope="col">ID RispostaPrep</th>
          <th scope="col">Punti</th>
          <th scope="col">Testo Risposta</th>
          <th scope="col">Flag</th>
          <th scope="col">ID Domanda</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM RispostaPrep";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLARISPOSTAPREP
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
                <td>$tab[3]</td>
                <td>$tab[4]</td>
              </tr>
TABELLARISPOSTAPREP;
            }
        ?>
    </tbody>
</table>

<br>
<br>

<table class="table">
    <thead class="thead-dark">
      <tr>
          <th scope="col"></th>
          <th scope="col">ID DomandaVerbi</th>
          <th scope="col">Punti</th>
          <th scope="col">Testo</th>
          <th scope="col">Difficolta</th>
          <th scope="col">Versione</th>
          <th scope="col">ID Gioco</th>
          <th scope="col">ID Domanda</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM DomandaVerb";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLADOMANDAVERBI
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
                <td>$tab[3]</td>
                <td>$tab[4]</td>
                <td>$tab[5]</td>
                <td>$tab[6]</td>
              </tr>
TABELLADOMANDAVERBI;
            }
        ?>
    </tbody>
</table>

<table class="table">
    <thead class="thead-dark">
      <tr>
          <th scope="col"></th>
          <th scope="col">ID RispostaVerbi</th>
          <th scope="col">Punti</th>
          <th scope="col">Testo Risposta</th>
          <th scope="col">Flag</th>
          <th scope="col">ID Domanda</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM RispostaVerbi";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLARISPOSTAVERBI
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
                <td>$tab[3]</td>
                <td>$tab[4]</td>
              </tr>
TABELLARISPOSTAVERBI;
            }
        ?>
    </tbody>
</table>

<br>
<br>

<table class="table">
    <thead class="thead-dark">
      <tr>
          <th scope="col"></th>
          <th scope="col">ID DomandaSinCon</th>
          <th scope="col">Punti</th>
          <th scope="col">Testo</th>
          <th scope="col">Difficolta</th>
          <th scope="col">Versione</th>
          <th scope="col">ID RispostaSinCon</th>
          <th scope="col">ID Gioco</th>
          <th scope="col">ID Domanda</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM DomandaSinCon";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLADOMANDASINCON
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
                <td>$tab[3]</td>
                <td>$tab[4]</td>
                <td>$tab[5]</td>
                <td>$tab[6]</td>
                <td>$tab[7]</td>
              </tr>
TABELLADOMANDASINCON;
            }
        ?>
    </tbody>
</table>

<table class="table">
    <thead class="thead-dark">
      <tr>
          <th scope="col"></th>
          <th scope="col">ID RispostaSinCon</th>
          <th scope="col">Punti</th>
          <th scope="col">Testo Risposta</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM RispostaSinCon";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLARISPOSTAVERBI
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
              </tr>
TABELLARISPOSTAVERBI;
            }
        ?>
    </tbody>
</table>

<br>
<br>

<table class="table">
    <thead class="thead-dark">
      <tr>
          <th scope="col"></th>
          <th scope="col">ID DomandaNomi</th>
          <th scope="col">Punti</th>
          <th scope="col">Testo</th>
          <th scope="col">Difficolta</th>
          <th scope="col">Versione</th>
          <th scope="col">ID RispostaNomi</th>
          <th scope="col">ID Gioco</th>
          <th scope="col">ID Domanda</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM DomandaNomi";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLADOMANDANOMI
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
                <td>$tab[3]</td>
                <td>$tab[4]</td>
                <td>$tab[5]</td>
                <td>$tab[6]</td>
                <td>$tab[7]</td>
              </tr>
TABELLADOMANDANOMI;
            }
        ?>
    </tbody>
</table>

<table class="table">
    <thead class="thead-dark">
      <tr>
          <th scope="col"></th>
          <th scope="col">ID RispostaNomi</th>
          <th scope="col">Punti</th>
          <th scope="col">Testo Risposta</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM RispostaNomi";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLARISPOSTANOMI
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
              </tr>
TABELLARISPOSTANOMI;
            }
        ?>
    </tbody>
</table>

<br>
<br>

<table class="table">
    <thead class="thead-dark">
      <tr>
          <th scope="col"></th>
          <th scope="col">ID DomandaArticoli</th>
          <th scope="col">Punti</th>
          <th scope="col">Testo</th>
          <th scope="col">Difficolta</th>
          <th scope="col">Versione</th>
          <th scope="col">ID Gioco</th>
          <th scope="col">ID Domanda</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM DomandaArticoli";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLADOMANDAARTICOLI
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
                <td>$tab[3]</td>
                <td>$tab[4]</td>
                <td>$tab[5]</td>
                <td>$tab[6]</td>
              </tr>
TABELLADOMANDAARTICOLI;
            }
        ?>
    </tbody>
</table>

<table class="table">
    <thead class="thead-dark">
      <tr>
          <th scope="col"></th>
          <th scope="col">ID RispostaArticoli</th>
          <th scope="col">Punti</th>
          <th scope="col">Testo Risposta</th>
          <th scope="col">Flag</th>
          <th scope="col">ID Domanda</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $contatore1 = 0;
            $query = "SELECT * FROM RispostaArticoli";
            $risultatoquery2 = $connessione->query($query);
            while($tab = $risultatoquery2->fetch_array(MYSQLI_NUM)){
              $contatore1+=1;
              echo <<< TABELLARISPOSTAARTICOLI
              <tr>
                <th scope="row">$contatore1</th>
                <td>$tab[0]</td>
                <td>$tab[1]</td>
                <td>$tab[2]</td>
                <td>$tab[3]</td>
                <td>$tab[4]</td>
              </tr>
TABELLARISPOSTAARTICOLI;
            }
            $connessione->close();
        ?>
    </tbody>
</table>

</html>
