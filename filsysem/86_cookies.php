<?php
//setcookie('Background', "$mainColor", time() - 3600, '/')

$mainColor = 'read'; // main Color

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$mainColor = $_POST['color']; // Get The Color From The From

	setcookie('Background', $mainColor, time() + 3600, '/');
}
if (isset($_COOKIE['Background'])) {

	$body = $_COOKIE['Background'];

} else {

	$body = $mainColor;
}


echo "<pre>";

 print_r($_COOKIE);

 echo "</pre>";

?>



<!DOCTYPE html>
<html>
   <head>
       <meta charset="UTF-8">
       <title>Modify Cookies</title>
    </head>

  </html>


  <body style="background-color: <?php echo $body;  ?>">
  	<form action="<?php  echo $_SERVER['PHP_SELF'];   ?>" method="POST">
  		  <input type="color" name="color">
  		  <input type="submit" value="Choose">

  	</form>

  </body>
 </html> 
