<html>
	<head>
        <link rel="icon" 
      type="image/png" 
      href="../images/favicon.png">
		<link href="../css/design.css" rel="stylesheet" type="text/css">
<title>E! Nexus-Database Building Form:</title>
<script>
<!--Function 1 -->
function setOptions(chosen) {
var selbox = document.form1.subcat;
 
selbox.options.length = 0;
if (chosen == "") {
  selbox.options[selbox.options.length] = new Option('Please select one of the options',' ');
 
}
if (chosen == "1") {
	selbox.options[selbox.options.length] = new 
	Option('Please select one of the options',' ');
  selbox.options[selbox.options.length] = new
Option('Upcoming Movies','oneone');
  selbox.options[selbox.options.length] = new
Option('Top 5 movies','onetwo');
 selbox.options[selbox.options.length] = new
Option('In theaters','onethree');
 selbox.options[selbox.options.length] = new
Option('Road to the Oscars','onefour');
}
if (chosen == "2") {
	selbox.options[selbox.options.length] = new 
	Option('Please select one of the options',' ');
  selbox.options[selbox.options.length] = new
Option('Cricket','twoone');
  selbox.options[selbox.options.length] = new
Option('Football','twotwo');
  selbox.options[selbox.options.length] = new
Option('Tennis','twothree');
}
if (chosen == "3") {
	selbox.options[selbox.options.length] = new 
	Option('Please select one of the options',' ');
  selbox.options[selbox.options.length] = new
Option('Top Gadgets','threeone');
  selbox.options[selbox.options.length] = new
Option('Computers','threetwo');
selbox.options[selbox.options.length] = new
Option('Mobiles','threethree');
selbox.options[selbox.options.length] = new
Option('Tablets','threefour');
}
if (chosen == "4") {
	selbox.options[selbox.options.length] = new 
	Option('Please select one of the options',' ');
  selbox.options[selbox.options.length] = new
Option('Fashion','fourone');
  selbox.options[selbox.options.length] = new
Option('Travel','fourtwo');
selbox.options[selbox.options.length] = new
Option('Music','fourthree');
selbox.options[selbox.options.length] = new
Option('Books','fourfour');
selbox.options[selbox.options.length] = new
Option('Food','fourfive');
}
if (chosen == "5") {
	selbox.options[selbox.options.length] = new 
	Option('Please select one of the options',' ');
  selbox.options[selbox.options.length] = new
Option('Upcoming Games','fiveone');
  selbox.options[selbox.options.length] = new
Option('Top 5 Games','fivetwo');
}
}
<!--Function 2 -->
function setSubOptions(chosen) {
var selbox = document.form1.domain;
 
selbox.options.length = 0;
if (chosen == " ") {
  selbox.options[selbox.options.length] = new Option('Please select one of the options',' ');
 
}
else if (chosen == "twoone") {
	enable2();
	selbox.options[selbox.options.length] = new 
	Option('Please select one of the options',' ');
  selbox.options[selbox.options.length] = new
Option('Upcoming Series','twooneone');
  selbox.options[selbox.options.length] = new
Option('Ongoing Series & Results','twoonetwo');
 selbox.options[selbox.options.length] = new
Option('ICC Rankings','twoonethree');
}
else if (chosen == "twotwo") {
	enable2();
	selbox.options[selbox.options.length] = new 
	Option('Please select one of the options',' ');
  selbox.options[selbox.options.length] = new
Option('Upcoming tournaments','twotwoone');
  selbox.options[selbox.options.length] = new
Option('Ongoing tournament & Results','twotwotwo');
  selbox.options[selbox.options.length] = new
Option('Rankings FIFA,EPL & other Leagues','twotwothree');
}
else if (chosen == "twothree") {
	enable2();
	selbox.options[selbox.options.length] = new 
	Option('Please select one of the options',' ');
  selbox.options[selbox.options.length] = new
Option('Upcoming tournaments','twothreeone');
  selbox.options[selbox.options.length] = new
Option('Ongoing Tournaments & Results','twothreetwo');
selbox.options[selbox.options.length] = new
Option('ATP Rankings ','twothreethree');
}
else if (chosen == "fourone") {
	enable2();
	selbox.options[selbox.options.length] = new 
	Option('Please select one of the options',' ');
  selbox.options[selbox.options.length] = new
Option('Fashion Week','fouroneone');
  selbox.options[selbox.options.length] = new
Option('Trends','fouronetwo');
selbox.options[selbox.options.length] = new
Option('Designers','fouronethree');
selbox.options[selbox.options.length] = new
Option('Top brands','fouronefour');
}
else if (chosen == "fourtwo") {
	enable2();
	selbox.options[selbox.options.length] = new 
	Option('Please select one of the options',' ');
  selbox.options[selbox.options.length] = new
Option('Top 10 Places','fourtwoone');
  selbox.options[selbox.options.length] = new
Option('Top 10 hotels','fourtwotwo');
selbox.options[selbox.options.length] = new
Option('Top 5 beaches','fourtwothree');
}
else if (chosen == "fourthree") {
	enable2();
	selbox.options[selbox.options.length] = new 
	Option('Please select one of the options',' ');
  selbox.options[selbox.options.length] = new
Option('Top of the charts','fourthreeone');
  selbox.options[selbox.options.length] = new
Option('Artists','fourthreetwo');
selbox.options[selbox.options.length] = new
Option('Concert news','fourthreethree');
}
else if (chosen == "fourfour") {
	enable2();
	selbox.options[selbox.options.length] = new 
	Option('Please select one of the options',' ');
  selbox.options[selbox.options.length] = new
Option('Fiction','fourfourone');
  selbox.options[selbox.options.length] = new
Option('Autobiography','fourfourtwo');
selbox.options[selbox.options.length] = new
Option('Recommended reading','fourfourthree');
}
else if (chosen == "fourfive") {
	enable2();
	selbox.options[selbox.options.length] = new 
	Option('Please select one of the options',' ');
  selbox.options[selbox.options.length] = new
Option('Recipes','fouroneone');
  selbox.options[selbox.options.length] = new
Option('Restaurant reviews','fouronetwo');
selbox.options[selbox.options.length] = new
Option('Drinks','fouronethree');
}
else
{
	selbox.options[selbox.options.length] = new 
	Option('Please select one of the options');
	}
}
function enable1()
{
document.getElementById("subcat").disabled=false;
}
function enable2()
{
document.getElementById("domain").disabled=false;
}
function disable2()
{
document.getElementById("domain").disabled=true;
}

