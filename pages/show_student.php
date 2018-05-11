<?php

require "../classes/pdosetup.php";
$sel=$db->query("SELECT * from student");
?>
<div align="center">List of System Admins</div>
<table width="644" align="center">
<tr>
<td width="232"><div align="center">Name</div></td>
<td width="150"><div align="center">Matric no</div></td>
<td width="152"><div align="center">Department</div></td>
<td width="152"><div align="center">Level</div></td>
<td width="152"><div align="center">Phone no</div></td>
<td width="90"><div align="center">Delete</div></td>
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
<?php echo  "<td><a href=\"deleteadmin.php?id=$rows[id]\"><img src=\"../image/bt_delete.gif\" /></a></td>"; ?>
</tr>
<?php

}
?>
</table>
