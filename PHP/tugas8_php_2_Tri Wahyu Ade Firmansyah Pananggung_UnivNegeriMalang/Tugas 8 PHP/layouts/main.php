<div class="about-me ms-5 mt-3">
    <?php
        (!isset($_REQUEST['hal']) || $_REQUEST['hal'] == 'home') ? require_once 'home.php'
        : ($_REQUEST['hal'] == 'about' ? require_once $_REQUEST['hal'].'.php'
        : ($_REQUEST['hal'] == 'education' ? require_once $_REQUEST['hal'].'.php'
        : ($_REQUEST['hal'] == 'gallery' ? require_once $_REQUEST['hal'].'.php'
        : ($_REQUEST['hal'] == 'contact' ? require_once $_REQUEST['hal'].'.php'
        : require_once 'alert.php'))));
    ?>
</div>