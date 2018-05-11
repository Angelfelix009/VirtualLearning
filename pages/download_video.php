<?php

include("../classes/pdosetup.php");
	session_start();
	$id=$_SESSION['activeuser'];
	$sell=$db->query("SELECT * from student where username='$id'");
	while($row=$sell-> fetch (PDO::FETCH_ASSOC)){
		$dpt=$row['department'];
	$sel=$db->query("SELECT * from video where department ='$dpt'");
?>
<div align="center">List of Upload VIdeos</div>
<table width="980" align="center">
<tr>
<td width="314"><div align="center">Name</div></td>
<td width="172"><div align="center">Watch</div></td>
<td width="201"><div align="center">Download</div></td>
</tr>
<?php
while($rows=$sel-> fetch (PDO::FETCH_ASSOC)){
		$name=$rows["name"];
		$id=$rows['id'];
		$file=$rows['vfile'];
		$fn='../server/'.$file;
?>
<tr>
<td><div align="center"><?php echo $name; ?></div></td>
<?php echo  "<td><a href='$fn'>Watch</a></td>"; ?>
<td><a href="download.php?filename=<?php echo $fn; ?>">Download</a></td>; 
</tr>
<?php

}
	}
?>
</table>
