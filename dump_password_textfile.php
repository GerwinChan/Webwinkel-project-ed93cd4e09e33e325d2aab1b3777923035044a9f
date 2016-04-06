<?php


$userData = file_get_contents('accounts.txt');
echo "ruwe data: ";
echo $userData;
echo "<hr>";
echo "naar array omzetten: ";
$userData = explode("||" , file_get_contents('accounts.txt'));
echo "<hr>print_r <code><pre>";
print_r($userData);
echo"</pre></code>";

?>
<html>
    <head>
    <title>Admin users</title>
     
    
    </head>
<body>
    
    
       
  
    <hr>
        
<form action="" method="POST">
   

   
            
        <a href="loggedIn.php"><input type="button" id="hey" value="Go Back" title="Go Back"</a>
</form>
    

</body>
</html>
