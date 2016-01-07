<?php

//Sprint 4, Gruppe 4 Onlineshop, Datum: 07.12.2015, Version 1
//Verfasser: Kerstin Gräter, Matrikelnummer: 3113720
//UserStory: 320 Als Kunde möchte ich verschiedene Analyse-Funktionen im backend haben
//Task: 320-4 (#10506) notwendige Controller dazu schreiben
//Gesamtaufwand: 9 Stunden
//Beschreibung: Controller für Analyse 'Umsatz pro Produkt'

class AnalyseProduktgewinnController extends Controller{
	
	function index(){
                //Analyse_Model von Riedl
		$analyse = $this->model('Analyse_Model');
                $auswahl = $this->model('AnalyseAuswahl_Model');
		$nr = $_POST['produkt'];
                echo $nr;
		$dat1 = $analyse->produktgewinn($nr);
                $dat2 = $auswahl->produktgewinnauswahl();
                $data = array('analyse' => $dat1, 'auswahl'=>$dat2, 'nummer'=>$nr);
                var_dump($dat1);
		$this->view('Backend/Backendheader');
		$this->view('Analyse/Analyse_Sidebar');
		$this->view('Analyse/Analyse_Produktgewinn', $data);
	}
}