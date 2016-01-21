<?php
//Sprint 5, Gruppe 4 Onlineshop, Verfasser: Denis Kevljanin, Datum: 10.01.2016
//UserStory: Als Programmierer möchte ich Filterfunktionen hinzufügen und diese den Kategorien anpassen 
//Task: Filter an Kategorien anpassen
//Gesamtaufwand: 8 Stunden
//Aufwand File: 2 Stunden
//Beschreibung: View der Filterfunktionen und Sidebar

//Sprint 4, Gruppe 4 Onlineshop, Verfasser: Denis Kevljanin, Datum: 08.12.2015
//UserStory: 340 Als Programmierer möchte ich Filterfunktionen hinzufügen und diese und die Suche dynamisch gestalten 
//Task: 340-1 dynamische Filterfunktionen hinzufügen
//Gesamtaufwand: 25 Stunden
//Aufwand File: 2 Stunden
//Beschreibung: View der Filterfunktion und der Suche
?>
<main>
    <!-- Sprint 4 -->
    <section id="about" data-speed="2" data-type="background">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
					<!-- Sprint 4 ENDE -->
					<!-- Form mit allen Checkboxen -->
					<!-- Sprint 5 -->
						
                         <form action="index.php?url=FilterController/<?php $kategorie = $data["kategorie"]; echo $kategorie; ?>" method="post">
                            <!-- Checkboxes für Preis -->
							<b>Preis</b><br>
							<input type="checkbox" name="preis[]" id="preis" value="50"/>< 50€<br>
                            <input type="checkbox" name="preis[]" id="preis" value="100"/>< 100€<br>
                            <input type="checkbox" name="preis[]" id="preis" value="200"/>< 200€<br>
                            <!-- Checkboxes für Größe -->
							<b>Größe</b><br>
                            <input type="checkbox" name="groesse[]" id="groesse" value="S"/>S<br>
                            <input type="checkbox" name="groesse[]" id="groesse" value="M"/>M<br>
                            <input type="checkbox" name="groesse[]" id="groesse" value="L"/>L<br>
                            <input type="checkbox" name="groesse[]" id="groesse" value="XL"/>XL<br>
                            <!-- Checkboxes für Farbe -->
							<b>Farbe</b><br>
                            <input type="checkbox" name="farbe[]" id="farbe" value="blau"/>blau<br>
                            <input type="checkbox" name="farbe[]" id="farbe" value="rot"/>rot<br>
                            <input type="checkbox" name="farbe[]" id="farbe" value="schwarz"/>schwarz<br>
                            <input type="checkbox" name="farbe[]" id="farbe" value="beige"/>beige<br>
                            <input type="submit" name="submit" value="Filtern" style="color: black"/>
                        </form>
					<!-- Sprint 5 ENDE -->
                </div>
                <?php
				//Sprint 4
				//Schleife copied von @Riedl, Marcel
                $a = 0;
                $total = sizeof($data["daten"]);
                while ($a < $total) {
                    if ($data["daten"][$a]['SalePreis'] < $data[$a]['Preis']) {
                        $preis = $data[$a]['SalePreis'];
                    } else {
                        $preis = $data["daten"][$a]['Preis'];
                    }
                    echo '<dir class="col-xs-6 col-lg-4"><h2><a href = "index.php?url=ProduktansichtController/'
                    . $data["daten"][$a]['Produktnummer'] . '">' . $data["daten"][$a]['Benennung'] . '</a></h2>';
                    echo 'Preis: ' . $preis . ' Hersteller: ' . $data[$a]['Hersteller_hersteller']
                    . '&nbsp<br>' . ' Farbe: ' . $data["daten"][$a]['Farbe_farbe'] . ' Größe: ' . $data["daten"][$a]['Groese_groese'] . '</dir>';
                    $a++;
                }
				 
				//Sprint 4 ENDE
                ?>


            </div><!--/.col-xs-12.col-sm-9-->
        </div>



    </section>
</main>