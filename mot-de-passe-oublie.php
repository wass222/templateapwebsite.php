<?php
define('DB_HOST', 'localhost');     // l'hôte de la base de données MySQL
define('DB_NAME', 'formationweb');    // le nom de la base de données MySQL
define('DB_USER', 'root');    // le nom d'utilisateur MySQL
define('DB_PASSWORD', '');    // le mot de passe MySQL
define('DB_CHARSET', 'utf8');    // le jeu de caractères pour la base de données MySQL
?>
<?php
session_start();
include('connexion.php');
include('fonctions.php');
if(isset($_POST['btnSubmit'])){

    $email_utilisateur = (isset($_POST['email_utilisateur'])) ? $_POST['email_utilisateur'] : null;
    if(!empty($email_utilisateur)){
        if (chercher_email($email_utilisateur,'email_utilisateur')===true) {
            //On génère un token
            $string=implode('',array_merge(range('A','Z'),range('a','z'),range('0','9')));
            $token = substr(str_shuffle($string),0,20);
            //On insère la date et le token dans la BD
            $stmt = $pdo->prepare('update utilisateur set date_recuperation_mot_passe=now(),
            token_recuperation_mot_passe=? where email_utilisateur = ?');
            $exec = $stmt->execute(array($token,$email_utilisateur));
            //On prépare l'envoie du courrier
            $link='http://127.0.0.1/php/authentification/cryptermotpasse/inscription/reinitialisation-mot-de-passe.php?token='.$token;
            $to='wassimosbenfraj@gmail.com';
            $sujet='Rénitialisation de votre mot de passe';
            $message='<h1>Réinitialisation de votre mot de passe</h1>
            <p>Pour rénitialiser votre mot de passe, veuillez suivre ce lien : <a href="'.$link.'">'.$link.'</a></p>';
            //On défini les entêtes requis
            $header = [];
            $header[]='From: wassimosbenfraj@gmail.com';
            $header[]='MIME-Version: 1.0';
            $header[]='Content-Type: text/html; charset=utf-8';
            $header[]='To: '.$to.' <'.$to.'>';
            
            //On envoie le courrier
            if(mail($to,$sujet,$message, implode("\r\n",$header))){
            echo '<script type="text/javascript">alert("Email envoyé avec succès à $to ...");</script>';
                } else {
                    echo '<script type="text/javascript">alert("Échec de l\'envoi de l\'email...");</script>';
                }
            /*$message='<div style="color:green;"> Un courrier à été acheminé.
            Veuillez regarder votre boîte aux lettres et suivre les instructions à 
            l\'interieur du courrier.</div>';*/
            //echo 'gfgfgfgfg'.$to.$sujet.$message;
            //echo '<script type="text/javascript">alert("Un courrier à été acheminé"); </script>';
        }else{echo '<script type="text/javascript">alert("L\'email n\'existe pas"); </script>';}
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Main css -->
    
</head>
<style>
    /* Reset default margin and padding for all elements */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Set body font and background color */
body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
}

/* Center the container element */
.main {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* Style the form element */
form {
  background-color: #fff;
  padding: 50px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Style the form title */
.form-title {
  margin-bottom: 30px;
  text-align: center;
}

/* Style the form input fields */
.form-input {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

/* Style the form submit button */
.form-submit {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

/* Style the form submit button on hover */
.form-submit:hover {
  background-color: #3e8e41;
}

</style>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="oublie-form" class="signup-form">
                        <h2 class="form-title">Rénitialiser votre mot de passe</h2>
                      
                        <div class="form-group">
                            <input type="email" class="form-input" name="email_utilisateur" id="email" placeholder="Votr Email"/>
                        </div>
                                         
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" id="submit" class="form-submit" value="Envoyez-moi un mot de passe aléatoire"/>
                            
                        </div>
                    </form>
                    <p class="loginhere">
                        Vous avez oublié ? <a href="login.php" class="loginhere-link">Retour</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>