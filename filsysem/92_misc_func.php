 <?php

 /*

 sleep (seconds);
 usleep(Microsecond);
 time_sleep_until(Time()+ 5)

 
 $name = 'osama';
 echo $name . '<br>';
 sleep(5);

 echo 'sorry i forgert to say hi' ; */
function checkFile() {

if (file_exists('mody.txt')) {

	echo 'Good file Is Found';

} else {

	sleep(5);
	//time_sleep_until(time() + 5);


	checkFile();
	# code...
      }

}
echo checkFile();
