<?php

try{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=ppe_gmail', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
    
    $reponse = $bdd->query('INSERT INTO compte (nom, prenom, mail, password) VALUES (\''.$_POST['nom'].'\', \''.$_POST['prenom'].'\', \''.$_POST['mail'].'\', \''.$_POST['password'].'\')';

    $reponse->closeCursor();

    }catch(Exception $e)
     {
         die('Erreur : '.$e->getMessage());
     }
?>