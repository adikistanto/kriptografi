<html>
	<head>
		<script type="text/javascript">
		</script>
		<title>kriptografi</title>
	</head>
<?php
$tabel = 
array( 	"A"=>array("BU","CP","AV","AH","BT","BS","CQ"),
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

if (isset($_POST['submit'])) {
			$chipertext = $_POST['chiper'];
			//$plaintext = $_POST['plainteks'];
			if(!empty($chipertext)){
				$len = strlen($chipertext);
				/** Jika chiperteks berjumlah genap, maka dapat dilakukan dekripsi pada chiperteks */
				if($len%2==0){
								/** plaintext awal bernilai null */
								$plaintext = '';
								$i=0;
								while($i<$len){
												foreach($tabel as $tab=>$tabs){
																/** jika setiap 2 chipertext ada nilai-nya dalam tabel, maka nilai tersebut diberikan ke variable $plaintext */
																if(in_array($chipertext[$i].$chipertext[$i+1], $tabel[$tab])){$plaintext .= $tab;}else{ $plaintext = 'Tidak ditemukan';}
												}
												$i+=2;
								}
				}
				/** Jika chiperteks tidak berjumlah genap berarti chiperteks tidak dapat di dekripsi */
				else{
								$plaintext = 'Periksa kembali Chipertext-nya';
				}
		}
		else{
			$plaintext = $_POST['plain'];
			$plaintext = str_ireplace(' ','',$plaintext);
			/** Mengubah semua huruf menjadi huruf kapital */
			$plaintext = strtoupper($plaintext);
			/** Ambil jumlah huruf untuk pencacah */
			$len = strlen($plaintext);
			/** Ambil peta plainteks ke chiperteks pada tabel */
			$chipertext = '';

			for($i=0;$i<$len;$i++){
							/** Cek apakah huruf plainteks ada pada tabel ? */
							if(array_key_exists($plaintext[$i], $tabel)){
								/** Hitung jumlah kemungkinan chiperteks pada huruf*/
								$c = count($tabel[$plaintext[$i]]);
								/** Ambil salah satu chiperteks dari huruf plainteks */
								$chipertext .= $tabel[$plaintext[$i]][rand(0,$c-1)];
							}
			}
		}
	}
echo $plaintext; 
?>
<body>
	<h2>KRIPTOGRAFER</h2>
	<table border="1px">
	<form method="POST" action="dekripsiteks.php">
		<tr><td>Palinteks</td><td>operasi</td><td>Chipper</td></tr>
		<tr height="300px">
			<td width="300px"><textarea type="text" name="plain" style="width:100%;height:100%;vertical-align:top-text"></textarea></td>
			<td><input type="radio" name="aksi" value="enkrip"> Enkrip<br>
				<input type="radio" name="aksi" value="dekrip"> Dekrip <br>
				<input type="submit" value="submit">
				<a href="indexnew.php">reset</a>
			</td>
			<td width="300px"><textarea name="chiper" type="text" style="width:100%;height:100%;vertical-align:top-text"></textarea></td>
		</tr>
	</form>
	</table>
</body> 
</html>
