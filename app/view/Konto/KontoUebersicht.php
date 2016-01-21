<!--
//Sprint 5, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 08.01.2016 Version 1.0
//UserStory: Als Kunde möchte ich verschiedene Kontenarten
//Task: Kontenverwaltungsplattform programmieren
//Aufwand: 3std
//Beschreibung: Übersicht aller gespeicherten Konten
-->

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        
        <title></title>
        <link href="../public/css/KontoUebersicht.css" type="text/css" rel="stylesheet">
        
    </head>
    <body>
        <main>
        <div id="ueber">
            
        <h1>Kontoübersicht</h1>
        
           <div id="inner">
                    <!-- Vorname und Nachname des Users -->
                    <?php if (isset($_SESSION['logged']) && $_SESSION['logged']['flag'] == true) {
                                require_once("../app/controller/LoginController.php");
                                $user = new LoginController();
                                $userFull = $user->gebeUser(); 
                    }
                        //Wenn Bankkonto vorhanden
                        if($data[0][0] != null){

                                  $ctr = 0;
                                  $length = sizeof($data[0]);
                                  //Ausgabe der Bankkontos
                                  while($ctr < $length){

                                      ?> <b>Name:</b> <?php echo $userFull['vorname']?>,<?php echo $userFull['nachname'];?><br>
                                         <b>Kontoart:</b> <?php  echo $data[0][$ctr]['kontoTyp'];?><br>
                                      <?php
                                      ?> <b>Kontonummer:</b> <?php  echo $data[0][$ctr]['kNummer'];?><br>
                                      <?php
                                      ?> <b>BLZ:</b> <?php  echo $data[0][$ctr]['blz'];?><br>
                                      <?php $ctr++;
                                      ?><hr><?php

                                  } 

                              }
                              //Wenn Kreditkarte vorhanden
                              if($data[1][0] != null){

                                  $ctr = 0;
                                  $length = sizeof($data[1]);
                                  while($ctr < $length){
                                      // Ausgabe der Kreditkarten
                                      ?> <b>Name:</b> <?php echo $userFull['vorname']?>,<?php echo $userFull['nachname'];?><br>
                                         <b>Kontoart:</b> <?php  echo $data[1][$ctr]['kontoTyp']; ?><br>
                                      <?php
                                      ?> <b>16 - stellige Nummer:</b> <?php  echo $data[1][$ctr]['zifferKredit'];?><br>
                                      <?php
                                      ?> <b>Expire:</b> <?php  echo $data[1][$ctr]['expireDate'];?><br>
                                      <?php $ctr++;
                                      ?><hr><?php
                                  }
                              } ?>
                              <!-- Verlinkung zum Anlegen eines neuen Kontos -->     
                              <a href="index.php?url=KontoController/callView">Neues Konto</a>
                              
           </div>
        
        </div>
        </main>
    </body>
    
</html>





