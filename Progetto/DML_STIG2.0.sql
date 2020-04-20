USE 5C_STIG;

INSERT INTO Sede VALUES('ITISRIVOIRA','ITIS RIVOIRA','itisrivoira@denina.gov.it','017586229');
INSERT INTO Sede VALUES('PELLICO','PELLICO','pellico@denina.gov.it', '017542458');
INSERT INTO Sede VALUES('DENINA','CARLO DENINA','denina@denina.gov.it','017543625');

INSERT INTO Utente (nome, cognome, tipologia, email, password) VALUES('Marco','Rossi','Alunno', 'mail1@gmail.com', 'psw');
INSERT INTO Utente (nome, cognome, tipologia, email, password) VALUES('Pietro','Verdi', 'Insegnante', 'mail2@gmail.com', 'psw');
INSERT INTO Utente (nome, cognome, tipologia, email, password) VALUES('Alessia','Gialli','Amministratore', 'mail3@gmail.com', 'psw');
INSERT INTO Utente (nome, cognome, tipologia, email, password) VALUES('Davide','Ricci','Alunno', 'mail4@gmail.com', 'psw');
INSERT INTO Utente (nome, cognome, tipologia, email, password) VALUES('Beatrice','Conti', 'Insegnante', 'mail5@gmail.com', 'psw');
INSERT INTO Utente (nome, cognome, tipologia, email, password) VALUES('Monica','Fontana','Alunno', 'mail6@gmail.com', 'psw');
INSERT INTO Utente (nome, cognome, tipologia, email, password) VALUES('Mattia','Costa','Alunno', 'mail7@gmail.com', 'psw');
INSERT INTO Utente (nome, cognome, tipologia, email, password) VALUES('Luca','Bianchi', 'Insegnante', 'mail8@gmail.com', 'psw');
INSERT INTO Utente (nome, cognome, tipologia, email, password) VALUES('Pietro','Ferrari','Amministratore', 'mail9@gmail.com','psw');

/*tabella Relazione Sede Utente*/
INSERT INTO Frequenta VALUES('ITISRIVOIRA', '1');
INSERT INTO Frequenta VALUES('PELLICO', '2');
INSERT INTO Frequenta VALUES('ITISRIVOIRA', '3');
INSERT INTO Frequenta VALUES('PELLICO', '4');
INSERT INTO Frequenta VALUES('DENINA', '5');
INSERT INTO Frequenta VALUES('DENINA', '6');
INSERT INTO Frequenta VALUES('DENINA', '7');
INSERT INTO Frequenta VALUES('PELLICO', '8');
INSERT INTO Frequenta VALUES('DENINA', '9');

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
INSERT INTO DomandeTot VALUES('Domandapreposizione004'); 
INSERT INTO DomandeTot VALUES('Domandapreposizione005');
INSERT INTO DomandeTot VALUES('Domandapreposizione006');
INSERT INTO DomandeTot VALUES('Domandapreposizione007');
INSERT INTO DomandeTot VALUES('Domandapreposizione008');
INSERT INTO DomandeTot VALUES('Domandapreposizione009'); 
INSERT INTO DomandeTot VALUES('Domandapreposizione010');
INSERT INTO DomandeTot VALUES('Domandapreposizione011');
INSERT INTO DomandeTot VALUES('Domandapreposizione012');
INSERT INTO DomandeTot VALUES('Domandapreposizione013'); 
INSERT INTO DomandeTot VALUES('Domandapreposizione014');
INSERT INTO DomandeTot VALUES('Domandapreposizione015');


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



INSERT INTO Gioco VALUES('GiocoArticoli', 'The Prepositions s Battle');
INSERT INTO Gioco VALUES('GiocoPreposizioni', 'Drag The Article');
INSERT INTO Gioco VALUES('GiocoAggettivi', 'Parole Intrecciate');
INSERT INTO Gioco VALUES('GiocoNomi', 'Impiccato');
INSERT INTO Gioco VALUES('GiocoVerbi', 'Viaggio nel tempo dei Verbi');
INSERT INTO Gioco VALUES('GiocoSinCon', 'Occhio all Impiccato');


