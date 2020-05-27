/*Risposte corrette delle domande aggettivi*/
Select DomandaAgg.testo, RispostaAgg.testoRisposta 
From DomandaAgg, RispostaAgg 
Where DomandaAgg.idDomandaAgg = RispostaAgg.idDomandaAgg 
And RispostaAgg.flagAgg = true;

/*alunni che hanno svolto la domanda 1 degli aggettivi*/
Select Utente.tipologia, Utente.Nome, Utente.Cognome, RispoSingola.punteggio 
From Utente, RispoSingola 
Where RispoSingola.idDomanda = 'DomandaAggettivi001' 
And Utente.idUtente = RispoSingola.idUtente
And Utente.tipologia = 'Alunno';

/*Punteggio di Marco Rossi alla domanda 1 degli aggettivi fatta il 2020-03-20*/
Select Utente.nome, Utente.cognome,  RispoSingola.punteggio 
From Utente, RispoSingola 
Where Utente.idUtente = RispoSingola.idUtente 
And RispoSingola.dataRisposta = '2020-03-20' 
And Utente.nome = 'Marco'  
And Utente.cognome = 'Rossi';

/*Punteggio Medio degli alunni alle domande degli aggettivi gia svolte*/
Select DomandaAgg.testo, avg(RispoSingola.punteggio) as punteggioMedio 
From DomandaAgg, DomandeTot, RispoSingola 
Where DomandaAgg.idDomanda = DomandeTot.idDomanda 
And DomandeTot.idDomanda = RispoSingola.idDomanda 
Group By DomandeTot.idDomanda;