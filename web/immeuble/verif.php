<?php
session_start();
if (!isset($_SESSION['id'])){
	header('location: ../../index.php');
}
else {
$password = $_SESSION['id'];
//connexion � la bdd
include('../default/page/bdd.php');

//R�cup�ration des informations de l'utilisateur
$login = $bdd->query('SELECT * FROM `user` WHERE password = "'.$password.'"');
$res = $login->fetch();

//variables
$id = $res['iduser'];
	

	
if (isset($_POST['henri']))
{
	$page = "henri.php";
	if($_POST['henri'] == "Henri"){
		$validate = "true";				
	}
	else {
		$validate = "false";
	}
}


if (isset($_POST['alejandro']))
{
	$page = "alejandro.php";
	if($_POST['alejandro'] == "Alejandro"){
		$validate = "true";				
	}
	else {
		$validate = "false";
	}
}
if (isset($_POST['simao']))
{
	$page = "simao.php";
	if($_POST['simao'] == "Simao"){
		$validate = "true";				
	}
	else {
		$validate = "false";
	}
}

	//Inscription dans la bdd si r�sultat bon
	echo $validate;
	if($validate == "true"){
		$req = $bdd->prepare('INSERT INTO `etape` (user_ID, etape_ID, field, value) VALUES(:user_ID, :etape_ID, :field, :value)');
		$req->execute(array(
		'user_ID' => $id,
		'etape_ID' => "Immeuble",
		'field' => "",
		'value' => ""
		));
		//Etape en cours :
		$req2 = "UPDATE `user` SET current_etape = 'Immeuble' WHERE iduser = '$id'";
		$req2 = $bdd->exec($req2);

		//comptabilise pour la progression

		$requete = $bdd->query('SELECT etape_ID FROM `etape` WHERE user_ID = "'.$id.'" GROUP BY etape_ID');
		$progression = 0;
		while($donnees = $requete->fetch())
		{
			$progression = $progression+1;
		}

		$req3 = "UPDATE `user` SET progression = '$progression' WHERE iduser = '$id'";
		$req3 = $bdd->exec($req3);
		if(isset($_SESSION['badanswer'])){
			unset($_SESSION['badanswer']);
		}
		header('location: '.$page);
		
	}
	else{
		$_SESSION['badanswer'] = "false";
		header('location: '.$page);
	}
}
?>