 <!-- Ridvan Atacan, 3113837
    08.12.2015 Group #4 Onlineshop
    Sprint 4, Task : 380-2 #10593
    User Story: Als Kunde möchte ich getätigte Bestellungen zuücksenden können.
    Task: Gewählte Bestellung zum eingeloggten Kunden aus der Datenbank lese
    ab Zeile 150
    Aufwand: 3 Stunden
 -->
<!-- Ridvan Atacan, 3113837
    24.11.2015 Group #4 Onlineshop
    Sprint 3, Task : 270-6 #10334
    User Story: Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
    Task: Zusammenführen
    Aufwand: 5 Stunden
 -->
<!-- Ridvan Atacan, 3113837
    10.11.2015 Group #4 Onlineshop
    Sprint 2, Task : 170-1 #10197
    User Story: Als Kunde möchte ich meine alten Bestellungen darstellen können. 
    Task: Alte Bestellungen anzeigen
    Aufwand: 10 Stunden
 -->

 
<?php
//Anfang Ridvan Atacan 10.11.2015 Sprint 2
require '../app/view/Header.php';
// Zugriff auf die Datenbankverbindungsklasse

//include "../config/Login.php";

class MeineBestellungen_Model{
		
    private $con;
    private $bestellnummer;
    private $actualid;
    private $data;
    private $db;
    private $sql;
    private $result;
    private $count;
    //Datenbankverbindung versuchen aufzubauen sobald ein Objekt der Klasse erzeugt wird
    public function __construct(){
        
       
        try{
           $this->db = new Connect_Mysql();
           $this->con = $this->db->verbinden();
            
            
        }catch(PDOException $ex){
            
            print $ex;
    }
    
    }
	//Methode zur Ausgabe von der Bestellnummer zum zugehörigen Kunden
     public function bestellliste() {
        
		//Zugriff auf die Tabellen auf der Datenbank mittels SQL Statements und PDO
        echo '<br>Meine Bestellungen <br>';
        $this ->sql = $this->con->prepare("SELECT Bestellnummer FROM BESTELLUNG WHERE Kunde_Kundennummer = 6");
        $this ->sql->execute();
        $this->data = $this->sql->fetch();
        $this->bestellnummer = $this->data[0];
        
        $cnt = $this->sql->rowCount();
        echo("Bestellnummer : <br>");
        echo($this->bestellnummer);
        
         $this->closeDB();
        
        }
	//Methode zur Ausgabe aller Bestellungen zum zugehörigen Kunden
	//Im weiteren Verlauf wird es möglich sein nur dem eingeloggten Kunden seine Bestellungen darzustellen
     public function alleBestellungen(){
         echo'<main><strong>Alle Bestellungen</br></strong>';        
        //Anfang Ridvan 07.12.2015 Sprint 4
		//Zugriff auf die SESSION ID von Christian Frindt
         $this->actualid = $_SESSION['logged']['id'];
        echo("Hallo <strong>" .$this->Kundenname($_SESSION['logged']['id'])['Vorname']." " .$this->Kundenname($_SESSION['logged']['id'])['Nachname']."</strong>!");
		//Zugriff auf die Tabellen auf der Datenbank mittels SQL Statements und PDO		
        //Ende Ridvan 07.12.2015 Sprint 4
       
        $query = "SELECT bestellnummer,Gesamtpreis,Datum FROM Bestellung WHERE Kunde_Kundennummer = " .$this->actualid ;
        
        $this->sql = $this->con->prepare($query);
        
        $this->data = $this->sql->execute();
        $this->result = $this->sql->fetchAll(PDO::FETCH_ASSOC);
        $this->count = $this->sql->rowCount();
        
		//Abfrage, ob dem jeweiligen Kunden eine Bestellung vorliegt
        if(empty($this->result)){
            
            echo"<br>Sie haben noch keine Bestellungen:<br> ";
             
        }else{
           
            echo"<br>Sie haben ".$this->count." Bestellung/en:<br> ";
          
        }
        /*
       $i = 0;
		// Wenn mehrere Zeilen von der Datenbank gelesen werden, diese durchgehen und Zeile für Zeile ausgeben
        while ($i < $this->count){
            echo"<br><fieldset>";
            echo "Bestellnummer : " .$this->result['Bestellnummer'];
            echo "<br>Gesamtpreis : " .$this->result['Gesamtpreis'];
            echo "<br>Menge : " .$this->result['Menge'];
            echo "<br>Datum : " .$this->result['Datum'];
            echo "</fieldset>";
            
           
           
            $i++;
            $this->result = $this->sql->fetch(PDO::FETCH_ASSOC);
            
        }
        $this->gesamtpreis = $this->result['Gesamtpreis'];
        
        echo "</table>";
        */
        $this->closeDB();
        return $this->result;
        
     }        
        
    public function prnt(){
        print $this->bestellnummer;
        return $this->count;
        
    }
	//Methode um die Datenbankverbindung zu trennen
    public function closeDB(){
       $this->db->schließen();
       $this->con = 0;
   }
   //Ende Ridvan Atacan 10.11.2015 Sprint 2
   //Anfang Ridvan Atacan 07.12.2015 Sprint 4
   
   public function Kundenname($id){
       
       $query = "SELECT Vorname,Nachname FROM Kunde WHERE Kundennummer =".$id;
        $this->sql = $this->con->prepare($query);
        $this->sql->execute();
        $this->name = $this->sql->fetch(PDO::FETCH_ASSOC);
        
        return $this->name;
   }
   
   public function Bestellzeit($id){
        //Nachtrag Sprint 5
        $query = "SELECT Datum FROM bestellung WHERE Bestellnummer = ".$id;
        $this->sql = $this->con->prepare($query);
        $this->sql->execute();
        $this->datum = $this->sql->fetch(PDO::FETCH_ASSOC);
        //Nachtrag Sprint 5
        $datum = $this->datum["Datum"];
        return $datum;
   }
   
   public function rucksendung($id){
       
       $query = "SELECT * FROM bestellung WHERE Bestellnummer =".$id;
       $this->sql = $this->con->prepare($query);
       $this->sql->execute();
       $ruck = $this->sql->fetch(PDO::FETCH_ASSOC);
       $this->closeDB();
       return($ruck);
   }
   //Sprint 5 Anfang
   public function storno($bid){
      
       $query = "DELETE FROM bestellung WHERE Bestellnummer =".$bid;
       $this->sql = $this->con->prepare($query);
       $this->sql->execute();
       $this->closeDB();
       echo("<main><strong>Die Bestellung wurde storniert!</strong><br>");
       echo("Für die Rücksendung senden Sie die Ware bitte an folgende Adresse: ");
       echo("<br>Fashion Factory GmbH<br>Wileystraße 1<br>89231 Neu-Ulm");
       echo("<br>Falls Sie die Ware noch nicht bekommen haben, wird Ihnen diese nicht mehr zugesendet.</main> ");
       }
       //Sprint 5 Ende
    //Ende Ridvan Atacan 07.12.2015 Sprint 4
}
