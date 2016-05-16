<?php
require('pages.php');
$id = $_GET['id'];
foreach($pages as $p)
{
    if($p['id']==$id)
    {
        $title = $p['name'];
        $link = $p['link'];
    }
}

//var_dump($pages);


?>
  <html>
   <title>

   </title>
   <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
       

       
       
   </head>
    <body>
        <?php
            echo '<ul class="nav nav-pills" role="navigation">';
            
            foreach($pages as $key)
            {
                
                echo "<li role='presentation'>";
                echo "<a href='index2.php?id=" . $key['id'] . "' >" . $key['name'] . "</a>";
             
                echo "</li>";
            }
            echo "</ul>";
         ?>
         <div id="title">
             <h1>
                 <?=$title?> 
             </h1>
            
         </div>
        <?php
         //<div id="content">
             //<?php
            //  include($link);
          //   ?>
        // </div>
      ?>
    </body>
</html>
