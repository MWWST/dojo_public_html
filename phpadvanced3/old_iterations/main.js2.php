<?php
header("content-type: text/javascript");

echo "var array = [0,1,2,3,4,5,6,7,8,9];
 		for (var i=0;i<array.length;i++){
 			var random1 = Math.floor(Math.random()* array[i]);
 			var random2 = Math.floor(Math.random() * array[i]);
 			var result = random1 * random2;
 		}
 		alert(result);"
?>
