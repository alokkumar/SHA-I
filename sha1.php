
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

<meta name="keywords" content="cryptography tutorial, interactive learning,

cryptography animation, DES, security demonstration, buffer overflow

vulnerabilities, federal cyber service, NSF SFS, scholarship for service,

cyber security, information assurance education, cryptography, security

dimensions, security personnel, NSF security grant, security expertise,

aviation security education, interactive learning in security">

<meta name="description" content="Interactive learning module for computer

security concepts related to cryptography."></head>

<body bgcolor=ADADAD >

<H2>SHA-1</H2>

<p> Enter a message in the text box below. </p>



<form name =  "SHA">



	<textarea rows = "10" name = "Message" cols = "100" wrap = physical  >

	</textarea>





	<br>



	<input type = "button" value = "Convert" onClick = "Convert();" ><br>

	

	<p>Below is a bit level representation of your message.</p>



	<textarea rows = "10" name =Converted cols = "100" readonly wrap = physical  >

	</textarea>



	<br>

	

	<input type = "button" value = "Step 1" onClick  = "Pad();"><br>



	<p>Your message contains <input type = text name = MessageLength size = 6> bits.  The message will be padded to make it

	 448 mod 512 bits long. Since your message is 

	<input type = text name = MessageLength2 size = 6> we will add <input type = text name = PaddedBits size = 6> because:

	<input type = text name = MessageLength3 size = 6> MOD  512 = <input type = text name = ModResult size =6>

	We will add ONE 1 and <input type = text name = PadValue size = 3> ZEROS. After this operation a 

	64 bit value which represents the original length of the message is added. For this particular 

	message the input 

 	value added will be <input type = text name = PadMessageLength size = 64>. So the message after all

	appending operations are complete will look like, at the bit level the text box below. If you look at the end of 

	message you should be able to identify the added bits.</p>





	<textarea rows = "10" name =PaddedMessage cols = "100" wrap = physical >

	</textarea>



	<br>





	
	<input type = "button" value = "Step 3" onClick = "ShowFinalMessage();"><br>



	<textarea rows = "10" name =FinalMessage cols = "100" wrap = physical >

	</textarea>

	<br>

	<input type= "reset" value= "clear">




</form>





<script language = "JavaScript">

var OriginalMessageLength = 0;

var OriginalMessage;



function Convert()

{

	//testing out the textarea tag

	var Message = document.SHA.Message.value;

	var y = Message.length;

	var i = 0;

	var temp ;

	var j = 0;

	var k = 0;



	OriginalMessage = Message;	

    document.SHA.Converted.value = "";	



	for(x = 0; x < y ; x++)

	{

		i = Message.charCodeAt(x);

		temp = i.toString(2);



		if(temp.length < 8)

		{

			k = temp.length;

			for(j = 8; j > k ; j--)

			{

				temp = "0" + temp;

			}

		}

		

		document.SHA.Converted.value += temp;		

		document.SHA.Converted.value += " ";

	}

	OriginalMessageLength = y;

	

}



function Pad()

{



	document.SHA.MessageLength.value = OriginalMessageLength * 8;

  	document.SHA.MessageLength2.value = OriginalMessageLength * 8;

    var x = (OriginalMessageLength * 8) % 512;

    var y = (OriginalMessageLength * 8);

	var a = y.toString(2);

	var w = a.length ;

 

    while( w < 64)

    {

        a = "0" + a;

        ++w;

    }

 

 

    if(x < 448)

    {

        x = 448 - x;

 

    }

    if(x > 448)

    {

        x =  512 - (x - 448)

    }

    if(x == 448)

    {

        x = x + 512;

    }

	document.SHA.PaddedBits.value = x;

	document.SHA.ModResult.value = (y + x) % 512;

	document.SHA.MessageLength3.value = (OriginalMessageLength * 8) + x;

	document.SHA.PadValue.value = x - 1;

	document.SHA.PadMessageLength.value = a;

	

	var b = x/8;

	

	document.SHA.PaddedMessage.value = document.SHA.Converted.value;

	document.SHA.PaddedMessage.value += "10000000 ";

	

	for(b = (x / 8) -1; b > 0; --b)

	{

		document.SHA.PaddedMessage.value += "00000000 ";

	} 

	

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(0,8) + " ";

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(8,8) + " ";

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(16,8) + " ";

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(24,8) + " ";

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(32,8) + " ";

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(40,8) + " ";

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(48,8) + " ";

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(56,8) + " ";





}





function ShowFinalMessage()

{

	document.SHA.FinalMessage.value = OriginalMessage;

    document.SHA.FinalMessage.value += "\n\n                HASH CODE INSERTED HERE";  

}





</script>
<table width="758" border="0" cellspacing="5" cellpadding="5">
  <tr> 
    <td> 
      <div align="center"> 
        <hr align="center" width="25%">
        <p><font face="Georgia, Times New Roman, Times, serif"><b><a href="../index.html">Project 
          Info</a> &#149; <a href="../modules.html">Modules</a> &#149; <a href="../links.html">Links</a> 
          &#149; <a href="file:///G4%20HD/Documents/nsf%20docs/team.html"></a><a href="../papers.html">Papers</a> 
          &#149; <a href="../team.html">Team</a> &#149; <a href="http://www.nsf.gov">NSF</a></b></font></p>
        <p>Last update: 
          <!-- #BeginDate format:Am1 -->August 1, 2002<!-- #EndDate -->
          <img src="../images/spacer.gif" width="21" height="8"> 
          <!-- BEGIN WebSTAT Activation Code -->
          <script type="text/javascript" language="JavaScript" src="http://hits.webstat.com/cgi-bin/wsv2.cgi?34012"></script>
          <noscript> <a href="http://hits.webstat.com"> <img src="http://hits.webstat.com/scripts/wsb.php?ac=34012" border="0" alt="WebSTAT - Free Web Statistics" align="top"></a> 
          </noscript> 
          <!-- END WebSTAT Activation Code -->
        </p>
      </div>
    </td>
  </tr>
</table>
</body>





</html>

