/*Punteggi di Mario Bianchi alla domanda 1 */
SELECT Utente.nome, Utente.cognome,  RispoSingola.punteggio, RispoSingola,dataRisposta
FROM Utente, RispoSingola 
WHERE Utente.idUtente = RispoSingola.idUtente
AND Utente.nome = 'Mario'  
AND Utente.cognome = 'Bianchi'
ORDER BY RispoSingola.dataRisposta;

/*Punteggio Medio degli alunni alle domande dei sinonimi e contrari già svolte*/
SELECT DomandaSinCon.testo, avg(RispoSingola.punteggio) as punteggioMedio 
FROM DomandaSinCon, DomandeTot, RispoSingola 
WHERE DomandaSinCon.idDomanda = DomandeTot.idDomanda 
AND DomandeTot.idDomanda = RispoSingola.idDomanda 
GROUP BY DomandeTot.idDomanda;

/*Mostra le informazioni su domande e risposte dei verbi*/
SELECT DomandaVerb.*, RispostaVerbi.*
FROM DomandaVerb, RispostaVerbi
WHERE DomandaVerb.idDomandaVerb = RispostaVerbi.idDomandaVerb
AND flagVerb = 'true'

/*Contare il numero delle domande nel gioco dei Verbi*/
SELECT count(DomandaVerb.idDomandaVerb)
FROM DomandaVerb