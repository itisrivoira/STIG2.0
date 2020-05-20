<?php

Class Connessione{

	static function apriConnessione(){
		//creo connessione
		$connessione = new mysqli('localhost', 'root', '', '5C_stig');
			if ($connessione->connect_error) {
					die('Errore di connessione (' . $connessione->connect_errno . ') '
							. $connessione->connect_error);
			}
			return $connessione;
	}

}

?>
