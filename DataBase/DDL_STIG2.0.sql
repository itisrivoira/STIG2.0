-- DROP DATABASE 5C_STIG;
-- CREATE DATABASE 5C_STIG;
USE 5C_STIG;

/*Tabella Sede*/
CREATE TABLE IF NOT EXISTS `Sede` (
  `idSede` VARCHAR(30) NOT NULL,
  `Nome` VARCHAR(30) NULL,
  `Email` VARCHAR(30) NULL,
  `Telefono` VARCHAR(10) NULL,
  PRIMARY KEY (`idSede`));

/*Tabella Utente*/
CREATE TABLE IF NOT EXISTS `Utente` (
  `idUtente` INT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(30) NULL,
  `Cognome` VARCHAR(30) NULL,
  `Tipologia` VARCHAR(15) NULL,
  `email` VARCHAR(50) NULL,
  `Password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idUtente`));

/*Tabella Relazione Sede Utente*/
CREATE TABLE IF NOT EXISTS `Frequenta` (
  `idSede` VARCHAR(30) NOT NULL,
  `idUtente` INT NOT NULL,
  PRIMARY KEY (`idUtente`,`idSede`));

ALTER TABLE Frequenta ADD FOREIGN KEY (idSede) REFERENCES Sede(idSede);
ALTER TABLE Frequenta ADD FOREIGN KEY (idUtente) REFERENCES Utente(idUtente);

/*Tabella Gioco*/
CREATE TABLE IF NOT EXISTS `Gioco` (
  `idGioco` VARCHAR(30) NOT NULL,
  `Nome` VARCHAR(30) NULL,
  PRIMARY KEY (`idGioco`));

/*Tabella Relazione Utente Gioco*/
CREATE TABLE IF NOT EXISTS `Gioca` (
  `idGiocata` INT AUTO_INCREMENT NULL,
  `Data` DATE  NULL,
  `Ora` VARCHAR(15)  NULL,
  `idGioco` VARCHAR(30) NOT NULL,
  `idUtente` INT NOT NULL,
  `Punteggio` INT NOT NULL,
  PRIMARY KEY (`idGiocata`));

ALTER TABLE Gioca ADD FOREIGN KEY (idGioco) REFERENCES Gioco(idGioco);
ALTER TABLE Gioca ADD FOREIGN KEY (idUtente) REFERENCES Utente(idUtente);

/*Tabella DomandeTot*/
CREATE TABLE IF NOT EXISTS `DomandeTot` (
  `idDomanda` INT AUTO_INCREMENT NULL,
  PRIMARY KEY (`idDomanda`));

/*Tabella tra Utente e DomandeTot*/
CREATE TABLE IF NOT EXISTS `RispoSingola` (
  `idRispoSingola` INT AUTO_INCREMENT NULL,
  `dataRisposta` DATE NOT NULL,
  `ora` TIME NOT NULL,
  `punteggio` INT NOT NULL,
  `idDomanda` INT NOT NULL,
  `idUtente` INT NOT NULL,
  PRIMARY KEY (`idRispoSingola`));

ALTER TABLE RispoSingola ADD FOREIGN KEY (idDomanda) REFERENCES DomandeTot(idDomanda);
ALTER TABLE RispoSingola ADD FOREIGN KEY (idUtente) REFERENCES Utente(idUtente);

/*Tabella Aggettivi Domanda e Risposta*/
CREATE TABLE IF NOT EXISTS `DomandaAgg` (
  `idDomandaAgg` INT AUTO_INCREMENT NULL,
  `punti` INT NOT NULL,
  `testo` VARCHAR(100) NOT NULL,
  `difficolta` INT NOT NULL,
  `versione` VARCHAR(20) NOT NULL,
  `idGioco` VARCHAR(30) NOT NULL,
  `idDomanda` INT NOT NULL,
  `idRispostaAgg` INT NULL,
  PRIMARY KEY (`idDomandaAgg`));

