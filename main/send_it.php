<?php

#send_it.php


if (strlen($_post["email-add"] > 3)) {
  mail ( 'info@hartaki.nyc' , 'contact from website', 'email was ' . $em);
}

// redirect
header("location: http://www.hartaki.nyc/index.php?q=done");

?>