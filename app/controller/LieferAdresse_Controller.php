 <!-- Ridvan Atacan, 3113837
    08.12.2015 Group #4 Onlineshop
    Sprint 4, Task : 370-9 #10586
    User Story: Als Entwickler möchte ich, dass der Onlineshop auf dem Hochschulserver läuft.
    Task: Die hinzugefügte Lieferadresse dem eingeloggten Kunden zuordnen
    Zeile 54
    Aufwand: 2 Stunden
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
    Sprint 2, Task : 140-6 #10204
    User Story: Als Programmierer möchte ich meine Codes als Model–view–controller (MVC) haben
    Task: Eigenen Code an MVC anpassen
    Aufwand: 5 Stunden
 -->
<?php
//Sprint 2 Anfang Ridvan 10.11.2015
class LieferAdresse_Controller extends Controller{

    private $name;
    private $nname;
    private $strasse;
    private $plz;
    private $kid;
    // Zwischenspeichern der Daten aus dem View bei Erzeugung eines Controller Objekts
    public function index(){
        //Sprint 3 Anfang Ridvan 24.11.2015
        
        $this->view('Header',[]);
        
        $this->view('Bestellung/LieferAdresse_View',[]);
        
        $this->model('LieferAdresse_Model');
        

  
        $this->view('Footer',[]);
    
        
        }
    //Methode zum Erzeugen eines Model Objekts und Übergabe der Parameter für die Datenbankanfrage
    public function hinzufügen(){
        
        $this->name = $_POST['name'];
        $this->nname = $_POST['nname'];
        $this->strasse = $_POST['strasse'];
        $this->plz = $_POST['plz'];
		//Sprint 4 Anfang Ridvan 07.12.2015
		
		//Zugriff auf die SESSION ID von Christian Frindt
	   $this->kid = $_SESSION['logged']['id'];
           
        //Sprint 4 Ende Ridvan 07.12.2015
        $liefer = new LieferAdresse_Model();
        $liefer->hinzufügen($this->name,$this->nname,$this->strasse,$this->plz,$this->kid);
        ?>
        <script>
	 {
            alert("Liefferadresse wurde Hinzugefügt!");
	}
	</script>
<?php
        
    }

}

$obj = new LieferAdresse_Controller();
//Sprint 2 Ende Ridvan 10.11.2015