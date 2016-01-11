<?php
//Sprint 5, Gruppe 4 Onlineshop, Verfasser: Kerstin Gräter, Datum: 07.01.2016 Version 1
//UserStory: #490 Als Programmierer möchte ich bereits vorhandenen Code updaten
//Task: (490-2) eigene Files überarbeiten
//Gesamtaufwand: 2 Stunden
//Beschreibung: Einfügen des Gutscheinpreises falls vorhanden und beenden von Sessions

//Sprint 3, Gruppe 4 Onlineshop, Verfasser: Kerstin Gräter, Datum: 23.11.2015 Version 2
//UserStory: Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
//Task: (270-2) #10330 Zusammenführen
//Aufwand: 7 Stunden

//Sprint 2, Gruppe 4 Onlineshop, Verfasser: Kerstin Gräter, Datum: 09.11.2015 Version 1
//UserStory: Als Programmierer möchte ich den Aufbau als Model-View-Controller (MVC) haben.
//Task: 110-2 (#10190) MVC Programmieren
//Aufwand: 5 Stunden
//Beschreibung: Es wird der grundlegende Aufbau der Bestellabwicklung als MVC erstellt.
// Hier wird das Model dazu erstellt

//Sprint 1: Bestellabwicklung 


// include um die Klasse Connect_Mysql einzubinden
require_once '../app/config/Connect_Mysql.php';
//Objekt von Denis Kevljanins Mail
//require_once '../app/controller/mail.php';

class Bestellung_Model {

    private $con;
    private $sql;

    // function zur Überprüfung ob PLZ schon vorhanden
    function plzvorhanden($plz) {
        $sql = 'Select plz from Postleitzahl where plz = ' . $plz;

        // mit der Datenbank verbinden
        $this->con = new Connect_Mysql();
        $this->con->verbinden();

        // 1. Statement ausführen
        $this->sql = $sql;
        // PreparedStatement wird erstellt
        $stmt = $this->con->prepare($this->sql);
        // PreparedStatement wird ausgeführt
        $stmt->execute();

        $row = $stmt->fetch();

        if ($row['plz'] == $plz) {
            return 'ja';
        } else {
            return 'nein';
        }
    }

    // function um eine Adresse eintragen zu können
    function adresse($vorname, $nachname, $plz, $ort, $straße, $kundennummer) {
        $wahr = plzvorhanden($plz);
        // sql statements für inserts 
        $sqlPLZ = 'insert into postleitzahl (plz, ort) values (' . $plz . ', ' . $ort . ');';
        $sqlAdresse = 'insert into lieferadresse (LieferID, Vorname, Nachname, straße, kunde_kundennummer, postleitzahl_plz) values (null, '
                . $vorname . ',' . $nachname . ',' . $straße . ', ' . $kundennummer . ', ' . $plz . ')';

        // mit der Datenbank verbinden
        $this->con = new Connect_Mysql();
        $this->con->verbinden();
        if ($wahr == 'nein') {
            // 1. Statement ausführen
            $this->sql = $sqlPLZ;
            // PreparedStatement wird erstellt
            $stmt = $this->con->prepare($this->sql);
            // PreparedStatement wird ausgeführt
            $stmt->execute();
        }
        // 2. Statement ausführen
        $this->sql = $sqlAdresse;
        // PreparedStatement wird erstellt
        $stmt = $this->con->prepare($this->sql);
        // PreparedStatement wird erstellt
        $stmt->execute();

        // Datenbankverbindung wird geschlossen
        $this->con->schließen();
    }

    // function um bereits bestehende Adressen anzuzeigen
    function adresseanzeigen($kundennummer) {
        // SQL Statement
        $sql = 'select straße, plz, ort from adresse join postleitzahl '
                . 'where Postleitzahl_PLZ = plz and Kunde_kundennummer = ' . $kundennummer . ';';
        $this->sql = $sql;
        // Connection
        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();
        // Prepared Statement erstellen und ausführen
        $stmt = $con->prepare($this->sql);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$con = null;
	$this->con->schließen();
        return $row;
       
    }
	
