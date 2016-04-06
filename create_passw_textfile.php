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

<form action="" method="POST">
    <h1> Please enter your information to create a new login account</h1>
 <p>
     <label>Login Name:</label><input type="text" name="name" />
     <label>Password:</label><input type="password" name="pwd" />
    <br/>
    <br/>
</p>
    
    <p>SAVE YOUR INFORMATION FIRST AND THEN LOG IN!</p>
   <input type="submit" name="submit_btn" id="submit" value="Save"/>
     <input type="reset" id="reset" value="reset"/>
        <a href="check_passw_textfile_session.php"><input type="button" id="button2" value="Log in"</a>
</form>

