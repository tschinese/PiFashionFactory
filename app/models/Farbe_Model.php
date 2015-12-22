<?php

// Sprint 5 Gruppe 4 Onlineshop Datum: 12.12.2015
// Verfasser: Marcel Riedl Matrikelnummer: 3113845
// UserStory: 410 Als Admin möchte ich weitere Funktionen im Backend-Bereichen haben.
// Tasknummer: 410-1 (#10601) Farben hinzufügen und löschen
// Aufwand: 1 Stunde
// Beschreibung: Hier wird das Model zu Farben erstellt.
//
// Von Kerstin Gräter Start
require_once '../app/config/Connect_Mysql.php';

// Kerstin Gräter Ende
// Sprint 5 Marcel Riedl Start
class Farbe_Model {

    // Klassenvariablen
    private $con;
	
	function __construct(){
	}
	
	// function um alle bereits vorhandenen Farben aus der Datenbank anzuzeigen
    function anzeigen() {
        // SQL Statement
        $sql = 'Select * from Farbe;';
        // Verbindung zur Datenbank herstellen:
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement vorbereiten
        $stmt = $con->prepare($sql);
        // Prepared Statement ausführen
        $stmt->execute();
        // Daten in Variable spreichern
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // Return Value festlegen
        return $data;
    }

    // Function um neue Farben hinzufügen zu können
    function hinzufuegen($farbe) {
        // SQL Statement 
        $sql = 'insert into Farbe (farbe) values (' . $farbe . ')';
        // Verbindung zur Datenbank
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Ausführung des Statements
        $con->query($sql);
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // return wert
        return 'Die Farbe ' . $farbe . 'wurde hinzugefügt!';
    }

    // function um Farben aus der Datenbank zu löschen
    function loeschen($farbe) {
        //SQL Statement
        $sql = 'delete from Farbe where farbe = ' . $farbe;
        // Verbindung zur Datenbank
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Ausführung des Statements
        $con->query($sql);
        // Schließen der Verbindung zur Datenbank
        $con = null;
        $this->con->schließen();
        // return wert
        return 'Die Farbe ' . $farbe . 'wurde gelöscht!';
    }

}

// Sprint 5 Marcel Riedl Ende