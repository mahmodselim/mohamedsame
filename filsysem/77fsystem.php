<?php


/*
fopen(filename, mode, include_path, context)
fread (handle, length)
fwrite(handle, string, length)
fseek(handle, offfset, whence)=> SEEK_SET, SEEK_END, SEEK_CUR
Modws: 
 Modes:
r: Read Only starting From Beginnig  Of The File [File Must Be Exist]

r+: Read & Write starting From Beginnig  Of The File [File Must Be Exist]
w: Write Only [Open & Clear The Content] + [Create The File If Not Exist]
w+: Write & Read w: Write Only [Open & Clear The Content] + [Create The File If Not Exist]
a: Write Only [Open & Write To The End Of File] [Create The File If Not Exist] 
a++: Write & read [Open & Write To The End Of File] [Create The File If Not Exist]
x: Write Only [Create A New File ] + [File Must Not Be Exist or Give Error]
x++: Write & Read Write Only [Create A New File ] + [File Must Not Be Exist or Give Error] 
  */

  $fileHandle = fopen('mod.txt', 'r+');

  fseek($fileHandle, 2, SEEK_SET);  
  $write = fwrite($fileHandle, 'a'); 

    fseek($fileHandle, 8 , SEEK_SET); 
      $write = fwrite($fileHandle, 'z'); 


 