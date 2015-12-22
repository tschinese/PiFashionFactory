<?php

//Sprint 4, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 06.12.2015 Version 1.0
//UserStory: Als Kunde möchte ich verschiedene Zahlungsmethoden haben
//Task: (310-2) Paypal integrieren
//Aufwand: 15min
//Beschreibung: Controller ruft die View für Zahlungsmethoden auf



    class BezahlartuebersichtController extends Controller{
   
   
        public function waehlen(){
			
			$this->view('Header');
            $this->view('Bezahlungsarten/BezahlartUebersichtView');
            $this->view('Footer');
			
        }
    }

?>