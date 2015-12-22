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
       
        $this->view('Bestellung/Rucksendung_View2',$ruck);
        echo("Hallo2");
        echo ("</main>");
        $this->view("Footer");
        echo("Hallo3");
    }
}
$objekt = new Rucksendung_Controller();