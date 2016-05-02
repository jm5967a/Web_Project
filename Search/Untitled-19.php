<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<script src="proj.js" type="text/javascript"></script>
</head>
<body>
<form method="post">
<input type="text" name="name">
<input type="submit">
</form>
<div id="add"> 
</div>
<?
$send=array();
$found=0;
if (isset($_POST["name"]) && !empty($_POST["name"])){
  $Find=file_get_contents("../Support/text.json"); 
  $data = json_decode($Find,true);
  for($i=0;$i<sizeof($data["Restaurants"]);$i++){
    $y= (array_keys($data["Restaurants"][$i]));
	$key=$y[0];
	$check=$data["Restaurants"][$i][$key]["Comments"];
	for ($k=0;$k<sizeof($check);$k++){
		$test=$data["Restaurants"][$i][$key]["Comments"][$k][0];
		$value = (array_keys($check[$k]));
		$x=array_keys($check[$k]);
		if ((strtolower($x[0]))==strtolower($_POST["name"])&&(strtolower($_POST["name"])!="anonymous")){
			$found=1;
			$value = (array_values($check[$k]));
			array_push($send,$key. ": " . $x[0] . "-" . $value[0] . "<br \>");
			 }}}
	if ($found==1){
?>

<script>
  var JSDATA = <?=json_encode($send, JSON_HEX_TAG | JSON_HEX_AMP )?>; 
  main(JSDATA);
</script>
<?
	}
	else if ($found==0){
		
 $sends="Not found";
  ?>
    <script>
  var JSDATA = <?=json_encode($sends, JSON_HEX_TAG | JSON_HEX_AMP )?>; 
  nofound(JSDATA);
</script>
<?
	}
}
		
	
	?>
</body>
</html>