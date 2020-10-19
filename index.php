<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>STEMMING</title>
</head>
<body>


	<head>
		<style>
			#form {
				margin: 100px auto;
				width: 600px;
			   height: 50px;
			}
			#form #logo {
				font-size: 35px;
				font-weight: bold;
				padding:20px 0px 20px 0px;
				text-align: center;
			}
			#form #name {
				font-size: 15px;
				font-weight: bold;
				padding:20px 0px 20px 0px;
				text-align: center;
			}

			#form #q {
				padding:10px;
				border:1px solid #555555;
			}
			<br>
			#form #a {
				padding:500px 0px 20px 0px;
				border:0px solid #555555;
			}
		</style>
	</head>
<body>

<style>
a, button,input[type=submit],input[type=reset] {
    font-family: sans-serif;
    font-size: 15px;
    background: #555555;
    color: white;
    border: white 3px solid;
    border-radius: 5px;
    padding: 12px 20px;
    margin-top: 10px;
}
a {
    text-decoration: none;
}
a:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover{
    opacity:0.9;
}
</style>



		<div id='wrapper'>			
			<div id='form'>
				<div id='logo'>
					CARI KEYWORD
				</div>
				<div id='form-input'>
					<form method="post" action="">
						<input type="text" id="kata" name="kata" style="width:70%" "height:30%" placeholder='Ketik Kata dasar...'
						value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
<input class="btnForm" type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?>
<table style="padding-top:15px" border="0">
    <tr>
<td><a href="upload.php">Upload</a></td>
<td><a href="query.php">Pencarian Dokumen</a></td>
</tr>
</table>
<BR>
<div id='wrapper'>			
			<div id='form'>
				<div id='name'>
				NAMA KELOMPOK<BR>
				<P>IDA BAGUS INDRA P.P (17.01.53.0090) <br> USWATUN UTAMI (17.01.53.0097) <br> FAJAR FERDIAWAN (17.01.53.0100)</P>
				</div>
			</DIV>
			</DIV>
</body>



					</form>
				</div>
			</div>
		</div>

<script>
      var _validFileExtensions = ["pdf"];    
      function validate(file) {
	      if (file.type == "file") {
	          var sFileName = file.value;
	           if (sFileName.length > 0) {
	              var blnValid = false;
	              for (var j = 0; j < _validFileExtensions.length; j++) {
	                  var sCurExtension = _validFileExtensions[j];
	                  if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
	                      blnValid = true;
	                      break;
	                  }
	              }
	               
	              if (!blnValid) {
	                  alert("Maaf Hanya Boleh File yang Berextensi : " + _validFileExtensions.join(", "));
	                  file.value = "";
	                  return false;
	              }
	          }
	      }
	      return true;
	  }
  </script>





</body>
</html>
