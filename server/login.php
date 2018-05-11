<?php
	include ("../classes/pdosetup.php");
	include("../classes/utility.php");
	$_POST['lgn_pword'] = stripslashes($_POST['lgn_pword']);
	$_POST['lgn_uname'] = stripslashes($_POST['lgn_uname']);
	$_POST['lgn_type'] = stripslashes($_POST['lgn_type']);
 		$uname = $_POST['lgn_uname'];
 		$pword = $_POST['lgn_pword'];
		$lgn_type=$_POST['lgn_type'];
		if($uname=='' || $pword==''  and $lgn_type=='Select account type'){
        Utility::error("Please Fill all fields!!!");
    }	
	else{
	if($lgn_type=='Admin'){
		session_start();
		$sel=$db->query("SELECT * from admin where username='$uname' and password='$pword'");
			$no=$sel-> fetch (PDO::FETCH_NUM);
			if($no<1){
				echo "Invalid Username or Password";
			}
			else{
				$_SESSION['activeuser']=$uname;
				header("location:../pages/admin_profile.php");
				
			}
		}
		
	else if($lgn_type=='Student'){
		session_start();
		$sel=$db->query("SELECT * from student where username='$uname' and password='$pword'");
			$no=$sel-> fetch (PDO::FETCH_NUM);
			if($no<1){
				echo "Invalid Username or Password";
			}
			else{
				$_SESSION['activeuser']=$uname;
				header("location:../pages/student_profile.php");
				
			}
	}

	else{
		echo 'choose a valid login type';
	}
}
	function is_empty($array){
    if(count($array)<=0){
        return true;
    }

    return false;
}

?>