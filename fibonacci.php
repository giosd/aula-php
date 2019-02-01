<?php

$vetor = array(0,1);
echo "$vetor[0],";
echo "$vetor[1],";

	for($i=2;$i <=50;$i++){
		$vetor[$i] = $vetor[$i-1]+$vetor[$i-2];
		echo "$vetor[$i],";

}
//php -S 0.0.0.0: -t exemplo-site

?>
