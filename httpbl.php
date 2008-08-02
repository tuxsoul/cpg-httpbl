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

// Check to run with mediawiki
if (!defined('IN_COPPERMINE')) {
	die ('You are lost ?');
}

// Define path of extension
define('HTTPBL_CWD', dirname(__FILE__));

// Include class to work dnsbl of httpbl
include(HTTPBL_CWD . '/object.httpbl.php');

?>
