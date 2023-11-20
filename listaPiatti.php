<?php
session_start();

require_once "model/DAO/CategoriaDao.php";
require_once "model/DAO/PiattoDao.php";
require_once "model/DAO/UtenteDao.php";

$title= "Il nostro Menu";
$page= "listaPiatti";

$piattoDao= new PiattoDao();

$piatto= $piattoDao->getAllCateOrdinata();

$categoriaDao= new CategoriaDao();
$categoriaSezioni= $categoriaDao->orderCategoria();

$utenteDao= new UtenteDao();
$utente= $utenteDao->getAllUser();




include "view/layout.html.php";

?>