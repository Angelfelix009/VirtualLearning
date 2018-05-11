<?php
	include('DbMonitor.php');
	include('dbmanager.php');
	include('models/user_class.php');
	//include('utility.php');
class User{
	function loginAdmin($uname,$pword){
		try{
					
					$cnt=admin::find('all',array('conditions'=>array('uname=? and pword=?',$uname,$pword)));
					
					if(count($cnt)<=0){
						Utility::error('Invalid Username or Password!');
					}

					$cds=$cnt[0];					
					//$_SESSION['activeuser']=$cds->uname;
				
					

			}
			catch(Exception $ex){
				return($ex->getMessage());
			}
	}
	function loginstudent($matric){
		try{
					
					$db=new PDO('mysql:host=localhost;dbname=web_based_mobile','root', 'olajide1');
					$sel=$db->query("SELECT * from student where matricno='$matric'");
					$no=$sel-> fetch (PDO::FETCH_NUM);
				if($no<1){
				Utility::error ("Invalid Username or Password");
			}
			else{
				header('location:../pages/displays/student_profile.php');
			}


			}
			catch(Exception $ex){
				return($ex->getMessage());
			}
	}
	function RegisterAdmin($uname,$pword,$name){
		try{
				
				$cds=admin::find('all',array('conditions'=>array('uname=?',$uname)));
					if(count($cds)>0){
						Utility::error('User Already registered; Please try again');
					}

				$tds=admin::create(array('uname'=>$uname,'pword'=>$pword,'name'=>$name,'cdate'=>date('d,m,y')));

				if(!$tds){
					Utility::error('Sorry! Cannot Register User At this time; Please try again');
				}

				Utility::success("Users created successfully");											
			}
			catch(Exception $ex){
				Utility::error($ex->getMessage());
			}
	}
	function DeleteAdmin($id){
		try{
				
				$cnt=admin::find('all',array('conditions'=>array('id=?',$id)));				
				if(count($cnt)<=0){
					Utility::error('User Does not Exist! Please try again!');
				}
				
				$cnt[0]->status='Deactivated';
				$cnd=$cnt[0]->save();	
				if($cnd!=1){
					Utility::error('Sorry! An Error Occured! Please try again');
				}
				
				Utility::success("Account Deactivated");											
			}
			catch(Exception $ex){
				Utility::error($ex->getMessage());
			}
		}
	function UpdateAdmin(){
	}
	function RegisterStudent($name,$matric,$level){
		try{
				$center='unallocated';
				$cds=student::find('all',array('conditions'=>array('matricno=?',$matric)));
					if(count($cds)>0){
						Utility::error('User Already registered; Please try again');
					}

				$tds=student::create(array('name'=>$name,'matricno'=>$matric,'level'=>$level,'center'=>$center,'cdate'=>date('d,m,y')));

				if(!$tds){
					Utility::error('Sorry! Cannot Register User At this time; Please try again');
				}

				
			}
			catch(Exception $ex){
				Utility::error($ex->getMessage());
			}
	}
	function RegisterStudentNd1ft($name,$matric){
		try{
				
				$cds=studentnd1::find('all',array('conditions'=>array('matricno=?',$matric)));
					if(count($cds)>0){
						Utility::error('User Already registered; Please try again');
					}

				$tds=studentnd1::create(array('name'=>$name,'matricno'=>$matric,'cdate'=>date('d,m,y')));

				if(!$tds){
					Utility::error('Sorry! Cannot Register User At this time; Please try again');
				}

				Utility::success("Users created successfully");											
			}
			catch(Exception $ex){
				Utility::error($ex->getMessage());
			}
	}
	function RegisterStudentNd2ft($name,$matric){
		try{
				
				$cds=studentnd2::find('all',array('conditions'=>array('matricno=?',$matric)));
					if(count($cds)>0){
						Utility::error('User Already registered; Please try again');
					}

				$tds=studentnd2::create(array('name'=>$name,'matricno'=>$matric,'cdate'=>date('d,m,y')));

				if(!$tds){
					Utility::error('Sorry! Cannot Register User At this time; Please try again');
				}

				Utility::success("Users created successfully");											
			}
			catch(Exception $ex){
				Utility::error($ex->getMessage());
			}
	}
	function RegisterStudentHnd1ft($name,$matric){
		try{
				
				$cds=studenthnd1::find('all',array('conditions'=>array('matricno=?',$matric)));
					if(count($cds)>0){
						Utility::error('User Already registered; Please try again');
					}

				$tds=studenthnd1::create(array('name'=>$name,'matricno'=>$matric,'cdate'=>date('d,m,y')));

				if(!$tds){
					Utility::error('Sorry! Cannot Register User At this time; Please try again');
				}

				Utility::success("Users created successfully");											
			}
			catch(Exception $ex){
				Utility::error($ex->getMessage());
			}
	}
	function RegisterStudentHnd2ft($name,$matric){
		try{
				
				$cds=studenthnd2::find('all',array('conditions'=>array('matricno=?',$matric)));
					if(count($cds)>0){
						Utility::error('User Already registered; Please try again');
					}

				$tds=studenthnd2::create(array('name'=>$name,'matricno'=>$matric,'cdate'=>date('d,m,y')));

				if(!$tds){
					Utility::error('Sorry! Cannot Register User At this time; Please try again');
				}

				Utility::success("Users created successfully");											
			}
			catch(Exception $ex){
				Utility::error($ex->getMessage());
			}
	}
	function RegisterStudentNd1dpt($name,$matric){
		try{
				
				$cds=studentnd1dpt::find('all',array('conditions'=>array('matricno=?',$matric)));
					if(count($cds)>0){
						Utility::error('User Already registered; Please try again');
					}

				$tds=studentnd1dpt::create(array('name'=>$name,'matricno'=>$matric,'cdate'=>date('d,m,y')));

				if(!$tds){
					Utility::error('Sorry! Cannot Register User At this time; Please try again');
				}

				Utility::success("Users created successfully");											
			}
			catch(Exception $ex){
				Utility::error($ex->getMessage());
			}
	}
	function RegisterStudentNd2dpt($name,$matric){
		try{
				
				$cds=studentnd2dpt::find('all',array('conditions'=>array('matricno=?',$matric)));
					if(count($cds)>0){
						Utility::error('User Already registered; Please try again');
					}

				$tds=studentnd2dpt::create(array('name'=>$name,'matricno'=>$matric,'cdate'=>date('d,m,y')));

				if(!$tds){
					Utility::error('Sorry! Cannot Register User At this time; Please try again');
				}

				Utility::success("Users created successfully");											
			}
			catch(Exception $ex){
				Utility::error($ex->getMessage());
			}
	}
	function RegisterStudentNdyr1($name,$matric){
		try{
				
				$cds=studentndyr1::find('all',array('conditions'=>array('matricno=?',$matric)));
					if(count($cds)>0){
						Utility::error('User Already registered; Please try again');
					}

				$tds=studentndyr1::create(array('name'=>$name,'matricno'=>$matric,'cdate'=>date('d,m,y')));

				if(!$tds){
					Utility::error('Sorry! Cannot Register User At this time; Please try again');
				}

				Utility::success("Users created successfully");											
			}
			catch(Exception $ex){
				Utility::error($ex->getMessage());
			}
	}
	function RegisterStudentNdyr2($name,$matric){
		try{
				
				$cds=studentndyr2::find('all',array('conditions'=>array('matricno=?',$matric)));
					if(count($cds)>0){
						Utility::error('User Already registered; Please try again');
					}

				$tds=studentndyr2::create(array('name'=>$name,'matricno'=>$matric,'cdate'=>date('d,m,y')));

				if(!$tds){
					Utility::error('Sorry! Cannot Register User At this time; Please try again');
				}

				Utility::success("Users created successfully");											
			}
			catch(Exception $ex){
				Utility::error($ex->getMessage());
			}
	}
	function RegisterStudentNdyr3($name,$matric){
		try{
				
				$cds=studentndyr3::find('all',array('conditions'=>array('matricno=?',$matric)));
					if(count($cds)>0){
						Utility::error('User Already registered; Please try again');
					}

				$tds=studentndyr3::create(array('name'=>$name,'matricno'=>$matric,'cdate'=>date('d,m,y')));

				if(!$tds){
					Utility::error('Sorry! Cannot Register User At this time; Please try again');
				}

				Utility::success("Users created successfully");											
			}
			catch(Exception $ex){
				Utility::error($ex->getMessage());
			}
	}
		function DeleteStudent(){
	}
	function UpdateStudent(){
	}
	function loginstaff(){
	}
	function registersttaff(){
	}
	function deletestaff(){
	}
	function UpdateStaff()
	{
	}
	function RegisterCenter($center,$capacity){
		try{
				
				$cds=center::find('all',array('conditions'=>array('center_name=?',$center)));
					if(count($cds)>0){
						Utility::error('Center Already registered; Please try again');
					}

				$tds=center::create(array('center_name'=>$center,'ccapcity'=>$capacity));

				if(!$tds){
					Utility::error('Sorry! Cannot Register User At this time; Please try again');
				}

				Utility::success("Users created successfully");											
			}
			catch(Exception $ex){
				Utility::error($ex->getMessage());
			}
	}
}
//$ucc=new User();
//echo $ucc->RegisterAdmin('angelfelix','123456','olajide felix');
?>