CREATE TABLE IF NOT EXISTS `RispostaAgg` (
  `idRispostaAgg` INT AUTO_INCREMENT NULL,
  `punti` INT NOT NULL,
  `testoRisposta` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idRispostaAgg`));


ALTER TABLE DomandaAgg ADD FOREIGN KEY (idRispostaAgg )REFERENCES RispostaAgg(idRispostaAgg);
ALTER TABLE DomandaAgg ADD FOREIGN KEY (idGioco) REFERENCES Gioco(idGioco);
ALTER TABLE DomandaAgg ADD FOREIGN KEY (idDomanda) REFERENCES DomandeTot(idDomanda);

/*Tabella Preposizioni Domanda e Risposta*/
CREATE TABLE IF NOT EXISTS `DomandaPrep` (
  `idDomandaPrep` INT AUTO_INCREMENT NULL,
  `punti` INT NOT NULL,
  `testo` VARCHAR(100) NOT NULL,
  `difficolta` INT NOT NULL,
  `versione` VARCHAR(15) NOT NULL,
  `idGioco` VARCHAR(30) NOT NULL,
  `idDomanda` INT NULL,
  PRIMARY KEY (`idDomandaPrep`));

CREATE TABLE IF NOT EXISTS `RispostaPrep` (
  `idRispostaPrep` INT AUTO_INCREMENT NULL,
  `punti` INT NOT NULL,
  `testoRisposta` VARCHAR(50) NOT NULL,
  `flagPrep` BOOLEAN NOT NULL,
  `idDomandaPrep` INT NULL,
  PRIMARY KEY (`idRispostaPrep`));

ALTER TABLE RispostaPrep ADD FOREIGN KEY (idDomandaPrep) REFERENCES DomandaPrep(idDomandaPrep);
ALTER TABLE DomandaPrep ADD FOREIGN KEY (idGioco) REFERENCES Gioco(idGioco);
ALTER TABLE DomandaPrep ADD FOREIGN KEY (idDomanda) REFERENCES DomandeTot(idDomanda);

/*Tabella Verbi Domanda e Risposta*/
CREATE TABLE IF NOT EXISTS `DomandaVerb` (
  `idDomandaVerb` INT AUTO_INCREMENT NULL,
  `punti` INT NOT NULL,
  `testo` VARCHAR(100) NOT NULL,
  `difficolta`INT NOT NULL,
  `versione` VARCHAR(15) NOT NULL,
  `idGioco` VARCHAR(30) NOT NULL,
  `idDomanda` INT NULL,
  PRIMARY KEY (`idDomandaVerb`));

CREATE TABLE IF NOT EXISTS `RispostaVerbi` (
  `idRispostaVerb` INT AUTO_INCREMENT NULL,
  `punti` INT NOT NULL,
  `testoRisposta` VARCHAR(50) NOT NULL,
  `flagPrep` BOOLEAN NOT NULL,
  `idDomandaVerb` INT NULL,
  PRIMARY KEY (`idRispostaVerb`));

ALTER TABLE RispostaVerbi ADD FOREIGN KEY (idDomandaVerb) REFERENCES DomandaVerb(idDomandaVerb);
ALTER TABLE DomandaVerb ADD FOREIGN KEY (IdGioco) REFERENCES Gioco(idGioco);
ALTER TABLE DomandaVerb ADD FOREIGN KEY (idDomanda) REFERENCES DomandeTot(idDomanda);

/*Tabella Sinonimi e Contrari Domanda e Risposta*/
CREATE TABLE IF NOT EXISTS `DomandaSinCon` (
  `idDomandaSinCon` INT AUTO_INCREMENT NULL,
  `punti` INT NOT NULL,
  `parola` VARCHAR(30) NOT NULL,
  `difficolta` INT NOT NULL,
  `versione` VARCHAR(15) NOT NULL,
  `idRispostaSinCon` INT NULL,
  `idGioco` VARCHAR(30) NOT NULL,
  `idDomanda` INT NULL,
  PRIMARY KEY (`idDomandaSinCon`));

CREATE TABLE IF NOT EXISTS `RispostaSinCon` (
  `idRispostaSinCon` INT AUTO_INCREMENT NULL,
  `punti` INT NOT NULL,
  `testoRisposta` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idRispostaSinCon`));

/*ALTER TABLE RispostaSinCon ADD FOREIGN KEY (idDomandaSinCon) REFERENCES DomandaSinCon(idDomandaSinCon);*/
ALTER TABLE DomandaSinCon ADD FOREIGN KEY (idRispostaSinCon) REFERENCES RispostaSinCon(idRispostaSinCon);
ALTER TABLE DomandaSinCon ADD FOREIGN KEY (idGioco )REFERENCES Gioco(idGioco);
ALTER TABLE DomandaSinCon ADD FOREIGN KEY (idDomanda) REFERENCES DomandeTot(idDomanda);

/*IMPICCATO --> Tabella Nomi Domanda e Risposta*/
CREATE TABLE IF NOT EXISTS `DomandaNomi` (
  `idDomandaNomi` INT AUTO_INCREMENT NULL,
  `punti` INT NOT NULL,
  `parola` VARCHAR(30) NOT NULL,
  `difficolta` INT NOT NULL,
  `versione` VARCHAR(15) NOT NULL,
  `idRispostaNomi` INT NULL,
  `idGioco` VARCHAR(30) NOT NULL,
  `idDomanda` INT NULL,
  PRIMARY KEY (`idDomandaNomi`));

CREATE TABLE IF NOT EXISTS `RispostaNomi` (
  `idRispostaNomi` INT AUTO_INCREMENT NULL,
  `punti` INT NOT NULL,
  `testoRisposta` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idRispostaNomi`));

ALTER TABLE DomandaNomi ADD FOREIGN KEY (idRispostaNomi) REFERENCES RispostaNomi(idRispostaNomi);
ALTER TABLE DomandaNomi ADD FOREIGN KEY (idGioco) REFERENCES Gioco(idGioco);
ALTER TABLE DomandaNomi ADD FOREIGN KEY (idDomanda) REFERENCES DomandeTot(idDomanda);

/*Tabella Articoli Domanda e Risposta*/
CREATE TABLE IF NOT EXISTS `DomandaArticoli` (
  `idDomandaArticoli` INT AUTO_INCREMENT NULL,
  `punti` INT NOT NULL,
  `testo` VARCHAR(100) NOT NULL,
  `difficolta` INT NOT NULL,
  `versione` VARCHAR(15) NOT NULL,
  `idGioco` VARCHAR(30) NOT NULL,
  `idDomanda` INT NULL,
  PRIMARY KEY (`idDomandaArticoli`));

CREATE TABLE IF NOT EXISTS `RispostaArticoli` (
  `idRispostaArticoli` INT AUTO_INCREMENT NULL,
  `punti` INT NOT NULL,
  `testoRisposta` VARCHAR(50) NOT NULL,
  `flagPrep` BOOLEAN NOT NULL,
  `idDomandaArticoli` INT NULL,
  PRIMARY KEY (`idRispostaArticoli`));

ALTER TABLE RispostaArticoli ADD FOREIGN KEY (idDomandaArticoli) REFERENCES DomandaArticoli(idDomandaArticoli);

ALTER TABLE DomandaArticoli ADD FOREIGN KEY (idGioco) REFERENCES Gioco(idGioco);
ALTER TABLE DomandaArticoli ADD FOREIGN KEY (idDomanda) REFERENCES DomandeTot(idDomanda);
