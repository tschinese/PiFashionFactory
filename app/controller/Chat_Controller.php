<!-- Renato Cabriolu, 3112468
    07.12.2015 Group #4 Onlineshop
    Sprint 3, Task : 270-1
    User Story: (330-3)Als Kunde möchte ich mit anderen chatten
    Task: Chatfunktion implementieren 
    Aufwand: 5 Stunden
 -->
<?php

class Chat_Controller extends Controller{

    private $chat;
	private $model;
	
	public function __construct(){  
	$model = $this->model('Chat_Model');
    }

    public function index(){   
            // $this->view('Header');
            // $this->view('chat/chat', []);			
            // $this->view('Footer'); 
			//	$this->model('Chat_Model');
			$this->loadChat();			
    }
	
	public function loadChat(){
            echo 'chat controller loadchat';
				$chat= $this->model('Chat_Model');
				$this->view('Header',[]);
				$this->view('chat/chat',$chat->empfangen('1')); // TODO 
																// ID/User aus Session holen, sobald diese in Session steht.
																// Session aktuell:
																// logged|a:3:{s:4:"flag";b:0;s:2:"id";N;s:5:"admin";b:0;}
				$this->view('Footer',[]);
	}
	
	public function sendChat(){
            echo 'chatcontroller sende chat';
		$model= $this->model('Chat_Model');
        $model->senden(Parameter);
        
       $this->view('Header',[]);
       $this->view('chat/chat',$chat->empfangen('1')); // TODO 
																// ID/User aus Session holen, sobald diese in Session steht.
																// Session aktuell:
																// logged|a:3:{s:4:"flag";b:0;s:2:"id";N;s:5:"admin";b:0;}
        $this->view('Footer',[]);
		$this->view('Header',[]);
			
	}
}

$obj = new Chat_Controller();