<?php
session_start();

require_once "model/DAO/PiattoDao.php";
require_once "model/DAO/CategoriaDao.php";

if(isset($_SESSION['login']) && $_SESSION['login']=='admin'){
    $title= "Aggiungi nuovo Piatto";
    $page= "admin/addPiatto";
    $categoriaDao= new CategoriaDao();
    $categoria= $categoriaDao->getNomeCategorie();
    include "view/layout.html.php";
}else{
    header("location:login.php");
}

?>