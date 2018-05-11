<?php

require ("../dbsetup/dbconnect.php");
$sel=$db->query("SELECT * from admin");
?>
<div align="center">List of System Admins</div>
<table width="644" align="center">
<tr>
<td width="232"><div align="center">Name</div></td>
<td width="150"><div align="center">Username</div></td>
<td width="152"><div align="center">Designation</div></td>
<td width="90"><div align="center">Delete</div></td>
</tr>
<?php
while($rows=$sel-> fetch (PDO::FETCH_ASSOC)){
		$name=$rows["name"];
		$uname=$rows['username'];
		$desg=$rows['level'];
		$id=$rows['id'];
?>
<tr>
<td><div align="center"><?php echo $name; ?></div></td>
<td><div align="center"><?php echo $uname; ?></div></td>
<td><div align="center"><?php echo $desg; ?></div></td>
<?php echo  "<td><a href=\"deleteadmin.php?id=$rows[id]\"><img src=\"../image/bt_delete.gif\" /></a></td>"; ?>
</tr>
<?php

}
?>
</table>
