<?php
require_once 'classes/mysql.class.php';
require_once 'classes/afspraak.class.php';
$mysql = new mysql("localhost", "kmeliefste_PWS", "kmeliefste", "hsb2sqd");

if (isset($_POST['opdracht'])) {
	switch ($_POST['opdracht']) {
		case 'updateAfspraak':
			$query = 'SELECT id FROM leraren WHERE roostercode="'. $_POST['roostercode'] .'"';
			$result = $mysql->query($query);
			$row = mysql_fetch_array($result);
			$leraar_ID = $row['id'];
			
			$query = 'UPDATE rooster SET startTijd="'. $_POST['startTijd'] .'", eindTijd="'. $_POST['eindTijd'] .'", leerling_ID="'. $_POST['leerling_ID'] .'", leraar_ID="'.$leraar_ID .'", lokaalNummer="'. $_POST['lokaal_ID'].'"' .
						'WHERE id="' .$_POST['id'] .'"';
			if ($mysql->query($query)) {
				echo 1;
			} else {
				echo 0;
			}
			break;
	}
}

if (isset($_GET['opdracht'])) {
	switch ($_GET['opdracht']) {
		case 'autofill':
			$strQuery = 
					'SELECT voornaam, achternaam, ouder_ID
					FROM leerlingen';
			$strArrReturn = '[ ';
			$result = $mysql->query($strQuery);
			while ($row = mysql_fetch_array($result)) {
				$strVoornaam = htmlentities($row['voornaam']);
				$strAchternaam = htmlentities($row['achternaam']);
				$strID = htmlentities($row[2]);
				$strArrReturn .= "\"$strVoornaam $strAchternaam ($strID)\", ";
			}
			$strArrReturn = substr($strArrReturn, 0, -2); //verwijdert de laatste komma.
			$strArrReturn .= ' ]';
			echo $strArrReturn;
			break;
		default:
			echo 0;
			break;			
	}
}
?>