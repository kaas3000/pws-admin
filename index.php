<?php
require_once "smarty/Smarty.class.php";
require_once "config.php";
require_once "classes/afspraak.class.php";
//Nieuwe smarty aanmaken
$smarty = new Smarty();

$smarty->template_dir = "template/templates";
$smarty->compile_dir = "template/templates_c";
$smarty->cache_dir = "template/cache";
$smarty->config_dir = "template/configs";

$afspraak = new afspraak();

$arrLeraren = array();

$arrTest = array(
    'een' => "twee.html",
    'drie' => "vier.html");

$arrListing = array();$result = $afspraak->load();while ($row = mysql_fetch_array($result)) {
	$tijdUur = explode(":", $row['startTijd']);
	if ($tijdUur[0] <= 19) {
		$strClassTijd = "vroeg";
	} elseif ($tijdUur[0] <= 20) {
		$strClassTijd = "midden";
	} else {
		$strClassTijd = "laat";
	}	$arrListing[] = array(	'tijdVan' => $row['startTijd'],	'tijdTot' => $row['eindTijd'],
	'tijdClass' => $strClassTijd,	'voornaam' => $row['voornaam'],	'achternaam' => $row['achternaam'],	'leraar' => $row['roostercode'],	'lokaal' => $row['lokaalnummer']	);
	if (!in_array($row['roostercode'], $arrLeraren)) {
		$arrLeraren[] = $row['roostercode'];
	}}

$smarty->assign("topMenu", $arrTest);
$smarty->assign("topMenuActiveText", "Actief!");
$smarty->assign("topMenuActiveRef", "hier verwijst het naartoe");
$smarty->assign("leerling", $arrListing);
$smarty->assign("arrLeraren", $arrLeraren);

$smarty->display("template.tpl");
?>