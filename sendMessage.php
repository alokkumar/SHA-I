
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

 





--></style>

<title>Cryptography || SHA-1</title>
<script src="js/func.js"></script>
<script src="js/sha.js"></script>
<script src ="js/jQuery.js"></script>

</head>

<body bgcolor=ADADAD >

<H2>SHA-1</H2>

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
echo "<br/><br/><a href='sendMessage.php'>Click Here</a> to send again<br/><br/>";

}
else{

?>

<p> Enter a message in the text box below. </p>



<form name =  "SHA" method="post" action="">



	<textarea rows = "10" name = "Message" cols = "100" wrap = physical  ></textarea>





	<br>



	<input type = "button" value = "Generate Hash" onClick = "SHA.hashvalue.value = Sha1.hash(SHA.Message.value);" ><br>

	

	
	



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

