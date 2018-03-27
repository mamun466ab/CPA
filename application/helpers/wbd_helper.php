<?php

function file_extension($file_name){
    if($file_name){
        $ext = pathinfo($file_name);
        $ext = strtolower($ext['extension']);
        return $ext;
    }
}

?>