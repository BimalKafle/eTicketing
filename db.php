<?php

$connection = mysqli_connect("localhost",'root','','eticketing');

if(!$connection) {
	die("Unable to connect" . mysqli_error($connection));
}

?>