INSERT INTO Gioca VALUES('idGioca001', '2020-03-12', '09:25', 'giocoArticoli', '1', 5);
INSERT INTO Gioca VALUES('idGioca002', '2020-03-11', '11:10', 'GiocoPreposizioni', '2', 5);
INSERT INTO Gioca VALUES('idGioca003', '2020-03-02', '10:01', 'GiocoAggettivi', '5', 5);
INSERT INTO Gioca VALUES('idGioca004', '2020-03-13', '15:45', 'GiocoNomi', '1', 0);
INSERT INTO Gioca VALUES('idGioca005', '2020-02-28', '13:00', 'GiocoVerbi', '2', 0);
INSERT INTO Gioca VALUES('idGioca006', '2020-03-14', '10:30', 'GiocoSinCon', '4', 5);



/*Domanda Articoli*/

INSERT INTO DomandaArticoli VALUES('domanda001',5,'un',1,'Versione 1.0','GiocoArticoli','DomandaArticolo001');
INSERT INTO DomandaArticoli VALUES('domanda002',5,'uno',1,'Versione 1.0','GiocoArticoli','DomandaArticolo002');
INSERT INTO DomandaArticoli VALUES('domanda003',5,'una',1,'Versione 1.0','GiocoArticoli','DomandaArticolo003');
INSERT INTO DomandaArticoli VALUES('domanda004',5,'il',1,'Versione 1.0','GiocoArticoli','DomandaArticolo004');
INSERT INTO DomandaArticoli VALUES('domanda005',5,'lo',1,'Versione 1.0','GiocoArticoli','DomandaArticolo005');
INSERT INTO DomandaArticoli VALUES('domanda006',5,'la',1,'Versione 1.0','GiocoArticoli','DomandaArticolo006');
INSERT INTO DomandaArticoli VALUES('domanda007',5,'i',1,'Versione 1.0','GiocoArticoli','DomandaArticolo007');
INSERT INTO DomandaArticoli VALUES('domanda008',5,'gli',1,'Versione 1.0','GiocoArticoli','DomandaArticolo008');
INSERT INTO DomandaArticoli VALUES('domanda009',5,'le',1,'Versione 1.0','GiocoArticoli','DomandaArticolo009');

/*Risposta Articoli*/

INSERT INTO RispostaArticoli VALUES('risposta001',5,'indeterminativi', true,'domanda001');
INSERT INTO RispostaArticoli VALUES('risposta002',0,'determinativi', false,'domanda001');
INSERT INTO RispostaArticoli VALUES('risposta003',5,'indeterminativi', true,'domanda002');
INSERT INTO RispostaArticoli VALUES('risposta004',0,'determinativi', false,'domanda002');
INSERT INTO RispostaArticoli VALUES('risposta005',5,'determinativi', true,'domanda003');
INSERT INTO RispostaArticoli VALUES('risposta006',0,'indeterminativi', false,'domanda003');
INSERT INTO RispostaArticoli VALUES('risposta007',5,'determinativi', true,'domanda004');
INSERT INTO RispostaArticoli VALUES('risposta008',0,'indeterminativi', false,'domanda004');
INSERT INTO RispostaArticoli VALUES('risposta009',5,'determinativi', true, 'domanda005');
INSERT INTO RispostaArticoli VALUES('risposta010',0,'indeterminativi', false,'domanda005');
INSERT INTO RispostaArticoli VALUES('risposta011',5,'determinativi', true,'domanda006');
INSERT INTO RispostaArticoli VALUES('risposta012',5,'indeterminativi', false,'domanda006');
INSERT INTO RispostaArticoli VALUES('risposta013',5,'determinativi', true,'domanda007');
INSERT INTO RispostaArticoli VALUES('risposta014',0,'indeterminativi', false,'domanda007');
INSERT INTO RispostaArticoli VALUES('risposta015',5,'determinativi', true,'domanda008');
INSERT INTO RispostaArticoli VALUES('risposta016',0,'indeterminativi', false,'domanda008');
INSERT INTO RispostaArticoli VALUES('risposta017',5,'determinativi', true,'domanda009');
INSERT INTO RispostaArticoli VALUES('risposta018',0,'indeterminativi', false,'domanda009');

/*Domanda Preposizioni*/

