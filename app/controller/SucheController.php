<?php
//Sprint 4, Gruppe 4 Onlineshop, Verfasser: Denis Kevljanin, Datum: 08.12.2015
//UserStory: 340 Als Programmierer möchte ich Filterfunktionen hinzufügen und diese und die Suche dynamisch gestalten 
//Task: 340-1 dynamische Filterfunktionen hinzufügen
//Gesamtaufwand: 25 Stunden
//Aufwand File: 1 Stunden
//Beschreibung: Controller der Suchfunktion

//Sprint 3, Gruppe 4 Onlineshop, Verfasser: Denis Kevljanin, Datum: 22.11.2015
//UserStory: 190 Als Kunde möchte ich eine Filter- und Suchfunktion einsetzen können
//Task: 190-2 Suchfunktion programmieren
//Aufwand: 15 Stunden
//Beschreibung: Controller der Suchfunktion
class SucheController extends Controller{

    public function index() {  
			$suche = $_POST['Suche'];
			//Erstellen eines Objekts und Übergabe zum View
			$sucheModel = $this->model('SucheModel');
			$data = $sucheModel->suchabfrage($suche);
			$this->view('Produkt/Produktliste', $data);
    }
    
}

