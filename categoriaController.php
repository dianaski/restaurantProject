<?php

require_once "model/DAO/CategoriaDao.php";

if(isset($_POST['action'])){
    $action= $_POST['action'];
    $catrgoriaDao= new CategoriaDao();

    switch($action){
        case 'insertCategoria':
            $categoria= htmlspecialchars($_POST['nomeCategoria']);
            $categoria= trim($categoria);
            $categoria= strtolower($categoria);
            $categoria= ucfirst($categoria);
            $numerazione= htmlspecialchars($_POST['numerazioneCategoria']);
            $cat= new Categoria(0, $categoria, $numerazione);
            $catrgoriaDao->insertCategoria($cat);
            header("location:addCategoria.php");
            break;
        case 'deleteCategoria':
            $id= $_POST['idToDelete'];
            $catrgoriaDao->deleteCategoria($id);
            header("location:addCategoria.php");
            break;
    }
}


?>