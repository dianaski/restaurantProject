<?php

session_start();

require_once "model/DAO/CategoriaDao.php";
require_once "model/DAO/PiattoDao.php";

$piattoDao= new PiattoDao();

if(isset($_POST['action'])){
    $action= $_POST['action'];

    switch($action){
        case 'insertPiatto':
            $nomePiatto= htmlspecialchars($_POST['nomePiatto']);
            $nomePiatto= trim($nomePiatto);
            $nomePiatto= strtolower($nomePiatto);
            $nomePiatto= ucfirst($nomePiatto);
            $prezzo= $_POST['prezzo'];
            $categoria= $_POST['nomeCategoria'];
            $img= basename($_FILES['fileToUpload']['name']);
            $piatto= new Piatto(0, $nomePiatto, $prezzo, $categoria, $img);
            $checkUpload= checkUploadImage($_FILES);
            $directory= "images/";
            $path_file= $directory.basename($_FILES['fileToUpload']['name']);
            if($checkUpload>0){
                if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $path_file)){
                    $piattoDao->insertPiatto($piatto);
                }
            }
            header("location:listaPiatti.php");
            break;
        case 'deletePiatto':
            $piattoToDelete= $_POST['piattoToDelete'];
            $imgToDelete= $piattoDao->getImgById($piattoToDelete);
            $directory= "images/";
            $pathToDelete= $directory.$imgToDelete;
            if($imgToDelete){
                $piattoDao->deletePiatto($piattoToDelete);
                if(file_exists($pathToDelete)){
                    unlink($pathToDelete);
                    echo "cancellato";
                }else{
                    echo "errore cancellazione file";
                }
            }else{
                echo "file non esiste";
            }
            header("location:listaPiatti.php");
            break;

        case 'updatePiatto':
            if(isset($_POST['id'])){
                $id= $_POST['id'];
                $newNome= htmlspecialchars($_POST['newNomePiatto']);
                $newNome= trim($newNome);
                $newNome= strtolower($newNome);
                $newNome= ucfirst($newNome);
                $newPrezzo= htmlspecialchars($_POST['newPrezzoPiatto']);
                $newCategoria= $_POST['newNomeCategoria'];
               $piattoDao->updatePiatto($newNome, $newPrezzo, $newCategoria, $id);
                  
                header("location:listaPiatti.php");
                break;
            }
         
            
    }



}


    function checkUploadImage($file){
        $upload= 1;
        $directory= "images/";
        $path_file= $directory.basename(($file['fileToUpload']['name']));
        $check= getimagesize($file['fileToUpload']['tmp_name']);
        if($check !== false){
            $upload=1;
        }else{
            $upload=0;
        }

        if(file_exists($path_file)){
            $upload=0;
        }

        $typeFile= strtolower(pathinfo($path_file, PATHINFO_EXTENSION));
        if($typeFile != "jpg" && $typeFile!="jpeg"&& $typeFile!= "png" && $typeFile !="webp"){
            $upload= 0;
        }
        return $upload;
    }


?>