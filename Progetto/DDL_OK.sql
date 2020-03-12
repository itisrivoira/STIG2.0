CREATE DATABASE 5C_STIG;
USE 5C_STIG;

/*Tabella Sede*/
CREATE TABLE IF NOT EXISTS `Sede` (
  `idSede` VARCHAR(15) NOT NULL,
  `Nome` VARCHAR(30) NULL,
  `Email` VARCHAR(30) NULL,
  `Telefono` VARCHAR(10) NULL,
  PRIMARY KEY (`idSede`));

/*Tabella Utente*/  
CREATE TABLE IF NOT EXISTS `Utente` (
  `idUtente` VARCHAR(15) NOT NULL,
  `Nome` VARCHAR(30) NULL,
  `Cognome` VARCHAR(30) NULL,
  `Tipologia` VARCHAR(15) NULL,
  PRIMARY KEY (`idUtente`));
  
/*Tabella Relazione Sede Utente*/
CREATE TABLE IF NOT EXISTS `Frequenta` (
  `idSede` VARCHAR(15) NOT NULL,
  `idUtente` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idUtente`,`idSede`));
  
ALTER TABLE Frequenta ADD FOREIGN KEY (idSede) REFERENCES Sede(idSede);
ALTER TABLE Frequenta ADD FOREIGN KEY (idUtente) REFERENCES Utente(idUtente);

/*Tabella Gioco*/
CREATE TABLE IF NOT EXISTS `Gioco` (
  `idGioco` VARCHAR(15) NOT NULL,
  `Nome` VARCHAR(30) NULL,
  `Regole` VARCHAR(300) NULL,
  PRIMARY KEY (`idGioco`));
  
/*Tabella Relazione Utente Gioco*/
CREATE TABLE IF NOT EXISTS `Gioca` (
  `idGiocata` VARCHAR(15) NOT NULL,
  `Data` date  NULL,
  `Ora` VARCHAR(15)  NULL,
  `idGioco` VARCHAR(15) NOT NULL,
  `idUtente` VARCHAR(15) NOT NULL,
  `Punteggio` INT NOT NULL,
  PRIMARY KEY (`idGiocata`));
  
ALTER TABLE Gioca ADD FOREIGN KEY (idGioco) REFERENCES Gioco(idGioco);
ALTER TABLE Gioca ADD FOREIGN KEY (idUtente) REFERENCES Utente(idUtente);

/*Tabella DomandeTot*/
CREATE TABLE IF NOT EXISTS `DomandeTot` (
  `idDomanda` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idDomanda`));

/*Tabella tra Utente e DomandeTot*/
CREATE TABLE IF NOT EXISTS `RispoSingola` (
  `idRispoSingola` VARCHAR(15) NOT NULL,
  `dataRisposta` date NOT NULL,
  `ora` time NOT NULL,
  `punteggio` int NOT NULL,
  `idDomanda` VARCHAR(15) NOT NULL,
  `idUtente` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idRispoSingola`));

ALTER TABLE RispoSingola ADD FOREIGN KEY (idDomanda) REFERENCES DomandeTot(idDomanda);
ALTER TABLE RispoSingola ADD FOREIGN KEY (idUtente) REFERENCES Utente(idUtente);

/*Tabella Aggettivi Domanda e Risposta*/
/*Non so cosa Mettere in immagine*/
CREATE TABLE IF NOT EXISTS `DomandaAgg` (
  `idDomandaAgg` VARCHAR(15) NOT NULL,
  `punti` INT NOT NULL,
  `testo` VARCHAR(30) NOT NULL,
  `difficolta` VARCHAR(15) NOT NULL,
  `versione` VARCHAR(15) NOT NULL,
  `idGioco` VARCHAR(15) NOT NULL,
  `idDomanda` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idDomandaAgg`));

CREATE TABLE IF NOT EXISTS `RispostaAgg` (
  `idRispostaAgg` VARCHAR(15) NOT NULL,
  `punti` INT NOT NULL,
  `flagAgg` BOOLEAN NOT NULL,
  `idDomandaAgg` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idRispostaAgg`));
  
ALTER TABLE RispostaAgg ADD FOREIGN KEY (idDomandaAgg )REFERENCES DomandaAgg(idDomandaAgg);
ALTER TABLE DomandaAgg ADD FOREIGN KEY (idGioco) REFERENCES Gioco(idGioco);
ALTER TABLE DomandaAgg ADD FOREIGN KEY (idDomanda) REFERENCES DomandeTot(idDomanda);

/*Tabella Preposizioni Domanda e Risposta*/
CREATE TABLE IF NOT EXISTS `DomandaPrep` (
  `idDomandaPrep` VARCHAR(15) NOT NULL,
  `punti` INT NOT NULL,
  `testo` VARCHAR(30) NOT NULL,
  `difficolta` VARCHAR(15) NOT NULL,
  `versione` VARCHAR(15) NOT NULL,
  `idGioco` VARCHAR(15) NOT NULL,
`idDomanda` VARCHAR(15) NOT NULL,  
  PRIMARY KEY (`idDomandaPrep`));

CREATE TABLE IF NOT EXISTS `RispostaPrep` (
  `idRispostaPrep` VARCHAR(15) NOT NULL,
  `punti` INT NOT NULL,
  `flagPrep` BOOLEAN NOT NULL,
  `idDomandaPrep` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idRispostaPrep`));
  
