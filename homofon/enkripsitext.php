<?php
$tabel = array("A"=>array("BU","CP","AV","AH","BT","BS","CQ"),
"B"=>array("AT"),
"C"=>array("DL","BK","AU"),
"D"=>array("BV", "DY", "DM", "AI"),
"E"=>array("DK", "CO", "AW", "BL","AA", "CR", "BM", "CS","AF", "AG", "BO","BN", "BE"),
"F"=>array("BW","CM","CN"),
"G"=>array("DN","BJ"),
"H"=>array("AS","CL","CK"),
"I"=>array("DJ","BI","AX","CJ","AB","BP","CU","CT"),
"J"=>array("BX"),
"K"=>array("DI"),
"L"=>array("AR", "BH", "CI", "AJ"),
"M"=>array("DH", "BG", "AY"),
"N"=>array("BY","DG","DF","CH","AC","BR","DU","DT"),
"O"=>array("DZ","BF","DX","AK","CG","BQ","DR"),
"P"=>array("BZ", "DE", "AZ"),
"Q"=>array("DD"),
"R"=>array("AQ","DC","DQ","AL","CE","CF","CV","DS"),
"S"=>array("AP","AN","AO","CD","DW","DV"),
"T"=>array("CB","DB","DP","CC","AD","CY","CW","CX","AE"),
"U"=>array("CA","AM","BA"),
"V"=>array("BB"),
"W"=>array("CZ"),
"X"=>array("BD"),
"Y"=>array("DO", "DA"),
"Z"=>array("BC"));
 
//============================================================================================== 
		$teks = $_GET['q'];
		$teks = str_ireplace(' ','',$teks);
		/** Mengubah semua huruf menjadi huruf kapital */
		$teks = strtoupper($teks);
		/** Ambil jumlah huruf untuk pencacah */
		$len = strlen($teks);
		/** Ambil peta plainteks ke chiperteks pada tabel */
		$chiper = '';

		for($i=0;$i<$len;$i++){
						/** Cek apakah huruf plainteks ada pada tabel ? */
						if(array_key_exists($teks[$i], $tabel)){
							/** Hitung jumlah kemungkinan chiperteks pada huruf*/
							$c = count($tabel[$teks[$i]]);
							/** Ambil salah satu chiperteks dari huruf plainteks */
							$chiper .= $tabel[$teks[$i]][rand(0,$c-1)];
						}
		}
		echo $chiper;
//==============================================================================================
		$chipertext = $_POST['p'];
		$len = strlen($chipertext);
		/** Jika chiperteks berjumlah genap, maka dapat dilakukan dekripsi pada chiperteks */
		if($len%2==0){
						/** plaintext awal bernilai null */
						$plaintext = '';
						$i=0;
						while($i<$len){
										foreach($tabel as $tab=>$tabs){
														/** jika setiap 2 chipertext ada nilai-nya dalam tabel, maka nilai tersebut diberikan ke variable $plaintext */
														if(in_array($chipertext[$i].$chipertext[$i+1], $tabel[$tab])){$plaintext .= $tab;}
										}
										$i+=2;
						}
		}
		/** Jika chiperteks tidak berjumlah genap berarti chiperteks tidak dapat di dekripsi */
		else{
						$plaintext = 'Periksa kembali Chipertext-nya';
		}
?>