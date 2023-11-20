<?php

session_start();
require_once "model/DAO/UtenteDao.php";

$title= "Home Page";
$page= "home";

$utenteDao= new UtenteDao();
$utente= $utenteDao->getAllUser();

   

    // Ottieni l'utente autenticato

   

include "view/layout.html.php";
?>