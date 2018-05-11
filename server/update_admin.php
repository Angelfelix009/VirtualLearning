<?php
$opType=$_POST['opType'];
if($opType=='Update Admin'){
	require "../classes/pdosetup.php";	
	$uname=addslashes($_POST['uname']);
	$id=addslashes($_POST['id']);
	$pword=addslashes($_POST['pword']);
	$desg=addslashes($_POST['desg']);
	
	$sel=$db->query("SELECT * from admin where username='$uname'");
	$no=$sel-> fetch (PDO::FETCH_NUM);
			if($no<1){
				try{
						$ups=$db->exec("UPDATE admin SET  username='$uname', password='$pword', designation='$desg' WHERE id='$id'");
						if($ups == FALSE){
							echo "Cannot Update at the moment";
						}
						else{
							echo "Profile sucessfully Updated";
						}
					}
			
		
				catch(PDOException $e){

			echo $e-> getMesssage().mysql_error();
			}
				
		}
		else
		{
			echo 'Username already taken! Try a new user name';
		}
			
}

?>