    // function um Lieferadressen anzuzeigen
    function lieferadresseanzeigen($kundennummer){

        $this->con = new Connect_Mysql();
        $con = $this->con->verbinden();

        $sql = 'select l.Vorname, l.Nachname, l.Straße, l.Postleitzahl_PLZ, p.Ort from lieferadresse l join postleitzahl p where l.Kunde_Kundennummer = '. $kundennummer.' and l.Postleitzahl_PLZ = p.PLZ';
        $this->sql=$sql;
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $con = null;
        $this->con->schließen();

        return $data;
    }

    // function um die Bestellung abzuschließen --> Speicherung in Table Bestellung und Bestellliste sowie berechnung von
    // Gesamtpreis und Abschicken der Bestätigungsmail
    function bestellungabschließen() {
        //Speicherung von Daten aus Warenkorb in table Bestellung und Bestellliste
        $total = sizeof($_SESSION['warenkorb'])+1;
		
        $a = 1;
        $gesamtpreis = 0;
        $kundennr = $_SESSION['logged']['id'];
        $this->con = new Connect_Mysql();
	$con = $this->con->verbinden();
		
        $sql1 = 'insert into bestellung (bestellnummer, Gesamtpreis, Datum, Kunde_Kundennummer) values (null, 0.0, null , ' . $kundennr . ');';
            //Aufsführung von sql1
            $stmt = $con->query($sql1);
        $sql2 = 'Select bestellnummer from bestellung order by bestellnummer desc Limit 0,1;';
            //Ausführung von sql2
            $stmt = $con->prepare($sql2);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $bestellnr = $row['bestellnummer'];
        
        while ($a < $total) {
            $menge = $_SESSION['warenkorb'][$a]['anzahl'];
            $produktnr = $_SESSION['warenkorb'][$a]['produktNummer'];
            
            $sql3 = 'insert into Bestellliste (Produkt_Produktnummer, Bestellung_Bestellnummer, Menge) values (' 
                . $produktnr . ', ' . $bestellnr . ',' . $menge . ') ';
                //Ausführung von sql3
                $stmt = $con->query($sql3);
            $sql = 'select Preis, SalePreis from produkt where Produktnummer = ' . $produktnr;
                //Ausführung von sql
                $stmt = $con->prepare($sql);
                $stmt->execute();
                $row0 = $stmt->fetch(PDO::FETCH_ASSOC);
            //Berechnung von Preis * Menge pro Produkt
                if($row0['SalePreis']<$row0['Preis']){
                    $preis = $row0['SalePreis'] * $menge;
                }else{
                    $preis = $row0['Preis'] * $menge;
                }
                
                //Sprint 5, Kerstin Gräter START
                //Aufsummieren auf Gesamtpreis
//                if(isset($_POST['code'])&& !empty($_POST['code'])){
//                    $gesamtpreis+=$_SESSION['gutschein']['gesamtpreis'];
//                }
//                else {
//                    $gesamtpreis+=$preis;                    
//                }
                //Sprint 5, Kerstin Gräter ENDE
            $gesamtpreis+=$preis;
            $a++;
        }
        
		
        
        $sql4 = 'Update Bestellung set Gesamtpreis = ' . $gesamtpreis . 'where Bestellnummer = ' . $bestellnr;
        //Ausführung sql4
        $stmt = $con->prepare($sql4);
        $stmt->execute();
		

        //Objekt von Denis Kevljanins Mail
		//$mail = new Mail();
                
        
		
		//echo 'MAIL ABGESCHICKT<br>';
		
	$sql5 = 'select p.Produktnummer, p.Benennung, p.Preis, p.Farbe_farbe, p.Groese_groese, p.Hersteller_hersteller, l.Menge, b.Gesamtpreis '
            .'from produkt p join (bestellung b join bestellliste l)'
            .' where l.Bestellung_bestellnummer = '
            .$bestellnr.' and b.bestellnummer = '
            .$bestellnr.' and b.Kunde_Kundennummer = '
            .$kundennr.' and p.Produktnummer = l.Produkt_Produktnummer';
	$stmt = $con->prepare($sql5);
	$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //Kerstin Gräter START, Sprint 5
        // Session Warenkorb und gutschein beenden
        unset($_SESSION['warenkorb']);
        unset($_SESSION['gutschein']);
        //Kerstin Gräter ENDE, Sprint5
        
        //Connection schließen
	$con = null;
        $this->con->schließen();
        
	return $data;
    }

}
