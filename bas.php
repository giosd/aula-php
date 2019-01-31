


<!DOCTYPE html>
<html>
  <head>
    <title>Título da página</title>
   
  </head>
  <body>

  <?php
bas(10.0,20.1,5.1);
	function bas( $a, $b, $c ){

	$tri = pow ( $b , 2 ) - (4*$a*$c); 

	if($tri < 0){  

echo "delta menor ou zero".PHP_EOL;

}else{

	
                $x1 = (($b*-1)+ sqrt($tri))/(2*$a);
		$x2 = (($b*-1)- sqrt($tri))/(2*$a);
		
		echo number_format($x1,5).PHP_EOL;
		echo number_format($x2,5).PHP_EOL;
}

	


}
?>
<form>
<input type="text" id="name" name="name" required
       minlength="4" maxlength="8" size="10">


</form>
  </body>
</html>
