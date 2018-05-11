<?php

$opType=$_POST['opType'];

	if($opType=='Register Student'){
		require ("../classes/pdosetup.php");

		$name=addslashes($_POST['name']);
		$onames=addslashes($_POST['onames']);
		$matricno=addslashes($_POST['matricno']);
		$dpt=addslashes($_POST['dpt']);
		$lvl=addslashes($_POST['lvl']);
		$phoneno=addslashes($_POST['phoneno']);
		$email=addslashes($_POST['email']);
		$sess=addslashes($_POST['sess']);
		$cdate=date("D,Y,M");
		$sel=$db->query("SELECT * from student where matricno='$matricno'");
		$no=$sel-> fetch (PDO::FETCH_NUM);
		if($no<1){
			if(strlen($_POST['phoneno'])==11)
			{	
				if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['email'])){
					try{
						$ins=$db->exec("INSERT into student values('','$name','$onames','$matricno','$matricno','$matricno','$dpt','$lvl','$phoneno','$email','$sess','','$cdate')");
						if($ins == FALSE){
							echo "An Error has occur, cannot register new student at moment try again later";
						}
						else{
							echo "Registration of ".$name." ".$onames."  Complete";
						}
					}
					catch(PDOException $e){

						echo $e-> getMesssage().mysql_error();
					}
				
				}
				else{
					echo 'Invalid email format';
				}
			}
			else{
				echo "Phoneno must not be less or more than than 11 character";
			}
		}
		else{
			echo "Student already register";
				
		}

	}
	function is_empty($array){
    if(count($array)<=0){
        return true;
    }

    return false;
}
?>