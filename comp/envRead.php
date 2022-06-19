<?php

    function env() {
        $myfile = fopen(".env", "r") or die("Unable to open file!");
        $fileData = fread($myfile,filesize(".env"));
        fclose($myfile);
        return json_decode($fileData, true);
    }

?>