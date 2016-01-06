<?php
//Sprint 3, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 19.11.2015 Version 1
//UserStory: 270 Als Programmierer möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
//Task: 270-1 (#10329) Zusammenführen
//Aufwand: 3 Stunden
//Beschreibung: Es wird der Controller des Logins im Frontend erstellt. 


require_once '../app/config/Connect_Mysql.php';
require_once '../app/controller/backend.php';
session_start();
class LoginController extends Controller {

    public function rufView(){
		
      
           $this->view('Header',[]);
  $this->view('Login/LoginView');
        $this->view('Footer',[]);
	}


    public function login(){
   
        if(isset($_POST['mail']) && isset($_POST['pw'])){
            
            $emailAdresse = $_POST['mail'];
            $pw = $_POST['pw'];
            $LogModel = $this->model('LoginModel');
            $check = $LogModel->login($emailAdresse,$pw);
            
            if($check && isset($_SESSION['logged'])){
                if($_SESSION['logged']['admin'] == true){
                   $b = new backend();
                   $b->index();
                }else{
					
					 $this->view('Header',[]);
                                         $this->view('main');
					 $this->view('Footer',[]);
                }
            }else{
                echo 'Bitte geben Sie Mail und Passwort ein!';
				 $this->view('Header',[]);
                $this->view('Login/LoginView');
				 $this->view('Footer',[]);
            }
            
        }
    }
    public function logout(){
        $loginModel = $this->model('LoginModel');
        $check = $loginModel->logout();
        if($check){
            
             $this->view('Header',[]);
                    $this->view('main');
					 $this->view('Footer',[]);
        }
    }
    
    public function gebeUser() {
        
        $loginModel = $this->model('LoginModel');
        return $loginModel->getUser();
    }
    

}

?>