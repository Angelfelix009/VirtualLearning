<?php
		
	require "../classes/pdosetup.php";
	try{
$sel=$db->query("SELECT * from e_book where id='$_REQUEST[id]' ");
		while($rows=$sel-> fetch (PDO::FETCH_ASSOC)){
			$path='../server/'.$rows['epath'];
			unlink($path);
			}
$del=$db->exec("DELETE  from e_book where id='$_REQUEST[id]'");
			if($del ==  false){
				
?>

<script>
alert('record can not be deleted at the moment');

</script>
<?php
			header("location:admin_profile.php");
			}
			else{
				
?>
<script>
alert("record deleted");

</script>

<?php
			header("location:admin_profile.php");
			

			
			//
		}
	}
	catch(PDOException $e){

			echo $e-> getMesssage().mysql_error();
	}
?>
			