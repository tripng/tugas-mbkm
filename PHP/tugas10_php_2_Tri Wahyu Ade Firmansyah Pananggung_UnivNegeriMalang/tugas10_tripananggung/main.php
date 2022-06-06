<?php 
    if(isset($_GET['hal'])){
        $r = $_GET['hal'];
        if($r == 'home') require_once $r.'.php';
        else if($r == 'about') require_once $r.'.php';
        else if($r == 'contact') require_once $r.'.php';
        else if($r == 'pendidikan') require_once $r.'.php';
        else if($r == 'gallery') require_once $r.'.php';
        else require_once 'error.php';
    }
    else require_once 'home.php';
?>