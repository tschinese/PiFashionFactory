 <!-- Ridvan Atacan, 3113837
    08.12.2015 Group #4 Onlineshop
    Sprint 4, Task : 370-9 #10586
    User Story: Als Entwickler möchte ich, dass der Onlineshop auf dem Hochschulserver läuft.
    Task: Die hinzugefügte Lieferadresse dem eingeloggten Kunden zuordnen
    Zeile 25-31
    Aufwand: 2 Stunden
 -->

<!-- Ridvan Atacan, 3113837
    24.11.2015 Group #4 Onlineshop
    Sprint 3, Task : 270-6 #10334
    User Story: Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
    Task: Zusammenführen
    Aufwand: 5 Stunden
 -->
 <!-- Ridvan Atacan, 3113837
    10.11.2015 Group #4 Onlineshop
    Sprint 2, Task : 140-6 #10204
    User Story: Als Programmierer möchte ich meine Codes als Model–view–controller (MVC) haben
    Task: Eigenen Code an MVC anpassen
    Aufwand: 5 Stunden
 -->
 <!-- Formular um die eingelesenen Daten aus den Textfeldern mittels submit und action an den Controller zu übergeben -->
 <main>
     <!-- Anfang Ridvan Atacan 07.12.2015 Sprint 4-->
     <?php
     
    $best = $this->model("MeineBestellungen_Model");
    //Zugriff auf die SESSION ID von Christian Frindt
	$name = $best->Kundenname($_SESSION['logged']['id']);
    echo("Hey <strong>" .$name['Vorname']." " .$name['Nachname']."</strong>,<br>Falls Sie mehrere Lieferadressen haben, können Sie diese hier hinzufügen!");
     ?>
     <!-- Ende Ridvan Atacan 07.12.2015 Sprint 4-->
	<!-- Anfang Ridvan Atacan 24.11.2015 Sprint 3-->
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
        
	<!-- Ende Ridvan Atacan 24.11.2015 Sprint 3-->
        <!-- Sprint 5 Anfang--> 
        <form action ="index.php?url=Bestellungcontroller" method ="Post">
            <input type ="submit" name ="warenkrb" value ="Zum Warenkorb">
        </form>