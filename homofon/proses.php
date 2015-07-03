<?php
$tabel = array(
		"A"=>array("BU","CP","AV","AH","BT","BS","CQ"),
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
		"Z"=>array("BC")
);
// proses enkripsi
	$teks = $_POST['plain'];
			$teks = str_ireplace(' ','',$teks);// menghapus spasi
			$teks = strtoupper($teks);//mengubah menjadi huruf kapital
			$panjang = strlen($teks); // menghitung jumlah karakter
			/** Ambil peta plainteks ke chiperteks pada tabel */
			$chiper = '';

			for($i=0;$i<$panjang;$i++){
							/** Cek apakah huruf plainteks ada pada tabel ? */
							if(array_key_exists($teks[$i], $tabel)){
								/** Hitung jumlah kemungkinan chiperteks pada huruf*/
								$c = count($tabel[$teks[$i]]);
								/** Ambil salah satu chiperteks dari huruf plainteks */
								$chiper .= $tabel[$teks[$i]][rand(0,$c-1)];
							}
			}
			
// proses dekripsi
		$chipertext = $_POST['chiper'];
		$chipertext = strtoupper($chipertext);//mengubah menjadi huruf kapital
		$panjang = strlen($chipertext); //menghitung jumlah karakter
		if($panjang%2==0){ // jika jumlah karakter genap genap akan didekripsi
						$plaintext = ''; // nilai awal
						$i=0;
						while($i<$panjang){ // perulangan sepanjang karakter
										foreach($tabel as $tab=>$tabs){
														/** jika setiap 2 chipertext ada nilai-nya dalam tabel, maka nilai tersebut diberikan ke variable $plaintext */
														if(in_array($chipertext[$i].$chipertext[$i+1], $tabel[$tab])){$plaintext .= $tab;}
										}
										$i+=2;
						}
		}
		// jika jumlah karakter ganjil
		else{
						$plaintext = 'tidak ditemukan terjemahan';
		}
?>
<html>
<head>
	<link href="style.css" rel="stylesheet">
	<title>KRIPTOGRAFI</title>
