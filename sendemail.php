<?php

$message='';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
$res=''; 
if (isset($_POST['b1'])) {
    if (!empty($_POST['email_utilisateur'])) {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host='Smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username = "wassimosbenfraj@gmail.com";
        $mail->Password = "skawxctlbjwezlyg";
        $mail->SMTPSecure="ssl";
        $mail->Port=465;
        
        $mail->setFrom('wassimosbenfraj@gmail.com');

        $mail->addAddress($_POST["email_utilisateur"]);

        $mail->isHTML(true);
        $stmt =$connexion-> prepare('SELECT COUNT(*) AS NB FROM utilisateur WHERE  `email_utilisateur`= ?');
        $stmt->bindValue (1, $_POST['email_utilisateur']);
        $stmt->execute();

        $ligne =$stmt->fetch (PDO::FETCH_ASSOC);
        if (!empty($ligne)&& $ligne['NB']>0) {
        $string = implode('', array_merge(range('A','Z'), range('a','z'), range('0','9')));
        $token = substr(str_shuffle ($string), 0, 20);

        $stmt = $connexion->prepare('UPDATE utilisateur SET date_damande_recuperation_pwd =
            NOW(), utilisateur.`pwd_recuperation_token` = ? WHERE email_utilisateur = ?');
            $stmt->bindValue(1, $token);
            $stmt->bindValue (2, $_POST['email_utilisateur']); 
            $stmt->execute();

            $link = 'http://127.0.0.1/may/mon%20projet/newlogin.php?token=' . $token;
            $mail->Subject = 'confirmation Email';
            $mail->Body = $message = '<h1>Confirmez l\'adresse e-mail de votre compte Apppedagogie</h1><p>Votre compte est presque prêt, Nous avons juste besoin que vous confirmiez votre adresse e-mail pour terminer votre configuration ! Promis, ça ne prendra qu\'une seconde.==> <a href="' . $link . '">' . $link . '</a></p>';
            $mail->send();
            echo "<script>alert('sent successfully');document.location.href= 'index.php'</script>";
        }
    }
}
?>