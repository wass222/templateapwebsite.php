<?php
//session_start();
function check_mdp_format($mdp)
{
	$majuscule = preg_match('@[A-Z]@', $mdp);
	$minuscule = preg_match('@[a-z]@', $mdp);
	$chiffre = preg_match('@[0-9]@', $mdp);
	
	if(!$majuscule || !$minuscule || !$chiffre || strlen($mdp) < 8)
	{
		return false;
	}
	else 
		return true;
}
function chercher_email($mail,$champs){
    include('connexion.php');
    $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE ".$champs."=?");
    $stmt->execute([$mail]); 
    $user = $stmt->fetch();
    //echo 'ggg  '.$user;
    if ($user) {
        return true;
    }else{
		return false;
    }
}
function chercher_passward($passward,$userEmail, $champs){
    include('connexion.php');
    //"SELECT `passwordUtilisateur` FROM `utilisateur` WHERE `emailUtilisateur`='hajjriadh@gmail.com'
    $stmt = $pdo->prepare("SELECT nomUtilisateur,prenomUtilisateur,passwordUtilisateur FROM utilisateur WHERE ".$champs."=?");
    $stmt->execute([$userEmail]); 
    $hash = $stmt->fetch();   
    if (password_verify($passward, $hash[2])) {
            $_SESSION['utilisateur']=$hash[0]." ".$hash[1];
        return true;
    }else{
		return false;
    }
}?>