<!DOCTYPE>


<html>
<head>
  <title>IUTPS Login</title>

  <link rel="stylesheet" type="text/css" href="css/i_style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
   <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <meta name="author" content="Muhaimenul Islam">
  <link rel="stylesheet" href="css/style.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/calendar.js"></script>

</head>

<body>
	<div id="main">
    <div id="header">
	  <div id="banner" style="display: inline">
	    <div id="welcome">
		<br>
		<img width="100" height="90" src="images/black-02.png" alt="iutps logo" style="float: left"/>
		  <h1>IUT Photographic Society</h1>
		  <h2>Home to those who enjoys and practices photography</h2>
	    </div><!--close welcome-->
	    <!--<div id="welcome_slogan">
	      <h1>Photography came in my life (Slogan)</h1>
	    </div><!--close welcome_slogan-->
	  </div><!--close banner-->
    </div><!--close header-->

	<div id="menubar">
	<nav class="menu">
      <ul class="clearfix">
        <li><a href="index.php">Home</a></li>
        <li class="current-item"><a href="mem_login.php">Member's Login</a></li>
		<li><a href="#">Information<span class="arrow">&#9660;</span></a>
			<ul class="sub-menu">
              <li><a href="information/history.php">History</a></li>
              <li><a href="information/services.php">Services</a></li>
			  <li><a href="information/member_list.php">Members</a></li>
			  <li><a href="information/faq.php">FAQ</a></li>
			  <li><a href="information/join.php">Join Us</a></li>
            </ul>
		</li>
        <li><a href="gallary.php">Gallery</a></li>
        <li><a href="blog.php">Latest Update</a></li>
		<!--<li><a href="mem_welcome.php">Profile</a></li>-->
		<li><a href="contact.php">Contact Us</a></li>
      </ul>
	  </nav>
    </div><!--close menubar-->
	
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest News</h2>
            <h3>IUTPS</h3>
            <p>IUTPS has launched their Website. For more news and updates go to Latest Update section.</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Regular Events</h2>
            <h3>Break The Circle</h3>
            <p>The International Exhibition Organised by IUTPS. One of the most successful and prestigious exhibitions in Bangladesh</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>Photo Of the Week</h3>
            <p>This is an award given every week, among the new Intake members to inspire them.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>IUTPS Intra Exhibition</h3>
            <p>Current students along with the Alumnus submit there photos & Exhibited in our on campus "Exhibition Corner" </p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar--> 

		<div class="sidebar">
			<div class="sidebar_item">
			<div>
				<div><h2>Calendar</h2></div>
				<div class="jquery-calendar"></div>
			</div>
			</div><!--close sidebar_item--> 
		</div><!--close sidebar--> 		
       </div><!--close sidebar_container-->
	   
	<div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="680" height="250" src="images/002.jpg" alt="&quot;Islamic University of Technology Campus&quot;" /></li>
		  
		  <li><img width="680" height="250" src="images/003.jpg" alt="&quot;Break The Circle&quot;" /></li>
		  <li><img width="680" height="250" src="images/004.jpg" alt="&quot;IUTPS team (Academic year 2015-2016)&quot;" /></li>
		  <li><img width="680" height="250" src="images/005.jpg" alt="&quot;Photo of the Week Contest&quot;" /></li>
		  <li><img width="680" height="250" src="images/006.jpg" alt="&quot;Honorable VC sir enjoying Break The Circle Season VI&quot;" /></li>
		  
		  <li><img width="680" height="250" src="images/007.jpg" alt="&quot;Beauty of IUT at Night&quot;" /></li>
		  <li><img width="680" height="250" src="images/001.jpg" alt="&quot;Preparation of 2nd Intra IUT Photography Exhibition of 2015&quot;" /></li>
          
        </ul>
      </div>   
	   
	<div id="content">
        <div class="content_item">
		  <div class="form_settings">
            <h2>Login to your Profile</h2>
            <p> If you face any problem regarding login. Simply <a href="contact.php">contact us</a> for more details.</p>
			<p style = "font-size:20px; color:#cc0000; font-weight:Bold;">This Page is Under Construction</p>
			<p>&nbsp;</p>
			<!-------Developed By Muhaimenul Islam. facebook.com/muhaimenul--------->
			<div align = "center">
         <div style = "width:360px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
                <form action = "" method = "post">
                  <label>UserName/Student ID  :</label><input type = "text" name = "username" class = "box" required /><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" required /><br/><br />
                  <input class="submit" type = "submit" value = " Login " width="30"/><br />
               </form>              
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"> <?php echo "This page is under construction"; ?> </div>
					
            </div>
				
         </div>
			
      </div>
			<!-------Developed By Muhaimenul Islam. facebook.com/muhaimenul--------->
			<!--<p><span>Student ID</span><input class="contact" type="text" name="your_name" value="" /></p>
			<p><span>Username</span><input class="contact" type="text" name="your_email" value="" /></p>
			<p><span>Password</span><input class="contact" type="text" name="your_email" value="" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Send" /></p>-->
          </div><!--close form_settings-->
		</div><!--close content_item-->
      </div><!--close content-->  
    </div><!--close site_content-->  

	<div id="content_bottom" >
	  <div class="content_bottom_container_box">
		<h4>Latest Blog Post</h4>
	    <p style="text-shadow: 0px 0px;">This section is under construction.Articles about phography and IUTPS.</p>
		<div class="readmore">
		  <a href="#" style="text-decoration: none;">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_bottom_container_box-->
      <div class="content_bottom_container_box">
       <h4>Latest News</h4>
	    <p style="text-shadow: 0px 0px;">Get Latest news and Updates from IUTPS facebook page.</p>
	    <div class="readmore">
		  <a a href="blog.php">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_bottom_container_box-->
      <div class="content_bottom_container_box">
		<h4>News Latter</h4>
	    <p style="text-shadow: 0px 0px;">This section is under construction. News Latter will be published here.</p>
	    <div class="readmore">
		  <a href="#" style="text-decoration: none;">Read more</a>
		</div><!--close readmore-->	  
	  </div><!--close content_bottom_container_box1-->      
	  <br style="clear:both"/>
    </div><!--close content_bottom-->   
    </div><!--close main-->
	
	<div id="footer" style="color:#bab293; text-shadow: 0px 0px;">
	  © 2017 IUT Photographic Society - IUTPS | Copyright | Developed by : <a href="http://facebook.com/muhaimenul" style="color:#bcb69e;" title="Muhaimenul Islam &#xA Dept. of CSE &#xA IUT-OIC">Muhaimenul Islam</a>
    </div><!--close footer--> 
	
	
	</div>
</body>
</html>