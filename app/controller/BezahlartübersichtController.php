<?php
    class BezahlartübersichtController extends Controller{
        
        public function waehlen(){
            $this->view('Header');
            echo 'hallo';
            $this->view('Bezahlungsarten/BezahlartÜbersichtView');
           
        }
    }

?>