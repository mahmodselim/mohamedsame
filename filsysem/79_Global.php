<?php 

/*

super global
*/

$GLOBALS['name'] = "mahmoud";  // in Global scope
function testFunc() {

	echo "Echo From Indide The function" . $GLOBALS['name'] . '"<br>"';
} testFunc();
echo "Echo From Outside The function" . $GLOBALS['name'] ."<br>";