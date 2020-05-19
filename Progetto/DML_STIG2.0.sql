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

INSERT INTO DomandeTot VALUES(1);
INSERT INTO DomandeTot VALUES(2);
INSERT INTO DomandeTot VALUES(3);
INSERT INTO DomandeTot VALUES(4);
INSERT INTO DomandeTot VALUES(5);
INSERT INTO DomandeTot VALUES(6);
INSERT INTO DomandeTot VALUES(7);
INSERT INTO DomandeTot VALUES(8);

INSERT INTO DomandeTot VALUES(9);
INSERT INTO DomandeTot VALUES(10);
INSERT INTO DomandeTot VALUES(11);
INSERT INTO DomandeTot VALUES(12);
INSERT INTO DomandeTot VALUES(13);
INSERT INTO DomandeTot VALUES(14);
INSERT INTO DomandeTot VALUES(15);
INSERT INTO DomandeTot VALUES(16);
INSERT INTO DomandeTot VALUES(17);
INSERT INTO DomandeTot VALUES(18);
INSERT INTO DomandeTot VALUES(19);
INSERT INTO DomandeTot VALUES(20);
INSERT INTO DomandeTot VALUES(21);
INSERT INTO DomandeTot VALUES(22);
INSERT INTO DomandeTot VALUES(23);


INSERT INTO DomandeTot VALUES(24);
INSERT INTO DomandeTot VALUES(25);
INSERT INTO DomandeTot VALUES(26);
INSERT INTO DomandeTot VALUES(27);

INSERT INTO DomandeTot VALUES(28);
INSERT INTO DomandeTot VALUES(29);
INSERT INTO DomandeTot VALUES(30);
INSERT INTO DomandeTot VALUES(31);

INSERT INTO DomandeTot VALUES(32);
INSERT INTO DomandeTot VALUES(33);
INSERT INTO DomandeTot VALUES(34);
INSERT INTO DomandeTot VALUES(35);

INSERT INTO DomandeTot VALUES(36);
INSERT INTO DomandeTot VALUES(37);
INSERT INTO DomandeTot VALUES(38);
INSERT INTO DomandeTot VALUES(39);
INSERT INTO DomandeTot VALUES(40);

INSERT INTO DomandeTot VALUES(41);
INSERT INTO DomandeTot VALUES(42);
INSERT INTO DomandeTot VALUES(43);
INSERT INTO DomandeTot VALUES(44);
INSERT INTO DomandeTot VALUES(45);
INSERT INTO DomandeTot VALUES(46);

INSERT INTO Gioco VALUES('GiocoArticoli', 'The Prepositions s Battle');
INSERT INTO Gioco VALUES('GiocoPreposizioni', 'Drag The Article');
INSERT INTO Gioco VALUES('GiocoAggettivi', 'Parole Intrecciate');
INSERT INTO Gioco VALUES('GiocoNomi', 'Impiccato');
INSERT INTO Gioco VALUES('GiocoVerbi', 'Viaggio nel tempo dei Verbi');
INSERT INTO Gioco VALUES('GiocoSinCon', 'Occhio all Impiccato');


INSERT INTO Gioca VALUES(1, '2020-03-12', '09:25', 'giocoArticoli', '1', 5);
INSERT INTO Gioca VALUES(2, '2020-03-11', '11:10', 'GiocoPreposizioni', '2', 5);
INSERT INTO Gioca VALUES(3, '2020-03-02', '10:01', 'GiocoAggettivi', '5', 5);
INSERT INTO Gioca VALUES(4, '2020-03-13', '15:45', 'GiocoNomi', '1', 0);
INSERT INTO Gioca VALUES(5, '2020-02-28', '13:00', 'GiocoVerbi', '2', 0);
INSERT INTO Gioca VALUES(6, '2020-03-14', '10:30', 'GiocoSinCon', '4', 5);



/*Domanda Articoli*/