</head>
<body>
		<?php
		$tabel = array(
				"A"=>array("BU","CP","AV","AH","BT","BS","CQ"),
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
				"Z"=>array("BC")
		);
		// proses enkripsi
			$teks = $_POST['plain'];
					$teks = str_ireplace(' ','',$teks);// menghapus spasi
					$teks = strtoupper($teks);//mengubah menjadi huruf kapital
					$panjang = strlen($teks); // menghitung jumlah karakter
					/** Ambil peta plainteks ke chiperteks pada tabel */
					$chiper = '';

					for($i=0;$i<$panjang;$i++){
									/** Cek apakah huruf plainteks ada pada tabel ? */
									if(array_key_exists($teks[$i], $tabel)){
										/** Hitung jumlah kemungkinan chiperteks pada huruf*/
										$c = count($tabel[$teks[$i]]);
										/** Ambil salah satu chiperteks dari huruf plainteks */
										$chiper .= $tabel[$teks[$i]][rand(0,$c-1)];
									}
					}
					
		// proses dekripsi
				$chipertext = $_POST['chiper'];
				$chipertext = strtoupper($chipertext);//mengubah menjadi huruf kapital
				$panjang = strlen($chipertext); //menghitung jumlah karakter
				if($panjang%2==0){ // jika jumlah karakter genap genap akan didekripsi
								$plaintext = ''; // nilai awal
								$i=0;
								while($i<$panjang){ // perulangan sepanjang karakter
												foreach($tabel as $tab=>$tabs){
																/** jika setiap 2 chipertext ada nilai-nya dalam tabel, maka nilai tersebut diberikan ke variable $plaintext */
																if(in_array($chipertext[$i].$chipertext[$i+1], $tabel[$tab])){$plaintext .= $tab;}
												}
												$i+=2;
								}
				}
				// jika jumlah karakter ganjil
				else{
								$plaintext = 'tidak ditemukan terjemahan';
				}
		?>
	<div id="wrapper">
		<div id="judul">KRIPTOGRAFI</div>
		<div id="tabel">
			<table class="table">
				<tr class="header_table"><td width="100px">HURUF</td><td width="700px"colspan=13>PILIHAN CHIPERTEXT</td><tr>
				<tr><td>A</td><td>BU</td width="40px"><td>CP</td ><td width="40px">AV</td><td width="40px">AH</td><td width="40px">BT</td><td width="40px"> BS</td><td width="40px">CQ</td><tr>
				<tr><td>B</td><td>AT</td><tr>
				<tr><td>C</td><td>DL</td><td>BK</td><td>AU</td><tr>
				<tr><td>D</td><td>BV</td><td>DY</td><td>DM</td><td>AI</td><tr>
				<tr><td>E</td><td>DK</td><td>CO</td><td>AW</td><td>BL</td><td>AA</td><td>CR</td><td>BM</td><td>CS</td><td>AF</td><td>AG</td><td>BO</td><td>BN</td><td>BE</td><tr>
				<tr><td>F</td><td>BW</td><td>CN</td><td>CM</td><tr>
				<tr><td>G</td><td>DN</td><td>BJ</td><tr>
				<tr><td>H</td><td>AS</td><td>CL</td><td>CK</td><tr>
				<tr><td>I</td><td>DJ</td><td>BI</td><td>AX</td><td>CJ</td><td>AB</td><td>BP</td><td>CU</td><td>CT</td><tr>
				<tr><td>J</td><td>BX</td><tr>
				<tr><td>K</td><td>DI</td><tr>
				<tr><td>L</td><td>AR</td><td>BH</td><td>CI</td><td>AJ</td><tr>
				<tr><td>M</td><td>DH</td><td>BG</td><td>AY</td><tr>
				<tr><td>N</td><td>BY</td><td>DG</td><td>DF</td><td>CH</td><td>AC</td><td>BR</td><td>DU</td><td>DT</td><tr>
				<tr><td>O</td><td>DZ</td><td>BF</td><td>DX</td><td>AK</td><td>CG</td><td>BQ</td><td>DR</td><tr>
				<tr><td>P</td><td>BZ</td><td>DE</td><td>AZ</td><tr>
				<tr><td>Q</td><td>DD</td><tr>
				<tr><td>R</td><td>AQ</td><td>DC</td><td>DQ</td><td>AL</td><td>CE</td><td>CF</td><td>CV</td><td>DS</td><tr>
				<tr><td>S</td><td>AP</td><td>AN</td><td>AO</td><td>CD</td><td>DW</td><td>DV</td><tr>
				<tr><td>T</td><td>CB</td><td>DB</td><td>DP</td><td>CC</td><td>AD</td><td>CY</td><td>CW</td><td>CX</td><td>AE</td><tr>
				<tr><td>U</td><td>CA</td><td>AM</td><td>BA</td><tr>
				<tr><td>V</td><td>BB</td><tr>
				<tr><td>W</td><td>CZ</td><tr>
				<tr><td>X</td><td>BD</td><tr>
				<tr><td>Y</td><td>DO</td><td>DA</td><tr>
				<tr><td>Z</td><td>BC</td><tr>
			</table>
		</div>
		<div id="enkrip_box">
			<form action="dekripproses.php" method=POST>
			<table>
				<tr>
					<td width="400px"><p><b>Masukkan Teks Yang akan di Enkripsi:</b></p>
					<textarea type="text" name="plain" size="20" /><?php echo $teks;?></textarea>
					<p>Chipertext : <br><span><?php echo $chiper;?></span></p></td>
			
					<td><p><b>Masukkan Teks Yang akan di Dekripsi:</b></p>
					<textarea type="text" name="chiper" onkeyup="dekripsi(this.value)"size="20" ><?php echo $chipertext;?></textarea>
					<p>Plainteks : <br><span><?php echo $plaintext;?></span></p></td>
				</tr>
			</table>
				<a href="kripto.html">reset</a>
			</form>	
		</div>
	</div>
</body>
</html>
