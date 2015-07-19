<?php

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header('Content-type: application/json');


function get_last_key(&$array)
{
	end($array);
	return key($array);
}

$size = sizeof($results);
echo '[';

for ($i=0; $i < $size ; $i++) { 
	$item = $results[$i];
	echo '{';
	$last_field = get_last_key($item);
	foreach ($item as $field_name => $value) {
		echo '"$'.$field_name.'":'.json_encode($value);
		if ($field_name != $last_field) {
			echo ',';}
	}
	echo '}';
	if ($i < $size - 1) {echo ',';}
	
}
echo ']';

?>