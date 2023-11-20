<?php

session_start();

require_once "model/DAO/PiattoDao.php";
require_once "model/DAO/CategoriaDao.php";

if(isset($_SESSION['login']) && $_SESSION['login']==='admin'){
    $title= "Aggiorna il tuo Menu";
    $page= "admin/updatePiatto";
    
    $categoriaDao= new CategoriaDao();
    $categoria= $categoriaDao->getNomeCategorie();

    $id= $_GET['updateId'];
    $name= "";

    if(isset($_POST['submit'])){
        $piattoDao= new PiattoDao();
        $piatto= $piattoDao->getPiattiById($id);
        $name= $piatto['nome'];
        $prezzo= $piatto['prezzo'];
    
    
    } else {
        // Se la richiesta POST non è stata inviata, ottieni il nome direttamente dalla query
        $piattoDao = new PiattoDao();
        $piatto = $piattoDao->getPiattiById($id);
        $name = $piatto->getNome();
        $prezzo= $piatto->getPrezzo(); 

    }
  

    include "view/layout.html.php";
}else{
    header("index.php");
}



?>