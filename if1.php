<?php
	echo $score = 37;
	if ( $score >= 60 ) {
		if ( $score >= 80 )
			echo "优秀";
		echo "及格";
	} else {
		if ( $score >= 40 )
			echo "不及格";
	}
	echo "差";
?>