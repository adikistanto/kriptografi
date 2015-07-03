<html>
<head>
<script type="text/javascript">
function enkripsi(str){
		if (str.length==0)
		{
			document.getElementById("txtHint").innerHTML="";
			return;
		}
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			}
		}

		xmlhttp.open("GET","enkripsitext.php?q="+str,true);
		xmlhttp.send();
	};
//==========================================================
function dekripsi(strg)
{
	if (strg.length==0)
	  {
	  document.getElementById("txt").innerHTML="";
	  return;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("txt").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","enkripsitekt.php?p="+strg,true);
	xmlhttp.send();
}
</script>
</head>
<body>

<p><b>Masukkan Teks Yang akan di enkripsi:</b></p>
	<form>
	First name: <input type="text" onkeyup="enkripsi(this.value)" size="20" />
	</form>
	<p>Hasil Dekripsi (Plainteks) : <span id="txtHint"></span></p>
<p><b>Masukkan Teks Yang akan di Dekripsi:</b></p>
	<form>
	First name: <input type="text"  onkeyup="dekripsi(this.value)" size="20" />
	</form>
	<p>Hasil Dekripsi (Plainteks) : <span id="txt"></span></p>
</body> 
</html>
