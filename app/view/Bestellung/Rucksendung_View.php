<main>
    <strong> Willkommen im Rücksendezentrum! </strong><br>
    <?php
    $best = $this->model("MeineBestellungen_Model");
    $name = $best->Kundenname($_SESSION['logged']['id']);
    echo("Hallo <strong>" .$name['Vorname']." " .$name['Nachname']."</strong>,<br> sind Sie unzufrieden mit Ihrer Ware oder haben Sie die falsche Ware bekommen?");
    echo("<br> In einem solchen Fall können Sie hier die Rücksendung ihrer Artikel vornehmen<br>");
    $timestamp = time();
    $datum = date("d.m.Y - H:i", $timestamp);
    //echo $datum;
   
    ?>
    <br> Geben Sie die betroffene Bestellnummer ein, die Sie mit der Bestätigungs-Email erhalten haben!
    <form action ="index.php?url=Rucksendung_Controller/test" method ="post">
    <input type ="text" name ="bestellid" placeholder ="BestellNummer">
    <input type ="submit" value ="Weiter">
    </form>
 
    
