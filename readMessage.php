
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
<script src ="js/jQuery.js"></script>

</head>

<body bgcolor=ADADAD >

<H2>SHA-1</H2>
<?php
//$file = file("message.txt");
//$messagefile = fopen("message.txt","r");
//$file1 = fopen("hashvalue.txt","r");
//$msg = '';
//while(!feof($messagefile)) {
// $msg .= fgets($messagefile);
//}
//echo $msg;
?>

<p> Your message here: </p>



	<div id="message" class="display"><?php //for($i = 0; $i < count($file) ; $i++){ echo $file[$i];}
	
	echo file_get_contents("message.txt");?></div>

	<br>
	
	<p> Hash value received from the message:

	<div id="hashvalue" class="display"><?php echo file_get_contents("hashvalue.txt"); ?></div>
	
	<br/>
	
	<p> Hash value generated : </p>
	
	<div id="hashgenerated" class="display"><?php echo sha1(file_get_contents("message.txt")); ?></div>
	
	<br/>
	
	<h3>Result:</h3>
	
	<div id="result" class="display"><?php if(sha1(file_get_contents("message.txt")) == file_get_contents("hashvalue.txt")) echo "Hash Matched"; else echo "Hash Mismatch";?></div>

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

