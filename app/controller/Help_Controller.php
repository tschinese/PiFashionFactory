<?php

class Help_Controller extends Controller{
    
    public function index(){
        
        $this->view('Header');
        $this->view('Hilfe/Help_View');
        $this->view('Footer');
    }
    
    
}

new Help_Controller();