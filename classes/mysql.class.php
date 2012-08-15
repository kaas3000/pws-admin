<?php

/**
 * @author kaas3000
 */
class mysql {
    //De verbindingsgegevens declareren
    var $strHost;
    var $strDatabase;
    var $strUsername;
    var $strPassword;
	var $db;
    
    /*
     * De constructor
     */
    public function __construct($strHost, $strDatabase, $strUsername, $strPassword) {
        $this->strHost = $strHost;
        $this->strUsername = $strUsername;
        $this->strPassword = $strPassword;
        $this->strDatabase = $strDatabase;
		$this->db = mysql_connect($this->strHost, $this->strUsername, $this->strPassword) or die("could not connect: ". mysql_error());
		mysql_select_db($this->strDatabase);
    }
	 
    /*
     * Beveiligingsfunctie (werkt niet)
     */
    public function secure($strInput, $html=true) {
        $strInput = mysql_real_escape_string($strInput);
        $strInput = addslashes($strInput);
		if (!$html == FALSE) {
			$strInput = htmlentities($strInput);
		}
		return $strInput;
    }
    
    /*
     * De code voor insert-querys
     */
    public function insert($strTable, $strColumn, $strData) {
        $db = mysql_connect($this->strHost, $this->strUsername, $this->$strPassword);
        mysql_select_db(secure($this->strDatabase), $db);
        $gelukt = mysql_query("INSERT INTO ". $strTable. " (". $strColumn .") VALUES (". $strData .")");
        mysql_close($db);
        return ($gelukt ? TRUE : FALSE);
    }
    
    public function query($strSql) {
        $db = mysql_connect($this->strHost, $this->strUsername, $this->strPassword);
		mysql_select_db($this->strDatabase);
        $gelukt = mysql_query($strSql);
		mysql_close($db);
        return ($gelukt ? $gelukt : FALSE);
    }
}

?>