INSERT INTO DomandaPrep VALUES('domanda001',5,' ____ macchina c''è un gatto',1,'Versione 1.0','GiocoPreposizioni','Domandapreposizione001');
INSERT INTO DomandaPrep VALUES('domanda002',5,'Il vasetto ______ marmellata si è rotto',1,'Versione 1.0','GiocoPreposizioni','Domandapreposizione002');
INSERT INTO DomandaPrep VALUES('domanda003',5,'Il cane ______ nonna si chiama Tom',1,'Versione 1.0','GiocoPreposizioni','Domandapreposizione003');
INSERT INTO DomandaPrep VALUES('domanda004',5,'Ieri sono salito _____ albero',1,'Versione 1.0','GiocoPreposizioni','Domandapreposizione004');
INSERT INTO DomandaPrep VALUES('domanda005',5,'Domani andrò ______ allenamneti',1,'Versione 1.0','GiocoPreposizioni','Domandapreposizione005');
INSERT INTO DomandaPrep VALUES('domanda006',5,'Ho guardato un cartone animato ______ tivù',2,'Versione 1.0','GiocoPreposizioni','Domandapreposizione006');
INSERT INTO DomandaPrep VALUES('domanda007',5,'Mi assenterò da scuola _____ dieci maggio',2,'Versione 1.0','GiocoPreposizioni','Domandapreposizione007');
INSERT INTO DomandaPrep VALUES('domanda008',5,'Mi piace tanto il gelato ____ fragola',2,'Versione 1.0','GiocoPreposizioni','Domandapreposizione008');
INSERT INTO DomandaPrep VALUES('domanda009',5,'Indosso sempre le scarpe ____ nike',2,'Versione 1.0','GiocoPreposizioni','Domandapreposizione009');
INSERT INTO DomandaPrep VALUES('domanda010',5,'Ho visto un gatto ____ scalini',2,'Versione 1.0','GiocoPreposizioni','Domandapreposizione010');
INSERT INTO DomandaPrep VALUES('domanda011',5,'Ho visto un topo ____ scalini ___ palestra',3,'Versione 1.0','GiocoPreposizioni','Domandapreposizione011');
INSERT INTO DomandaPrep VALUES('domanda012',5,'Marzia ha visto ____ ciliegie ____ albero',3,'Versione 1.0','GiocoPreposizioni','Domandapreposizione012');
INSERT INTO DomandaPrep VALUES('domanda013',5,'Giovanni rimarrà __ città di Londra',3,'Versione 1.0','GiocoPreposizioni','Domandapreposizione013');
INSERT INTO DomandaPrep VALUES('domanda014',5,'____ pagine ___ dizionario mia nonna aveva messo un quadrifoglio',3,'Versione 1.0','GiocoPreposizioni','Domandapreposizione014');
INSERT INTO DomandaPrep VALUES('domanda015',5,'Il bambino ____ casa accanto si chiama Luca',3,'Versione 1.0','GiocoPreposizioni','Domandapreposizione015');

/*Risposta Preposizioni*/
/*Primo numero Orizzontale Secondo verticale*/
INSERT INTO RispostaPrep VALUES('risposta001', 5, '6:3', true, 'domanda001');
INSERT INTO RispostaPrep VALUES('risposta002', 5, '1:3', true, 'domanda002');
INSERT INTO RispostaPrep VALUES('risposta003', 5, '1:3', true, 'domanda003');
INSERT INTO RispostaPrep VALUES('risposta004', 5, '6:4', true, 'domanda004');
INSERT INTO RispostaPrep VALUES('risposta005', 5, '2:6', true, 'domanda005');
INSERT INTO RispostaPrep VALUES('risposta006', 5, '6:3', true, 'domanda006');
INSERT INTO RispostaPrep VALUES('risposta007', 5, '3:1', true, 'domanda007');
INSERT INTO RispostaPrep VALUES('risposta008', 5, '2:3', true, 'domanda008');
INSERT INTO RispostaPrep VALUES('risposta009', 5, '1:3', true, 'domanda009');
INSERT INTO RispostaPrep VALUES('risposta010', 5, '6:6', true, 'domanda010');
INSERT INTO RispostaPrep VALUES('risposta011', 5, '6:6/1:3', true, 'domanda011');
INSERT INTO RispostaPrep VALUES('risposta012', 5, '1:7/ 6:4', true, 'domanda012');
INSERT INTO RispostaPrep VALUES('risposta013', 5, '4:3', true, 'domanda013');
INSERT INTO RispostaPrep VALUES('risposta014', 5, '4:7/1:1', true, 'domanda014');
INSERT INTO RispostaPrep VALUES('risposta015', 5, '1:3', true, 'domanda015');


