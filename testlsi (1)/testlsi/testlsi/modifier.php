<?php
include 'connect.php';
if(isset($_POST['ok']))
{
	//var_dump($_POST);
	$requette = "UPDATE `etudiant` SET `id`=".$_POST['id'].",`nom`='".$_POST['nom']."',`age`=".$_POST['age']." WHERE id = ".$_POST['id']."";
	if($bdd->exec($requette))
	{
		echo "bien modifier";
		?>
		 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/prep/prep/ajouter.php ">
		<?php
	}
	else
	{
		echo"pas bien";
	}
}
if(isset($_GET['m']))
{   
	var_dump($_GET);
	$id = $_GET['m'];
	$nom = $_GET['n'];
	$age = $_GET['a'];

	?>
	<form action="" method="POST">
		<input name="id" type="text" value=<?php echo($id)?> >
		<input name="nom" type="text" value=<?php echo($nom)?> >
		<input name="age" type="text" value=<?php echo($age)?> >
		
		<input type="submit" name="ok">
	</form>
	<?php
}
?>