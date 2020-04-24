<?php
session_start();
mail("projet-alpha@yopmail.com","contact","bonjour Mr ou Mme ".$_POST["name"] ." vient de nous contacter via cette adresse mail: ".$_POST["email"]. "\n" . " voici le message: ".$_POST["message"]);