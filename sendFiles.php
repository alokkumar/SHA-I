<html>

<head bgcolor="white">

<style type="text/css"><!--
body {

	margin-left: 50px;

	margin-bottom: 50px;

	margin-right: 200px;

	margin-top: 50px;

	font-family: courier, fixed, monospace;

	font-size: 15px;

	color: #363636;

}



h2 {

	font-weight: bold;

}



a{

	text-decoration:none;

	color:black;

}	
.display{
	background-color: white;
	padding: 10px;

}
--></style>
<title>Cryptography || SHA-1</title>
<script src="js/func.js"></script>
<script src="js/sha.js"></script>
<script src="js/jQuery.js"></script>
</head>
<body bgcolor=ADADAD onload="checkFileAPI();">

<?php
if(isset($_POST['Message'])){
$file = fopen("message.txt","w");
$file1 = fopen("hashvalue.txt","w");
fputs($file,trim($_POST['Message']));
fputs($file1,$_POST['hashvalue']);
//fputs($file,$_POST['hashvalue']);
fclose($file);
fclose($file1);
echo "<h3>Your Message:</h3>";
echo "<p>".$_POST['Message']."</p>";
echo "<h3>Hashvalue:</h3>";
echo "<p>".$_POST['hashvalue']."</p>";
echo "<br/><br/><a href='sendFiles.php'>Click Here</a> to send more files.<br/><br/>";
}
else{
?>
<script type="text/javascript">
/*function readTheFile(file){
var f = file.files[0];
$.ajax( 
               {
                   url: 'readFile.php',
                   type: 'GET',
				   data: 'fileLoc='+f,
                   success: function(output) 
                   {
                       document.getElementById("content").innerHTML = output ;
					   

                   }
                }
            ); 
    }*/	
	
</script>
<H2>SHA-1</H2>

<p> Enter a message in the text box below. </p>
<input type="file" id="files" />
<script type="text/javascript">
var mssg;

function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object
    for (var i = 0, f; f = files[i]; i++) {
      var reader = new FileReader();
      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          document.getElementById("content").innerHTML = e.target.result;
		  mssg = e.target.result;
        };
      })(f);
      reader.readAsText(f);
    }
  }
  document.getElementById('files').addEventListener('change', handleFileSelect, false);
  
  </script>
<form name =  "SHA" method="post" action="">	
	<textarea rows = "10" name = "Message" cols = "100" wrap = physical id="content" readonly></textarea>
	<br>
	<input type = "button" value = "Generate Hash" onClick = "SHA.hashvalue.value = Sha1.hash(mssg);" ><br>
	<textarea rows = "10" name ="hashvalue" cols = "100" wrap = physical readonly></textarea>
	<br>
	<input type="submit" value="Sendmessage"> &nbsp;&nbsp;&nbsp;<input type= "reset" value= "Clear">
</form>
<?php
}
?>

<table width="758" border="0" cellspacing="5" cellpadding="5">
  <tr> 
    <td> 
      <div align="center"> 
        <hr align="center" width="25%">
        <p><font face="Georgia, Times New Roman, Times, serif"><b><a href="../index.html">Project 
          Info</a> &#149; <a href="../links.html">Links</a> 
          &#149; <a href="../team.html">Our Team</a></b></font></p>
		  <p>Cryptography || SHA-I</p>
      </div>
    </td>
  </tr>
</table>
</body>
</html>

