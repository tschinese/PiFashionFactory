<!--Sprint 4, Gruppe 4 
Verfasser: Renato Cabriolu, Matrikelnummer: 3112468
UserStory: (330-2)  Als Kunde möchte ich mit anderen chatten
Task: Chat Design erarbeiten 
Aufwand: 3 Stunden
-->

<main>
<!--Anzeigen von Chatbox rechts unten-->
<div class="chatbox">
	
	<div class="chatkopf"> Chatbox</div>
	<div class="chatbody">
		<div class="user"> Support</div>
	</div>
	</div>

<!--Anzeigen von Maessagebox links neben Chatbox-->
<div class="nachrichtenbox" style="right:290px">
	<div class="nachrichtenkopf">Kunde A
		<div class="close">x</div>
	</div>
	<div class="nachrichten_wrap">
		<div class="nachrichten_body">
			<div class="nachrichten_partner"> 
<?php
$chat = $data;
$i= 0;
while ($i<count($data)){
	foreach ($chat[$i] as $key => $value){
	 echo ($value);
	 echo ('<br>');
	}
	$i++;
}
 ?>
 </div>
			<div class="nachrichten_push"></div>
		</div>
	<div class="nachrichten_footer"><textarea class="nachrichten_input" rows="3">
	<?php
	
	
	//schauen ob user einen chatnamen eingegeben hat. 
	if(isset($_GET['sender'])&&!empty($_GET['sender'])) {
		$sender = $_GET['sender'];
		
		//Abfrage ob überhaupt eine Nachricht eingeben wurde
		if(isset($_GET['message'])&&!empty($_GET['message'])) {
			$message = $_GET['message'];
			
			//Nachricht abschicken. Falls nicht möglich, wird eine Fehlermeldung ausgegeben.
			if(send_msg($sender, $message)) {
				echo 'Nachricht gesendet';
			} else {
				echo 'Nachricht konnte nicht gesendet werden. Versuchen Sie es später noch einmal!';
			}
			
		} else {
			echo 'Es wurde keine Nachricht eingegeben!';
		}
		
	} else {
		echo 'Kein Name wurde eingegeben!';
	}
	
?>
</textarea></div>
	</div>
</div>

   
 
    </main>