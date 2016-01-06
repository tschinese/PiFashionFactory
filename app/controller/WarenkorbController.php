<?php

//Sprint 4, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 06.12.2015 Version 1.0
//UserStory: Als Kunde möchte ich verschiedene Zahlungsmethoden haben
//Task: (310-2) Paypal integrieren
//Aufwand: 1 Stunden
//Beschreibung: Dieser Controller liefert benötigte Daten aus der DB zum Paypalbezahlvorgang
//Update ab Zeile: 50



//Sprint 3, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 19.11.2015 Version 1.1
//UserStory: 270 Als Programmierer möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
//Task: 270-1 (#10329) Zusammenführen
//Aufwand: 2 Stunden
//Beschreibung: Es wird der Controller des Warenkorbs im Frontend erstellt. 

    
    session_start();
    //Start Sprint 3 Controller des Warenkorbs
    
    class WarenkorbController extends Controller{
        
        private $warenArray;
        public function getArtikel(){
            
            if(isset($_SESSION['warenkorb'])){
                
               $warenModel = $this->model('WarenkorbModel');
               $i=0;
               
               foreach ($_SESSION['warenkorb'] as $produkt) {
                   
                   $this->warenArray[$i]= $warenModel->getArtikel($produkt['produktNummer']); 
                   $i++;
                 
                   
               }
			   
               $this->view('Header');
               $this->view('Warenkorb/WarenkorbRender',  $this->warenArray); 
			   $this->view('Footer');
               
            }else{
               $this->view('Header');
               $this->view('Warenkorb/WarenkorbRender'); 
               $this->view('Footer');
            } 
        }
        //Ende Sprint 3
        
        // Start Sprint 4 Liefert Daten zu bestellten Waren des Warenkorbs aus der DB für Paypal
	public function getArtikelBez(){
            //Wenn warenkorb session gesetzt
            if(isset($_SESSION['warenkorb'])){
                
               $warenModel = $this->model('WarenkorbModel');
               $i=0;
               //für jedes produkt des warenkorbs, array mit relevanten Daten aus der db einfordern
               foreach ($_SESSION['warenkorb'] as $produkt) {
                   
                   $this->warenArray[$i]= $warenModel->getArtikel($produkt['produktNummer']); 
                   $i++;
                 
                   
               }
			   return $this->warenArray;
            }
        }//Ende Sprint 4
    }
        
    

