<?php

	session_start();
?>

<html>

<head>
	<title>Chess Game LogIn</title>
	<link href = "Login.css" rel = "stylesheet">
</head>
<body>

<center>

<h2>Sign in or Register here</h2>
<form action="/action_page.php">
  <div class="imgcontainer">
    <img src="https://cdn3.iconfinder.com/data/icons/brain-games/1042/Chess-Game.png alt="Chess Icon" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
	</br>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
	</br>
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</center>
</body>

</html>