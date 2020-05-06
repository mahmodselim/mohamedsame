<?php
 /*
  echo dirname(__FILE__);

  $file = 'mah.txt';

  exists  *** the dirctory in found
  is writabe *** the fild Writable. 
 

 $file = 'C:\xampp\htdocs\filsysem\mah.txt';

 if (file_exists($file)) {
    echo 'goood The File [ ' . $file . ' ] is found';
    file_put_contents($file, 'Add with PHP Filr PUt contents');

}
else {

    echo 'sory the file [ ' . $file  . ' ] is not Found But I Created it With PHP';
    file_put_contents($file, 'Created By PHP');

} 
*/
$file = 'C:\xampp\htdocs\filsysem\mah.txt';

 if (is_writable($file)) {
    echo 'goood The File [ ' . $file . ' ] is writable';
    file_put_contents($file, 'The File Is Writable So I Can\'t Add Content To it  ');

}
else {

    echo 'sory the file [ ' . $file  . ' ] is not Found But I Created it With PHP';
    file_put_contents($file, 'Created By PHP');

} 
