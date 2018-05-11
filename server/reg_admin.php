<?php
$opType=$_POST['opType'];
if($opType=='Register Admin'){
	require "../classes/pdosetup.php";	
	$uname=addslashes($_POST['uname']);
	$name=addslashes($_POST['name']);
	$pword=addslashes($_POST['pword']);
	$desg=addslashes($_POST['desg']);
	$sel=$db->query("SELECT * from admin where username='$uname'");
	$no=$sel-> fetch (PDO::FETCH_NUM);
			if($no<1){
				try{
						$ins=$db->exec("INSERT into admin values('','$uname','$pword','$name','$desg')");
						if($ins == FALSE){
							echo "Cannot insert into db news";
						}
						else{
							echo "Admin sucessfully added";
						}
					}
				catch(PDOException $e){

			echo $e-> getMesssage().mysql_error();
	}
				
			}
			else{
				echo "username already taken try again later";
				
			}
}
	
?>
