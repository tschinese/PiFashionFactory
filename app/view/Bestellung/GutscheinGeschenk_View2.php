<?php

echo("<main>Sie haben sich für den Gutschein in Höhe von ".$data." € entschieden.");
echo("<br>Möchten Sie diesen Gutscheincode verbindlich generieren lassen?");
?>
<br>
<form action ="index.php?url=Gutschein_Controller/generieren" method ="post">
    <?php echo"<input type='hidden' name='data' value='$data'>"?>
    <input type ="submit" name="bestätigen" value="Zahlungspflichtig bestellen">
</form>
<form action ="index.php?url=Profielcontroller" method ="post">
<input type ="submit" name="abbrechen" value="Abbrechen">
</form>