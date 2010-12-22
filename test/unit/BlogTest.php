<?php
	require_once dirname(__FILE__).'/../bootstrap/unit.php';
 
	$t = new lime_test(1);
	$t->pass('Test para Blog.');
	$t->is(BlogQuery::getEstadisticas(1));
?>
