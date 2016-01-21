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
        <link href="../public/css/KontoStyle.css" type="text/css" rel="stylesheet">
        
    </head>
    
    <body>
        <main>
        <div id="all">
            
        <h1> Hier können Sie ihr neues Bezahlkonto anlegen </h1>
        
        <div id='Kontotypen'>
            <!-- Vorauswahl um welche Kontoart es sich handelt -->
            <form action="#" method="post">
                
                <select name="KontoChoice" > 
                    
                    <option>Bankkonto</option> 
                    <option>Visa</option> 
                    <option>Master</option> 
                    
                </select>
                <input type="submit" name="submit" value="Bestätigen">
                
            </form> 
            <?php
            
                //Wenn Formular abgeschickt und die Kontoart gewählt include die entsprechende Viewerweiterung 
                //zum Anlegen der gewählten Kontoart
            
                if(isset($_POST['submit'])&& isset($_POST['KontoChoice'])){
                    
                    require_once '../app/view/Konto/KontoFormView.php';
                    
                }

            ?>
            
        </div>
        
        </div>
            <main>
    </body>
    
    
</html>



