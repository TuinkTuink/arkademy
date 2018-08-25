<?php

function fibo($kolom, $baris)
{
	$poi = 0;
	$kuma = 0;
	$nya;
	for($i = 0; $i<$baris; $i++)
	{
		for($j = 0; $j<$kolom; $j++)
		{
			$nya = $poi + $kuma;
			echo $nya.", ";
			if($poi == 0 && $kuma == 0)
			{
				$poi ++;
			}
			else
			{
				$poi = $kuma;
				$kuma = $nya;
			}
		}
		echo "<br>";
	}
}

fibo(4,3);
?>