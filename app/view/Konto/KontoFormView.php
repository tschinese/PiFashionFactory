<!--
//Sprint 5, Gruppe 4 Onlineshop, 
//Verfasser: Christian Frindt, Datum: 08.01.2016 Version 1.0
//UserStory: Als Kunde möchte ich verschiedene Kontenarten
//Task: Kontenverwaltungsplattform programmieren
//Aufwand: 3 Stunden
//Beschreibung: View zum anlegen eines Kontos
-->

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        
        <title></title>
        <link href="#" type="text/css" rel="stylesheet">
        
    </head>
    <body>
        <!-- Aufruf des Controllers zum speichern der Kontodaten bei bestätigung des Formulars -->
        <form action="index.php?url=KontoController/writeDB" method="post">
           
            <br><br>
                <?php 
                    //Speichert um welche Art von Konto es sich handelt
                    $wahl = $_POST['KontoChoice'];
                    
                    
                    if($wahl == 'Bankkonto'){
                        //Input des normalen Bankkontos
                        ?><label for="knummer">Kontonummer</label>          
                        <div class="inputForm"><input type="number" name="knummer" id="knummer"></div><br>
                        <label for="blz">Bankleitzahl</label>                
                        <div class="inputForm"><input type="number" name="blz" id="blz"></div><br>
                        <input type="hidden"  id="art" value="<?php echo $wahl ?>" name="art">
                <?php
                    }
                    else if($wahl == 'Visa'){
                            //Input der Visa Kreditkarte
                           ?><label for="ziff">16 stellige Nummer</label>                
                           <input type="number" min="16" max="16" id="ziff"><br>
                           <label for="expireD">Gültig bis</label>                
                           <input type="date" id="expireD"><br>
                           <input type="hidden" id="art" value="<?php echo $wahl ?>">
                   <?php
                       }
                   else if($wahl == 'Master'){
                            
                            //Input der Master Kreditkarte
                           ?><label for="Ziff">16 stellige Nummer</label>                
                           <input type="number" min="16" max="16" id="ziff"><br>
                           <label for="expireD">Gültig bis</label>                
                           <input type="date" id="expireD"><br>
                           <input type="hidden" id="art" value="<?php echo $wahl ?>">
                   <?php
                    }
                ?>
                           <input type="submit" value="submit"> 
                           
        </form>

    </body>
</html>




