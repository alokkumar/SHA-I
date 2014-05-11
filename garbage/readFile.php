<?php
function readFiles($fileLoc){
$file = fopen($fileLoc, "r") or exit("Unable to open file!");
while(!feof($file)) {
  echo fgets($file);
}
fclose($file);
}

if(isset($_GET['fileLoc'])){
	echo readFiles($_GET['fileLoc']);
	}
?>