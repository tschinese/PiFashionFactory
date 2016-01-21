<?php

//Sprint 5, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 08.01.2016 Version 1.0
//UserStory: Als Kunde möchte ich verschiedene Kontenarten
//Task: Kontenverwaltungsplattform programmieren
//Aufwand: 5 Stunden
//Beschreibung: Model der Kontoverwaltungsplattform



class KontoModel{
    
    private $db;
    private $con;
    private $res;
    private $id;

    public function __construct() {
        //Connection zu Kerstin Gräters Datenbank
        $this->db = new Connect_Mysql();
        $this->con = $this->db->verbinden();
    }

    public function sichereDaten($id,$kTyp,$x,$y){
        //Sichere gewählte Kontoart in der Datenbank
        if($kTyp == 'Bankkonto'){
            //Normales Bankkonto
            $sql = "INSERT INTO Konto(Kunde_Kundennummer,kontoTyp,kNummer, blz) VALUES(".$id.",'".$kTyp."','".$x."','".$y."')";
            $this->con->query($sql);
            $this->con = null;
            $this->db->schließen();

        }else{
            //Kreditkarte
            $sql = "INSERT INTO Konto(Kunde_Kundennummer,kontoTyp,zifferKredit, expireDate) VALUES(".$id.",'".$kTyp."','".$x."','".$y."')";
            $this->con->query($sql);
            $this->con = null;
            $this->db->schließen();
            
        }
        
    }
    
    public function pruefeKonto($id){
        //Pruefe ob ein Konto vorhanden ist
        $query = "Select kontoID from konto where Kunde_Kundennummer=".$id;
        $sql = $this->con->prepare($query);
        $sql->execute();
        $res= $sql->fetch(PDO::FETCH_ASSOC);
        foreach($res as $kn){
            if($kn['kontoID'] != null){
                return true;
            }else{
                return false;
            }
        }
    }
    
    public function getKontos($kID){
        //Gibt alle gespeicherten Konten des Users zurück
        $query = "Select * from konto where Kunde_Kundennummer=".$kID;
        $sql = $this->con->prepare($query);
        $sql->execute();
        $res= $sql->fetch(PDO::FETCH_ASSOC);
        $bK = 0;
        $kK = 0;
        //$kontos = array(0 => array("BankK" => array()),1 => array("KreditK" => array()));
        //Array zur Unterscheidung von normalem Konto und kreditkarte
        $kontos = array(0 => array(),1 => array());
        $ctr=0;
        $ctr1=0;
        $total = $sql->rowCount();
        
        while($ctr2 < $total){
           
            if($res['kontoTyp'] == 'Bankkonto'){
                //Speichern des Bankkontos
                $kontos[0][$ctr] = $res;   
                $ctr++;
            }else{
                //Speichern der kreditkarte
                $kontos[1][$ctr1] = $res;
                $ctr1++;
            }
            $res= $sql->fetch(PDO::FETCH_ASSOC);
            //Summe! sodass bei allen durchläufen while beendet wird
            $ctr2 = $ctr + $ctr1;
            
        }
        return $kontos;
    }
    
}