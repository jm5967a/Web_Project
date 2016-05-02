<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">  
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css"> 
<link rel="stylesheet" type="text/css" href="Sakuramen.css">
<link rel="stylesheet" type="text/css" href="../css.css">
<script src="http://jtwebproductions.com/jmcclanahan/Ambar/test.js" type="text/javascript"></script>
</head>
<body id="body" >
<div style="width:1200px; text-align:center; margin-left:auto; margin-right:auto; overflow:auto">
	<h1 id="h1">Sakuramen</h1>
	<img src="Sakramen.jpg" alt="Sakuramen" id="sak"/>
	<div id="div1">
		<p>
One of the main attractions in Adams Morgan, Sakuramen is hidden away in the basement making it easy to miss but worth the search and the line that is almost always out the door. Famous for their authentic ramen, along with everything from the traditional bamboo ramen spoons to the décor, Sakuramen is a culinary adventure that is worth the trek to Adams Morgan. Their menu contains eight variations of ramen that each are heavenly itself, just makes sure to get a level 1 spice because anything higher than that will leave you panting and sweating from the heat. If you are especially hungry don’t make the mistake to skip the steamed buns because the Chashu bun with roasted pork and scallion is definitely worth the overfull feeling after. 
</p>
	</div>
    <? include("http://jtwebproductions.com/jmcclanahan/header.html"); ?>
	<div id="clear"></div>
	<div id="hours">
        <p>Sunday: 11:30am-10pm</p>
        <p>Monday: Closed</p>
        <p>Tuesday: 5:30-10:30pm</p>
        <p>Wednesday: 5:30-10:30pm</p>
        <p>Thursday: 5:30-10:30pm</p>
        <p>Friday: 11:30am-11pm</p>
        <p>Saturday: 11:30am-11pm</p>
	</div>
		<div name="input" action="" method="get">
 	<td>
       <form method="post">
           <? if(isset($_COOKIE["jtweb"])) { ?>
       <input type="text" name="name" value="<?=$_COOKIE["jtweb"]?>" class="first-name" placeholder="username" size="25" style="visibility:hidden">
       <? } else if(!isset($_COOKIE["jtweb"])) { ?>
		  <input type="text" name="name" class="first-name" value="Anonymous" size="25" style="visibility:hidden">
	  <? } ?>
       </td><textarea rows="10" name="interest" id="comment" placeholder="Comment"></textarea>
       <input type="text" name="rname" value="Sakuramen" style="visibility:hidden">
       <input type="submit" value="Submit" id="submit">
     </form>
    </div> 
   
</div>
<div id="add"; style="word-wrap:break-word">
</div>
<? global $rnamesend; $rnamesend="Sakuramen"; include("../Support/main.php"); ?>
</body>
</html>
