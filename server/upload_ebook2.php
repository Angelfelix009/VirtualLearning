<?php
/*$opType=$_POST['opType'];

		if($opType=='Upload Ebook for Student'){*/

		$ename=addslashes($_POST['ename']);
		$dpt=addslashes($_POST['dpt']);
		$tre=addslashes($_POST['tresource']);
		$cdate=date("M,d,Y");

				$source=$_FILES['efile']['tmp_name'];
				If ($ename==''|| $dpt =='Select your Department' || $tre=='Choose a Resource type'|| $source ==''){
					echo "Field Items cannot be empty";
				}
				else{
				require ("../classes/pdosetup.php");
				if($tre=="E-book"){
				$target="ebook/".$_FILES['efile']['name'];
					
					if((($_FILES["efile"]["type"] == "application/pdf"))

                                    && ($_FILES["efile"]["size"] < 50000000))
			{
					
					try{
						
						$ins=$db->exec("INSERT into e_book values('','$ename','$dpt',' ','$target','$cdate')");
						if($ins == FALSE){
							echo "An Error has occur while trying to upload new ebook";
						}
						else{
							copy($source,$target);
							echo "Uploading of ".$ename. " sucessful";
							header("location:../pages/student_profile.php");
						}
					}
					catch(PDOException $e){

						echo $e-> getMesssage().mysql_error();
					}
					}
					else{
						echo "File type not pdf or File larger than 5mb";
					}
		}
		else{
			$target="video/".$_FILES['efile']['name'];
					
					if((($_FILES["efile"]["type"] == "video/mp4")
					
							||($_FILES["efile"]["type"] == "video/avi")
					)

                                    && ($_FILES["efile"]["size"] < 50000000))
			{
					
					try{
						$ins=$db->exec("INSERT into video values('','$ename','$dpt',' ','$target','$cdate')");
						if($ins == FALSE){
							echo "An Error has occur while trying to upload new ebook";
						}
						else{
							copy($source,$target);
							echo "Uploading of ".$ename. " sucessful";
							header("location:../pages/student_profile.php");
						}
					}
					catch(PDOException $e){

						echo $e-> getMesssage().mysql_error();
					}
		}
		else{
				echo "unsupported video format";
			}
		}
				
				}
	//}
?>