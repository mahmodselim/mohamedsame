<?php
/*
  unlink(filename,context)
  
  rmdir(directory )

  //rmdir('mahmoud');

*/


  $file = 'mah.txt';
  if (file_exists($file) && is_writeable($file)) 
  {

  	unlink($file);

  } else {


  	  if (file_exists($file)) {

  	  	echo 'Sorry The File Is Not Writable . I Will Change The Permission NOW please Reload To Remove';
  	  	chmod($file, 0755);
  	  }
  }  

