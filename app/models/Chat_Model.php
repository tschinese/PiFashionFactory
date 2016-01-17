<!-- Renato Cabriolu, 3112468
    23.11.2015 Group #4 Onlineshop
    Sprint 3, Task : 270-1
    User Story: (330-3)Als Kunde möchte ich mit anderen chatten
    Task: Chatfunktion implementieren 
    Aufwand: 5 Stunden
 -->
<?php


class Chat_Model{
   
    public $sql; 

    //Datenbankverbindung versuchen aufzubauen sobald ein Objekt der Klasse erzeugt wird connection wird durch index.php auf ini.php verwisen und dort Required
    public function __construct(){
        $this->connection = new Connect_Mysql();
    }
        
    
    //Methode zum empfnagen von nachrichten
    public function empfangen($kunde_id){
        echo 'chatmodel empfangen';
			try{
			$db = $this->connection->verbinden();
			$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
			$sql ="SELECT message_date, message  FROM chat WHERE kunde_id = '' ORDER BY message_date ASC";
			$stmt = $db->prepare($sql);
                        $stmt->execute();
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);   
			return $stmt->fetchAll ();
			}
			catch(PDOException $e)
			{
			print '<pre>'.$e.'</pre>';
			return null;
			}

    }
	
	//Methode zum senden von Nachrichten
    function senden($message, $kunde_id, $time){
        echo 'chatmodel senden';
		try{
			$db = $this->connection->verbinden();
			$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                                                        //.date("Y-m-d H:i:s").
			$sql ="INSERT INTO chat VALUES (null, '$kunde_id', '$message', '2016-01-02')";
			$stmt = $db->prepare($sql);
            $stmt->execute();
           
			return "aloah";
			}
			catch(PDOException $e)
			{
			print '<pre>'.$e.'</pre>';
			return null;
			}
			
		//$this->sql = "INSERT INTO chat VALUES ('$kunde_id', '$message', '$time')";
		//$this->sql = "INSERT INTO chat VALUES ('$kunde_id', '$message', '$time')";
        //$this->con->query($this->sql);
        //$this->con = null;
        //$this->closeDB();
    
    }
	
    // Methode um die Datenbankverbindung zu trennen
    function closeDB(){
        $this->db->schließen();
        $this->con = 0;
    }
    
	}

