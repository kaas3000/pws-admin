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

$arrListing = array();
	$arrLeraren[] = $row['roostercode'];

$smarty->assign("topMenu", $arrTest);
$smarty->assign("topMenuActiveText", "Actief!");
$smarty->assign("topMenuActiveRef", "hier verwijst het naartoe");
$smarty->assign("leerling", $arrListing);
$smarty->assign("arrLeraren", $arrLeraren);

$smarty->display("template.tpl");
?>