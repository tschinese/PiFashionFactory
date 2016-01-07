<?php

//Sprint 4, Gruppe 4 Onlineshop, Datum: 07.12.2015, Version 1
//Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
//UserStory: 320 Als Kunde möchte ich verschiedene Analyse-Funktionen im backend haben
//Task: 320-4 (#10506) notwendige Controller dazu schreiben
//Gesamtaufwand: 9 Stunden
//Beschreibung: Controller für alle Analysen

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
            $data = array('auswahl'=>$auswahl->produktgewinnauswahl(), 'analyse');
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
