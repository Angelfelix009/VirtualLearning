<?php
require 'dbsetup.php';

class AllocateCenter{
	function RegisterCenter($tablename,$name,$matricno,$level){
		//R::freeze(1);
		$admin=R::dispense($tablename);
		$admin->name=$name;
		$admin->matricno=$matricno;
		$admin->level=$level;
		$admin->cdate=date("D,M,Y");
		$id=R::store($admin);
	}
	function deallocateCenter($center)
	{
		$dba=new PDO('mysql:host=localhost;dbname=web_based_mobile','root', 'olajide1');
		$sql=$dba->prepare("DROP Table $center");
		$no=$sql->execute();
		if($no){
			echo "center successfully deallocated";
		}
		else{
			echo ($sql->errorInfo());
		}
	}
	function DeleteAdmin($id){
		$member=R::load("admin",$id);
		R::trash($member);
		
	}
}
//$ucc=new AllocateCenter();
//echo $ucc->deallocateCenter('cs24');
?>