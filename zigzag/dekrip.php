<?php 
	$chipori= 'srbaeaagekhmnr';//ambil plaintex
	$chiper = str_ireplace(' ','',$chipori);
	$chip1='';
	$chip2='';
	$chip3='';//temporary baris
	$plaintext='';
	$plain='';
	$panjang = strlen($chiper);
	$position1=0;
	$position2=1;
	$position3=2;
	$pos1=0;
	$pos2=1;
	$pos3=2;
	$jml1= 0;
	$jml2= 0;
	$jml3= 0;
	$i = 0;
	$j = 0;
	
	// menghitung jumlah karakter tiap baris
	for ($i= 0 ; $i < $panjang; $i++){
		if($i==$position1){
			
			$jml1 = $jml1 + 1;
			$position1= $position1 + 4;
		}
		
		if($i==$position2){
			$jml2 = $jml2 + 1;
			$position2= $position2 + 2;
		}
		if($i==$position3){
			$jml3 = $jml3 + 1;
			$position3= $position3 + 4;
		}
	
	}
	// meningisialisasi tiap baris / parsing per-baris
	for ($j= 0 ; $j < $panjang; $j++){
		if($j < $jml1){
			$chip1 .= $chiper[$j];
		}
		if($j < $jml1 + $jml2 && $j >= $jml1){
			$chip2 .= $chiper[$j];
		}
		if($j < $jml1 + $jml2 + $jml3 && $j >= $jml1 + $jml2){
			$chip3 .= $chiper[$j];
		}
	
	}
	
	// mengurutkan plaintek mengambil dari tiap parse 
	$l = 0;
	$m = 0;
	$n = 0;
	$o = 0;
	for ($l= 0 ; $l < $panjang; $l++){
		if($l== $pos1){
			$plain .= $chip1[$m];
			$m = $m + 1;
			$pos1 = $pos1 + 4;
		}
		if($l== $pos2){
			$plain .= $chip2[$n];
			$n = $n + 1;
			$pos2 = $pos2 + 2;
		}
		if($l== $pos3){
			$plain .= $chip3[$o];
			$o = $o + 1;
			$pos3 = $pos3 + 4;
		}
	
	}	
	echo $plain;
	
	
?>