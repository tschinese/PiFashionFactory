<?php

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