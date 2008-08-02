<?php
/*
        ******************************************************************************
        CPG-HttpBL Plugin
        ******************************************************************************
        Author: Mario Oyorzabal Salgado
        Blog:   http://blog.tuxsoul.com/
        E-mail: <tuxsoul@tuxsoul.com>
        Web:    http://code.google.com/p/cpg-dnsbl/
        Donate: http://tinyurl.com/36mzoa
        ******************************************************************************
        This program is free software; you can redistribute it and/or modify
        it under the terms of the GNU General Public License as published by
        the Free Software Foundation; either version 2 of the License, or
        (at your option) any later version.
        ******************************************************************************
*/

// can't execute directly this file
// you are lost ?
if (!defined('HTTPBL_CWD')) {
	die('You are lost ?');
}

// include config file
include (HTTPBL_CWD . '/config.httpbl.php');

// include core file
include (HTTPBL_CWD . '/core.httpbl.php');

// main class object
class objectHttpBL extends coreHttpBL
{
	// load configuration
	function httpbl () {

	}

	// start the search to spammer's
	function httpblStart () {
		$this->coreHttpBLStart();
	}

	// get url to trap
	function httpblGetUrlTrap () {
		return $this->coreHttpBLGetUrlTrap();
	}
}
?>
