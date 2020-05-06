<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
  <input type="text" name="username" />
  <input type="submit" value ="send" />
</form>


<?php  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	echo $_REQUEST['username'];

} else {

	echo "you Can Browse This page Directly & you cant process Data By GET";
}

?>