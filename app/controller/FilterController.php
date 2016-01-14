<?php
//Sprint 5, Gruppe 4 Onlineshop, Verfasser: Denis Kevljanin, Datum: 10.01.2016
//UserStory: Als Programmierer möchte ich Filterfunktionen hinzufügen und diese den Kategorien anpassen 
//Task: Filter an Kategorien anpassen
//Gesamtaufwand: 8 Stunden
//Aufwand File: 3 Stunden
//Beschreibung: Controller der Filterfunktion

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

//Erstellen der Klasse
class FilterController extends controller {
	
    public function index($kategorie) {
        
        //Einfügen der Kategorie - Sprint 5
        $sql_kategorieFinal = " Kategorie_katID = ".$kategorie;
		echo $sql_kategorieFinal;
		//Sprint 5 ENDE
		
        //überprüfen ob eine oder mehrere checkboxes ausgewählt wurden - Sprint 4
		//Überprüfen der POST Values
        if (isset($_POST['preis']) or ( isset($_POST['groesse'])) or isset($_POST['farbe'])) {
            //Value von preis[] in Variable übertragen und in array speichern
            $preis = $_POST['preis'];
			//Länge des Arrays berechnen
            $lengthP = count($preis);
			//Schleife um die einzelnen Values zu speichern
            for ($i = 0; $i < $lengthP; $i++) {
                $sql_preis[] = "Preis <= ".$preis[$i];
            }
			
            //Werte per implode() zusammen setzen
            $sql_preisFinal = implode(' OR ', $sql_preis);
			echo $sql_preisFinal;
			
            //value von groesse[] in Variable übertragen und in array speichern 
            $groesse = $_POST['groesse'];
			//Länge des Arrays berechnen
            $lengthG = count($groesse);
			//Schleife um die einzelnen Values zu speichern
            for ($i = 0; $i < $lengthG; $i++) {
                $sql_groesse[] = "Groese_groese = '".$groesse[$i]."'";
            }
            //Werte per implode() zusammen setzen
            $sql_groesseFinal = implode(' OR ', $sql_groesse);
			echo $sql_groesseFinal;
			
            //value von preis[] in Variable übertragen und in array speichern 
            $farbe = $_POST['farbe'];
			//Länge des Arrays berechnen
            $lengthF = count($farbe);
			//Schleife um die einzelnen Values zu speichern
            for ($i = 0; $i < $lengthF; $i++) {
                $sql_farbe[] = "Farbe_farbe Like '%".$farbe[$i]."%'";
            }
            //Werte per implode() zusammen setzen
            $sql_farbeFinal = implode(' OR ', $sql_farbe);
			echo $sql_farbeFinal;
			//Sprint 4 ENDE
			
            //Model und View erstellen und diesen entsprechende Werte zuteilen - Sprint 5
			            
        }	
			$filterModel = $this->model('FilterModel');
            $data = $filterModel->filter($sql_preisFinal, $sql_groesseFinal, $sql_farbeFinal, $sql_kategorieFinal);
            $this->view('Header', []);
            $this->view('Produkt/SidebarView',array("daten" => $data, "kategorie" => $kategorie));
            $this->view('Footer', []);
    }		//Sprint 5 ENDE

}
