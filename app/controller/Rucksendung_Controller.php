 <!-- Ridvan Atacan, 3113837
    08.12.2015 Group #4 Onlineshop
    Sprint 4, Task : 380-1 #10591
    User Story: Als Kunde möchte ich getätigte Bestellungen zuücksenden können.
    Task: Grundlage und Oberfläche für die Rücksendung programmieren
    Aufwand: 3 Stunden
 -->
<?php

class Rucksendung_Controller extends Controller{
    
    public function index(){
        $this->view("Header");
        $this->view("Bestellung/Rucksendung_View");
      
        $this->view("Footer");
        
    }
    
    public function test(){
        $this->view("Header");
        $tst = $this->model("MeineBestellungen_Model");
        $ruck = $tst->rucksendung($_POST['bestellid']);
        $ruck2 = $ruck['Bestellnummer'];
        $this->view('Bestellung/Rucksendung_View2',$ruck2);
        
        echo ("</main>");
        $this->view("Footer");
        
    }
}
$objekt = new Rucksendung_Controller();