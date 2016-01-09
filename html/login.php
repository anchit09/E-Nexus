<html>
	<head>
		<title>Log In</title>
        <link rel="icon" 
      type="image/png" 
      href="../images/favicon.png">
		<link href="../css/design.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="WT">
			<div id="header">
                 <a href="signup.php"><img src="../images/signup.jpg" style="float:right; padding-top:5px; padding-right:15px; padding-left:5px;"></a>
                 <a href="login.php"><img src="../images/login.jpg" style="float:right; padding:5px;"></a>			
			</div>
			<div id="nav" align="center">
				<nav id="navig">
					
					<ul>
						<li><a href="home.html"><image src="../images/home.png"></a></li>
						<li><a href="movies.html"><image src="../images/movie.png"></a></li>
						<li><a href="sports.html"><image src="../images/sport.png"></a></li>
						<li><a href="gadgets.html"><image src="../images/gadget.png"></a></li>	
						<li><a href="life.html"><image src="../images/life.png"></a></li>	
						<li><a href="videog.html"><image src="../images/video.png"></a></li>
					</ul>
				
				</nav>
			</div>
            <br>
          <center><font face="museo 300" size="6" color="#000033" style="background-image:url(../images/loginbg.JPG); font-weight:600;">You are just a step away from the Enexus Family, Log In to let us Serve You!</font></center>
          <br><br>
            <font face="Georgia, Times New Roman, Times, serif" size="+6" color="#666666" style="margin-left:38%;">Log In</font><br>
			<div align="center" style="margin-top:5; margin-bottom:10">
				<form method="post" action="login_validate.php" name="sign" id="sign">
                	
                    <input type="text" name="uname" id="uname" value="Username" onFocus="if(this.value == 'Username'){ this.value = ''};" onBlur="if (this.value == '') {this.value = 'Username'};" style="color:#666666; width:190px; height:35px; -webkit-border-radius:5px; font-size:20px;"><br>
                    <input type="password" name="pwd" id="pwd" value="Password" onFocus="if(this.value == 'Password'){ this.value = ''};" onBlur="if (this.value == '') {this.value = 'Password'};" style="color:#666666; width:190px; height:35px; -webkit-border-radius:5px; font-size:20px;"><br><br>
          
                    <input type="submit" name="submit" value="Log In" action="login_validate.php">&nbsp;&nbsp;
                    <input type="reset" name="cancel" value="Cancel"><br>
                    
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
			<form action="" method="post" id="mailingList">
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