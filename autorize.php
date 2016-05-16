<?php
    $f = fopen("users.txt", "r");
   
   $user = array();
    
   
    if ($f) 
    {
        while (!feof($f))
        {
            array_push($user, unserialize(fgets($f)));
            //$user.add(unserialize(fgets($f)));
            //echo $user."<br />";
        }
    }   
 var_dump($user);
fclose($f);

$isEst = false;

foreach ($user as $key => $value) {
    
    echo " value username : " . $value['username'] . "\n";
    echo " value password : " . $value['password'] . "\n";
    if($_POST['username'] == $value['username'] && $_POST['password'] == $value['password'])
      {
        echo  "\n POST username : " . $_POST['username'] . " ";
         echo  "\n POST password : " . $_POST['password'] . " ";
        echo "est takoy";
        $isEst = true;
        break;
      }
 
}
      
       
   if($isEst)
   {
       echo "Est Takoy";
   }
    else
    {
        echo "Net Takogo";
    }

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
       <form action="" method="post">
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">UserName:</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username">
</div>



<div class="input-group">
  <span class="input-group-addon">Password :</span>
  <input type="text" class="form-control" placeholder="********" aria-label="Amount (to the nearest dollar)" name="password">
  <span class="input-group-addon">need more then 6 symbols</span>
</div>

     <button type="submit">
       SUBMIT
        
     </button>
     </form>
      </body>
</html>