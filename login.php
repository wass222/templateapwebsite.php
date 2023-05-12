
<?php
require_once('dbconnect.php');

function chercher_email($mail,$champs){
  include('dbconnect.php');
  $stmt = $connexion->prepare("SELECT * FROM utilisateur WHERE ".$champs."=?");
  $stmt->execute([$mail]); 
  $user = $stmt->fetch();
  if ($user) {
      return true;
  }else{
  return false;
  }
}
function chercher_passward($passward,$userEmail, $champs){
  include('dbconnect.php');
  $stmt = $connexion->prepare("SELECT `id_utilisateur`, `nom_utilisateur`, `email_utilisateur`, `mot_de_passe` FROM utilisateur WHERE ".$champs."=?");
  $stmt->execute([$userEmail]); 
  $hash = $stmt->fetch();   
  if (password_verify($passward, $hash[3])) {
$_SESSION['id_utilisateur']=$hash[0];
      return true;
  }else{
  return false;
  }
}
session_start();
include('dbconnect.php');

if(isset($_POST['connecter'])){
  $uname = $_POST['email_utilisateur'];
  $password = $_POST['mot_de_passe'];
  if (empty($uname)) {
      $resmail='<div class="alert alert-danger " role="alert">
      Chanp Email est obligatore !</div>';
  }elseif (empty($password)) {
      $respw='<div class="alert alert-danger " role="alert">
      Chanp mot de pass est obligatore !</div>';
  }
  
  $userEmail = (isset($_POST['email_utilisateur'])) ? $_POST['email_utilisateur'] : null;
  $userPassword = (isset($_POST['mot_de_passe'])) ? $_POST['mot_de_passe'] : null;

  if(!empty($userEmail)&&!empty($userPassword)){
      if (chercher_email($userEmail,'email_utilisateur')==true) {
          if (chercher_passward($userPassword, $userEmail,'email_utilisateur')==true) {
              
    header('Location: indexx.php');              
          }else{echo '<script type="text/javascript">alert("Le mot de passe est invalide."); </script>';}
      }else{echo '<script type="text/javascript">alert("L\'email n\'existe pas"); </script>';}
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
        body{
  display: flex;
  justify-content:center;
  flex-direction: columns;
  align-items: center;
  background-color: #f5f5f5;
  font-family: 'Roboto', sans-serif;
}
form {
  margin-top: 20px;
  background-color: #fff;
  padding: 40px 60px;
  border-radius: 10px;
  min-width: 300px;
}
form h1{
  color: #eb7371;
  text-align:center;
}
form .social-media{
  margin-top: -10px;
  display: flex;
  flex-wrap:wrap;
  justify-content:center;
}
form .social-media p{
  padding: 5px;
  width: 20px;
  margin-left: 10px;
  border-radius: 100%;
  border: 1px solid #545454;
  text-align: center;
  cursor:pointer;
  color: #545454;
}
form p.choose-email{
  text-align:center;
}
form .inputs {
  display: flex;
  flex-direction: column;
}
form .inputs input[type='email'], input[type='password']{
  padding: 15px;
  border:none;
  border-radius: 5px;
  background-color:#f2f2f2;
  outline:none;
  margin-bottom: 15px;
}
form p.inscription{
  font-size: 14px;
  margin-bottom: 20px;
  color: #878787;
}
form p.inscription span{
  color: #eb7371;
}
form button{
  padding: 15px 25px;
  border-radius: 5px;
  border:none;
  font-size: 15px;
  color: #fff;
  background-color: #eb7371;
  outline:none;
  cursor:pointer;
}

           form{
            padding: 100px;
            background-color: #343a40;
           }
           
           
    


        </style>
<body>
<form action="" method="POST">
     
     <h1>Se connecter</h1>
     
     <div class="inputs">
       <input type="email" placeholder="Email" name="email_utilisateur" />
       <input type="password" placeholder="Mot de passe" name="mot_de_passe">
     </div>
     
     <div align="center">
     <div class="">
    <a href="inscription.php">inscription</a></div> <br>

     <div align="center">
     <div class="">
    <a href="mot-de-passe-oublie.php">Mot de passe oublié?</a></div> <br>

       <button type="submit" name="connecter" value="Se connecter">Se connecter</button>
       <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
     </div>
   </form>
 </body>
 </html>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/4d3ae3eaa5.js" crossorigin="anonymous"></script>
        

    </body>
</html>