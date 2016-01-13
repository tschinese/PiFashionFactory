<!--//Sprint 3, Gruppe 4 Onlineshop, Verfasser: Kerstin Gräter, Datum: 23.11.2015 Version 2
//UserStory: Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
//Task: (270-2) #10330 Zusammenführen
//Aufwand: 7 Stunden

//Sprint 2, Gruppe 4 Onlineshop, Verfasser: Kerstin Gräter, Datum: 09.11.2015 Version 1
//UserStory: Als Programmierer möchte ich den Aufbau als Model-View-Controller (MVC) haben.
//Task: 110-2 (#10190) MVC Programmieren
//Aufwand: 5 Stunden
//Beschreibung: Es wird der grundlegende Aufbau der Bestellabwicklung als MVC erstellt.
// Hier wird das Model dazu erstellt

//Sprint 1: Bestellabwicklung -->

<?php
class BestellungAbschliesenCon extends Controller {

    function index() {
        $this->view('Header');
        

		
        $bestellung = $this->model('Bestellung_Model');
		$data = $bestellung->bestellungabschließen();
        
		$this->view('Bestellung/Abgeschlossen', $data);
		
        $this->view('Footer');
        
        //Hanim Start
        if(isset($_SESSION['logged']['id']))
        {
            require_once ('../app/models/Profil_Model.php');
            $profil = new Profil_Model();
            $profil = $profil->laden($_SESSION['logged']['id']);
            require_once ('../app/controller/BestellungEmail.php');
            BestellungEmail::send($profil, $data);
        }
        //Hanim End
    }
}
