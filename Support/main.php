<?php  
$Find=file_get_contents("../Support/text.json");

	$data = json_decode($Find, TRUE);
	
$send=array();

$check=0;
echo ($_POST["rname"]);
for($i=0;$i<sizeof($data["Restaurants"]);$i++){
		$y= (array_keys($data["Restaurants"][$i]));
		if (strtolower($y[0])==strtolower($rnamesend)){
			$name=$y[0];
			$found=$i;
			$check=1;
			break;
			
	}}
if ($check==1){
	for($i=0;$i<sizeof($data["Restaurants"][$found][$name]["Comments"]);$i++){
	$y= (array_values($data["Restaurants"][$found][$name]["Comments"][$i]));
	$x=array_keys($data["Restaurants"][$found][$name]["Comments"][$i]);
	array_push($send,$x[0] . "-" . $y[0] . "<br \>");
	}
?>

<script>
	var JSDATA = <?=json_encode($send, JSON_HEX_TAG | JSON_HEX_AMP )?>; 
	main(JSDATA);
</script>
<?
	
}
else{
	$sends="Not found";
	?>
    <script>
	var JSDATA = <?=json_encode($sends, JSON_HEX_TAG | JSON_HEX_AMP )?>; 
	nofound(JSDATA);
	</script>
    <?
	}
?>
<?
	
if (isset($_POST["name"]) && !empty($_POST["name"])){
	
	$Find=file_get_contents("../Support/text.json");
	$obj = json_decode($Find,true);
	for($i=0;$i<sizeof($obj["Restaurants"]);$i++){
		$y= (array_keys($obj["Restaurants"][$i]));
		if (strtolower($y[0])==strtolower($_POST["rname"])){
			$rname=$y[0];
			$found=$i;
			$check=1;
			break;
			
	}}
	if ($check==1){
		
		$data['Restaurants'][$found][$rname]["Comments"][] = array($_POST["name"]=>($_POST["interest"]));
	
		
	}
	else{
$data = json_decode($Find, TRUE);
$userName = $_POST["name"];
$rest=$_POST["rname"];
	$data['Restaurants'][] = array($_POST["rname"]=>array("Comments"=>array(array($userName=>($_POST["interest"])))));
	}
    if ($_POST){
        file_put_contents('../Support/text.json', json_encode($data,JSON_PRETTY_PRINT));
		echo '<script>window.parent.location = window.parent.location.href;</script>';
    }


else echo "";
}


?>