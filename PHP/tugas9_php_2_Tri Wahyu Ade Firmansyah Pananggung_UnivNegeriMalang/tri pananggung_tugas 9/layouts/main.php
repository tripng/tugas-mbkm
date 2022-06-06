<?php 
    (!isset($_REQUEST['hal']) || $_REQUEST['hal'] == 'home') ? require_once 'home.php'
    : ($_REQUEST['hal'] == 'education' ? require_once $_REQUEST['hal'].'.php'
    : ($_REQUEST['hal'] == 'gallery' ? require_once $_REQUEST['hal'].'.php'
    : ($_REQUEST['hal'] == 'contact' ? require_once $_REQUEST['hal'].'.php'
    : ($_REQUEST['hal'] == 'about' ? header('Location:index.php?hal=home#one')
    : require_once 'layouts/alert.php'))));
?>