<?php

//Sprint 4, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 04.12.2015 Version 1.2
//UserStory:Als Entwickler möchte ich, dass der Onlinshop auf dem Hochschulserver läuft.
//Task: Rezensionserstellung nur für gekaufte Artikel
//Aufwand: 4 Stunden
//Beschreibung: ermöglicht eine personalisierte übersicht der rezenssionen zu einem bestimmten artikel... mit login check
// UPDATE zu Sprint 3: Diese Klasse ermöglicht nur eingeloggten Kunden, die den Artikel gekauft haben, eine Bewertung abzugeben
//Ab Zeile 71.

//Sprint 3, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 19.11.2015 Version 1.1
//UserStory:Als Kunde möchte ich Rezensionen zu gekauften Produkten schreiben und lesen können
//Task: View zur Rezensionsausgabe
//Aufwand: 4 Stunden
//Beschreibung: ermöglicht eine personalisierte übersicht der rezenssionen zu einem bestimmten artikel... mit login check

   
?>
<!-- Beginn Sprint 3 -->
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        
        <title></title>
        <link href="../../public/css/StyleBewertung.css" type="text/css" rel="stylesheet">
        
    </head>
    <body>
        <div id="headerRez">
                <!-- artikel wird geplotet -->
                
                <h1> Rezensionen zum Artikel <?php echo $data[0]['Benennung'];?></h1>
				
                <!--prüfen ob usereingeloggt, wenn ja, personalisierte meldung, wenn nein > allgemeine ausgabe -->
                <?php if(isset($_SESSION['logged'])){
							
                        if($_SESSION['logged'] == true){
                         //Controller instanz zum abrufen der userinfos aus dem model   
                        require_once '../app/controller/LoginController.php';
                            $conLog = new LoginController();
                            $name = $conLog->gebeUser();
						
                            ?><h2><?php echo $name['vorname']?> <?php echo $name['nachname'] ?>, deine Meinung ist uns wichtig!</h2>
                  <?php }
                      }else{ ?>
                            <h2>Deine Meinung ist uns wichtig!</h2>
                <?php } ?>

                </br>
        </div>
        
        <hr>
        <!--Auslesen der relevanten werte bezüglich der Rezension -->
        <?php $loop =0;
        foreach($data as $rez){?>
        
            <h3>Rezension <?php echo $loop+1 ?> von <?php echo count($data)?>: </h3>
            
            <h4>Verfasser: <?php echo $rez['vorname'] ?>, 
                           <?php echo $rez['nachname'] ?></h4>
            
            <?php echo $rez['beschreibung'];
            $loop++;?>
            </br>
            </br>
            <hr>
            
            <!--Falls <nutzer eingeloggt, möglichkeit eine rezension zu erstellen, ansonsten auf login oder registrierungen verweisen -->
  <?php } if(isset($_SESSION['logged'])){
			
			$produktID = $data[0]['Produktnummer'];
                        
            //Ende Sprint 3
            
                        
            //Sprint 4 Task: Rezensionserstellung nur für gekaufte Artikel
            require_once '../app/controller/BewertungController.php';
            $bewertungControl = new BewertungController();
            $kundenID = $_SESSION['logged']['id'];
			//Aufruf der Methode pruefeBestellt im Bewertungskontroller mit Übergabe der betreffenden ID's...Rückgabe ist ein boolean
            $bestellt = $bewertungControl->pruefeBestellt($kundenID,$produktID);
			//wenn User beireits eingeloggt ist und Artikel bereits gekauft wurde
            if( $_SESSION['logged']['flag'] == true && $bestellt == true ){ ?>
                <!-- Bewertung zulassen -->
                <a href="index.php?url=BewertungController/bewertungErstellen/<?php echo $_SESSION['logged']['id']?>/<?php echo $data[0]['name'] ?>/<?php echo $data[0]['Produktnummer'] ?>">Eigene Bewertung erstellen</a>
      <?php }else{
				
				// In diesem Fall Hinweis zum benötigten Kauf geben
                echo 'Um diesen Artikel zu bewerten, müssen Sie ihn kaufen!';
            }
          }else {  ?>
			<!-- Falls nicht eingeloggt -->
            Bitte <a href="index.php?url=LoginController/rufView">einloggen</a> 
            oder <a href="index.php?url=Registrieren_Controller/index.php">registrieren</a> um Rezension zu erfassen!
     <?php  }
     //Ende Sprint 4
     ?>
           
    </body>
</html>