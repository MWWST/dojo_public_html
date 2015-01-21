function randonum($array){

	for ($i=0;$i<=1;$i++){
		var random1 = (Math.floor(Math.random(0,10)));
		var random2 = (Math.floor(Math.random(0,10)));
		var result  = random1 * random2;
		
	}
	var output = random1 + "*" +  random2 + "=" result;
	alert(output)
}

var numbers = [0,1,2,3,4,5,6,7,8,9]	
randomnum($numbers);
	