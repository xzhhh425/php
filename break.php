<?php
//break
	for ( $ji = 0; $ji <= 100; $ji++ ) {
		$tu = 100 - $ji;
		if ( $ji * 2 + $tu * 4 == 290 ) {
			echo $ji . "<br>";
			echo $tu;
		}
	}
?>