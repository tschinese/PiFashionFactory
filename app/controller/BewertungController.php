<?php
//Sprint 4, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 04.12.2015 Version 1.2
//UserStory:Als Kunde möchte ich Rezensionen zu gekauften Produkten schreiben und lesen können
//Task: Rezensionserstellung nur für gekaufte Artikel
//Aufwand: 15 min
//Beschreibung: ermöglicht eine personalisierte übersicht der rezenssionen zu einem bestimmten artikel... mit login check
// UPDATE zu Sprint 3: Diese Klasse ermöglicht nur eingeloggten Kunden, die den Artikel gekauft haben, eine Bewertung abzugeben
//Ab Zeile 48

//Sprint 3, Gruppe 4 Onlineshop, 
//Verfasser: Marcel Riedl, Datum: 19.11.2015 Version 1
//UserStory: 270 Als Programmierer möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
//Task: 270-1 (#10329) Zusammenführen
//Aufwand: 2 Stunden
//Beschreibung: Es wird der Controller der Rezensionssicht im Frontend erstellt. 
session_start();

class BewertungController extends Controller{
   
    private $id;
    private $produktName;
    private $idKunde;
    private $rezension;
    
    public function bewertungAnzeigen($idProdukt) {
        
        $this->id=$idProdukt;
        $bewertungModel = $this->model('BewertungZeigenModel');
        //$this->view('Header',[]);
        $this->view('Bewertungen/BewertungenRender',$bewertungModel->bewertungAnzeigen($this->id));
        //$this->view('Footer',[]);
    }
    
    public function bewertungErstellen($idKunde,$produktName,$id) {
        $this->id = $id;
        $this->idKunde = $idKunde;
        $this->produktName = $produktName;
        $this->view('Bewertungen/BewertungFormular');
        //var_dump($this->idKunde);var_dump($this->produktName);var_dump($this->id);
        if(isset($_POST['rezension'])){
            $this->rezension = $_POST['rezension'];
            $bewertungErstellen = $this->model('BewertungZeigenModel');
            $bewertungErstellen->bewertungErstellen($this->id,  $this->idKunde, $this->rezension);
            
        }
    }
    //Sprint 4 Update zur Prüfung, ob Artikel bereits bestellt
    public function pruefeBestellt($id,$pId){
        
        $kundenID = $id;
        $produktID = $pId;
        $rezModel = $this->model('BewertungZeigenModel');
        return $rezModel->pruefeBestellung($kundenID,$produktID);
    }
    
}

?>
