<?php
//Sprint 4, Gruppe 4 Onlineshop, Verfasser: Denis Kevljanin, Datum: 08.12.2015
//UserStory: 340 Als Programmierer möchte ich Filterfunktionen hinzufügen und diese und die Suche dynamisch gestalten 
//Task: 340-1 dynamische Filterfunktionen hinzufügen
//Gesamtaufwand: 25 Stunden
//Aufwand File: 9 Stunden
//Beschreibung: Controller der Filterfunktion, Probleme beim debuggen und Fehlerbehebung

//Sprint 3, Gruppe 4 Onlineshop, Verfasser: Denis Kevljanin, Datum: 22.11.2015
//UserStory: 190 Als Kunde möchte ich eine Filter- und Suchfunktion einsetzen können
//Task: 190-1 filterfunktion programmieren
//Aufwand: 15 Stunden
//Beschreibung: Controller der Filterfunktion
class FilterController extends controller {

    public function index($kategorie) {
        
        $sql_kategorieFinal = "Kategorie_katID = '.$kategorie.'";
		//überprüfen ob eine oder mehrere checkboxes ausgewählt wurden
        if (isset($_POST['preis']) or ( isset($_POST['groesse'])) or isset($_POST['farbe'])) {
			//value von preis[] in Variable übertragen und in array speichern 
            $preis = $_POST['preis'];
            $lengthP = count($preis);
            for ($i = 0; $i < $lengthP; $i++) {
                $sql_preis[] = "Preis <= '$preis[$i]'";
            }
			//Werte per implode() zusammen setzen
            $sql_preisFinal = implode(' OR ', $sql_preis);
			
			//value von groesse[] in Variable übertragen und in array speichern 
            $groesse = $_POST['groesse'];
            $lengthG = count($groesse);
            for ($i = 0; $i < $lengthG; $i++) {
                $sql_groesse[] = "Groese_groese = '$groesse[$i]'";
            }
			//Werte per implode() zusammen setzen
            $sql_groesseFinal = implode(' OR ', $sql_groesse);
			
			//value von preis[] in Variable übertragen und in array speichern 
            $farbe = $_POST['farbe'];
            $lengthF = count($farbe);
            for ($i = 0; $i < $lengthF; $i++) {
                $sql_farbe[] = "Farbe_farbe Like '%$farbe[$i]%'";
            }
			//Werte per implode() zusammen setzen
            $sql_farbeFinal = implode(' OR ', $sql_farbe);


			//Model und View erstellen und diesen entsprechende Werte zuteilen
            $filterModel = $this->model('FilterModel');
            $data = $filterModel->filter($sql_preisFinal, $sql_groesseFinal, $sql_farbeFinal, $sql_kategorieFinal);
            $this->view('Header', []);
            $this->view('Produkt/SidebarView', $data);
            $this->view('Footer', []);
        }
    }

}
