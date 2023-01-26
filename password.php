<?php

$password = $_POST['password'];

if ($password === "azerty123456789"){
    echo "Vous avez mit le bon mot de passe : " . $password;
}else{
    echo "erreur";
}