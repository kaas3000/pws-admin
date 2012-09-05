<?php
require_once 'classes/mysql.class.php';
require_once 'classes/afspraak.class.php';
if (isset($_POST['opdracht'])) {
	switch ($_POST['opdracht']) {
		case 'updateAfspraak':
			$query = 'UPDATE rooster SET startTijd='. $_POST['startTijd'] .', eindTijd='. $_POST['eindTijd'] .', leerling_ID='. $_POST['leerling_ID'] .', lokaalNummer='. $_POST['lokaal_ID'];
			echo "1";
			break;
	}
}
?>