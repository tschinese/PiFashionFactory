<?php

// Sprint 5, Gruppe 4 Onlineshop, Datum: 07.01.2016 Version 2
// Verfasser: Marcel Riedl, Matrikelnummer: 3113845
// UserStory: 490 Als Programmierer möchte ich bereits vorhandenen Code updaten
// Task: 490-1 eigene Files überarbeiten
// Zeitaufwand: 1 Stunde
// Beschreibung: Gewinnberechnung umgeschrieben
//
//Sprint 4, Gruppe 4 Onlineshop, Datum: 09.11.2015 Version 1
//Verfasser: Marcel Riedl, Matrikelnummer: 3113845
//UserStory: #320 Als Admin möchte ich verschiedene Analyse-Funktionen im Backend haben.
//Task: 320-2 (#10504) Auslesen der notwendigen Daten aus der Datenbank
//Aufwand: 4 Stunden
//Beschreibung: Es wird das Analyse_Model erstellt. 
//
// Kerstin Gräter
require_once '../app/config/Connect_Mysql.php';

// Kerstin Gräter Ende
// Sprint 4 Marcel Riedl Start
class Analyse_Model {

    // Klassenvariablen
    private $con;
    private $sql;

    // Sprint 4 Marcel Riedl Ende
    // Sprint 5 Marcel Riedl Start
    // function um den Gewinn durch ein einzelnen Produkt zu ermitteln
    function produktgewinn($produktnummer) {
        // SQL Statement
        $sql1 = 'select Sum(menge) as menge from bestellliste where produkt_produktnummer = ' . $produktnummer;
        $sql2 = 'select Preis, SalePreis from produkt where Produktnummer = ' . $produktnummer;
        // Verbindung zur Datenbank herstellen
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement vorbereiten
        $stmt1 = $con->prepare($sql1);
        $stmt2 = $con->prepare($sql2);
        // Statement ausführen
        $stmt1->execute();
        $stmt2->execute();
        // Daten ausgeben
        $dat1 = $stmt1->fetch(PDO::FETCH_ASSOC);
        $huhu = $stmt2->fetch(PDO::FETCH_ASSOC);

        if ($huhu['SalePreis'] < $huhu['Preis']) {
            $preis = $huhu['SalePreis'];
        } else {
            $preis = $huhu['Preis'];
        }
        $gewinn = $preis * $dat1['menge'];
        $data = array(1 => $dat1, 2 => $preis);
        // Aufruf der Methode gewinnberechnung
//        $preis = $this->gewinnberechnung($data);
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // return wert
        return $gewinn;
    }

    //Sprint 5 Marcel Riedl Ende
    //Sprint 4 Marcel Riedl Start
    // Gewinnberechnung
    function gewinnberechnung($row) {
        $total = sizeof($row);
        $a = 0;
        while ($a < $total) {
            $menge = $row[$a]['menge'];
            $preis = $row[$a]['preis'];
            $a++;
            $gesamtpreis = $menge * $preis;
            $gpreis+=$gesamtpreis;
        }
        return $gpreis;
    }

    // Menge der Bestellungen eines Produkts ausgeben
    function menge($produktnummer) {
        // SQL Statement
        $this->sql = 'select sum(menge) as Bestellungen_pro_Produkt from bestellliste where produkt_produktnummer = ' . $produktnummer;

        // Verbindung zur Datenbank herstellen
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement vorbereiten
        $stmt = $con->prepare($this->sql);
        // Statement ausführen
        $data = $stmt->execute();
        // Daten ausgeben
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // return Wert
        return $data;
    }

    // Umsatz des Onlineshops ermittlen
    function umsatz() {
        // SQL Statement
        $this->sql = 'select sum(gesamtpreis) as Umsatz from bestellung;';
        // Verbindung zur Datenbank herstellen
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement vorbereiten
        $stmt = $con->prepare($this->sql);
        // Statement ausführen
        $data = $stmt->execute();
        // Daten ausgeben
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // return Wert
        return $data;
    }

