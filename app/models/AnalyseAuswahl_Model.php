<?php
// Sprint 5, Gruppe 4 Onlineshop, Datum: 07.01.2016 Version 1
// Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
// UserStory:(450-1) Als Admin möchte ich über eine vernünftige Auswahl-Möglichkeit im Backend-Bereich verfügen.
// Task: #10611 Auswahl in den Analyse-Funktionen überarbeiten 
// Gesamtaufwand Task:  Stunde
// Beschreibung: Hier wird das Model mit den functions für die Auswahlmöglichkeit der Analysen erstellt

//Sprint 5, Kerstin Gräter START
require_once '../app/config/Connect_Mysql.php';

class AnalyseAuswahl_Model {
    
    private $con;
    
    function __construct() {
        
    }
    
    function umsatzkundeauswahl(){
        $sql = 'select * from kunde';
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $daten = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $con = null;
        $this->con->schließen();
        
        return $daten;
        
    }
    
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

}
// Sprint 5, Kerstin Gräter ENDE