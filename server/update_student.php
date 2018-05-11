<?php
$opType=$_POST['opType'];
if($opType=='Update Student'){
	require "../classes/pdosetup.php";	
	$uname=addslashes($_POST['uname']);
	$id=addslashes($_POST['id']);
	$pword=addslashes($_POST['pword']);
		
	$sel=$db->query("SELECT * from student where username='$uname'");
	$no=$sel-> fetch (PDO::FETCH_NUM);
			if($no<1){
				try{
						$ups=$db->exec("UPDATE student SET  username='$uname', password='$pword' WHERE id='$id'");
						if($ups == FALSE){
							echo "Cannot Update at the moment";
						}
						else{
							echo "Student Password sucessfully Changed";
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