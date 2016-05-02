<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">  
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css"> 
<link rel="stylesheet" type="text/css" href="http://jtwebproductions.com/jmcclanahan/Ambar/Ambar.css">
<link rel="stylesheet" type="text/css" href="../css.css">
<script src="test.js" type="text/javascript"></script>
</head>
<body id="body" >
<div style="width:1200px; text-align:center; margin-left:auto; margin-right:auto; overflow:auto">
	<h1 id="h1">Ambar </h1>
	<img src="ambar.jpg" alt="ambar" id="amb"/>
	<div id="div1">
		<p style="">With the ambitious mission to bring the first modern, international Balkan cuisine restaurant to DC, Ambar is a nice contrast between traditional Balkan cuisine and culture with a subtle modern twist with its rustic repurposed wood and redefined dishes. Going to Ambar is just as much about the relaxed yet refined atmosphere as it is about its indulgent “small plates” such as urnebes (cow cheese with ajvar and chili flakes) or the smoked trout with pickled jalapeno with cilantro and mayo. If tasting multiple dishes isn’t your thing, Ambar also serves entrees and burgers with Balkan inspired ingredients. This is the perfect place to take foodies to or people who don’t mind a little spice in their food.</p>
	</div>
    <? include("http://jtwebproductions.com/jmcclanahan/header.html"); ?>
	<div id="clear"></div>
	<div id="hours">  
        <p>Sunday:10am-3:30pm, 4-11pm</p>
        <p>Monday: 11am-2pm,4-10pm</p>
        <p>Tuesday: 11am-2pm,4-10pm</p>
        <p>Wednesday: 11am-2pm,4-10pm</p>
        <p>Thursday: 11am-2pm,4-10pm</p>
        <p>Friday: 11am-2pm,4-10pm</p>
        <p>Saturday:10am-3:30pm, 4-11pm</p>
	</div>
	<div name="input" action="" method="get">
 	<td>
    <form method="post">
    <? if(isset($_COOKIE["jtweb"])) { ?>
       <input type="text" name="name" value="<?=$_COOKIE["jtweb"]?>" class="first-name" placeholder="username" size="25" style="visibility:hidden">
       <? } else if(!isset($_COOKIE["jtweb"])) { ?>
		  <input type="text" name="name" class="first-name" value="Anonymous" placeholder="username" size="25" style="visibility:hidden">
	  <? } ?>
       </td><textarea rows="10" name="interest" id="comment" placeholder="Comment"></textarea>
       <input type="text" name="rname" value="Ambar" style="visibility:hidden">
       <input type="submit" value="Submit" id="submit">
     </form>
    </div> 
</div>
</div>
    <div id="add"; style="width:620px;word-wrap:break-word; position:relative; left:100px">
</div>
<? global $rnamesend; $rnamesend="Ambar"; include("../Support/main.php"); ?>
</body>
</html>