<!-- Ridvan Atacan, 3113837
    08.12.2015 Group #4 Onlineshop
    Sprint 4, Task : 370-10 #10588
    User Story: Als Entwickler möchte ich, dass der Onlineshop auf dem Hochschulserver läuft.
    Task: Die Gutschein-Funktion erweitern und in den Bestellvorgang implementieren 
    Zeile 48-56
    Aufwand: 5 Stunden
 -->
<!-- Ridvan Atacan, 3113837
   24.11.2015 Group #4 Onlineshop
   Sprint 3, Task : 280-1 #10460
   User Story: Als Kunde möchte ich von Rabattaktionen durch Gutschein-Codes profitieren können.
   Task: Gutscheincodes einlesen und überprüfen
   Aufwand: 6 Stunden
-->
<?php

//require '../models/Gutschein_Model.php';
//Sprint 3 Anfang Ridvan 24.11.2015
class Gutschein_Controller extends Controller {

    private $code;
    private $a;

    public function index() {

        $this->view('Header', []);

        $this->view('Bestellung/Gutschein_View');

        //Abfrage ob die Code Variable übermittelt wurde und nicht leer ist
        if (isset($_POST["code"]) && !empty($_POST["code"])) {
            
            $this->code = $_POST['code'];
            $gutschein = $this->model('Gutschein_Model');
            //Den Code aus der POST variable mit der Datenbank abgleichen
            $this->a = $gutschein->prüfen($this->code);
            //$this->view('Bestellung/GutscheinErgebnis_View',$this->a);   
        } else {
            echo "10-stelliger Code <br>";
        }
        $this->view('Footer', []);
    }

    public function testen() {

        $gutsch = new Gutschein_Model();
        $gutsch->prüfen($this->code);
    }
	//Sprint 3 Ende Ridvan 24.11.2015
    //Sprint 4 Anfang Ridvan 07.12.2015
    public function rabatt(){
        
        $gutschein = $this->model('Gutschein_Model');
        $faktor = $gutschein->rabatt($_POST['code']);
       
        return $faktor;
    }
    //Sprint 4 Ende Ridvan 07.12.2015
}

$obj = new Gutschein_Controller();