INSERT INTO DomandaArticoli VALUES(1 ,5,'un',1,'Versione 1.0','GiocoArticoli', 1);
INSERT INTO DomandaArticoli VALUES(2 ,5,'uno',1,'Versione 1.0','GiocoArticoli', 2);
INSERT INTO DomandaArticoli VALUES(3 ,5,'una',1,'Versione 1.0','GiocoArticoli', 3);
INSERT INTO DomandaArticoli VALUES(4 ,5,'il',1,'Versione 1.0','GiocoArticoli', 4);
INSERT INTO DomandaArticoli VALUES(5 ,5,'lo',1,'Versione 1.0','GiocoArticoli', 5);
INSERT INTO DomandaArticoli VALUES(6 ,5,'la',1,'Versione 1.0','GiocoArticoli', 6);
INSERT INTO DomandaArticoli VALUES(7 ,5,'i',1,'Versione 1.0','GiocoArticoli', 7);
INSERT INTO DomandaArticoli VALUES(8 ,5,'gli',1,'Versione 1.0','GiocoArticoli', 8);
INSERT INTO DomandaArticoli VALUES(9 ,5,'le',1,'Versione 1.0','GiocoArticoli', 9);

/*Risposta Articoli*/

INSERT INTO RispostaArticoli VALUES(1 ,5,'indeterminativi', true,1);
INSERT INTO RispostaArticoli VALUES(2 ,0,'determinativi', false,1);
INSERT INTO RispostaArticoli VALUES(3 ,5,'indeterminativi', true,2);
INSERT INTO RispostaArticoli VALUES(4,0,'determinativi', false,2);
INSERT INTO RispostaArticoli VALUES(5 ,5,'determinativi', true,3);
INSERT INTO RispostaArticoli VALUES(6 ,0,'indeterminativi', false,3);
INSERT INTO RispostaArticoli VALUES(7 ,5,'determinativi', true,4);
INSERT INTO RispostaArticoli VALUES(8 ,0,'indeterminativi', false,4);
INSERT INTO RispostaArticoli VALUES(9 ,5,'determinativi', true, 5);
INSERT INTO RispostaArticoli VALUES(10 ,0,'indeterminativi', false,5);
INSERT INTO RispostaArticoli VALUES(11 ,5,'determinativi', true,6);
INSERT INTO RispostaArticoli VALUES(12 ,5,'indeterminativi', false,6);
INSERT INTO RispostaArticoli VALUES(13 ,5,'determinativi', true,7);
INSERT INTO RispostaArticoli VALUES(14 ,0,'indeterminativi', false,7);
INSERT INTO RispostaArticoli VALUES(15 ,5,'determinativi', true,8);
INSERT INTO RispostaArticoli VALUES(16 ,0,'indeterminativi', false,8);
INSERT INTO RispostaArticoli VALUES(17 ,5,'determinativi', true,9);
INSERT INTO RispostaArticoli VALUES(18 ,0,'indeterminativi', false,9);

/*Domanda Preposizioni*/

