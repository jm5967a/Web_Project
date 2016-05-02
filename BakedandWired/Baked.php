<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">  
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css"> 
<link rel="stylesheet" type="text/css" href="Restaurant.css">
<link rel="stylesheet" type="text/css" href="../css.css">
<script src="http://jtwebproductions.com/jmcclanahan/Ambar/test.js" type="text/javascript"></script>
</head>
<body id="body" >
<div style="width:1200px; text-align:center; margin-left:auto; margin-right:auto; overflow:auto">
	<h1 id="h1">Baked and Wired Review</h1>
	<img src="BakedandWired.jpg" alt="Baked and Wired" id="BW"/>
	<div id="div1">
		<p>Baked and Wired is an upscale cupcake institution in the heart of Georgetown. With its relaxed atmosphere and tasty sweets, it’s a must-go destination for any visitors. The cupcakes are all unique and original with names such as Dirty Chai and Elvis Impersonator. Its innovative flavors and other baked items will satisfy even the most critical cupcake connoisseur.  </p>
	</div>
    <? include("http://jtwebproductions.com/jmcclanahan/header.html"); ?>
	<div id="clear"></div>
	<div id="hours">
        <p>Sunday: 8am-8pm</p>
        <p>Monday: 7am-8pm</p>
        <p>Tuesday: 7am-8pm</p>
        <p>Wednesday: 7am-8pm</p>
        <p>Thursday: 7am-8pm</p>
        <p>Friday: 7am-9pm</p>
        <p>Saturday: 8am-9pm</p>
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
       <input type="text" name="rname" value="Baked & Wired" style="visibility:hidden">
       <input type="submit" value="Submit" id="submit">
    </form>
    </div> 

   
</div>
 <div id="add"; style="width:620px;word-wrap:break-word; position:relative; left:40px"></div>
<? global $rnamesend; $rnamesend="Baked & Wired"; include("../Support/main.php"); ?>
</body>
</html>