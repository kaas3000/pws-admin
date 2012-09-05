<?php
require_once 'mysql.class.php';
/**
 * @author kaas3000
 * De klasse heeft 4 doelen:
 * 	1. afspraken maken
 * 	2. afspraken bewerken
 *  3. afspraken verwijderen
 * 	4. afspraken laden
 */
class afspraak {
	/*
	 * De verbindingsgegevens declareren
	 */
	 var $mysql;
	 
	/*
	 * De constructor
	 */
	public function __construct() {
		$this->mysql = new mysql("localhost", "kmeliefste_PWS", "kmeliefste", "hsb2sqd");
	}
	
	public function load($id=-1) {
		if ($id == -1) {
			$q =
				'SELECT rooster.startTijd, rooster.eindTijd, rooster.leerling_ID, rooster.lokaalnummer, leerlingen.voornaam, leerlingen.achternaam, leraren.roostercode
				FROM rooster 
				JOIN leerlingen ON leerlingen.id = rooster.leerling_ID
				JOIN leraren ON leraren.id = rooster.leraar_ID
				ORDER BY rooster.startTijd ASC';
		} else {
// 			Komt nog!
		}
		
		$result = $this->mysql->query($q);
		return $result;
	}
}
?>