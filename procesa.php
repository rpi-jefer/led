<?php

	$dato = $_POST['dato']; // recibe el dato con POST

	if($dato){ // si dato es 1 ejecuta led_on.py

		exec('sudo python led_on.py');

	}else{

		exec('sudo python led_off.py');

	}

?>