<?php
//Sprint 5, Gruppe 4 Onlineshop, Verfasser: Denis Kevljanin, Datum: 10.01.2016
//UserStory: Als Programmierer möchte ich Filterfunktionen hinzufügen und diese den Kategorien anpassen 
//Task: Filter an Kategorien anpassen
//Gesamtaufwand: 8 Stunden
//Aufwand File: 3 Stunden
//Beschreibung: Model der Filterfunktion

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

//Erstellen der Klasse - Sprint 3
class FilterModel {

    //Variablen für die Datenbankverbindung
	private $db;
    private $con;
    //Datenbankconnection übernommen von @Gräter,Kerstin
    public function __construct() {
        try {
			//Objekt der Klasse Connect_Mysql
            $this->db = new Connect_Mysql();
			//Functionaufruf um zu verbinden
            $this->con = $this->db->verbinden();
			//Abfangen der Exceptions
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
    }
	//Sprint 3 ENDE

//Funktion mit dem SQL Prepare Statement und schließen der Connection - Sprint 5
    public function filter($preis, $groesse, $farbe, $kategorie) {
        
		//Strings um Querystatement zusammenzubauen
        $select = "SELECT * FROM Produkt ";
        $where = "WHERE ";
		
		//if-Anweisungen um die richtige query aufzubauen
        if (!empty($preis) && empty($groesse) && empty($farbe)) {
            $sql =  $select . $where . $preis . ' AND ' . $kategorie ;
        } else if (!empty($groesse) && empty($preis) && empty($farbe)) {
            $sql = $select . $where . $groesse . ' AND '. $kategorie ;
        } else if (!empty($farbe) && empty($groesse) && empty($preis)) {
            $sql = $select . $where . '(' . $farbe . ') AND '. $kategorie;
        } else if (!empty($preis) && !empty($groesse) && empty($farbe)) {
            $sql = $select . $where . '(' . $preis . ') AND (' . $groesse . ') AND '. $kategorie;
        } else if (!empty($preis) && !empty($farbe) && empty($groesse)) {
            $sql = $select . $where . '(' . $preis . ') AND (' . $farbe . ') AND '. $kategorie ;
        } else if (!empty($groesse) && !empty($farbe) && empty($preis)) {
            $sql = $select . $where . '(' . $groesse . ') AND (' . $farbe . ') AND '. $kategorie ;
        } else if (!empty($preis) && !empty($groesse) && !empty($farbe)) {
            $sql = $select . $where . '(' . $preis . ') AND (' . $groesse . ') AND (' . $farbe . ') AND '. $kategorie ;
        } else {
	?>		
            <h1 id="leer"> Leider ergab Ihre Suche keine Treffer </h1>
	<?php		
        }
		//Sprint 5 ENDE
		
		//Prepare Statement - Sprint 4
        $stmt = $this->con->prepare($sql);
		//Ausführen des Prepared Statements
        $stmt->execute();
		//Auffangen des ResultSets
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//Schließen der Datenbankverbindung
        $this->con = null;
        $this->db->schließen();
		//Rückgabewert
        return $data;
		//Sprint 4 ENDE
    }

}

?>