INSERT INTO DomandaPrep VALUES(1,5,'______ macchina c''è un gatto',1,'Versione 1.0','GiocoPreposizioni', 10);
INSERT INTO DomandaPrep VALUES(2,5,'Il vasetto ______ marmellata si è rotto',1,'Versione 1.0','GiocoPreposizioni',11);
INSERT INTO DomandaPrep VALUES(3,5,'Il cane ______ nonna si chiama Tom',1,'Versione 1.0','GiocoPreposizioni',12);
INSERT INTO DomandaPrep VALUES(4,5,'Ieri sono salito ______ albero',1,'Versione 1.0','GiocoPreposizioni',13);
INSERT INTO DomandaPrep VALUES(5,5,'Domani andrò ______ allenamneti',1,'Versione 1.0','GiocoPreposizioni',14);
INSERT INTO DomandaPrep VALUES(6,5,'Ho guardato un cartone animato ______ tivù',2,'Versione 1.0','GiocoPreposizioni',15);
INSERT INTO DomandaPrep VALUES(7,5,'Mi assenterò da scuola ______ dieci maggio',2,'Versione 1.0','GiocoPreposizioni',16);
INSERT INTO DomandaPrep VALUES(8,5,'Mi piace tanto il gelato ______ fragola',2,'Versione 1.0','GiocoPreposizioni',17);
INSERT INTO DomandaPrep VALUES(9,5,'Indosso sempre le scarpe ______ nike',2,'Versione 1.0','GiocoPreposizioni',18);
INSERT INTO DomandaPrep VALUES(10,5,'Ho visto un gatto ______ scalini',2,'Versione 1.0','GiocoPreposizioni',19);
INSERT INTO DomandaPrep VALUES(11,5,'Ho visto un topo ______ palestra',3,'Versione 1.0','GiocoPreposizioni',20);
INSERT INTO DomandaPrep VALUES(12,5,'Marzia ha preso ______ ciliegie in cucina',3,'Versione 1.0','GiocoPreposizioni',21);
INSERT INTO DomandaPrep VALUES(13,5,'Giovanni rimarrà ______ Londra',3,'Versione 1.0','GiocoPreposizioni',22);
INSERT INTO DomandaPrep VALUES(14,5,'Le pagine ______ dizionario mia nonna aveva messo un quadrifoglio',3,'Versione 1.0','GiocoPreposizioni',23);
INSERT INTO DomandaPrep VALUES(15,5,'Il bambino ______ casa accanto si chiama Luca',3,'Versione 1.0','GiocoPreposizioni',24);
INSERT INTO DomandaPrep VALUES(16,5,'Il cane ______ vicina si chiama Luna',2,'Versione 1.0','GiocoPreposizioni',41);
INSERT INTO DomandaPrep VALUES(17,5,'______ spettacolo c''era tanta gente',2,'Versione 1.0','GiocoPreposizioni',42);
INSERT INTO DomandaPrep VALUES(18,5,'Mi piace andare ______ bici',3,'Versione 1.0','GiocoPreposizioni',43);
INSERT INTO DomandaPrep VALUES(19,5,'Tra non molto andrò ______ boschi',3,'Versione 1.0','GiocoPreposizioni',44);
INSERT INTO DomandaPrep VALUES(20,5,'______ concerti c''è tanta gente',3,'Versione 1.0','GiocoPreposizioni',45);
INSERT INTO DomandaPrep VALUES(21,5,'______ domenica c''è messa',3,'Versione 1.0','GiocoPreposizioni',46);

/*Risposta Preposizioni*/

INSERT INTO RispostaPrep VALUES(1, 5, 'nella', true, 1);
INSERT INTO RispostaPrep VALUES(2, 5, 'della', true, 2);
INSERT INTO RispostaPrep VALUES(3, 5, 'della', true, 3);
INSERT INTO RispostaPrep VALUES(4, 5, 'sull', true, 4);
INSERT INTO RispostaPrep VALUES(5, 5, 'agli', true, 5);
INSERT INTO RispostaPrep VALUES(6, 5, 'alla', true, 6);
INSERT INTO RispostaPrep VALUES(7, 5, 'per', true, 7);
INSERT INTO RispostaPrep VALUES(8, 5, 'alla', true, 8);
INSERT INTO RispostaPrep VALUES(9, 5, 'della', true, 9);
INSERT INTO RispostaPrep VALUES(10, 5, 'sugli', true, 10);
INSERT INTO RispostaPrep VALUES(11, 5, 'nella', true, 11);
INSERT INTO RispostaPrep VALUES(12, 5, 'delle', true, 12);
INSERT INTO RispostaPrep VALUES(13, 5, 'a', true, 13);
INSERT INTO RispostaPrep VALUES(14, 5, 'del', true, 14);
INSERT INTO RispostaPrep VALUES(15, 5, 'della', true, 15);
INSERT INTO RispostaPrep VALUES(16, 5, 'della', true, 16);
INSERT INTO RispostaPrep VALUES(17, 5, 'allo', true, 17);
INSERT INTO RispostaPrep VALUES(18, 5, 'sulla', true, 18);
INSERT INTO RispostaPrep VALUES(19, 5, 'nei', true, 19);
INSERT INTO RispostaPrep VALUES(20, 5, 'ai', true, 20);
INSERT INTO RispostaPrep VALUES(21, 5, 'alla', true, 21);


