<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">  
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css"> 
<link rel="stylesheet" type="text/css" href="FoundingFarmers.css">
<link rel="stylesheet" type="text/css" href="../css.css">
<script src="http://jtwebproductions.com/jmcclanahan/Ambar/test.js" type="text/javascript"></script>

</head>
<body id="body" >
<div style="width:1200px; text-align:center; margin-left:auto; margin-right:auto; overflow:auto">
	<h1 id="h1">Founding Farmers</h1>
	<img src="FoundingFarmers.jpeg" alt="FoundingFarmers" id="FF"/>
	<div id="div1">
		<p>Founding Farmers, started in 2005, is a true farm to table restaurant. The restaurant is owned by a collective of farmers and all of the ingredients come from family owned farms. The dishes are all seasonal and based on what has been grown that season, meaning that the menu is constantly changing. Founding Farmers is dedicated to sustainability with green growing practices and are large contributors to the community through its honey bee program, scholarships, and involvement with nonprofits. If that wasn’t reason enough to go their heavenly French toast and amazing brunches make this place the breakfast/brunch place to be. </p>
	</div>
    <? include("http://jtwebproductions.com/jmcclanahan/header.html"); ?>
	<div id="clear"></div>
	<div id="hours">
        <p>Sunday: 9am-10pm</p>
        <p>Monday: 7am-10pm</p>
        <p>Tuesday: 7am-11pm</p>
        <p>Wednesday: 7am-11pm</p>
        <p>Thursday: 7am-11pm</p>
        <p>Friday: 7am-12am</p>
        <p>Saturday: 9am-12am</p>
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
       <input type="text" name="rname" value="Founding Farmers" style="visibility:hidden">
       <input type="submit" value="Submit" id="submit">
     </form>
    </div> 
   
</div>
 <div id="add"; style="width:620px;word-wrap:break-word; position:relative; left:60px">
</div>
<? global $rnamesend; $rnamesend="Founding Farmers"; include("../Support/main.php"); ?>
</body>
</html>