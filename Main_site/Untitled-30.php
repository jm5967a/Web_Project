<?php
    ob_start(); 
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>index.html</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
body,td,th {
	font-style: normal;
	font-weight: normal;
	color: #081E4E;
	font-family: "PT Sans";
}
h1,h2,h3,h4,h5,h6 {
	font-style: inherit;
	font-weight: bold;
	text-align: center;
	width: 98%;
	font-family: "PT Sans Caption", "PT Sans Bold";
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
	color: #000000;
}
a:active {
	text-decoration: none;
}
a {
	font-family: "PT Sans Caption", "PT Sans Bold";
}
</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/stencil-std:n4:default;lobster-two:n4:default.js" type="text/javascript"></script>

</head><title>DC</title>
<body>
<div class = "header">

<? if(isset($_COOKIE["jtweb"])) {?>
<span style="float:right;color:#F9F9F9; margin-right:20px"> Welcome <?=$_COOKIE["jtweb"] ?>!</span>
<? } if(!isset($_COOKIE["jtweb"])) {
include("../Login/Log.php"); }?>
  <div class="title"><h1><font color="#F9F9F9">Discover DC</font></h1></div>
  <hr />
</div>
<div class = "menu">
<ul>
    <br><br><br><br><br><br><br>
    	<li><a href="http://jtwebproductions.com/jmcclanahan/untitled folder/Untitled-30.php">Home</a> </li>
    	<li><a href="http://jtwebproductions.com/jmcclanahan/Html/Untitled-2.php">Historical Sites</a> </li> 
        <li><a href="http://jtwebproductions.com/jmcclanahan/untitled%20folder/Untitled-1.php">Restaurants</a> </li>
        <li><a href="http://jtwebproductions.com/jmcclanahan/untitled%20folder/maps.html">Maps</a> </li>
        <li><a href="http://jtwebproductions.com/jmcclanahan/untitled%20folder/about.html">About</a> </li>
    </ul>
    </div>
  <div class = "left_article">
    <article>
      <font color="#000000">
      <h3>Welcome to DC!</h3>
      <p>Visiting? New to the area? Or just looking for something to do? You've come to the right place. Now you can plan your entire trip to DC including tourist attractions, restaurants, and events happening in the area. </p>
      <p>Connect with others in the area by becoming a member and posting reviews of your favorite places to go in DC!</p></font>
    </article>
    </div>
    <aside class="right_article"><img src="../images/dc.jpg" width="60%" height="37" alt=""/></aside> 
    <div class="bodymain">
    	<div class="events"><font color="#F9F9F9">
        <h2>Upcoming Events</h2>
        </font><div class="columns2">
        <h3><font color="#F9F9F9">Cherry Blossom Festival</font></h3>
        <font color="#F9F9F9"><img src="../images/cherryblossoms.jpg" alt="" width="100px" height="75px" id="imgevent"/></font>
        <p class="p"><font color="#F9F9F9" size="3pt">DC welcomes the arrival of spring with the annual National Cherry Blossom Festival</font></p>
        </div><font color="#F9F9F9">
        <div class="columns2">
          <h3>Earth Day 2016 at Union Station</h3><p class="p"><font size="3pt">Union Station is hosting Earth Day events including interactive, eco-friendly activities to raise awareness of environmental issues</font></p>
          <img src="../images/earthday.jpg" width="100px" height="75px" id="imgevent"/>
        </div>
        <div class="columns2">
        <h3>Passport DC</h3>
        <img src="../images/passport.jpg" width="100px" height="75px" id="imgevent"/>
        <p class="p"><font size="3pt">An annual celebration of international culture including more than 70 of DC's embassies</font></p>
        </div>
        <div class="columns2">
        <h3>National Asian Heritage Festival</h3>
        <img src="../images/asian.jpg" width="100px" height="75px" id="imgevent"/>
        <p class="p"><font size="3pt">A street fair celebrating Asian Pacific Heritage month showcasing Asian art and culture</font></p>
        </font>
            <div class="footer">
      <a href="https://validator.w3.org"><img src="https://www.w3.org/Icons/valid-html401" alt="Valid XHTML 4.01!" height="31" width="88"/></a> <a href="https://validator.w3.org"><img src="https://www.w3.org/Icons/valid-css" alt = "Valid VCSS" height="31" width="88"/></a> </div>
    </div>
    </div>
<hr />
</body>
</html>
<?php
    ob_end_flush(); 
?>