/*IMPICCATO --> Nomi*/
INSERT INTO RispostaNomi VALUES
	(1, 5, 'CANE'),
	(2, 5, 'ATTO'),
	(3, 5, 'GIORNO'),
	(4, 5, 'ISOLA');

INSERT INTO DomandaNomi VALUES
	(1, 5, 'Animale che abbaia', 1, 'Versione 1.0', 1, 'GiocoNomi', 25),
	(2, 5, 'Attore senza "re"', 1, 'Versione 1.0', 2, 'GiocoNomi', 26),
	(3, 5, 'Il contrario della notte', 2, 'Versione 1.0', 3, 'GiocoNomi', 27),
	(4, 5, 'E tutta circondata dal mare', 3, 'Versione 1.0', 4, 'GiocoNomi', 28);

/*Aggettivi*/
INSERT INTO RispostaAgg VALUES
	(1, 5, 'Qualificativo'),
	(2, 5, 'Qualificativo'),
	(3, 5, 'Possessivo'),
	(4, 5, 'Dimostrativo');

INSERT INTO DomandaAgg VALUES
	(1, 5, 'Bello', 1, 'Versione 1.0', 'GiocoAggettivi', 29, 1),
	(2, 5, 'Forte', 2, 'Versione 1.0', 'GiocoAggettivi', 30, 2),
	(3, 5, 'Vostre', 2, 'Versione 1.0', 'GiocoAggettivi', 31, 3),
	(4, 5, 'Questo', 3, 'Versione 1.0', 'GiocoAggettivi', 32, 4);


/*Verbi*/
INSERT INTO DomandaVerb VALUES
	(1, 5, 'Quali verbi sono presenti?', 2, 'Versione 1.0', 'GiocoVerbi', 33),
	(2, 5, 'Quali verbi sono passati?', 2, 'Versione 1.0', 'GiocoVerbi', 34);

INSERT INTO RispostaVerbi VALUES
	(1, 5, 'Io sono', true, 1),
	(2, 0, 'Tu sarai', false, 1),
	(3, 0, 'Noi saremo', false, 1),
	(4, 0, 'Io fui', true, 2),
	(5, 5, 'Io sarò', false, 2),
	(6, 0, 'Noi ervamo', false, 2);

/* SinCon */
INSERT INTO RispostaSinCon VALUES
	(1, 5, 'Brutto'),
	(6, 5, 'Cattivo'),
	(9, 5, 'Rapido'),
	(12, 5, 'Esilarante ');

INSERT INTO DomandaSinCon VALUES
	(1, 5, 'Il contrario di: Bello', 2, 'Versione 1.0', 1,'GiocoSinCon', 37),
	(2, 5, 'Il contrario di: Buono', 2, 'Versione 1.0', 6, 'GiocoSinCon', 38),
	(3, 5, 'Un sinonimo di: Veloce', 2, 'Versione 1.0',  9, 'GiocoSinCon', 39),
	(4, 5, 'Un sinonimo di: Divertente', 3, 'Versione 1.0', 12, 'GiocoSinCon', 40);


/*RispoSingola*/
INSERT INTO RispoSingola VALUES
	(1, '2020-03-20', '10:30:55', 5, 29, '1'),
	(2, '2020-02-28', '12:25:42', 0, 30, '1'),
	(3, '2020-03-25', '16:49:12', 5, 26, '6'),
	(4, '2020-03-20', '12:32:19', 0, 29, '7');
