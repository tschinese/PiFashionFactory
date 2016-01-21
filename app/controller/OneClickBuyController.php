<?php
//Sprint 5, Gruppe 4 Onlineshop, Verfasser: Denis Kevljanin, Datum: 10.01.2016
//UserStory: Als Kunde möchte ich eine Schnellkauffunktion für Produkte haben 
//Task: Schnellkauffunktion programmieren
//Gesamtaufwand: 20 Stunden
//Aufwand File: 2 Stunden
//Beschreibung: Controller der Sofortkauffunktion

//Erstellen der Klasse
class OneClickBuyController extends Controller{
	
    //Funktion createOrder für Model und View
    public function createOrder(){
		//Kundennummer über POST holen
        $kID = $_POST['kID'];
		//Produktnummer über POST holen
		$pID = $_POST['pID'];
		//Objekt des Models erstellen
        $bestellModel = $this->model('OneClickBuyModel');
		//Funktionsaufruf und übergabe der Parameter
		$data = $bestellModel->submitOrder($kID, $pID);
		//Übergeben des ResultSet an die View von @Gräter, Kerstin
		$this->view('Bestellung/Abgeschlossen', $data);
        
    }    
    
    
}