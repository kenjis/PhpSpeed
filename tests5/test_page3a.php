<?php

function test_page3a($base) {
    $t = $base;
    test_start(__FUNCTION__);

$path = basename(dirname(__FILE__));
for ( $counter = 0; $counter <= $t; $counter += 1) {
$counter;
file("$path/index3.php");
}

    return test_end(__FUNCTION__);
}

function test_page3a_enabled() {
    return TRUE;
}

?>
