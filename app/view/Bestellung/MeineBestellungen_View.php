<!-- Ridvan Atacan, 3113837
    24.11.2015 Group #4 Onlineshop
    Sprint 3, Task : 270-6 #10334
    User Story: Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
    Task: Zusammenführen
    Aufwand: 5 Stunden
 -->
<?php
    
    
    
  
    $i = 0;
    $total = sizeOf($data);
        // Wenn mehrere Zeilen von der Datenbank gelesen werden, diese durchgehen und Zeile für Zeile ausgeben
        while($i < $total){
            
           // echo '<form action = "index.php?url=Rucksendung_Controller" method = post>';
            echo"<br><table><fieldset>";
            //echo "<input type ='hidden'name = 'bestell' value = .$data[$i]['bestellnummer']>"; 
                 
            echo "Bestellnummer : " .$data[$i]['bestellnummer'];
            echo "<br>Gesamtpreis : " .$data[$i]['Gesamtpreis'];
            echo "<br>Datum : " .$data[$i]['Datum'];
           // echo '<br><input type ="submit" name = "Button" value = "Rücksendung">';
            echo "</fieldset></form>;";
            
           $i++;
           
            
        //$result = $data->fetch(PDO::FETCH_ASSOC);
            
        }
        
        //$gesamtpreis = $result['Gesamtpreis'];
        
        echo "</table></main>";
        $a = 0;
        while($a<total){
           
            if(isset($_POST[$i])){
                echo $data[$i];
            }
            $a++;
        }
