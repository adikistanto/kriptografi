
<html>
<head>
<script type="text/javascript">
function dekripsi(str)
{
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
	xmlhttp.open("GET","dekripsiteks.php?p="+str,true);
	xmlhttp.send();
}
</script>
</head>
<body>
	<p><b>Masukkan Teks Yang akan di Dekripsi:</b></p>
	<form>
	First name: <input type="text" onkeyup="dekripsi(this.value)" size="20" />
	</form>
	<p>Hasil Dekripsi (Plainteks) : <span id="txtHint"></span></p>
</body>
</html>
