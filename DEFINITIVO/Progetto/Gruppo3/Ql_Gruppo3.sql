/*Nome e cognome di tutti gli utenti che frequentano l'ITIS*/
SELECT Utente.nome, Utente.cognome
FROM Utente, Frequenta
Where Frequenta.idSede='ITISRIVOIRA'
AND Frequenta.idUtente=Utente.idUtente
ORDER BY Utente.cognome;

/*Numero di persone che Frequentano il DENINA*/
SELECT Sede.idSede, COUNT(Frequenta.idSede) AS NumeroUtenti 
FROM Sede, Frequenta
Where Frequenta.idSede='DENINA'
AND Frequenta.idSede=Sede.idSede;

/*Sommare i punti totali delle domande delle preposizioni*/
SELECT SUM(DomandaPrep.punti) AS PuntiTotalipreposizioni 
FROM DomandaPrep;

/*Contare i numeri di giochi*/
SELECT COUNT(Gioco.idGioco) AS ContaGiochi
FROM Gioco;