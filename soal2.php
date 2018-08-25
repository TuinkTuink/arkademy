<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		Username: <input type="text" name="username" pattern ="[a-z]+" title="Hanya boleh menggunakan huruf non kapital."><br>
		Email: <input type="text" name="email" pattern ="[a-z@._-0-9]+" title="Data email tidak valid."><br>
		Telf.: <input type="text" name="phone" pattern ="[+0-9 ]+" title="No handphone tidak valid.">><br>
	<input type="submit" name="input">
	</form>
</body>
</html>

<?php

if(isset($_POST["input"])) 
{
    echo "
        Username :".$_POST['username']."<br>
        Email :".$_POST['email']."<br>
        Telf. : ".$_POST['phone']."<br>
    ";
}

?>

