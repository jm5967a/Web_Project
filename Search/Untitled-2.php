<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://jtwebproductions.com/jmcclanahan/untitled%20folder/style.css">
<script src="search.js" type="text/javascript"></script>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<style type="text/css">
body,td,th {
	font-style: normal;
	font-weight: normal;
	color: #081E4E;
}
h1,h2,h3,h4,h5,h6 {
	font-style: inherit;
	font-weight: bold;
	text-align: center;
	width: 98%;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #000000;
}
a:active {
	text-decoration: none;
}
</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/stencil-std:n4:default;lobster-two:n4:default.js" type="text/javascript"></script>

</head><title>DC</title>
<body>
<div class = "header">
  <div class="title"><h1><font color="#F9F9F9">Travel DC</font></h1></div>
  <hr />
</div>
  
    <article>
      <font color="#000000">
</font>
    </article>
    </div>
<div id="add" style="position:relative;left:300px;width:400px;word-wrap:break-word""> 
    </div>
<div class = "menu">
  <ul>
    <p><br>
      <br><br><br><br>
    </p>
    <p><br>
    </p>
<body>


<? include("http://jtwebproductions.com/jmcclanahan/header.html"); ?> 
<?
$send=array();
$found=-1;
if (isset($_POST["name"]) && !empty($_POST["name"])){
  $Find=file_get_contents("../Support/text.json"); 
  $data = json_decode($Find,true);
  $found=-1;
  $key=-1;
  for($i=0;$i<sizeof($data["Restaurants"]);$i++){
    $y= (array_keys($data["Restaurants"][$i]));
	$key=$y[0];
	if(strtolower($key)==strtolower($_POST["name"])){
		$found=$i;
		break;	
	}}
	$check=array();
	if($found!=-1){
		$check=$data["Restaurants"][$found][$key]["Comments"];
		for ($k=0;$k<sizeof($check);$k++){
		$x=array_keys($check[$k]);;
		$value = (array_values($check[$k]));
		array_push($send,$key. ": " . $x[0] . "-" . $value[0] . "<br \>");	
	}
?>
<script>
  var JSDATA = <?=json_encode($send, JSON_HEX_TAG | JSON_HEX_AMP )?>; 
  main(JSDATA);
  
</script>
<?
	
	?>
    </div>
    <div style="position: relative; left: 280px; top: 30px;width:500px">
        <form method="post" action="addj.php">
	<? if(isset($_COOKIE["jtweb"])) { ?>
       	<input type="text" name="name" value="<?=$_COOKIE["jtweb"]?>" class="first-name" placeholder="username" size="25" style="visibility:hidden">
    <? } else if(!isset($_COOKIE["jtweb"])) { ?>
		<input type="text" name="name" class="first-name" value="Anonymous" size="25" style="visibility:hidden">
	  <? } ?>
      <input type="text" name="found" value="<?=$found?>" size="25" style="visibility:hidden">
       <textarea name="review" rows="10" id="comment" style="width:300px; position:relative;right:0px" placeholder="Comment"></textarea>
       <input type="text" name="rname" value="<?=$key?>" style="visibility:hidden">
       <input type="submit" value="Submit" id="submit">
     </form>
     </div>
     <?
	}
	else if ($found==-1){
		
 $sends="Not found";
  ?>
  <div style="position: relative; left: 280px; top: 30px;width:500px">No Reviews Yet! <br> Fill out the form below to add the restaurant!
      <form method="post" action="add.php">
           <? if(isset($_COOKIE["jtweb"])) { ?>
       <input type="text" name="name" value="<?=$_COOKIE["jtweb"]?>" class="first-name" placeholder="username" size="25" style="visibility:hidden">
       <? } else if(!isset($_COOKIE["jtweb"])) { ?>
		  <input type="text" name="name" class="first-name" value="Anonymous" size="25" style="visibility:hidden">
	  <? } ?>
       </td><textarea name="review" rows="10" id="comment" style="width:300px; position:relative;right:185px" placeholder="Comment"></textarea>
       <input type="text" name="rname" value="<?=$_POST["name"]?>" style="visibility:hidden">
       <input type="submit" value="Submit" id="submit">
     </form>
  </div>
<?
	}}
 ?>
</body>
</html>