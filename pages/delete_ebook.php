<?php

require "../classes/pdosetup.php";
$sel=$db->query("SELECT * from e_book");
?>
<div align="center">List of System Admins</div>
<table width="644" align="center">
<tr>
<td width="232"><div align="center">Name</div></td>
<td width="152"><div align="center">Department</div></td>
<td width="152"><div align="center">path</div></td>
<td width="90"><div align="center">Delete</div></td>
</tr>
<?php
while($rows=$sel-> fetch (PDO::FETCH_ASSOC)){
		$name=$rows["name"];
		$dpt=$rows['department'];
		$lvl=$rows['epath'];
		$id=$rows['id'];
?>
<tr>
<td><div align="center"><?php echo $name; ?></div></td>
<td><div align="center"><?php echo $dpt; ?></div></td>
<td><div align="center"><?php echo $lvl; ?></div></td>
<?php echo  "<td><a href=\"deleteebook.php?id=$rows[id]\"><img src=\"../image/bt_delete.gif\" /></a></td>"; ?>
</tr>
<?php

}
?>
</table>
