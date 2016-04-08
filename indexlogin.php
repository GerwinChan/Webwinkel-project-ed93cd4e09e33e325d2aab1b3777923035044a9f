<?php


if (isset($_POST['submit_btn']))
    
{
 $username = $_POST['name'];  
 $password = $_POST['pwd'];  
    
$userData = file_get_contents('accounts.txt');
    
    $inputUser = $username . "||" . $password;
    
$isItThere = strpos($userData, $inputUser);//zoek naar een match
    
    if ($isItThere === false) {
     echo "<font color='red'>$inputUser staat niet in de lijst</font><br>";
        session_start();
        
        $_SESSION['user'] = "";
        //remove all session var
        session_unset();
        //destroy the session
        session_destroy();
    }
    
    else{
     echo "<font color='green'>$inputUser komt voor op positie $isItThere</font><br>";
        
        session_start();
        $_SESSION['user'] = $username;
        
    }
    
    
    
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
<form action="indexlogin.php" method="POST">
    <h1 style="color:white"> Please enter your information to login</h1>
 <p>
     <label>Login Name:</label><input type="text" name="name" placeholder="Yourname@email.com" />
     <label>Password:</label><input type="password" name="pwd" placeholder="Password" />
    <br/>
    <br/>
</p>
    
    <p style="color:white">SUBMIT FIRST AND THEN CHECK YOUR ACCOUNT!</p>
    
   
        <input type="submit" name="submit_btn" id="submit_btn" value="Submit"/>
       
    <input type="reset" id="reset" value="reset"/>
    <br>
    <br>
     <a href="loggedIn.php"><input type="button" id="button1" value="Check you account"</a>
</form>
</section>
   

</body>
</html>