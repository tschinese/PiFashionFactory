<?php
//Sprint 4, Gruppe 4 Onlineshop, Verfasser: Denis Kevljanin, Datum: 08.12.2015
//UserStory: 340 Als Programmierer möchte ich Filterfunktionen hinzufügen und diese und die Suche dynamisch gestalten 
//Task: 340-1 dynamische Filterfunktionen hinzufügen
//Gesamtaufwand: 25 Stunden
//Aufwand File: 2 Stunden
//Beschreibung: View der Filterfunktion und der Suche
?>
<main>
    <!-- Section #3 -->
    <section id="about" data-speed="2" data-type="background">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="#">Überblick <span class="sr-only">(aktuell)</span></a></li>
                        <div>
                            <label for="range">Bereich</label>
                            <input type="range" name="range" id="range" min="0" max="10" step="2">
                        </div>
                        <li><a href="#">Berichte</a></li>
                        <li><a href="#">Analysen</a></li>
                        <li><a href="#">Exportieren</a></li>
                    </ul>
					<!-- Form mit allen Checkboxen -->
						
                         <form action="index.php?url=FilterController/<?php $kategorie = $data["kategorie"]; echo $kategorie; ?>" method="post">
                            <b>Preis</b><br>
							
                            <input type="checkbox" name="preis[]" id="preis" value="50"/>< 50€<br>
                            <input type="checkbox" name="preis[]" id="preis" value="100"/>< 100€<br>
                            <input type="checkbox" name="preis[]" id="preis" value="200"/>< 200€<br>
                            <b>Größe</b><br>
                            <input type="checkbox" name="groesse[]" id="groesse" value="S"/>S<br>
                            <input type="checkbox" name="groesse[]" id="groesse" value="M"/>M<br>
                            <input type="checkbox" name="groesse[]" id="groesse" value="L"/>L<br>
                            <input type="checkbox" name="groesse[]" id="groesse" value="XL"/>XL<br>
                            <b>Farbe</b><br>
                            <input type="checkbox" name="farbe[]" id="farbe" value="blau"/>blau<br>
                            <input type="checkbox" name="farbe[]" id="farbe" value="rot"/>rot<br>
                            <input type="checkbox" name="farbe[]" id="farbe" value="schwarz"/>schwarz<br>
                            <input type="checkbox" name="farbe[]" id="farbe" value="beige"/>beige<br>
                            <input type="submit" name="submit" value="Submit"/>
                        </form>

                </div>
                <?php
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
				 
                ?>


            </div><!--/.col-xs-12.col-sm-9-->
        </div>



    </section>
</main>