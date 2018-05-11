<?php
	require("../classes/utility.php");
	$opType=$_POST['opType'];

	if($opType=='Search for new Student'){
	
	
	$_POST['search_student'] = stripslashes($_POST['search_student']);
	$matric = $_POST['search_student'];
		if($matric==''){
        Utility::error("Please Fill all fields!!!");
    }	

	$db=new PDO('mysql:host=localhost;dbname=web_based_mobile','root', 'olajide1');
	$sel=$db->query("SELECT * from student where matricno like '%$matric%'");
	while($rows=$sel-> fetch(PDO::FETCH_ASSOC)){
		$name=$rows["name"];
		$matricno=$rows["matricno"];
		$level=$rows["level"];
		echo $name.' '.$level. ' '.$matric;
	
	}
	
}
	else{
		echo "Optype not the same";
	}
?>