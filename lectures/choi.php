<?php 



function choi($n){
	echo $n."<br/>";
	if ($n==0) {
		return 0;

	}
	elseif ($n==1) {
		return 5;
	}
	elseif ($n==2) {
		return 3;
	}
	else {
		return choi($n-3)+choi($n-2)-choi($n-1);
	}
}


echo choi(10)

?>
