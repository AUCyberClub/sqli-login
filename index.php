<?php
error_reporting(E_ALL);
// error_reporting(E_ALL) ile aynı;
ini_set('error_reporting', E_ALL);

include("baglan.php");
if($_GET["username"]){
$username = $_GET["username"];
$password = $_GET["password"];
$q = mysql_query("SELECT * from user where username='$username' AND password='$password'");
	if(mysql_num_rows($q)){
		echo "Giriş Yapıldı!";
	}else{
		echo "Yanlış giriş!!";
	}
}
?>
<div id="content">
	<form method="get">
		Username <input type="text" name="username"/><br>
		Password <input type="password" name="password"/><br>
		<input type="submit" value="Login!"/>
	</form>
</div>