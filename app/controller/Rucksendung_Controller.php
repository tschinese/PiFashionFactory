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
        //Sprint 5 Anfang
        if(empty($_POST['bestellid'])){
            $this->view('Bestellung/Rucksendung_View');
            echo("<span style='color:#FF0000'><strong>Bitte eine Bestellnummer angeben!</strong><br>");
        }else{
        //Sprint 5 Ende
        $this->view('Bestellung/Rucksendung_View2',$ruck);
         echo ("</main>");
        
        }
       
        $this->view("Footer");
        
    }
    //Sprint 5 Anfang
    public function stornieren(){
        
        $this->view("Header"); 
        if($this->bestellzeit() <= 14){
        $strn = $this->model("MeineBestellungen_Model");
        $strn->storno($_SESSION['bestellnr']);
        }
        else{
            echo("<main><strong><br>Storno nicht möglich, die 14-tägige Frist wurde überschritten!</strong></main>");
        }
        //$this->view('Bestellung/Rucksendung_View');
        $this->view("Footer");
    }
    
    public function bestellzeit(){
      $this->view("Header");
      $zeit = $this->model("MeineBestellungen_Model");
    //$this->view("Bestellung/Rucksendung_View2");
      $bestellzeit = $zeit->bestellzeit($_SESSION['bestellnr']);
      $splitzeit = explode(" ",$bestellzeit);
      echo "<br><main> Zeitpunkt der Bestellung: ";
      
      echo $splitzeit[0];
      echo "<br> Aktueller Zeitpunkt: ";
      echo $aktuell = date('Y-m-d');
      
      $tage = ((strtotime($aktuell) - strtotime($splitzeit[0]))/60/60/24);
      echo "<br> Vergangene Zeit seit der Bestellung: " .$tage. " Tage sind vergangen!";
      
      return $tage;
    }
    //Sprint 5 Ende
}
$objekt = new Rucksendung_Controller();