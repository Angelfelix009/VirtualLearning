<?php
$opType=$_POST['opType'];
if($opType=='Update Student record'){
	require "../classes/pdosetup.php";	
	$lvl=addslashes($_POST['lvl']);
	$id=addslashes($_POST['id']);
	$email=addslashes($_POST['email']);
	$phoneno=addslashes($_POST['phoneno']);
		

				try{
						$ups=$db->exec("UPDATE student SET  level='$lvl', phoneno='$phoneno', email='$email' WHERE id='$id'");
						if($ups == FALSE){
							echo "Cannot Update at the moment";
						}
						else{
							echo "Student Biodata Changed Sucessfully";
						}
					}
			
		
				catch(PDOException $e){

			echo $e-> getMesssage().mysql_error();
			}
				


			
}
else{
	echo "What the Hacks login";
}
?>