<?php include "base.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
 
<title>Website Development Assignment)</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>  
<body>  
<div id="main">
<?php
if(!empty($_POST['UserName']) && !empty($_POST['Password']))
{
    $UserName = mysql_real_escape_string($_POST['UserName']);
    $Password = md5(mysql_real_escape_string($_POST['Password']));
    $EmailAddress = mysql_real_escape_string($_POST['EmailAddress']);
     
     $checkusername = mysql_query("SELECT * FROM user WHERE UserName = '".$UserName."'");
      
     if(mysql_num_rows($checkusername) == 1)
     {
        echo "<h1>Error</h1>";
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
     }
     else
     {
        $registerquery = mysql_query("INSERT INTO user (UserName, Password, EmailAddress) VALUES('".$UserName."', '".$Password."', '".$EmailAddress."')");
        if($registerquery)
        {
            echo "<h1>Success</h1>";
            echo "<p>Your account was successfully created. Please <a href=\"index2.php\">click here to login</a>.</p>";
        }
        else
        {
            echo "<h1>Error</h1>";
            echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
        }       
     }
}
else
{
    ?>
     
   <h1>Register</h1>
     
   <p>Please enter your details below to register.</p>
     
    <form method="post" action="register.php" name="registerform" id="registerform">
    <fieldset>
        <label for="UserName">Username:</label><input type="text" name="UserName" id="UserName" /><br />
        <label for="Password">Password:</label><input type="password" name="Password" id="Password" /><br />
        <label for="EmailAddress">Email Address:</label><input type="text" name="EmailAddress" id="EmailAddress" /><br />
        <input type="submit" name="register" id="register" value="Register" />
    </fieldset>
    </form>
     
    <?php
}
?>
 
</div>
</body>
</html>