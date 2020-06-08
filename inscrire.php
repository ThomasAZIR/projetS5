<?php
include 'connexion.php';
session_start();



if (isset($_POST['nom_client'])) {$nom_client=$_POST['nom_client'];}
if (isset($_POST['prenom_client'])) {$prenom_client=$_POST['prenom_client'];}
if (isset($_POST['adresse_client'])) {$adresse_client=$_POST['adresse_client'];}
if (isset($_POST['mail_client'])) {$mail_client=$_POST['mail_client'];}
if (isset($_POST['mdp_client'])) {$mdp_client=$_POST['mdp_client'];}
//if (isset($_POST['status'])) {$status=$_POST['isncription'];}

$valid1=true;

$_SESSION['rnom_client']=$_POST['nom_client'];
$_SESSION['rprenom_client']=$_POST['prenom_client'];
$_SESSION['rmail_client']=$_POST['mail_client'];


$insert=$objPdo->prepare ("INSERT INTO Client VALUES(nom_client,prenom_client,adresse_client,mail_client,mdp_client) VALUES(?,?,?,?,?)");
$insert->execute(array($nom_client,$prenom_client,$adresse_client,$mail_client,$mdp_client));


?>