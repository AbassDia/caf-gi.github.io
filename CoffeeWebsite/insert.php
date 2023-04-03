<?php
include"coffe.php";

if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["phone"]) )&& isset($_GET["mail"]) 
{
$nom= $_GET["nom"];
$prenom= $_GET["prenom"];
$phone= $_GET["phone"];
$mail= $_GET["mail"];

$req= mysqli_query($link, "insert into user(nom,prenom,tel,mail) values('$nom' '$prenom''$phone' '$mail')");

if($req)
{
    echo"insertion effectuée";
}else{
    echo" erreur d'insertion";
}
}












?>