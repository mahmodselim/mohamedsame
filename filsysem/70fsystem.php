<?php

/*
     copy (old file, new file);

     if(!copy('mah.txt', 'mah_new.txt')) {


   echo "sorry file not copied";
} else {

	echo "file Has Been Copied";
} */

/*  
    rename (old file, newname, context);
*/

rename('mah.txt', __DIR__  . '/PHP/file.txt');

