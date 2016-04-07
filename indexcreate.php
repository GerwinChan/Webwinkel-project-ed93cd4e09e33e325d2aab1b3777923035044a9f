<?php

if (isset($_POST['submit_btn']))
    
{
 $username = $_POST['name'];
 $password = $_POST['pwd'];
 $text = $username . "||" . $password . "||";
 $fp = fopen('accounts.txt', 'a+');
    
    
    if (fwrite($fp, $text)) {
     echo "<font color='green'>Saved</font>";  
        
    }
    fclose ($fp);
}
?>



   
<html>
    <head>
    <title>Login pagina</title>
        <link href="style1.css" rel="stylesheet" type="text/css">
    
    </head>
<body>
    
    
        <a href="index.php"><input type="image" src="Afbeeldingen/logout-512.png" id="button3" value="Log in"</a>
    <legend><li class='active'><a id="ewa" href='index.php'><span>FRICS</span></a></li></legend>
    <hr>
        <section class="loginform cf">    
<form action="" method="POST">
    <h1 style="color:white"> Please enter your information to create a new login account</h1>
 <p>
     <label>Login Name:</label><input type="email" name="name" placeholder="Yourname@email.com" />
     <label>Password:</label><input type="password" name="pwd" placeholder="Password"/>
    <br/>
    <br/>
</p>
    
    <p style="color:white">SAVE YOUR INFORMATION FIRST AND THEN LOG IN!</p>
   <input type="submit" name="submit_btn" id="submit" value="Save"/>
     <input type="reset" id="reset" value="reset"/>
        <a href="indexlogin.php"><input type="button" id="button2" value="Log in"</a>
</form>
    </section>

</body>
</html>