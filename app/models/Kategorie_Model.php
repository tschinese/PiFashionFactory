<?php

//Sprint 4, Gruppe 4 Onlinshop Datum: 05.12.2015, Version 2
//Verfasser: Marcel Riedl, Matrikelnummer: 3113845
//UserStory: 370 Als Entwickler möchte ich, dass der Onlinshop auf dem Hochschulserver läuft.
//Task: Änderungen bei Kategorieen implementieren
//Auswand: 1 Stunde
//Beschreibung: Änderungen in den SQL-Statements
//
//Sprint 3, Gruppe 4 Onlineshop 
//Verfasser: Marcel Riedl, Datum: 14.11.2015 Version 1
//UserStory: #90 Als Kunde möchte ich eine einfache Navigation in Kategorien, so dass ich schnell mein Wunschprodukt finden kann.
//Task: #90-1 (10315) Kategorien auswählen und programmieren
//Aufwand: 1,5 Stunden
//Beschreibung: Es wird das Model für die Kategorien erstellt.
// 
// Kerstin Gräter
require_once '../app/config/Connect_Mysql.php';

// Kerstin Gräter Ende
// Sprint 3 Marcel Riedl Start
class Kategorie_Model {

    // Klassenvariablen
    private $sql;
    private $con;
    protected $egal;

    // Konstuktor
    function __construct() {
        
    }

    // function um alle Kategorien anzeigen zu können
    function kategorienanzeigen($kat) {
        // SQL Statement
        // // Sprint 3 Marcel Riedl Ende
        // Sprint 4 Marcel Riedl Start Überarbeitet
        $this->sql = 'Select KatID, Kategorie from Kategorie where Oberkategorie_OberkatID = ' . $kat;
        // Sprint 4 Marcel Riedl Ende
        // Sprint 3 Marcel Riedl Start     
        // Verbindung zur Datenbank herstellen
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement erstellen und ausführen
        $stmt = $con->prepare($this->sql);
        $stmt->execute();
        // Daten in variable $row speichern
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // return Wert
        return $row;
    }

}

// Sprint 3 Marcel Riedl Ende