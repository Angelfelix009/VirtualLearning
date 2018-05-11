<?php

//$cn=mysql_connect("localhost", "root","olajide1");
	//$db=mysql_select_db("web_based_mobile", $cn) /*or die ("ERROR CONNECTING TO DB")*/;
$db=new PDO('mysql:host=localhost;dbname=web_based_mobile','root', 'olajide1');
//$sel="SELECT * from student where level='Amosa Nfisat' ";
//$sql=mysql_query($sel);
//$no=mysql_num_rows($sql);
//$no=$sel-> fetch (PDO::FETCH_ASSOC);
//$cont=$sel->fetchColumn();
$sql=$db->exec("SELECT * from student");

echo $db->lastInsertId();

?>