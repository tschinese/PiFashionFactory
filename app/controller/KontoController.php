<?php
//Sprint 5, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 08.01.2016 Version 1.0
//UserStory: Als Kunde möchte ich verschiedene Kontenarten
//Task: Kontenverwaltungsplattform programmieren
//Aufwand: 4 Stunden
//Beschreibung: Controller zum speichern/anzeigen eines Kontos

class KontoController extends Controller{
    
    
    
    public function callView(){
        
        $this->view('Header');
        //Aufruf der View zum Kontoanlegen
        $this->view('Konto/KontoView');
        $this->view('Footer');
 
    }
    
    public function writeDB(){
        //Speichern der User_ID
        $idKunde = $_SESSION['logged']['id'];
        //Wenn Kontonummer und BLZ gesetzt normales Konto
        if(isset($_POST['knummer']) && isset($_POST['blz'])){
            //Speichert Werte aus der Kontoanlegen View
            $kNummer = $_POST['knummer'];
            $blz = $_POST['blz'];
            $ktyp = $_POST['art'];
            $bankK = $this->model('KontoModel');
            //Übergabe an das Konto Model zum speichern eines neuen Kontos
            $bankK->sichereDaten($idKunde,$ktyp, $kNummer, $blz); 
         
        }
        //wenn diese Variabeln gesetzt = Kreditkarte
        else if(isset($_POST['ziff']) && isset($_POST['expireD'])){
            //Speichert Werte aus der Kontoanlegen View
            $ziffer = $_POST['ziff'];
            $expireD = $_POST['expireD'];
            $ktyp = $_POST['art'];
            $bankK = $this->model('KontoModel');
            //Übergabe an das Konto Model zum speichern einer neuen Kreditkarte
            $bankK->sichereDaten($idKunde,$ktyp, $ziffer, $expireD);
        }
        
    }
    
    public function uebersicht(){
        //Speichern der User_ID
        $idKunde = $_SESSION['logged']['id'];
        $kontoReturn = $this->model('KontoModel');
        //Aufruf des Konto Models für Rückgabe aller angelegten Kontos
        $res = $kontoReturn->getKontos($idKunde);
        
        $this->view('Header');
        //Aufruf der View zum Anzeigen der angelgten Kontos mit Ergebnis aus Datenbank
        $this->view('Konto/KontoUebersicht',$res);
        $this->view('Footer');
        
    }
    
}
