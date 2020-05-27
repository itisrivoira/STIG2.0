<?php

Class Connessione{

	static function apriConnessione(){
		//creo connessione
		$connessione = new mysqli('127.0.0.1', 'root', '', '5C_STIG');
			if ($connessione->connect_error) {
					die('Errore di connessione (' . $connessione->connect_errno . ') '
							. $connessione->connect_error);
			}
			return $connessione;
	}

}

?>
