<?php
session_start();
if (isset($_SESSION['user'])) {
    
 $sessie = $_SESSION['user'];
    echo "<font color='green'>Logged in as $sessie</font>";

    
}

else {
    
 echo "Not logged in";   
}

     

?>

<html>
    <head>
    <title>Login pagina</title>
        <link href="style1.css" rel="stylesheet" type="text/css">
    
    </head>
<body>
    
    
       
    <legend><li class='active'><a id="ewa" href='indexSIGNOUT.php' title="Go back"><span>FRICS</span></a></li></legend>
    <hr>
        <section class="loginform cf">    
<form action="" method="POST">
   

    <p style="color:white"> CHECK ALL THE USERS THAT ARE LOGGED IN.</p>
   
        <a href="dump_password_textfile.php"><input type="button" id="hey" value="Check all the users"</a>
            
        <a href="indexSIGNOUT.php"><input type="button" id="hey" value="Go Back"</a>
</form>
    </section>

</body>
</html>


