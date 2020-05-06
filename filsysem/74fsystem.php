<?php

/*

fopen(filename, mode, include_path, context )
Modes:
r: Read Only starting From Beginnig  Of The File [File Must Be Exist]

r+: Read & Write starting From Beginnig  Of The File [File Must Be Exist]
w: Write Only [Open & Clear The Content] + [Create The File If Not Exist]
w+: Write & Read w: Write Only [Open & Clear The Content] + [Create The File If Not Exist]
a: Write Only [Open & Write To The End Of File] [Create The File If Not Exist] 
a++: Write & read [Open & Write To The End Of File] [Create The File If Not Exist]
x: Write Only [Create A New File ] + [File Must Not Be Exist or Give Error]
x++: Write & Read Write Only [Create A New File ] + [File Must Not Be Exist or Give Error] 
   

   Handle Line End:
   Unix: \n
   Windows: \r\n
   Mac: \R

*/

$fileHandle = fopen('mod.txt', 'x+'); 