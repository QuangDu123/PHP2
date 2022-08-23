<?php
    function view($view, $masterview, $data=[]){
        return require_once './views/'.$masterview.".php";
    }

    function asset($assetname){
        return "/public/".$assetname;
    }
    function upload($file, $pathUpload){
        $filename = $file['name'];
        $path = $pathUpload . "/" . $filename;
        move_uploaded_file($file['tmp_name'], $path);
        return $filename;
    }
?>