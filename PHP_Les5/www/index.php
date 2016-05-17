<?php
//phpinfo();

   // var_dump($GLOBALS);

$GLOBALS['_server'];

var_dump($_REQUEST);


?>
<html>
   <title>
        <?php 
    if($_SERVER["REQUEST_METHOD"]=='POST')
        {
            echo trim(strip_tags($_POST['id']));
        }
    ?>
   </title>
    <body>
        ID: <?= trim(strip_tags($_POST['id']));?>
        <form action="" method="Post">
   <input type="text" name="id">
   <input type="submit">
    
</form>
    </body>
</html>
