<?php
//connetion a la base de donner 
include 'connect.php';
if(isset($_POST['submit'])) //test si utilisateur remplir form
	{
		//var_dump($_POST);
		//echo "bonjour ".$_POST['nom']."<br>";


$requette= "INSERT INTO etudiant(nom,age)
VALUES
('".$_POST['nom']."',".$_POST['age'].")";

$req = $bdd->prepare($requette);

	
// echo $requette;
	//operation dans la base de donner ll hifd
	if($bdd->query($requette))
	{
		echo "bien ajouter";
	}
	else
	{
		echo "erreur";
	}
	}




//var_dump($data);
echo "<table border=1><tr><td>id</td><td>nom</td><td>age</td><td>modifier</td><td>supprimer</td></tr>";
$tab = $bdd->query("select * from etudiant");
$data = $tab->fetchALL(PDO::FETCH_ASSOC);
//var_dump($data);
for ($i=0; $i < count($data) ; $i++) { 
	?>
	
		<tr>
			<td><?php echo($data[$i]['id']) ?></td>
			<td><?php echo($data[$i]['nom']) ?></td>
			<td><?php echo($data[$i]['age']) ?></td>
			<td><a href=modifier.php?m=<?php
			 echo($data[$i]['id']); ?>&n=<?php echo($data[$i]['nom']) ?>&a=<?php echo($data[$i]['age']) ?> >modifer</a></td>
			<td><a href=supprimer.php?s=<?php
			 echo($data[$i]['id']); ?> >suprimer</a></td>
		</tr>
	
	<?php
}
echo "</table>";
?>