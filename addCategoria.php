<?php

session_start();
require_once "model/DAO/CategoriaDao.php";
if(isset($_SESSION['login']) && $_SESSION['login']=='admin'){
    $title= "Aggiungi Categoria";
    $page= "admin/addCategoria";
    
    $categoriaDao= new CategoriaDao();
    $categoria= $categoriaDao->orderCategoria();
    include "view/layout.html.php";
}else{
    header("location:index.php");
}



?>
