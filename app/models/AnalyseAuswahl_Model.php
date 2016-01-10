<?php
// Sprint 5, Gruppe 4 Onlineshop, Datum: 07.01.2016 Version 1
// Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
// UserStory:(450-1) Als Admin möchte ich über eine vernünftige Auswahl-Möglichkeit im Backend-Bereich verfügen.
// Task: #10611 Auswahl in den Analyse-Funktionen überarbeiten 
// Gesamtaufwand Task: 8 Stunden
// Beschreibung: Hier wird das Model mit den functions für die Auswahlmöglichkeit der Analysen erstellt

//Sprint 5, Kerstin Gräter START
require_once '../app/config/Connect_Mysql.php';

class AnalyseAuswahl_Model {
    
    private $con;
    
    function __construct() {
        
    }
    
    //function für Auswahl eines Kunden der Analyse Umsatz pro Kunde 
    function umsatzkundeauswahl(){
        $sql = 'select Kundennummer, Vorname, Nachname from kunde';
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $daten = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $con = null;
        $this->con->schließen();
        
        return $daten;
        
    }
    //function für Auswahl eines Produkts der Analyse Umsatz pro Produkt 
    function produktgewinnauswahl(){
        $sql = 'select * from produkt';
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $daten = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $con = null;
        $this->con->schließen();
        
        return $daten;
    }
    
    //function für die Auswahl eines Produkts der Analyse Menge der Bestellungen eines Produkts
    function mengebestellungauswahl(){
        $sql = 'Select Produktnummer, Benennung from Produkt';
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $daten = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $con = null;
        $this->con->schließen();
        
        return $daten;
    }
    //function für die Auswahl eines Kunden der Analyse Bestellungen pro Kunde
    function bestellungenkundeauswahl(){
        $sql = 'Select Kundennummer, Vorname, Nachname from Kunde';
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $daten = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $con = null;
        $this->con->schließen();
        
        return $daten;           
    }
    //funciton für die Auswahl eines Produkts der Analyse Rezension pro Produkt
    function rezensionauswahl(){
        $sql = 'Select Produktnummer, Benennung from produkt';
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $daten = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $con = null;
        $this->con->schließen();
        
        return $daten;
    }
    //function für Auswahl einer Kategorie der Analyse Anzahl der Produkte innerhalb einer Kategorie
    function kategorieauswahl(){
        $sql = 'select katID, kategorie from Kategorie';
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $daten = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $con = null;
        $this->con->schließen();
        
        return $daten;
    }
    

}
// Sprint 5, Kerstin Gräter ENDE