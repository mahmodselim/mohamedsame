<?php
/*
   file_get_contents(path, context, offset, max_lengh)

*/
$name =  file_get_contents('read.txt', false, NULL, 6, 10);


file_put_contents('write.txt', $name);    