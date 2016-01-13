<!--
Sprint 5, Gruppe 4 Onlineshop, Verfasser: Renato Cabriolu, Datum: 10.01.2016 Version 1
UserStory: Als Kunde möchte ich ein Einheitliches Designe haben.
Task: 430-4  Meine Bestellungen designen
Aufwand: 0.1 Stunden
Beschreibung: Blockansicht

<!-- Ridvan Atacan, 3113837
    24.11.2015 Group #4 Onlineshop
    Sprint 3, Task : 270-6 #10334
    User Story: Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
    Task: Zusammenführen
    Aufwand: 5 Stunden
 -->
 <!--Sprint 3 Ridvan Atacan Start
<?php
    
    
    
  
    $i = 0;
    $total = sizeOf($data);
        // Wenn mehrere Zeilen von der Datenbank gelesen werden, diese durchgehen und Zeile für Zeile ausgeben
        while($i < $total){
            
            //Sprint 3 Ridvan Atacan Ende  
            //Sprint 5 Renato Cabriolu Start
            echo"<blockquote> <br><fieldset>";
            //Sprint 3 Renato Cabriolu Ende  
            //Sprint 3 Ridvan Atacan Start
            echo "Bestellnummer : " .$data[$i]['bestellnummer'];
            echo "<br>Gesamtpreis : " .$data[$i]['Gesamtpreis'];
            echo "<br>Datum : " .$data[$i]['Datum'];
            //Sprint 3 Ridvan Atacan Ende  
            //Sprint 5 Renato Cabriolu Start
            echo "</fieldset></blockquote></main>";
            //Sprint 3 Renato Cabriolu Ende  
            //Sprint 3 Ridvan Atacan Start
            
           $i++;
           
            
        //$result = $data->fetch(PDO::FETCH_ASSOC);
            
        }
        //$gesamtpreis = $result['Gesamtpreis'];
        
        //echo "</table>";
 
