<?php

//Sprint 5, Gruppe 4 Onlineshop, Verfasser: Denis Kevljanin, Datum: 10.01.2016
//UserStory: Als Kunde möchte ich eine Schnellkauffunktion für Produkte haben 
//Task: Schnellkauffunktion programmieren
//Gesamtaufwand: 20 Stunden
//Aufwand File: 10 Stunden
//Beschreibung: Model der Sofortkauffunktion
//Erstellen der Klasse
class OneClickBuyModel {

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

    //Funktion um die gegebenen Daten in die Datenbank zu speichern
    public function submitOrder($kID, $pID) {
        //Query zur Preisabfrage
        $sql1 = $this->con->prepare('SELECT Preis FROM produkt WHERE Produktnummer = ' . $pID . ';');
        //ausführen des Prepared Statements
        $sql1->execute();
        //Auffangen des ResultSets
        $dataPreis = $sql1->fetch();
        //Preis in einer Variablen speichern
        $preis = $dataPreis[0];

        //Query um bestelltes Produkt in Tabelle bestellung zu schreiben
        $sql2 = $this->con->prepare('INSERT into bestellung (bestellnummer, Gesamtpreis, Datum, Kunde_Kundennummer) values (null, ' . $preis . ', null , ' . $kID . ');');
        //ausführen des Prepared Statements
        $sql2->execute();

        //Query um bestellnummer, des vom jeweiligen Kunden bestellten Produkts zu erhalten
        $sql3 = $this->con->prepare('SELECT bestellnummer FROM bestellung WHERE Kunde_Kundennummer = ' . $kID . ' ORDER BY Datum DESC;');
        //ausführen des Prepared Statements
        $sql3->execute();
        //Auffangen des ResultSets
        $dataBestellID = $sql3->fetch();
        //Bestellnummer in einer Variablen speichern
        $bestellID = $dataBestellID[0];

        //Query um bestelltes Produkt in die Tabelle bestellliste zu schreiben
        $sql4 = $this->con->prepare('INSERT into bestellliste (bestellung_bestellnummer, produkt_Produktnummer, Menge) values (' . $bestellID . ', ' . $pID . ', 1);');
        //ausführen des Prepared Statements
        $sql4->execute();

        //Query um alle Daten auszulesen um sie dem view zu übergeben
        $sql5 = $this->con->prepare('SELECT Produkt.Produktnummer, Produkt.Benennung, Produkt.Preis, Produkt.Farbe_farbe, Produkt.Groese_groese, Produkt.Hersteller_hersteller, Liste.Menge, Bestellung.Gesamtpreis FROM produkt Produkt JOIN (bestellung Bestellung JOIN bestellliste Liste) WHERE Liste.Bestellung_bestellnummer = ' . $bestellID . ' AND Bestellung.bestellnummer = ' . $bestellID . ' AND Bestellung.Kunde_Kundennummer = ' . $kID . ' AND Produkt.Produktnummer = Liste.Produkt_Produktnummer');
        //ausführen des Prepared Statements
        $sql5->execute();
        //Auffangen des ResultSets
        $data = $sql5->fetchAll(PDO::FETCH_ASSOC);

        //schließen der Datenbank
        $this->con = null;
        $this->db->schließen();

        //Rüchgabewert
        return $data;
    }

}
