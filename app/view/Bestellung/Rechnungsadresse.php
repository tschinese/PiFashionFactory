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
        <h2>Ihre Rechnungsadresse:</h2>
        <?php
        $total = sizeof($data);

        $a = 0;

// Ausgabe
        while ($a < $total) {
            echo $data[0][$a]['straße'] . ' <br>' . $data[0][$a]['plz'] . ' ' . $data[0][$a]['ort'];
            $a++;
        }
        ?>

    </div>
	<div>
		<h2>Ihre Lieferadresse:</h2>
		<form action="index.php?url=BestellungAbschliesenCon" method="post">
			<input type="checkbox" name="lieferadresse">Rechnungsadresse als Lieferadresse<br><br>
		<?php

			$a = 0;
			while($a < $total){
				echo '<div><input type="checkbox" name="adresse'.$a.'" value="">Name: '.$data[1][$a]['Vorname'].' '.$data[1][$a]['Nachname'].'<br>';
				echo 'Straße: '.$data[1][$a]['Straße'].'<br>';
				echo 'PLZ, Ort: '.$data[1][$a]['Postleitzahl_PLZ'].' '.$data[1][$a]['Ort'].'</div><br>';
				$a++;
			}
		?>	
			<input type="checkbox" name="hinzufuegen"><a href="index.php?url=Lieferadresse_Controller">Andere Lieferadresse</a><br><br>
			<input type="submit" name="los" value="Zahlungspflichtig bestellen">
		</form>
	</div>
</main>