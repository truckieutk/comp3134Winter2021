<?php
$myFile = "http://134.122.44.78/toread.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, 1);
fclose($fh);
echo $theData;
?>