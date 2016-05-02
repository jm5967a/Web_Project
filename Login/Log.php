<?php
    ob_start(); 
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<span style="float:right;margin-right:15px; position:relative;top:18px;"><a style="color:#F9F9F9;" href="http://jtwebproductions.com/jmcclanahan/Login/Signup.php">New Member?</a></span>
<br>
<form method="post" style="float:right;color:#F9F9F9;position:relative;top:-30px">
Username: <input type="text" name="name">
Password: <input type="password" name="password">
<input type="submit">

</form>
<? 
if (isset($_POST["name"]) && !empty($_POST["name"])){
	$Find=file_get_contents("../Login/users.txt");
	$test=explode("\n",$Find);
	$find;
	for ($i=0;$i<sizeof($test);$i++){
		$user=explode (",",$test[$i]);
		if (strtolower($user[0])==strtolower($_POST["name"])){
			$find=$user;
		}}
		
	if ($find[1]==$_POST["password"]){
		setcookie("jtweb", $_POST["name"], time() + (86400), "/");
		echo '<script>window.parent.location = window.parent.location.href;</script>';
	}
	else{
		echo ('<script> alert("Credentials Invalids"); </script>');
	}}

	?>
</body>
</html>
<?php
    ob_end_flush(); 
?>