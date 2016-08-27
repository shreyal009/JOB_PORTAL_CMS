<?php 
    require "includes/dbenvironment.php";
    if(!$installed)   
    {
        echo "<script>alert('Please install our CMS first. Thank You');</script>";

        echo "<script>window.location='install.php';</script>";

    }

?>