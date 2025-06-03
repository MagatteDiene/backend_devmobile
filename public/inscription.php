<?php

header("Content-type: application/json");

$mysqli = new mysqli("localhost","root","Passer2024","backend_devmobile");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
//echo "connexion est ok" ;

 $reponses="";

if(!empty($_POST["nom"]) && !empty($_POST["prenom"])&&  !empty($_POST["username"])&&  !empty($_POST["password"])) {
    // requete sql

    $sql = "insert into users(nom ,prenom , username, password) values ('".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["username"]."','".$_POST["password"]."')";
    
   //  echo "request sql=  ".$sql ;
    $result = $mysqli -> query($sql);  
     
        $reponses= "{'message': 'inscription ok '}";
}else{
    $reponses="merci de fournir un user_id " ;
}
echo $reponses ;


?>