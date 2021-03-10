<?php

$connection = mysqli_connect("localhost:3307",'root','','eticketing');

if(!$connection) {
	die("Unable to connect" . mysqli_error($connection));
}

?>