</script>

	</head>
	<body>
		<div id="WT">
			<div id="header">
                 <a href="#"><img src="../images/signup.jpg" style="float:right; padding-top:5px; padding-right:15px; padding-left:5px;"></a>
                 <a href="#"><img src="../images/login.jpg" style="float:right; padding:5px;"></a>
			</div>
			<div id="nav">
				<nav id="navig">
					<center>
					<ul>
						<li><a href="home.html"><image src="../images/home.png"></a></li>
						<li><a href="movies.html"><image src="../images/movie.png"></a></li>
						<li><a href="sports.html"><image src="../images/sport.png"></a></li>
						<li><a href="gadgets.html"><image src="../images/gadget.png"></a></li>	
						<li><a href="life.html"><image src="../images/life.png"></a></li>	
						<li><a href="videog.html"><image src="../images/video.png"></a></li>
					</ul>
					</center>
				</nav>
			</div>
			
			<div id="content" style="background-color:#00CC99; padding:10px; font-family:Calibri">
<form action="formvalidate.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<fieldset>
	<legend><h2>Database Updation & Maintainence</h2></legend>
	<p>
	  <label for="category"><b style="color:#660066; font-size:18px;">Select Category : </b></label>
	  <select name="category" id="category" onChange="setOptions(document.form1.category.options
[document.form1.category.selectedIndex].value); enable1(); disable2();">
	    <option value="">Please select one of the options</option>
        <option value="1">Movies</option>
	    <option value="2">Sports</option>
	    <option value="3">Gadgets</option>
	    <option value="4">Lifestyle</option>
	    <option value="5">Video Games</option>
      </select>
	  <label for="subcat"><br /><br />
      <b style="color:#660066; font-size:18px;">Select Sub-Category : </b></label>
	  <select name="subcat" id="subcat" onChange="setSubOptions(document.form1.subcat.options
