<?php
setcookie("Mahmoud", "Test", time() + 3600, "/");

if (count($_COOKIE) > 0) {

	echo "Good The Cookies Are Enabled For This Website";

} else {

	echo "Sorry The cookies Are Not Enabled please Enable It For Best Browsing";
}