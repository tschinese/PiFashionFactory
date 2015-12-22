<?php

//Sprint 4, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 04.12.2015 Version 1.2
//UserStory:Als Entwickler möchte ich, dass der Onlinshop auf dem Hochschulserver läuft.
//Task: Rezensionserstellung nur für gekaufte Artikel
//Aufwand: 4 Stunden
//Beschreibung: ermöglicht eine personalisierte übersicht der rezenssionen zu einem bestimmten artikel... mit login check
// UPDATE zu Sprint 3: Diese Klasse ermöglicht nur eingeloggten Kunden, die den Artikel gekauft haben, eine Bewertung abzugeben
// Ab Zeile 55

//Sprint 3, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 19.11.2015 Version 1
//UserStory: Als Kunde möchte ich Rezensionen zu gekauften Produkten schreiben und lesen können
//Task: Bewertungs- und Lesefunktion für Rezessionen
//Aufwand: 2 Stunden
//Beschreibung: Es wird der Controller der Rezession im Frontend erstellt. 


class BewertungZeigenModel {

    private $db;
    private $con;
    private $res;
    private $id;

    public function __construct() {
        //Connection zu Kerstin Gräters Datenbank
        $this->db = new Connect_Mysql();
        $this->con = $this->db->verbinden();
    }

    public function bewertungAnzeigen($id) {
        //methode die es ermöglicht alle Rezessionen aus der Datenbank zu lesen
        $this->id = $id;
        $query = "Select p.Produktnummer,p.Benennung, kn.vorname, kn.nachname, r.* from rezension r join kunde kn on kn.kundennummer = r.Kunde_Kundennummer join produkt p on p.Produktnummer = r.produktnummer  where p.Produktnummer =" . $this->id;

        $sql = $this->con->prepare($query);
        $sql->execute();
        // Falls angefordertes Query in res vorhanden
        $this->res = $sql->fetchAll();
        $this->db->schließen();
        return $this->res;
    }

    public function bewertungErstellen($id, $idKunde, $rezension) {
        //Methode legt eine neue Rezenssion an
        $sql = "INSERT INTO rezension(produktnummer,Kunde_Kundennummer, beschreibung) VALUES(".$id.",".$idKunde.",'".$rezension."')";
        $this->con->query($sql);
        $this->con = null;
        $this->db->schließen();
    }
    
    //Sprint 4 Rezensionerstellung nur wenn true returned wird
    public function pruefeBestellung($id,$pId){
        
        $kundenID = $id;
        $produktID = $pId;
		// Join- Query über vier Tabellen
        $query = "SELECT k.kundennummer from kunde k join bestellung b on k.kundennummer = b.kunde_kundennummer
                  join bestellliste bl on b.bestellnummer = bl.bestellung_bestellnummer
                  where bl.produkt_produktnummer = ".$produktID;
        $sql = $this->con->prepare($query);
        $sql->execute();
        // Falls angefordertes Query in res vorhanden
        $this->res = $sql->fetchAll();
        $this->db->schließen();
		//Für jedes Produkt, dass bestellt wurde, prüfen, ob Kunde der Datenbank mit aktuellem User übereinstimmt 
        foreach($this->res as $produkt){
            if($produkt['Kundennummer'] == $kundenID ){
                
                return true;
                
            }
        }
        
    }

}
?>

