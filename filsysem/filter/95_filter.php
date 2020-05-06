<?php


/*  
    User input
    Cookies
    Web Service
    Server Query
    Database Query Result

*/

    foreach (filter_list() as $filter) {


    	echo $filter . '<br>';
    }


    ?>


    <form action="check.php" method="POST">
        <input type="text" name="test">
        <input type="submit" value="send">
        </form>