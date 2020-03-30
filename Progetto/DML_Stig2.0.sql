/*Ciao, ho fatto le continuato a fare le tabelle, mancano solo la tabella 'Gioca', Verbi e SinCon*/
/*Al DDL Ho aggiunto un campo testoRisposta per mettere il testo*/
/*Alla fine provate Grazie*/

INSERT INTO Sede VALUES('ITISRIVOIRA','ITIS RIVOIRA','itisrivoira@denina.gov.it','017586229');
INSERT INTO Sede VALUES('PELLICO','PELLICO','pellico@denina.gov.it', '017542458');
INSERT INTO Sede VALUES('DENINA','CARLO DENINA','denina@denina.gov.it','017543625');

INSERT INTO Utente VALUES('utente001','Marco','Rossi','Alunno');
INSERT INTO Utente VALUES('utente002','Pietro','Verdi', 'Insegnante');
INSERT INTO Utente VALUES('utente003','Alessia','Gialli','Amministratore');
INSERT INTO Utente VALUES('utente004','Davide','Ricci','Alunno');
INSERT INTO Utente VALUES('utente005','Beatrice','Conti', 'Insegnante');
INSERT INTO Utente VALUES('utente006','Monica','Fontana','Alunno');
INSERT INTO Utente VALUES('utente007','Mattia','Costa','Alunno');
INSERT INTO Utente VALUES('utente008','Luca','Bianchi', 'Insegnante');
INSERT INTO Utente VALUES('utente009','Pietro','Ferrari','Amministratore');

/*tabella Relazione Sede Utente*/
INSERT INTO Frequenta VALUES('ITISRIVOIRA', 'utente001');
INSERT INTO Frequenta VALUES('PELLICO', 'utente002');
INSERT INTO Frequenta VALUES('ITISRIVOIRA', 'utente003');
INSERT INTO Frequenta VALUES('PELLICO', 'utente004');
INSERT INTO Frequenta VALUES('DENINA', 'utente005');
INSERT INTO Frequenta VALUES('DENINA', 'utente006');
INSERT INTO Frequenta VALUES('DENINA', 'utente007');
INSERT INTO Frequenta VALUES('PELLICO', 'utente008');
INSERT INTO Frequenta VALUES('DENINA', 'utente009');

/*Tabella DomandeTot*/
INSERT INTO DomandeTot VALUES('DomandaArticolo001');
INSERT INTO DomandeTot VALUES('DomandaArticolo002');
INSERT INTO DomandeTot VALUES('DomandaArticolo003');
INSERT INTO DomandeTot VALUES('DomandaArticolo004');
INSERT INTO DomandeTot VALUES('DomandaArticolo005');
INSERT INTO DomandeTot VALUES('DomandaArticolo006');
INSERT INTO DomandeTot VALUES('DomandaArticolo007');
INSERT INTO DomandeTot VALUES('DomandaArticolo008');
INSERT INTO DomandeTot VALUES('DomandaArticolo009');

INSERT INTO DomandeTot VALUES('Domandapreposizione001'); 
INSERT INTO DomandeTot VALUES('Domandapreposizione002');
INSERT INTO DomandeTot VALUES('Domandapreposizione003');

INSERT INTO DomandeTot VALUES('DomandaAggettivi001');
INSERT INTO DomandeTot VALUES('DomandaAggettivi002');
INSERT INTO DomandeTot VALUES('DomandaAggettivi003');
INSERT INTO DomandeTot VALUES('DomandaAggettivi004');

INSERT INTO DomandeTot VALUES('DomandaNome001');
INSERT INTO DomandeTot VALUES('DomandaNome002');
INSERT INTO DomandeTot VALUES('DomandaNome003');
INSERT INTO DomandeTot VALUES('DomandaNome004');

INSERT INTO DomandeTot VALUES('DomandaVerbi001');
INSERT INTO DomandeTot VALUES('DomandaVerbi002');
INSERT INTO DomandeTot VALUES('DomandaVerbi003');
INSERT INTO DomandeTot VALUES('DomandaVerbi004');

INSERT INTO DomandeTot VALUES('DomandaSinCon001');
INSERT INTO DomandeTot VALUES('DomandaSinCon002');
INSERT INTO DomandeTot VALUES('DomandaSinCon003');
INSERT INTO DomandeTot VALUES('DomandaSinCon004');

/*Giochi*/

