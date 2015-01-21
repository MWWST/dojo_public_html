<?php
$newary =array();
for ($i=1;$i<210000;$i++){
	if ($i % 2 == 1 ) {
		
		$newary[] = $i;
	}
	
}
var_dump($newary);

?>