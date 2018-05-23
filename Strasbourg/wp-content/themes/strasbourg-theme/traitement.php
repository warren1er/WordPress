<?php 
$mail = $_POST['mail']; //adresse de destination 

//filtre de serveurs 
if(!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#",$mail))
{
    $passage_ligne ="\r\n"; 
}
else{
    $passage_ligne ="\n"; 
}

//============== declaration des message au format texte et au format html 
$message_txt = "Bonjour nous avons bien reçu votre demande."; 
$message_html = "<html><head></head><body><p>Bonjour nous avons bien reçu votre demande</p></body></html>" ;

// creation de la boundary ou frontiere 
$boundary= "-----=".md5(rand());

//definition du sujet 
$sujet = $_POST['titre']; 

//Declaration de l'expediteur
    $header = "From: \"La vile de strasbourg\"<kbousardo@gmail.com>".$passage_ligne; 
//declaration de l'adresse de retour 
    $header.="Reply-to: \"La vile de strasbourg\" <kbousardo@gmail.com>".$passage_ligne; 
//declaration del a version MIME
    $header.="MIME-Version: 1.0".$passage_ligne;
//declaration du content-type 
$header.= "Content-Type: multipart/alternative;".$passage_ligne."boundary=\"$boundary\"".$passage_ligne; 
  

//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
//==========

var_dump($_POST['message']); 
?>