<?php
$numero = 4;
	for($i=1;$i <=100;$i++){
	
		$result = $i%$numero;

		if($result === 0){

		echo "$i pin".PHP_EOL;
}else{
		echo "$i".PHP_EOL;

}
}
?>
