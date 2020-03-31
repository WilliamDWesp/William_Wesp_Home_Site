<?php
// the message
$msg = "Hello!";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("williamdwesp@gmail.com","Test",$msg);
?>