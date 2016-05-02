<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<? 
$Find=file_get_contents("../Support/text.json");
$data = json_decode($Find, TRUE);
$userName = $_POST["name"];
$rest=$_POST["rname"];
	$data['Restaurants'][] = array($_POST["rname"]=>array("Comments"=>array(array($userName=>($_POST["review"])))));
    if ($_POST){//always check, to avoid noticed
        file_put_contents('../Support/text.json', json_encode($data,JSON_PRETTY_PRINT));
    }

?>
</head>

<body>
Thank you for submitting <?=$rest?>
<br>
<form action="http://jtwebproductions.com/jmcclanahan/untitled%20folder/Untitled-30.php">
<input type="submit" value="Click here to go Back">
</form>

</body>
</html>