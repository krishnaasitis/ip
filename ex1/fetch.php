<?php
		include_once('db.php');
		
		$sql = "SELECT * FROM articles order by date DESC";
		$res = mysql_query($sql);
		$result = array();
		
		while( $row = mysql_fetch_array($res) )
			array_push($result, array( 'id' => $row[0],
			                          'title' => $row[1], 
									  'date' => $row[2],
									  'description' => $row[3],
									  
									  'image' => $row[4] ));
									  
									  
		echo json_encode(array("result" => $result));
?>