    // Anzahl der Rezensionen zu einem Produkt
    function rezension($produktnummer) {
        // SQL Statement
        $this->sql = 'select count(rezensionID) as Rezensionen_pro_Produkt from rezension where produkt_produktnummer = ' . $produktnummer;
        // Verbindung zur Datenbank herstellen
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement vorbereiten
        $stmt = $con->prepare($this->sql);
        // Statement ausführen
        $data = $stmt->execute();
        // Daten ausgeben
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // return Wert
        return $data;
    }

    // Anzahl aller Produkte aus einer Kategorie

    function kategorieprodukt($kategorie) {
        // SQL Statement
        $this->sql = 'select count(*) as Produkte_pro_Kategorie from produkt where kategorie_katID = ' . $kategorie;
        // Verbindung zur Datenbank herstellen
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement vorbereiten
        $stmt = $con->prepare($this->sql);
        // Statement ausführen
        $data = $stmt->execute();
        // Daten ausgeben
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // return Wert
        return $data;
    }

    // Anzahl aller Kunden
    function kunde() {
        // Verbindung zur Datenbank herstellen
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // SQL Statement
        $this->sql = 'select count(kundennummer) as Anzahl_Admin from kunde where rolle = 1;';
        // Prepared Statement vorbereiten
        $stmt = $con->prepare($this->sql);
        // Statement ausführen
        $data0 = $stmt->execute();
        // Daten ausgeben
        $data0 = $stmt->fetch(PDO::FETCH_ASSOC);
        // SQL Statement
        $this->sql = 'select count(kundennummer) as Anzahl_Kunden from kunde where rolle = 0;';
        // Prepared Statement vorbereiten
        $stmt = $con->prepare($this->sql);
        // Statement ausführen
        $data1 = $stmt->execute();
        // Daten ausgeben
        $data1 = $stmt->fetch(PDO::FETCH_ASSOC);
        // SQL Statement
        $this->sql = 'select count(kundennummer) as Gesamtanzahl from kunde;';
        // Prepared Statement vorbereiten
        $stmt = $con->prepare($this->sql);
        // Statement ausführen
        $data2 = $stmt->execute();
        // Daten ausgeben
        $data2 = $stmt->fetch(PDO::FETCH_ASSOC);
        // Datensätze verbinden
        $data = array(0 => $data0, 1 => $data1, 2 => $data2);
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // return Wert
        return $data;
    }

    // Durchschnittspreis aus allen bestellungen
    function durchschnittpreis() {
        // SQL Statement
        $this->sql = 'select avg(gesamtpreis) as Durchschnittspreis from bestellung;';
        // Verbindung zur Datenbank herstellen
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement vorbereiten
        $stmt = $con->prepare($this->sql);
        // Statement ausführen
        $data = $stmt->execute();
        // Daten ausgeben
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // return Wert
        return $data;
    }

    // Umsatz pro Kunde
    function umsatzkunde($kundennummer) {
        // SQL Statement
        $this->sql = 'select sum(gesamtpreis) as Kundenumsatz from bestellung where Kunde_Kundennummer = ' . $kundennummer;
        // Verbindung zur Datenbank herstellen
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement vorbereiten
        $stmt = $con->prepare($this->sql);
        // Statement ausführen
        $data = $stmt->execute();
        // Daten ausgeben
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // return Wert
        return $data;
    }

    // Bestellungen pro Kunde
    function bestellungenkunde($kundennummer) {
        // SQL Statement
        $this->sql = 'select count(*) as AnzahlBestellungen from bestellung where Kunde_Kundennummer = ' . $kundennummer;
        // Verbindung zur Datenbank herstellen
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement vorbereiten
        $stmt = $con->prepare($this->sql);
        // Statement ausführen
        $data = $stmt->execute();
        // Daten ausgeben
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        // Verbindung zur Datenbank schließen
        $con = null;
        $this->con->schließen();
        // return Wert
        return $data;
    }

}

// Sprint 4 Marcel Riedl Ende