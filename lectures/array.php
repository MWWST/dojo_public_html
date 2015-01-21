<?php

// request array('CA' =>'San Jose','MI' =>'Grand Rapids','IL' =>'Chicago',)
	foreach ($request as $result)
		// { 	echo $
		//	  }

$states = array(
				array('CA' => array('San Jose' => array('Min' => '54','Max' =>'70'),'Los Angeles' => array('Min' =>'60','Max'=>'72'))),
		  		array('MI' => array('Grand Rapids' => array('Min' => '-2','Max' =>'5'),'Ann Arbor' => array('Min' =>'10','Max'=>'11'))),
		  		array('NY'=> array('NYC' => array('Min' => '15','Max' =>'22'),'Rochester' => array('Min' =>'10','Max'=>'22'))),
				);


foreach($states as $info) {
	foreach($info as $state => $cities) {
		foreach($cities as $city => $temperatures)
		{
			$holder = ""; 
			foreach($temperatures as $range=> $temperature){
				// $holder = $temperature;
				$holder .= $range . ": " . $temperature. " ";
				// echo $state." ".$city." ".$range." ".$holder."<br/>";
			}
			echo $city.", ".$state." | ".$holder."<br/>";
		}

	}
}


?>
