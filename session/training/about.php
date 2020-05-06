<?php

session_start();


echo 'Hallo ' . $_SESSION['name'] . ' How Are You ?';

include 'c.php';

echo '<a href="90counter.php">Home</a> ';