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
//Beschreibung: Controller für Analyse 'Umsatz pro Produkt'

//Sprint 4, Kerstin Gräter START
class AnalyseProduktgewinnController extends Controller{
	
	function index(){
                //Analyse_Model von Riedl
		$analyse = $this->model('Analyse_Model');
                //Sprint 5, Kerstin Gräter START
                $auswahl = $this->model('AnalyseAuswahl_Model');
		$pr = $_POST['produkt'];
                $ex = explode(',', $pr);
                $nr = $ex[0];
		$dat1 = $analyse->produktgewinn($nr);
                $dat2 = $auswahl->produktgewinnauswahl();
                $data = array('analyse' => $dat1, 'auswahl'=>$dat2, 'nummer'=>$nr);
                //Sprint 5, Kerstin Gräter ENDE
		$this->view('Backend/Backendheader');
		$this->view('Analyse/Analyse_Sidebar');
		$this->view('Analyse/Analyse_Produktgewinn', $data);
	}
}
//Sprint 4, Kerstin Gräter ENDE