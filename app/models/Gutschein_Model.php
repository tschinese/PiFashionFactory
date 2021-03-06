<!-- Ridvan Atacan, 3113837
    08.12.2015 Group #4 Onlineshop
    Sprint 4, Task : 370-10 #10588
    User Story: Als Entwickler möchte ich, dass der Onlineshop auf dem Hochschulserver läuft.
    Task: Die Gutschein-Funktion erweitern und in den Bestellvorgang implementieren  
    Zeile 89-99
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

//include '../config/Connect_Mysql.php';
//Sprint 3 Anfang Ridvan Atacan 24.11.2015
class Gutschein_Model {

    
    private $sql;
    private $result1;
    private $a;
    private $faktor;

    public function __construct() {

        try {
            $this->db = new Connect_Mysql();
            $this->con = $this->db->verbinden();
        } catch (PDOException $ex) {

            print $ex;
        }
    }

    public function prüfen($gid) {
        //SQL Anweisung durchführen
        $query = "SELECT GID FROM Gutschein";
        $this->sql = $this->con->prepare($query);
        $this->sql->execute();
        $this->result = $this->sql->fetch(PDO::FETCH_ASSOC);
        $this->count = $this->sql->rowCount();
        $i = 0;
        $b = 0;
        $this->a = 0;
        $this->result1 = $this->result['GID'];
        //Die Zahlenreihe aufteilen und in einen Array setzen
        $value1 = chunk_split("$gid", 1, " ");
        $array1 = explode(" ", $value1);
        //While-Schleife um die ganze Zahlenreihe, also den Array durchzulaufen
        while ($i < $this->count) {
            //Die Zahlenreihe aus der Datenbank ebenso aufteilen und in einen Array setzen
            $value = chunk_split("$this->result1", 1, " ");
            $array = explode(" ", $value);
             //Die 10 stelligen Codes auf jede Stelle vergleichen
            while ($b < 10) {

                if ($array[$b] == $array1[$b]) {
                    $b++;
                    $this->a++;

                    if ($this->a == 10) {
                        $i = $this->count;

                        $ergebnis = "Richtig";
                    }
                } else {
                    $b++;
                    $this->a = 0;
                    $ergebnis = "Falsch";
                }
            }
            $b = 0;
            $i++;
            //Den nächsten Code aus der Datenbank  holen
            $this->result = $this->sql->fetch(PDO::FETCH_ASSOC);
            $this->result1 = $this->result['GID'];
        }
        if ($ergebnis == "Richtig") {
            echo"Gutschein gültig";
        } else{
            echo"Gutschein ungültig";
        }
        
    }
	//Sprint 3 Ende Ridvan Atacan 24.11.2015
    //Sprint 4 Anfang Ridvan 07.12.2015
    public function rabatt($code){
      
        $query = "SELECT Faktor FROM Gutschein WHERE GID =".$code;
        $this->sql = $this->con->prepare($query);
        $this->sql->execute();
        $this->faktor = $this->sql->fetch(PDO::FETCH_ASSOC);
        
        Return $this->faktor;
        }
    
    //Sprint 4 Ende Ridvan 07.12.2015
        //Sprint 5 Anfang
    public function art($code){
        
        $query ="SELECT Art FROM Gutschein WHERE GID=".$code;
        $this->sql = $this->con->prepare($query);
        $this->sql->execute();
        $this->art = $this->sql->fetch(PDO::FETCH_ASSOC);
        
        Return $this->art;
    } 
    public function erstellen ($wert,$code){
        
        $kundennr = $_SESSION['logged']['id'];
        echo("<br><strong>Kundennnummer : ".$kundennr);
        
        
        $query1 ="INSERT into Bestellung(bestellnummer,Gesamtpreis,Datum,Kunde_Kundennummer) values (null,'".$wert."',CURRENT_TIMESTAMP,'".$kundennr."');";
        $this->con->query($query1);
        //$this->sql = $this->con->prepare($query1);
        //$this->sql->execute();
        echo("<br>Wert :". $wert);
        
        
        $query2  ="SELECT bestellnummer FROM Bestellung WHERE Datum = (SELECT MAX(datum) FROM BESTELLUNG);";
        $this->sql = $this->con->prepare($query2);
        $this->sql->execute();
        $bstlnr = $this->sql->fetch(PDO::FETCH_ASSOC);
        echo("<br>Code : " .$code);
        $bestellnr = $bstlnr['bestellnummer'];
        //echo $wert1 = (double) $wert;
        $wert1 = number_format( (double) $wert, 2, '.', '');
        $query3 = "INSERT into GUTSCHEIN (GID,Bestellung_Bestellnummer,Art,Faktor) values ('".$code."','".$bestellnr."',0,'".$wert1."');";
        $this->con->query($query3);
        //$this->sql = $this->con->prepare($query3);
        //$this->sql->execute();
        echo("<br>Bestellnr: ".$bestellnr ."</strong");
        
        
    }
    
    public function löschen($code){
        
        $query = "DELETE FROM Gutschein WHERE GID = ".$code;
        $this->con->query($query);
        echo"<br>Gutschein wurde eingelöst und kann nicht nochmal verwendet werden!";
    }
    
}
