<?php

function test_page1a($base) {
	$t = $base;
	test_start(__FUNCTION__);

	$path = basename(dirname(__FILE__));

	for ( $counter = 0; $counter <= $t; $counter += 1) {
		$counter;
		file("$path/index.php");
	}
	return test_end(__FUNCTION__);
}

function test_page1a_enabled() {
	return TRUE;
}

?>
