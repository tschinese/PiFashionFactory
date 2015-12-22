/*Sprint 4, Gruppe 4 version 1
Verfasser: Renato Cabriolu, Matrikelnummer: 3112468
UserStory: (330-2)  Als Kunde möchte ich mit anderen chatten
Task: Chat Design erarbeiten 
Aufwand: 3 Stunden
-->



/*Chatbox soll zuklappbar sein. Zuklappen soll langsam durchgeführt werden*/
$(document).ready(function(){
	$('.chatkopf').click(function(){
	$('.chatbody').slideToggle('slow');
});

/*Messagebiox soll zuklappbar sein. Zuklappen soll langsam durchgeführt werden*/
$('.nachrichtenkopf').click(function(){
	$('.nachrichten_wrap').slideToggle('slow');
});

/*Wenn in Messagebox auf 'X' geklickt wird, soll messagebox geschlossen werden*/
$('.close').click(function(){
	$('.nachrichtenbox').hide();
});

/*Wenn auf einen User in Chatbox geklickt wird, soll Messagebox öffnen*/
$('.user').click(function(){
	$('.nachrichten_wrap').show();
	$('.nachrichtenbox').show();
});

/*Fenster im Messagebox soll bei zu vielen Nachrichten immer weiter nach unten scrollen*/
$('textarea').keypress(
	function(e){
		if (e.keyCode == 13) {
			var msg = $(this).val();
			$(this).val('');
			if(msg!='')
				/*
				document.location='/index.php?url=Chat_Controller/sendChat?newMessage=test'; 
				$.post('/index.php?url=Chat_Controller/sendChat?newMessage=test', {newMessage: msg});
				*/
				$('<div class="nachrichten_eigene">'+msg+'</div>').insertBefore('.nachrichten_push');
				$('.nachrichten_body').scrollTop($('.nachrichten_body')[0].scrollHeight);
		}
	});
});
