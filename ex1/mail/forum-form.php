<?php


  $status = $_GET["status"];
  $date = now();

  mysql_connect("localhost", "root", "mypass");
  mysql_select_db("news");

  mysql_query("insert into status values('$id', '$status', '$date')");


  echo "Status Posted. To see the post, you need to click FORUM menu again.";

?>