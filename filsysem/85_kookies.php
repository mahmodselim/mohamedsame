<?php
 
 /*
      setcookie(name, value, explier, path, domain, secure, httponly)
      Name: Name Of The Cookie
      Value: Content Of The Cookie
      Expire: Expiration Date

 */
       setcookie("twiter", "facebook", time() + (86400 * 10), "/", "localhost", TRUE, TRUE); // 1 Day
      echo "</pre>";
      print_r($_COOKIE);
      echo "</pre>";
?>  