<!--Sprint 2, Gruppe 4 Onlineshop, 
Verfasser: Hanim Yerlikaya, Datum: 05.11.2015
UserStory: Als Kunde m�chte ich mein Profil verwalten.
Task: 160-1 (#10195) Eigenen Code an MVC anpassen
Aufwand: 10 Stunden
Beschreibung: Der Kunde kann somit sein Profil bearbeiten und l�schen  
Zeile 33-43 Update code für Sprint 4-->



<?php





class Profilcontroller extends Controller
{
	protected $id;
	protected $vorname;
	protected $name;
	protected $strasse;
	protected $plz;
	protected $ort;
	protected $tele;
        
        
	protected $profil;
        
    public function __construct()
    {
        
        $model = $this->model('Profil_Model');
        //Von Hanim Yerlikaya 
        //Geupdatet auf session, damit eigenes Profil angezeigt wird
        if(isset($_SESSION['logged']['id']))
        {
            $this->profil = $model->laden($_SESSION['logged']['id']);
        }
        else
        {
            $model = $this->model('Profil_Model');
        }
        //Ende Hanim Yerlikaya
    }
	
    public function index() {
        print $_SESSION['logged']['id'];
        $this->anzeigen($_SESSION['logged']['id']);
        /*
        switch ($handle) {
            case 'anzeigen':
                $this->anzeigen($this->id);
                break;
			case 'bearbeiten':
				$this->bearbeiten($this->id);
				break;
            case 'loeschen':
                $this->profil->loeschen($this->id);
                break;
            case 'aktualisieren';
                $this->profil->aktualisieren($this->id, $this->vorname, $this->name, $this->geschlecht, $this->geburtstag, $this->strasse, $this->plz, $this->ort);
				$this->anzeigen($this->id);
                break;

            default:
				$this->anzeigen($this->id);
                break;
        }
         */
    }
	
	    // function um Profil view anzeigen
    public function anzeigen() {
        $this->view('Header',[]);
        $this->view('Profil/Profil_Anzeigen', $this->profil);
        $this->view('Footer',[]);
    }

    // Funktion um die Profilbearbeiten view anzuzeigen
    public function bearbeiten() {
        $this->view('Header',[]);
        $this->view('Profil/Profil_Bearbeiten', $this->profil);
        $this->view('Footer',[]);
    }
    
    public function aktualisieren()
    {
        if(isset($_SESSION['logged']['id'])) $this->id = $_SESSION['logged']['id'];
	if(isset($_POST['vorname'])) $this->vorname = $_POST['vorname'];
	if(isset($_POST['nachname'])) $this->name = $_POST['nachname'];
	if(isset($_POST['strasse'])) $this->strasse = $_POST['strasse'];
	if(isset($_POST['geschlecht'])) $this->geschlecht = $_POST['geschlecht'];
	if(isset($_POST['geburtstag'])) $this->geburtstag = $_POST['geburtstag'];
	if(isset($_POST['plz'])) $this->plz = $_POST['plz'];
	if(isset($_POST['ort'])) $this->ort = $_POST['ort'];
        
        $this->profil->aktualisieren($this->id, $this->vorname, $this->name, $this->geschlecht, $this->geburtstag, $this->strasse, $this->plz, $this->ort);
	header('Location: index.php?url=Profilcontroller/?id='.$this->id);
    }
    
    public function loeschen()
    {
		print_r($this->id);
        if(isset($_REQUEST['id'])) $this->id = $_SESSION['logged']['id'];
        $this->profil->loeschen($this->id);
        header('Location: index.php?url=Profilcontroller');
    }

}

//new Profilcontroller();

?>