<?php

function JumlahJabat($jumlahorang)
{
	$jumlahorang --;
	$salaman = 0;
	$var;
	for($i = 0; $i <= $jumlahorang; $i++)
	{
		if($i == $jumlahorang)
		{
			$var = $i;
			$salaman = $var+$salaman;
			$i = 0;
			$jumlahorang --;
		}
	}
	echo "Jumlah jabat: ".$salaman;
}

JumlahJabat(6);
?>