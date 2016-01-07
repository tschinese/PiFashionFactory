<?php
// Sprint 5, Gruppe 4 Onlineshop, Datum: 07.01.2016 Version 2
// Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
// UserStory:(450-1) Als Admin möchte ich über eine vernünftige Auswahl-Möglichkeit im Backend-Bereich verfügen.
// Task: #10611 Auswahl in den Analyse-Funktionen überarbeiten 
// Gesamtaufwand Task:  Stunde
// Beschreibung: Controller wurde angepasst auf Auswahlmöglichkeiten

//Sprint 4, Gruppe 4 Onlineshop, Datum: 07.12.2015, Version 1
//Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
//UserStory: 320 Als Kunde möchte ich verschiedene Analyse-Funktionen im backend haben
//Task: 320-4 (#10506) notwendige Controller dazu schreiben
//Gesamtaufwand: 9 Stunden
//Beschreibung: Controller für alle Analysen

//Sprint 4, Kerstin Gräter START
class AnalyseController extends Controller {

    function index() {
        //Analyse_Model von Riedl
        $analyse = $this->model('Analyse_Model');
        $auswahl = $this->model('AnalyseAuswahl_Model');
        
        $this->view('Backend/Backendheader');
        $this->view('Analyse/Analyse_Sidebar');

        // Analyse Durchschnittspreis anzeigen
        if (isset($_POST['durchschnittspreis'])) {
            $this->view('Analyse/Analyse_Durchschnittspreis', $analyse->durchschnittpreis());
        }
        // Analyse Gesamtumsatz anzeigen
        if (isset($_POST['gesamtumsatz'])) {
            $this->view('Analyse/Analyse_Umsatz', $analyse->umsatz());
        }
        // Analyse umsatzprodukt anzeigen
        if (isset($_POST['umsatzprodukt'])) {
            //Sprint 5, Kerstin Gräter, Line 37
            $data = array('auswahl'=>$auswahl->produktgewinnauswahl(), 'analyse', 'nummer');
            $this->view('Analyse/Analyse_Produktgewinn', $data);
        }
        // Analyse bestellungprodukt anzeigen
        if (isset($_POST['bestellungprodukt'])) {
            $this->view('Analyse/Analyse_Menge');
        }
        // Analyse rezensionprodukt anzeigen
        if (isset($_POST['rezensionprodukt'])) {
            $this->view('Analyse/Analyse_Rezension');
        }
        // Analyse produktkategorie anzeigen
        if (isset($_POST['produktkategorie'])) {
            $this->view('Analyse/Analyse_Kategorieprodukt');
        }
        // Analyse anzahlkunden anzeigen
        if (isset($_POST['anzahlkunden'])) {
            $this->view('Analyse/Analyse_Kunde', $data = $analyse->kunde());
        }
        // Analyse bestellungkunde anzeigen
        if (isset($_POST['bestellungkunde'])) {
            $this->view('Analyse/Analyse_Bestellungenkunde');
        }
        // Analyse umsatzkunde anzeigen
        if (isset($_POST['umsatzkunde'])) {
            $this->view('Analyse/Analyse_Umsatzkunde');
        }
    }

}
//Sprint 4, Kerstin Gräter ENDE