<?php

	$name = $_GET["name"];
	$comment = $_GET["comment"];

	$date = date('Y-m-d H:i:s', strtotime('+2 hour'));

	mysql_connect("localhost", "root", "mypass");
	mysql_select_db("news");

	mysql_query("insert into comments values('$id', '$date', '$name','$comment')");

	echo "Thank Yoou for your message. I will get back to you asap.";

?>