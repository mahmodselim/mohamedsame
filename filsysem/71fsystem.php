<?php

/*
     pathinfo(path, options)

*/


     $links = pathinfo(__FILE__);

     echo $links['dirname'] . "<br>";
          echo $links['basename'] . "<br>";

          echo $links['extension'] . "<br>";
     echo $links['filename'] . "<br>";
     
     
  // if($links['extension'] === 'php') { }

