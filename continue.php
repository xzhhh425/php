<?php
	
	$sum = 0;
	$i = 0;
	
	while ( $i <= 10 ) {
		$i++;
		if ( $i % 2 == 0 )
			continue;
		$sum += $i;
	}
	echo $sum;
?>

<?php
	echo "10以内所的偶数之和用continue来解决：";
	$sum = 0;
	$i = 0;
	for ( ; $i <= 10; $i++ ) {
		if ( $i % 2 != 0 )
			continue;
		$sum += $i;
		
	}
	echo $sum;
?>