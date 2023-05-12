<?php
session_start();
include('connexion.php');
include('fonctions.php');
 
// Variable utilisé pour afficher une notification d'erreur ou de succès
$msg = '';
 
if (empty($_GET['token'])) {	// Si aucun token n'est spécifié en paramètre de l'URL
	echo 'Aucun token n\'a été spécifié';
	exit;
} 
// On récupère les informations par rapport au token dans la base de données
$stmt = $pdo->prepare('SELECT date_recuperation_mot_passe FROM utilisateur WHERE token_recuperation_mot_passe = ?');
$stmt->bindValue(1, $_GET['token']);
$stmt->execute();
 
$ligne = $stmt->fetch(PDO::FETCH_ASSOC);
 
if (empty($ligne)) {	// Si aucune info associée au token n'est trouvé
	echo 'Ce token n\'a pas été trouvé';
	exit;
}
 
// On calcul la date de la génération du token + 15minutes
$dateToken = strtotime('+15 minutes', strtotime($ligne['date_recuperation_mot_passe']));
$DateAujourdhui = time();
 
if ($dateToken < $DateAujourdhui) {	// Si la date est dépassé le délais de 3hrs
	echo 'Token expiré !';
	exit;
}
 
if (!empty($_POST)) {	// Si le formulaire a été soumis
	if (!empty($_POST['mot_de_passe']) && !empty($_POST['password_confirm'])) {	// Si le formulaire est correctement remplit
		if ($_POST['mot_de_passe'] === $_POST['password_confirm']) {	// Si les deux mots de passes sont les mêmes
			// On hash le mot de passe
			$password = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
            $token = $_GET['token'];
			// On modifie les informations dans la base de données
			$query = $pdo->prepare('UPDATE utilisateur SET passwordUtilisateur = ?, token_recuperation_mot_passe = "" WHERE token_recuperation_mot_passe = ?');
			$exec = $query->execute(array($password, $token));
            header("Location: login.php");               
            echo '<script type="text/javascript">alert("Le mot de passe a été changé avec succès!"); </script>';
		} else {	// si les deux mots de passe ne sont pas identiques
			$msg = '<div style="color: red;">Les deux mots de passes ne sont pas identiques.</div>';
		}
	} else {
		$msg = '<div style="color: red;">Veuillez remplir tous les champs du formulaire.</div>';
	}
}
?>

<?php echo $msg; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rénitialiser votre mot de passe</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="main">

<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="container">
        <div class="signup-content">
            <form method="POST" id="oublie-form" class="signup-form">
                <h2 class="form-title">Rénitialiser votre mot de passe</h2>
              
                <div class="form-group">
                    <input type="password" class="form-input" name="mot_de_passe" id="email" placeholder="password"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" name="confirmepassw" id="email" placeholder="password_confirm"/>
                </div>                 
                <div class="form-group">
                    <input type="submit" name="btnSubmit" id="submit" class="form-submit" value="Changer le mot de passe"/>
                </div>
            </form>
        </div>
    </div>
</section>

</div>
<!--
                        <form action="reinitialisation-mot-de-passe.php?token=<?php echo $_GET['token']; ?>" method="post">
                            <label>Mot de passe : <input type="password" name="password" value="" /></label><br />
                            <label>Confirmation du mot de passe : <input type="password" name="password_confirm" value="" /></label><br />
                            <button type="submit">Changer le mot de passe</button>-->
           

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>