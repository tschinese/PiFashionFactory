/*
<!--<!--Sprint 4, Gruppe 4 Onlineshop, 
//Verfasser: Renato Cabriolu, Datum: 07.12.2015 
//UserStory: Als Kunde möchte ich mit anderen chatten.
//Task: (330-1) Datenbank tabellen erstellen 
//Aufwand: 20min Stunden
 */


CREATE TABLE `chat` (
  `Msg_ID` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `Kunde_ID` VARCHAR(255) NOT NULL DEFAULT '',
  `Message` TEXT NOT NULL,
  `Message_Date` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Msg_ID`)
)
ENGINE = InnoDB;