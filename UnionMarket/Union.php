<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">  
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css"> 
<link rel="stylesheet" type="text/css" href="../css.css">
<link rel="stylesheet" type="text/css" href="UnionMarket.css">
<script src="http://jtwebproductions.com/jmcclanahan/Ambar/test.js" type="text/javascript"></script>
</head>
<body id="body" >
<div style="width:1200px; text-align:center; margin-left:auto; margin-right:auto; overflow:auto">
	<h1 id="h1">Union Market</h1>
	<img src="UnionMarket.jpg" alt="UnionMarket" id="market"/>
	<div id="div1">
		<p>Union market is a new food-market in the reinvented area of NoMa. The stores inside offer artisanal breads, pastries, and locally grown goods. Including their plethora of stands and groceries, the restaurants inside are worth talking about. The fish market supplies fresh fish daily and has its own menu that has items such as fish and chips, which are to die for. If seafood isn’t your thing there is also a butcher that will cut up the meat for you and give you advice as to what to do with it. For the vegetarians, there is an Italian noodle shop that makes its noodles and ravioli in house, you can go for the simple fettuccine or try their spinach ravioli with a goat cheese and roasted garlic filling. Union market is a constantly busy market that is a great spot to grab food, have a couple cocktails, grocery shop, or just to hang out.  </p>
	</div>
    <? include("http://jtwebproductions.com/jmcclanahan/header.html"); ?>
	<div id="clear"></div>
	<div id="hours">
        <p>Sunday: 8am-8pm</p>
        <p>Monday: Closed</p>
        <p>Tuesday: 11am-8pm</p>
        <p>Wednesday: 11am-8pm</p>
        <p>Thursday: 11am-8pm</p>
        <p>Friday: 11am-8pm</p>
        <p>Saturday: 8am-8pm</p>
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
       <input type="text" name="rname" value="Union Market" style="visibility:hidden">
       <input type="submit" value="Submit" id="submit">
     </form>
    </div> 
   
</div>
 <div id="add"; style="width:620px;word-wrap:break-word; position:relative; left:30px">
</div>
<? global $rnamesend; $rnamesend="Union Market"; include("../Support/main.php"); ?>
</body>
</html>