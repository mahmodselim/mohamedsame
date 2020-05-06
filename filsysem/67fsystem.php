<?php
/*
[1]Chech if the Directory Is [Exists Or No
[2] Make The Directory
[3] Assign This Directory To Variable
[4] Create A File Inside This Directory
[5] Assign This File To Variable 
[6] change Mode Of This File To Be read only 
[7] Check If This File writable
[8] Chsnge Mode Of This And Make it Writable
[9] Include This File
*/
If (file_exists(__DIR__ . '/PHP')) {

	echo 'Sorry This Directory Is Exists';
} else {
	mkdir(__DIR__  . '/PHP');
    echo 'Create it';
	   }

	$directory = __DIR__ . '/php/';
	//echo $Directory;
  file_put_contents($directory . 'text.php', "hello");

	   $file = $directory . 'text.php';
	   chmod($file, 0444);
  
     	if(is_writeable($file)) {
 		file_put_contents($fiel,"file is writable");
	} else {

		chmod($file, 0755);
        file_put_contents($file, "<?php echo'congratulation The Training Is Done';");
	}


	Include $file ;  