<?php
	function test()
	{
		global $a;
		$a = 80;
		$a = 100;
	}
	
	$a = 50;
	$a = 25;
	test();
	echo $a;