/*IMPICCATO --> Nomi*/
INSERT INTO RispostaNomi VALUES 
	('risposta001', 5, 'Cane'),
	('risposta002', 5, 'Atto'),
	('risposta003', 5, 'Giorno'),
	('risposta004', 5, 'Isola');

INSERT INTO DomandaNomi VALUES 
	('domanda001', 5, 'Animale che abbaia', 1, 'Versione 1.0', 'risposta001', 'GiocoNomi', 'DomandaNome001'),
	('domanda002', 5, 'Attore senza "re"', 1, 'Versione 1.0', 'risposta002', 'GiocoNomi', 'DomandaNome002'),
	('domanda003', 5, 'Il contrario della notte', 2, 'Versione 1.0', 'risposta003', 'GiocoNomi', 'DomandaNome003'),
	('domanda004', 5, 'E tutta circondata dal mare', 3, 'Versione 1.0', 'risposta004', 'GiocoNomi', 'DomandaNome004');
	
/*Aggettivi*/
INSERT INTO RispostaAgg VALUES 
	('risposta001', 5, 'Qualificativo'),
	('risposta002', 5, 'Qualificativo'),
	('risposta003', 5, 'Possessivo'),
	('risposta004', 5, 'Dimostrativo');

INSERT INTO DomandaAgg VALUES 
	('domanda001', 5, 'Bello', 1, 'Versione 1.0', 'GiocoAggettivi', 'DomandaAggettivi001', 'risposta001'),
	('domanda002', 5, 'Forte', 2, 'Versione 1.0', 'GiocoAggettivi', 'DomandaAggettivi002', 'risposta002'),
	('domanda003', 5, 'Vostre', 2, 'Versione 1.0', 'GiocoAggettivi', 'DomandaAggettivi003', 'risposta003'),
	('domanda004', 5, 'Questo', 3, 'Versione 1.0', 'GiocoAggettivi', 'DomandaAggettivi004', 'risposta004');

	
/*Verbi*/	
INSERT INTO DomandaVerb VALUES 
	('domanda001', 5, 'Io', 2, 'Versione 1.0', 'GiocoVerbi', 'DomandaVerbi001'),
	('domanda002', 5, 'Tu', 2, 'Versione 1.0', 'GiocoVerbi', 'DomandaVerbi002'),
	('domanda003', 5, 'Egli', 2, 'Versione 1.0', 'GiocoVerbi', 'DomandaVerbi003'),
	('domanda004', 5, 'Noi', 2, 'Versione 1.0', 'GiocoVerbi', 'DomandaVerbi004');
	
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
INSERT INTO RispostaSinCon VALUES 
	('risposta001', 5, 'Brutto'),
	('risposta006', 5, 'Cattivo'),
	('risposta009', 5, 'Rapido'),
	('risposta012', 5, 'Esilarante ');	
	
INSERT INTO DomandaSinCon VALUES 
	('domanda001', 5, 'Il contrario di: Bello', 2, 'Versione 1.0', 'risposta001','GiocoSinCon', 'DomandaSinCon001'),
	('domanda002', 5, 'Il contrario di: Buono', 2, 'Versione 1.0', 'risposta006', 'GiocoSinCon', 'DomandaSinCon002'),
	('domanda003', 5, 'Un sinonimo di: Veloce', 2, 'Versione 1.0',  'risposta009', 'GiocoSinCon', 'DomandaSinCon003'),
	('domanda004', 5, 'Un sinonimo di: Divertente', 3, 'Versione 1.0', 'risposta012', 'GiocoSinCon', 'DomandaSinCon004');
	
	
/*RispoSingola*/
INSERT INTO RispoSingola VALUES
	('rispSingola001', '2020-03-20', '10:30:55', 5, 'DomandaAggettivi001', '1'),
	('rispSingola002', '2020-02-28', '12:25:42', 0, 'DomandaAggettivi002', '1'),
	('rispSingola003', '2020-03-25', '16:49:12', 5, 'DomandaNome001', '6'),
	('rispSingola004', '2020-03-20', '12:32:19', 0, 'DomandaAggettivi001', '7');
