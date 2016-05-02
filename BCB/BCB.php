<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">  
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css"> 
<link rel="stylesheet" type="text/css" href="BCB.css">
<link rel="stylesheet" type="text/css" href="../css.css">
<script src="http://jtwebproductions.com/jmcclanahan/Ambar/test.js" type="text/javascript"></script>
</head>
<body id="body" >
<div style="width:1200px; text-align:center; margin-left:auto; margin-right:auto; overflow:auto">
	<h1 id="h1">Ben's Chili Bowl </h1>
	<img src="BCB.jpg" alt="BCB" id="BCB"/>
	<div id="div1">
		<p>Ben’s Chili Bowl is a landmark restaurant right in the heart of Washington, DC. It is known for their classic chili, burgers, and shakes that are so good that even celebrities and diplomats can be seen frequenting the quaint store. The landmark restaurant has become such a sensation that it has been featured in multiple TV cooking shows, such as Man v. Food and State of Play. Though for years, dozens of people have become regulars at Ben’s, until recently, Bill Cosby was the only person that has been deemed worthy by Ben to get free food for life. It was not until President Obama came to Ben’s Chili Bowl right after his inauguration that he was bestowed the honor of being added to the list of eat free for life.  

</p>
	</div>
    <? include("http://jtwebproductions.com/jmcclanahan/header.html"); ?>
	<div id="clear"></div>
	<div id="hours">
        <p>Sunday: 	11am-12am</p>
        <p>Monday: 6am-2am</p>
        <p>Tuesday: 6am-2am</p>
        <p>Wednesday: 6am-2am</p>
        <p>Thursday: 6am-2am</p>
        <p>Friday: 6am-3am</p>
        <p>Saturday: 7am-3am</p>
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
       <input type="text" name="rname" value="Ben's Chili Bowl" style="visibility:hidden">
       <input type="submit" value="Submit" id="submit">
     </form>
    </div> 
</div>
</div>
   <div id="add"; style="width:620px;word-wrap:break-word; position:relative; left:70px">
</div>
<? global $rnamesend; $rnamesend="Ben's Chili Bowl"; include("../Support/main.php"); ?>
</body>
</html>