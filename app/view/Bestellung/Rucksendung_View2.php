 <!-- Ridvan Atacan, 3113837
    08.12.2015 Group #4 Onlineshop
    Sprint 4, Task : 380-2 #10593
    User Story: Als Kunde möchte ich getätigte Bestellungen zuücksenden können.
    Task: Gewählte Bestellung zum eingeloggten Kunden aus der Datenbank lese
    Aufwand: 3 Stunden
 --> 
    <?php
    
    //Sprint 4 
    if($data==true){
    echo"<br><main><fieldset>";
    echo"<strong>Ausgewählte Bestellung: </strong><br><br>";
            echo "Bestellnummer : " .$data['bestellnummer'];
            echo "<br>Gesamtpreis : " .$data['Gesamtpreis']. " €";
            echo "<br>Datum : " .$data['Datum'];
            echo "</fieldset><br>";
    //Sprint 5 Anfang
                echo " Möchten Sie diese Bestellung stornieren bzw. zurücksenden?";
    }
    else{
        echo"<strong> Zu dieser Bestellnummer liegt uns keine Bestellung vor!</strong>";
    }
           
            ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <?php
        if($data==true){
        
        
        ?>
        <form action = "index.php?url=Rucksendung_Controller/stornieren" method = "post">
         <input type ='submit' name ='storno' value='Stornieren'>
        
                <?php
               $_SESSION['bestellnr'] = $data['bestellnummer'];
             ?>
        </form>
        <form action = "index.php?url=Rucksendung_Controller" method = "post">
            <input type ='submit' name ='abbrechen' value='Abbrechen'>
        </form>
    <form action ="index.php?url=Rucksendung_Controller/bestellzeit" method="post">
        <input type ="submit" name ="zeit" value="Vergangene Zeit">
    </form>
    <?php
        }
        else{
           ?>
           <form action = "index.php?url=Rucksendung_Controller" method = "post">
            <input type ='submit' name ='zuruck' value='Zurück'>
        </form>
        <?php
        }
        ?>
</html>
        <!-- Sprint 5 Ende -->      