INSERT INTO Gioco VALUES('GiocoArticoli', 'The Prepositions s Battle','REGOLE');
INSERT INTO Gioco VALUES('GiocoPreposizioni', 'Drag The Article','REGOLE');
INSERT INTO Gioco VALUES('GiocoAggettivi', 'Ombre', 'REGOLE');
INSERT INTO Gioco VALUES('GiocoNomi', 'Cruciverba', 'REGOLE');
INSERT INTO Gioco VALUES('GiocoVerbi', 'Viaggio nel tempo dei Verbi', 'REGOLE');
INSERT INTO Gioco VALUES('GiocoSinCon', 'Occhio all'Impiccato', 'REGOLE');

/*Domanda Articoli*/

INSERT INTO DomandaArticoli VALUES('domanda001',5,'un','Normale','Versione 1.0','GiocoArticoli','DomandaArticolo001');
INSERT INTO DomandaArticoli VALUES('domanda002',5,'uno','Normale','Versione 1.0','GiocoArticoli','DomandaArticolo002');
INSERT INTO DomandaArticoli VALUES('domanda003',5,'una','Normale','Versione 1.0','GiocoArticoli','DomandaArticolo003');
INSERT INTO DomandaArticoli VALUES('domanda004',5,'il','Normale','Versione 1.0','GiocoArticoli','DomandaArticolo004');
INSERT INTO DomandaArticoli VALUES('domanda005',5,'lo','Normale','Versione 1.0','GiocoArticoli','DomandaArticolo005');
INSERT INTO DomandaArticoli VALUES('domanda006',5,'la','Normale','Versione 1.0','GiocoArticoli','DomandaArticolo006');
INSERT INTO DomandaArticoli VALUES('domanda007',5,'i','Normale','Versione 1.0','GiocoArticoli','DomandaArticolo007');
INSERT INTO DomandaArticoli VALUES('domanda008',5,'gli','Normale','Versione 1.0','GiocoArticoli','DomandaArticolo008');
INSERT INTO DomandaArticoli VALUES('domanda009',5,'le','Normale','Versione 1.0','GiocoArticoli','DomandaArticolo009');

/*Risposta Articoli*/
/*Scatola 0 determinativi Scatola1 Indeterminativi*/
INSERT INTO RispostaArticoli VALUES('risposta001',5,'Scatola1', true,'domanda001');
INSERT INTO RispostaArticoli VALUES('risposta002',5,'Scatola1', true,'domanda002');
INSERT INTO RispostaArticoli VALUES('risposta003',5,'Scatola1', true,'domanda003');
INSERT INTO RispostaArticoli VALUES('risposta004',5,'Scatola0', true,'domanda004');
INSERT INTO RispostaArticoli VALUES('risposta005',5,'Scatola0', true,'domanda005');
INSERT INTO RispostaArticoli VALUES('risposta006',5,'Scatola0', true,'domanda006');
INSERT INTO RispostaArticoli VALUES('risposta007',5,'Scatola0', true, 'domanda007');
INSERT INTO RispostaArticoli VALUES('risposta008',5,'Scatola0', true,'domanda008');
INSERT INTO RispostaArticoli VALUES('risposta009',5,'Scatola0', true,'domanda009');

/*Domanda Preposizioni*/

INSERT INTO DomandaPrep VALUES('domanda001',5,' macchina c''è un gatto','Normale','Versione 1.0','GiocoPreposizioni','Domandapreposizione001');
INSERT INTO DomandaPrep VALUES('domanda002',5,'Il vasetto marmellata si è rotto','Normale','Versione 1.0','GiocoPreposizioni','Domandapreposizione002');
INSERT INTO DomandaPrep VALUES('domanda003',5,'Il cane nonna si chiama Tom','Normale','Versione 1.0','GiocoPreposizioni','Domandapreposizione003');

/*Risposta Preposizioni*/
/*Primo numero Verticale Secondo Orizzontale*/
INSERT INTO RispostaPrep VALUES('risposta001', 5, '6:3', true, 'domanda001');
INSERT INTO RispostaPrep VALUES('risposta002', 5, '1:3', true, 'domanda002');
INSERT INTO RispostaPrep VALUES('risposta003', 5, '1:3', true, 'domanda003');


/*Nomi*/
INSERT INTO RispostaNomi VALUES 
	('risposta001', 5, 'Cane'),
	('risposta002', 5, 'Atto'),
	('risposta003', 5, 'Giorno'),
	('risposta004', 5, 'Isola');

INSERT INTO DomandaNomi VALUES 
	('domanda001', 5, 'Animale che abbaia', 'Normale', 'Versione 1.0', 'risposta001', 'GiocoNomi', 'DomandaNome001'),
	('domanda002', 5, 'Attore senza "re"', 'Normale', 'Versione 1.0', 'risposta002', 'GiocoNomi', 'DomandaNome002'),
	('domanda003', 5, 'Il contrario della notte', 'Normale', 'Versione 1.0', 'risposta003', 'GiocoNomi', 'DomandaNome003'),
	('domanda004', 5, 'E tutta circondata dal mare', 'Normale', 'Versione 1.0', 'risposta004', 'GiocoNomi', 'DomandaNome004');
	
/*Aggettivi*/
INSERT INTO DomandaAgg VALUES 
	('domanda001', 'img1', 5, 'Bello', 'Normale', 'Versione 1.0', 'GiocoAggettivi', 'DomandaAggettivi001'),
	('domanda002', 'img2', 5, 'Forte', 'Normale', 'Versione 1.0', 'GiocoAggettivi', 'DomandaAggettivi002'),
	('domanda003', 'img3', 5, 'Vostre', 'Normale', 'Versione 1.0', 'GiocoAggettivi', 'DomandaAggettivi003'),
	('domanda004', 'img4', 5, 'Questo', 'Normale', 'Versione 1.0', 'GiocoAggettivi', 'DomandaAggettivi004');

INSERT INTO RispostaAgg VALUES 
	('risposta001', 5, 'Qualificativo', true, 'domanda001'),
	('risposta002', 0, 'Numerativo', false, 'domanda001'),
	('risposta003', 0, 'Esclamativo', false, 'domanda001'),
	('risposta004', 0, 'Interrogativo', false, 'domanda002'),
	('risposta005', 5, 'Qualificativo', true, 'domanda002'),
	('risposta006', 0, 'Esclamativo', false, 'domanda002'),
	('risposta007', 0, 'Indefinito', false, 'domanda003'),
	('risposta008', 5, 'Possessivo', true, 'domanda003'),
	('risposta009', 0, 'Qualificativo', false, 'domanda003'),
	('risposta010', 0, 'Indefinito', false, 'domanda004'),
	('risposta011', 0, 'Numerativo', false, 'domanda004'),
	('risposta012', 5, 'Dimostrativo', true, 'domanda004');
	
/* Verbi */
INSERT INTO DomandaVerb VALUES 
	('domanda001', 5, 'Io', 'Normale', 'Versione 1.0', 'GiocoVerbi', 'DomandaVerbi001'),
	('domanda002', 5, 'Tu', 'Normale', 'Versione 1.0', 'GiocoVerbi', 'DomandaVerbi002'),
	('domanda003', 5, 'Egli', 'Normale', 'Versione 1.0', 'GiocoVerbi', 'DomandaVerbi003'),
	('domanda004', 5, 'Noi', 'Normale', 'Versione 1.0', 'GiocoVerbi', 'DomandaVerbi004');

INSERT INTO RispostaVerbi VALUES 
	('risposta001', 5, 'Do', true, 'domanda001'),
	('risposta002', 0, 'Dai', false, 'domanda001'),
	('risposta003', 0, 'Da', false, 'domanda001'),
	('risposta004', 0, 'Do', false, 'domanda002'),
	('risposta005', 5, 'Dai', true, 'domanda002'),
	('risposta006', 0, 'Da', false, 'domanda002'),
	('risposta007', 0, 'Do', false, 'domanda003'),
	('risposta008', 5, 'Da', true, 'domanda003'),
	('risposta009', 0, 'Dai', false, 'domanda003'),
	('risposta010', 0, 'Danno', false, 'domanda004'),
	('risposta011', 0, 'Date', false, 'domanda004'),
	('risposta012', 5, 'Diamo', true, 'domanda004');	
	
/* SinCon */
INSERT INTO DomandaSinCon VALUES 
	('domanda001', 5, 'Il contrario di: Bello', 'Normale', 'Versione 1.0', 'GiocoSinCon', 'DomandaSinCon001'),
	('domanda002', 5, 'Il contrario di: Buono', 'Normale', 'Versione 1.0', 'GiocoSinCon', 'DomandaSinCon002'),
	('domanda003', 5, 'Un sinonimo di: Veloce', 'Normale', 'Versione 1.0', 'GiocoSinCon', 'DomandaSinCon003'),
	('domanda004', 5, 'Un sinonimo di: Divertente', 'Normale', 'Versione 1.0', 'GiocoSinCon', 'DomandaSinCon004');

INSERT INTO RispostaSinCon VALUES 
	('risposta001', 5, 'Brutto', 'domanda001'),
	('risposta006', 5, 'Cattivo', 'domanda002'),
	('risposta009', 5, 'Rapido', 'domanda003'),
	('risposta012', 5, 'Esilarante ', 'domanda004');			
	
/*RispoSingola*/
INSERT INTO RispoSingola VALUES
	('rispSingola001', '2020-03-20', '10:30:55', 5, 'DomandaAggettivi001', 'utente001'),
	('rispSingola002', '2020-02-28', '12:25:42', 0, 'DomandaAggettivi002', 'utente001'),
	('rispSingola003', '2020-03-25', '16:49:12', 5, 'DomandaNome001', 'utente006'),
	('rispSingola004', '2020-03-20', '12:32:19', 0, 'DomandaAggettivi001', 'utente007');
	
	
