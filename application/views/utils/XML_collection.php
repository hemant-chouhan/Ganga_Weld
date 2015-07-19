<?php

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<results>';

for ($i=0; $i <sizeof($results); $i++) { 
	$item = $results[$i];
	echo '<item>';
	foreach ($item as $field_name => $value) {
		echo '<'.$field_name.'>';
		echo utf8_encode($value);
		echo '</'.$field_name.'>';
	}
	echo '</item>';
	
}
echo '</results>';

?>