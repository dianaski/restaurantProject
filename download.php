<html>
<head>
    <style>
        .download_btn{
            margin: 10%;
            display: inline-block;
            text-decoration: none;
            padding: 14px 40px;
            color: #fff;
            background-image: linear-gradient(45deg, #D89A9E, #C37D92);
            font-size: 14px;
            border-radius: 30px;
            border-top-right-radius: 0;
        }

        .download_btn a{
            text-decoration: none;
            color: #fff;
            font-size: 15px;
            font-weight: 600;
        }


    </style>
</head>
<body>
    
<div class="download_btn">
                <a href="download.php?file=menu.pdf">Scarica il nostro Menu</a>
</div>
            </body>
            </html>
            <?php

if(!empty($_GET['file'])){
    $filename= basename($_GET['file']);
    $filepath= './files/'.$filename;
    if(!empty($filename) && file_exists($filepath)){
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename= $filename");
        header("Content_Type: application/zip");
        header("Content-Transfer-Encoding: binary");

// read file

readfile($filepath);
exit;

    }
    else{
        echo "Oops! Il file non esiste..!";
    }
}