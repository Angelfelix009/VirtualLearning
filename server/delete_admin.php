<?php
include ('../classes/utility.php');
include ('../classes/user_center.php');
$my=new AllocateCenter();
$id=$_REQUEST['id'];
echo $my->DeleteAdmin($id);
header("location:../pages/displays/view_admin.php");

?>