[document.form1.subcat.selectedIndex].value);" disabled>
      <option value=" " selected="selected">Please select one of the options</option>
      </select> 
	  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
	  <label for="domain"><b style="color:#660066; font-size:18px;">Select Domain : </b></label>
	  <select name="domain" id="domain" disabled>
      <option value=" " selected="selected">Please select one of the options</option>
    </select>&nbsp;</p>
	<p>
	  <label for="head"></label>
    <h3>Headline
      &nbsp;&nbsp;&nbsp; &nbsp;
      <input type="text" name="head" id="head" width="500">
    </h3>
    <h3>Main image(s) &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Back image</h3>
    <input type="file" name="image" id="image" />
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
    <input type="file" name="backimage" id="backimage" />
    <h3>Brief Data</h3>
    <textarea name="briefdata" id="briefdata" cols="110" rows="5"></textarea>
	  <h3>Full Data</h3>
    <textarea name="fulldata" id="fulldata" cols="110" rows="15"></textarea>
  	  <br /><br /><br />
	<input type="submit" name="submit" id="submit" value="Submit" />
    <input type="button" value="Cancel" id="cancel">
    </p>
</fieldset>
</form>				
			</div>
			<div id="footer">
            	<br>
                <div id="locate">
                    <div style="margin-left:4%; float:left; position:relative; width:16%; height:160px;">   
                           <br><br>     
						<font size=3.5px; color="white">Contact Us:</font><br><br>
						<font size=2px; color="white">Email: </font><a class="changecolor" href="mailto:support@enuxus.com"><font size=2>support@enexus.com</font></a><br>
        	            <font size=2px; color="white">Skype: </font><a class="changecolor" href="skype:theenexusgrp?call"><font size=2>theenexusgrp</font></a><br>
                      
                    </div>
                    <div style="margin-left:4%; float:left; position:relative; width:16%; height:160px;">   
                    <br><br> 
                    	<font size=3.5px; color="white">Follow Us:</font><br><br>
                        <a href="#"><img src="../images/followfb.png" width="32" height="32" onMouseOver="src='../images/followfb1.png'" onMouseOut="src='../images/followfb.png'"></img></a>
                        <a href="#"><img src="../images/followtwitter.png" width="32" height="32" onMouseOver="src='../images/followtwitter1.png'" onMouseOut="src='../images/followtwitter.png'"></img></a>
                        <a href="#"><img src="../images/followyt.png" width="32" height="32" onMouseOver="src='../images/followyt1.png'" onMouseOut="src='../images/followyt.png'"></img></a>
                    </div>
                    <div style="margin-left:1%; float:left; position:relative; width:16%; height:160px;">
                         <br><br>     
						<font size=3.5px; color="white">Mailing List:</font><br><br>
						<font size=2px; color="#666666">Sign up if you would like to receive occasional treats from us.</font>
			<form action="http://enexus.com" method="post" id="mailingList">
					<input type="text" name="mail" id="mail" value="Your email address" size="16"  style="color:#666666" onFocus="if(this.value == 'Your email address'){ this.value = ''};" onBlur="if (this.value == '') {this.value = 'Your email address'};" >
				
					<input type="submit" class="submit" value="Go">
			</form>   
                    </div>
                    <div style="margin-left:4%; float:left; position:relative; width:16%; height:16opx;">   
                           <br><br>     
						<font size=3.5px; color="white">Join Us:</font><br><br>
						<font size=2px; color="white">Advertise: </font><a class="changecolor" href="#"><font size=2>Register Now</font></a><br>
        	            <font size=2px; color="white">Newsletter: </font><a class="changecolor" href="#"><font size="2">Stay Updated </font></a>			 						<br>
                    </div>
                  <div style="margin-left:4%; float:left; position:realtive; width:16%; height:165px;">   
                           <br><br>     
						<font size=3.5px; color="white">Legal:</font><br><br>
						<font size=2px; color="white">Copyrights: </font><font size=2px; color="#666666">Copyright 2013 <br>We Are Enexus Group. <br>All Rights Reserved.</font><br>   
                    </div>
                    </div>
                    <center><font color="#666666">
                     <a class="changecolor" href="#"><font size="2">About Us</font></a> |
                     <a class="changecolor" href="sitemap.html"><font size="2">Site Map</font></a> |
                     <a class="changecolor" href="#"><font size="2">Terms & Conditions</font></a> |
                     <a class="changecolor" href="#"><font size="2">Accessibility</font></a> |
                     <a class="changecolor" href="#"><font size="2">Privacy Policy</font></a> |
                     <a class="changecolor" href="#"><font size="2">Cookie Policy</font></a>
                          </font></center>
                    </div>
        <div id="footerext"></div>
	</body>
</html>