ALTER TABLE RispostaPrep ADD FOREIGN KEY (idDomandaPrep) REFERENCES DomandaPrep(idDomandaPrep);
ALTER TABLE DomandaPrep ADD FOREIGN KEY (idGioco) REFERENCES Gioco(idGioco);
ALTER TABLE DomandaPrep ADD FOREIGN KEY (idDomanda) REFERENCES DomandeTot(idDomanda);

/*Tabella Verbi Domanda e Risposta*/
CREATE TABLE IF NOT EXISTS `DomandaVerb` (
  `idDomandaVerb` VARCHAR(15) NOT NULL,
  `punti` INT NOT NULL,
  `testo` VARCHAR(30) NOT NULL,
  `difficolta` VARCHAR(15) NOT NULL,
  `versione` VARCHAR(15) NOT NULL,
  `idGioco` VARCHAR(15) NOT NULL,
  `idDomanda` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idDomandaVerb`));
 
CREATE TABLE IF NOT EXISTS `RispostaVerbi` (
  `idRispostaVerb` VARCHAR(15) NOT NULL,
  `punti` INT NOT NULL,
  `flagPrep` BOOLEAN NOT NULL,
  `idDomandaVerb` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idRispostaVerb`));
  
ALTER TABLE RispostaVerbi ADD FOREIGN KEY (idDomandaVerb) REFERENCES DomandaVerb(idDomandaVerb);
ALTER TABLE DomandaVerb ADD FOREIGN KEY (IdGioco) REFERENCES Gioco(idGioco);
ALTER TABLE DomandaVerb ADD FOREIGN KEY (idDomanda) REFERENCES DomandeTot(idDomanda);

/*Tabella Sinonimi e Contrari Domanda e Risposta*/
CREATE TABLE IF NOT EXISTS `DomandaSinCon` (
  `idDomandaSinCon` VARCHAR(15) NOT NULL,
  `punti` INT NOT NULL,
  `parola` VARCHAR(30) NOT NULL,
  `difficolta` VARCHAR(15) NOT NULL,
  `versione` VARCHAR(15) NOT NULL,
  `idRispostaSinCon` VARCHAR(15) NOT NULL,
  `idGioco` VARCHAR(15) NOT NULL,
  `idDomanda` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idDomandaSinCon`));

CREATE TABLE IF NOT EXISTS `RispostaSinCon` (
  `idRispostaSinCon` VARCHAR(15) NOT NULL,
  `punti` INT NOT NULL,
  `idDomandaSinCon` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idRispostaSinCon`));
  
ALTER TABLE RispostaSinCon ADD FOREIGN KEY (idDomandaSinCon) REFERENCES DomandaSinCon(idDomandaSinCon);
ALTER TABLE DomandaSinCon ADD FOREIGN KEY (idRispostaSinCon) REFERENCES RispostaSinCon(idRispostaSinCon);
ALTER TABLE DomandaSinCon ADD FOREIGN KEY (idGioco )REFERENCES Gioco(idGioco);
ALTER TABLE DomandaSinCon ADD FOREIGN KEY (idDomanda) REFERENCES DomandeTot(idDomanda);

/*Tabella Nomi Domanda e Risposta*/
CREATE TABLE IF NOT EXISTS `DomandaNomi` (
  `idDomandaNomi` VARCHAR(15) NOT NULL,
  `punti` INT NOT NULL,
  `parola` VARCHAR(30) NOT NULL,
  `difficolta` VARCHAR(15) NOT NULL,
  `versione` VARCHAR(15) NOT NULL,
  `idRispostaNomi` VARCHAR(15) NOT NULL,
  `idGioco` VARCHAR(15) NOT NULL,
  `idDomanda` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idDomandaNomi`));

CREATE TABLE IF NOT EXISTS `RispostaNomi` (
  `idRispostaNomi` VARCHAR(15) NOT NULL,
  `punti` INT NOT NULL,
  `idDomandaNomi` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idRispostaNomi`));
  
ALTER TABLE RispostaNomi ADD FOREIGN KEY (idDomandaNomi) REFERENCES DomandaNomi(idDomandaNomi);
ALTER TABLE DomandaNomi ADD FOREIGN KEY (idRispostaNomi) REFERENCES RispostaNomi(idRispostaNomi);
ALTER TABLE DomandaNomi ADD FOREIGN KEY (idGioco) REFERENCES Gioco(idGioco);
ALTER TABLE DomandaNomi ADD FOREIGN KEY (idDomanda) REFERENCES DomandeTot(idDomanda);

/*Tabella Articoli Domanda e Risposta*/
CREATE TABLE IF NOT EXISTS `DomandaArticoli` (
  `idDomandaArticoli` VARCHAR(15) NOT NULL,
  `punti` INT NOT NULL,
  `testo` VARCHAR(30) NOT NULL,
  `difficolta` VARCHAR(15) NOT NULL,
  `versione` VARCHAR(15) NOT NULL,
  `idGioco` VARCHAR(15) NOT NULL,
  `idDomanda` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idDomandaArticoli`));
 
CREATE TABLE IF NOT EXISTS `RispostaArticoli` (
  `idRispostaArticoli` VARCHAR(15) NOT NULL,
  `punti` INT NOT NULL,
  `flagPrep` BOOLEAN NOT NULL,
  `idDomandaArticoli` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idRispostaArticoli`));
  
ALTER TABLE RispostaArticoli ADD FOREIGN KEY (idDomandaArticoli) REFERENCES DomandaArticoli(idDomandaArticoli);
ALTER TABLE DomandaArticoli ADD FOREIGN KEY (idGioco) REFERENCES Gioco(idGioco);
ALTER TABLE DomandaArticoli ADD FOREIGN KEY (idDomanda) REFERENCES DomandeTot(idDomanda);