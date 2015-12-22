<!-- Ridvan Atacan, 3113837
    10.11.2015 Group #4 Onlineshop
    Sprint 2, Task : 140-6 #10204
    User Story: Als Programmierer möchte ich meine Codes als Model–view–controller (MVC) haben
    Task: Eigenen Code an MVC anpassen
    Aufwand: 5 Stunden
 -->
<!-- Ridvan Atacan, 3113837
    24.11.2015 Group #4 Onlineshop
    Sprint 3, Task : 270-6 #10334
    User Story: Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
    Task: Zusammenführen
    Aufwand: 5 Stunden
 -->
 <!-- Formular um die eingelesenen Daten aus den Textfeldern mittels submit und action an den Controller zu übergeben -->
 <main>
     <!-- Anfang Ridvan Atacan 07.12.2015-->
     <?php
     
    $best = $this->model("MeineBestellungen_Model");
    $name = $best->Kundenname($_SESSION['logged']['id']);
    echo("Hallo <strong>" .$name['Vorname']." " .$name['Nachname']."</strong>,<br>Falls Sie mehrere Lieferadressen haben, können Sie diese hier hinzufügen!");
     ?>
     

 <form action = "index.php?url=LieferAdresse_Controller" method ='post'>
               


        <br>Vorname: 
        <input type="text" name ="name" placeholder ="Vorname" ><br>
            Nachname: 
            <input type="text" name ="nname" placeholder ="Nachname" ><br>
                Strasse:
                <input type="text" name ="strasse" placeholder ="Strasse"><br>
                    Postleitzahl: 
                    <input type="text" name ="plz" placeholder ="Postleitzahl"><br><br>
                        
                        

                    <input type="submit" name ="submit" value = "Hinzufügen">
                 </form>
<!-- Ende Ridvan Atacan 07.12.2015-->