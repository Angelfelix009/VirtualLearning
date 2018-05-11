<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://goldenblueglobal.com/server/connect.php");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
curl_close($ch);

//include("http://goldenblueglobal.com/server/connect.php");
$id=$_SESSION['activeuser'];
$sel=$db->query("SELECT * from admin");
while($rows=$sel-> fetch (PDO::FETCH_ASSOC)){
		$name=$rows["name"];
		
					
					
 echo $name;}

?>