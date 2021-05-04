<?php
include 'connect.php';
$id=$_GET['s'];


//suppression
$query="DELETE FROM `etudiant` WHERE `etudiant`.`id` = '$id'";
$data =$bdd->query($query);
if($data)
{   
    echo "<font color='green'>record deleted  from etudiant";
         ?>
		 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/prep/prep/ajouter.php ">
	<?php
	
}else{ 
    echo "<font color='red'>failed to delete from etudiant";
}
?>