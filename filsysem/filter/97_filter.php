<?php


$input = $_POST['test'];

$opt = array(


    'options' => array(
      'min_range' => 1,
      'max_range' => 999
                     )
);

if(filter_var($input, FILTER_VALIDATE_INT, $opt)  !== FALSE ) {

	echo 'Good The ' . $input . ' Must Be Between 1 - 999';
 } else {


 	echo 'The ' . $input . 'Must Be Between 1 - 999';
 }

