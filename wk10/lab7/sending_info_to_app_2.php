GNU nano 4.8               sending_info_to_app_2.php                          
<form method="get">
 <input name="q" placeholder="Enter Text">
 <br/>
 <input type="submit" value="Go">
</form>
$name=$_GET["q"]; 
echo htmlspecialchars($q);
echo strip_tags($q);