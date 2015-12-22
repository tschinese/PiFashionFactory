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
        Vielen Dank für Ihre Bestellung! <br>Sie erhalten in Kürze eine Bestätigung per Mail.<br>
		Sie haben bestellt:<br>
		<?php

			$total = sizeOf($data);
			$a = 0;

			echo '<br>';
			while($a<$total){
				echo '<div>Artikel: '.$data[$a]['Benennung'].'<br>';
				echo 'Farbe: '.$data[$a]['Farbe_farbe'].'<br>';
				echo 'Größe: '.$data[$a]['Groese_groese'].'<br>';
				echo 'Hersteller: '.$data[$a]['Hersteller_hersteller'].'<br>';
				echo 'Preis: '.$data[$a]['Preis'].'<br>';
				echo 'Menge: '.$data[$a]['Menge'].'</div><br>';
				
				$a++;
			}
			echo 'Gesamtpreis: '.$data[$a-1]['Gesamtpreis'];
		?>
    </div>
	<br>
	<div>
	<form action="index.php?url=home" method="post">
		<input type="submit" value="Zurück zur Startseite">
	</form>
	</div>
</main>
