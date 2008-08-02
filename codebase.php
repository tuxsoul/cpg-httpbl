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

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

define ('CPG_HTTPBL_CWD', dirname(__FILE__));

// project honey pot core
include (CPG_HTTPBL_CWD . '/httpbl.php');
// Instance object api project honey pot
$httpbl = new objectHttpBL();
// If visitor evil ?
$httpbl->httpblStart();

// Add a filter for the gallery
// Show url traps in the code
$thisplugin->add_filter('gallery_header','cpg_httpbl_traps_top');
$thisplugin->add_filter('gallery_footer','cpg_httpbl_traps_footer');

// Filters code
// Add url traps in the top
function cpg_httpbl_traps_top (&$html) {
	return cpg_httpbl_traps() . $html;
}

// Add url traps in the footer
function cpg_httpbl_traps_footer (&$html) {
	return cpg_httpbl_traps() . $html;
}

// Add url traps in the html code
function cpg_httpbl_traps () {
	$httpbl = new objectHttpBL();
	return $httpbl->httpblGetUrlTrap();
}

?>
