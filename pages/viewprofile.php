<?php

include("../classes/pdosetup.php");
	session_start();
	$id=$_SESSION['activeuser'];
	$sel=$db->query("SELECT * from student where username='$id'");
?>
<div align="center">List of System Admins</div>
<table width="980" align="center">
<tr>
<td width="314"><div align="center">Name</div></td>
<td width="172"><div align="center">Matric no</div></td>
<td width="201"><div align="center">Department</div></td>
<td width="93"><div align="center">Level</div></td>
<td width="176"><div align="center">Phone no</div></td>
</tr>
<?php
while($rows=$sel-> fetch (PDO::FETCH_ASSOC)){
		$fname=$rows["surname"];
		$oname=$rows['othernames'];
		$matric=$rows['matricno'];
		$dpt=$rows['department'];
		$lvl=$rows['level'];
		$phone=$rows['phoneno'];
		$id=$rows['id'];
?>
<tr>
<td><div align="center"><?php echo $fname.' ' .$oname; ?></div></td>
<td><div align="center"><?php echo $matric; ?></div></td>
<td><div align="center"><?php echo $dpt; ?></div></td>
<td><div align="center"><?php echo $lvl; ?></div></td>
<td><div align="center"><?php echo $phone; ?></div></td>

</tr>
<?php

}
?>
</table>
