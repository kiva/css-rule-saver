<?php

/*!
 * CSS Rule Saver Example - v0.1.0
 *
 * Copyright (c) 2013 Dave Olsen, http://dmolsen.com
 * Licensed under the MIT license
 *
 */

require "../css-rule-saver.php";

// initialize the class
$crs = new cssRuleSaver;

// load the CSS file to compare
$crs->loadCSS("example.css");

// loop over a list of files & print out the matching rules
$files = array("1.html","2.html","3.html");
foreach ($files as $file) {
	$crs->loadHTML($file);
	$results = $crs->saveRules();
	print "Results for ".$file.":\n";
	print $results;
	print "\n";
}
