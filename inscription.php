<?php
require_once('dbconnect.php');
require_once('config.php');
?>

<?php
if (isset($_POST['signup_submit'])) {
  $nom_utilisateur = $_POST['nom_utilisateur'];
  $email_utilisateur = $_POST['email_utilisateur'];
  $mot_de_passe = $_POST['mot_de_passe'];
  $confirmepassw = $_POST['confirmepassw'];
  $stmt = $connexion->prepare("SELECT * FROM utilisateur WHERE email_utilisateur= :email_utilisateur");
  $stmt->execute(['email_utilisateur' => $email_utilisateur]); 
  $user = $stmt->fetch();

  if ($user) {
    
    echo 'Cet email est déjà utilisé.';
  } else {

    $stmt = $connexion->prepare('INSERT INTO utilisateur (nom_utilisateur, email_utilisateur, mot_de_passe) VALUES ( :nom_utilisateur ,  :email_utilisateur, :mot_de_passe )');
    $stmt->execute(array(
      
      'nom_utilisateur' => $nom_utilisateur,
      'email_utilisateur' => $email_utilisateur,
      'mot_de_passe' => password_hash($mot_de_passe, PASSWORD_DEFAULT),
     
    
    ));
    header('Location: login.php');
    exit();
  }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Projet 06</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

*:focus {
  outline: none;
}



body {
    
  margin: 0;
  padding: 0;
  background: #DDD;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  
}

#login-box {
  position: relative;
  margin: 5% auto;
  width: 600px;
  height: 400px;
  background: #FFF;
  border-radius: 2px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  background-color: #343a40;
}

.left {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
  color:#eb7371;
}

h1 {
  margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 28px;
}

input[type="text"],
input[type="password"] {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="submit"] {
  margin-top: 28px;
  width: 120px;
  height: 32px;
  background: #eb7371;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

input[type="submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

.or {
  position: absolute;
  top: 180px;
  left: 280px;
  width: 40px;
  height: 40px;
  background: #DDD;
  border-radius: 50%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  line-height: 40px;
  text-align: center;
}

.right {
  position: absolute;
  color : #eb7371;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 60px;
  width: 300px;
  height: 400px;

  background-size: cover;
  background-position: center;
  border-radius: 0 2px 2px 0;
}
.right{
  padding: 100px;
  background-color: #f8f9fa;
}
span{
  padding: 10px;
}

 .loginwith {
  display: block;
  margin-bottom: 40px;
  font-size: 28px;
  color: noire;
  text-align: center;
}

button.social-signin {
  margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;
}
           
           
           
         

        



        </style>
<body>

<div id="login-box">
  <div class="left">
    <h1>S'inscrire</h1>
     <form action="" method="POST">
    
    <input type="text" name="nom_utilisateur" placeholder="nom d'utilisateur" required />
    <input type="text" name="email_utilisateur" placeholder="E-mail" required />
    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required />
    <input type="password" name="confirmepassw" placeholder="confirmez le mot passe" required />
    
   <input type="submit" name="signup_submit" value="S'inscrire"> 
  </div>
  
  <div class="right">
  <img src="assets/img/logo100.png">
  </div>
</div>     
</form>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/4d3ae3eaa5.js" crossorigin="anonymous"></script>
        

    </body>
</html>