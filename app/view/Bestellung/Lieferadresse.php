<!--//Sprint 3, Gruppe 4 Onlineshop, Verfasser: Kerstin Gräter, Datum: 23.11.2015 Version 2
//UserStory: Als Kunde möchte ich ein in den wichtigsten Funktionen fertiges Ergebnis sehen.
//Task: (270-2) #10330 Zusammenführen
//Aufwand: 7 Stunden

//Sprint 2, Gruppe 4 Onlineshop, Verfasser: Kerstin Gräter, Datum: 09.11.2015 Version 1
//UserStory: Als Programmierer möchte ich den Aufbau als Model-View-Controller (MVC) haben.
//Task: 110-2 (#10190) MVC Programmieren
//Aufwand: 5 Stunden
//Beschreibung: Es wird der grundlegende Aufbau der Bestellabwicklung als MVC erstellt.
// Hier wird das Model dazu erstellt

//Sprint 1: Bestellabwicklung -->
<main>
<div>
    <h2>Ihre Lieferadresse: </h2>
	
	<?php 
		// Lieferadresse anzeigen
		var_dump($data);
		$total = sizeOf($data);
		$a = 0;
		
		while ($a < $total){
			echo '<div>';
			echo 'Person: '.$data[$a]['Vorname'].' '.$data[$a]['Nachname'];
			echo 'Straße: '.$data[$a]['Straße'];
			echo 'PLZ, Ort: '.$data[$a]['Postleitzahl_PLZ'].'</div>';
			$a++;
		}
	?>
	
    <form action="index.php?url=Bestellungcontroller" method="post">
        <input type="button" name="speichern" value="Lieferadresse ändern">
    </form>

    <form action="index.php?url=BestellungAbschliesenCon" method="post">    
        <input type="button" name="los" value="Bestellung abschließen">
    </form>
</div>
</main>