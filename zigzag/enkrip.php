<?php 
	$teksori= 'semarang berkah';//ambil plaintex
	$teks = str_ireplace(' ','',$teksori);
	$teks1='';
	$teks2='';
	$teks3='';//temporary baris
	$chiper='';
	$panjang = strlen($teks);
	$posit1= 0;
	$posit2= 1;
	$posit3= 2;
	$i = 0;
	for ($i= 0 ; $i < $panjang; $i++){
		if($i==$posit1){
			
			$teks1 .= $teks[$posit1];
			$posit1= $posit1 + 4;

		}
		
		if($i==$position2){
			$teks2 .= $teks[$posit2];
			$posit2= $posit2 + 2;
		}
		if($i==$position3){
			$teks3  .= $teks[$posit3];
			$posit3= $posit3 + 4;
		}
	
	}
	
	$chiper = $teks1.$teks2.$teks3;
	
	echo $chiper;
	
	
?>