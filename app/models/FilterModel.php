<?php
//Sprint 4, Gruppe 4 Onlineshop, Verfasser: Denis Kevljanin, Datum: 08.12.2015
//UserStory: 340 Als Programmierer möchte ich Filterfunktionen hinzufügen und diese und die Suche dynamisch gestalten 
//Task: 340-1 dynamische Filterfunktionen hinzufügen
//Gesamtaufwand: 25 Stunden
//Aufwand File: 7 Stunden
//Beschreibung: Model der Filterfunktion, Probleme beim debuggen und Fehlerbehebung

//Sprint 3, Gruppe 4 Onlineshop, Verfasser: Denis Kevljanin, Datum: 22.11.2015
//UserStory: 190 Als Kunde möchte ich eine Filter- und Suchfunktion einsetzen können
//Task: 190-1 filterfunktion programmieren
//Aufwand: 15 Stunden
//Beschreibung: Model der Filterfunktion
class FilterModel {

    private $db;
    private $con;

//Datenbankconnection übernommen von @Gräter,Kerstin
    public function __construct() {
        try {
            $this->db = new Connect_Mysql();
            $this->con = $this->db->verbinden();
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
    }

//Funktion mit dem SQL Prepare Statement und schließen der Connection
    public function filter($preis, $groesse, $farbe) {

        $select = "SELECT * FROM Produkt ";
        $where = "WHERE ";
		//if-Anweisungen um die richtige query aufzubauen
        if (!empty($preis) && empty($groesse) && empty($farbe)) {
            $sql = $select . $where . $preis;
        } else if (!empty($groesse) && empty($preis) && empty($farbe)) {
            $sql = $select . $where . $groesse;
        } else if (!empty($farbe) && empty($groesse) && empty($preis)) {
            $sql = $select . $where . $farbe;
        } else if (!empty($preis) && !empty($groesse) && empty($farbe)) {
            $sql = $select . $where . '(' . $preis . ') AND (' . $groesse . ')';
        } else if (!empty($preis) && !empty($farbe) && empty($groesse)) {
            $sql = $select . $where . '(' . $preis . ') AND (' . $farbe . ')';
        } else if (!empty($groesse) && !empty($farbe) && empty($preis)) {
            $sql = $select . $where . '(' . $groesse . ') AND (' . $farbe . ')';
        } else if (!empty($preis) && !empty($groesse) && !empty($farbe)) {
            $sql = $select . $where . '(' . $preis . ') AND (' . $groesse . ') AND (' . $farbe . ')';
        } else {
            $sql = "SELECT * FROM Produkt";
        }
		//Prepare Statement
        $stmt = $this->con->prepare($sql);

        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->con = null;
        $this->db->schließen();

        return $data;
    }

}

?>