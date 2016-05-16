<?php
    $user = array(
        "username" => $_POST['username'],
        "password" => $_POST['password']
        
    );
$str = serialize($user);
setcookie("user", $str);
var_dump($str);
var_dump(unserialize($str));
    $f=fopen("users.txt", "a");
    fputs($f, $str . "\n");
    //fgets($f, 3);
            // setcookie("username",$_POST['username']);
            // setcookie("mail",$_POST['mail']);
//var_dump($_COOKIE);
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
  <input type="text" class="form-control" placeholder="Login" aria-describedby="basic-addon2"
  name="mail">
  <span class="input-group-addon" id="basic-addon2" >@gmail.com</span>
</div>

<div class="input-group">
  <span class="input-group-addon">Password :</span>
  <input type="text" class="form-control" placeholder="********" aria-label="Amount (to the nearest dollar)" name="password">
  <span class="input-group-addon">need more then 6 symbols</span>
</div>
        
        <div class="input-group">
  <span class="input-group-addon">Password Again :</span>
  <input type="text" class="form-control" placeholder="********" aria-label="Amount (to the nearest dollar)">
    
</div>
     <button type="submit">
       SUBMIT
        
     </button>
     </form>
      </body>
</html>