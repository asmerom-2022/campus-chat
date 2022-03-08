<?php
	include("Login.php");
	include("camp_files/camp_index_file/camp_SignUp_file/SignUp.php");
?>
<html>
<head>
	<title> campus chat </title>
<?php	
include("camp_files/camp_index_file/camp_background_file/index_background.php");
?>
	<LINK REL="SHORTCUT ICON" HREF="camp_files/camp_title_icon/aa.jpg" />
	<link href="camp_files/camp_index_file/camp_css_file/index_css.css" rel="stylesheet" type="text/css">
    <link href="camp_files/camp_font/font.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="camp_files/camp_index_file/camp_js_file/Registration_validation.js"> </script>
</head>
<script>
	function time_get()
	{
		d = new Date();
		mon = d.getMonth()+1;
		time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
		Reg.camp_join_time.value=time;
	}
</script>
<body>
<div style="position:absolute; left:79.7%; top:1.0s%; font-size:16px; color:#9933camp;"><img src="camp_files/camp_index_file/camp_image_file/TEXT OCCULUSION5.jpg" width="240" height="78"></div> 
	<!--login form-->
	<form  method="post">
		<div style="position:absolute; left:69.7%; top:27.2%; font-size:20px; color:#9933camp; ">   Email </div> <br><br><br><br>
		<div style="position:absolute; left:69.7%; top:31.18%; font-size:11px; "> <input type="text" name="username" style="width:149.5;" title="aaa@bbbbb.com" placeholder="Enter your email" pattern="[A-Za-z0-9]{2,20}[@]{1}[A-Za-z]{5}[.]{1}[A-Za-z]{3}" required/> </div>
		<!--div style="position:absolute; left:69.4%; top:33.8%; font-size:12; color:#9933camp;">  <input type="checkbox" checked="checked">   Keep me logged in </div-->
		<div style="position:absolute;left:69.6%; top:38.2%; font-size:20px; color:#9933camp "> Password</div><br><br><br><br>
		<div style="position:absolute;left:69.6%; top:42.18%; font-size:13px; "> <input type="password" name="password" style="width:149.5;" title="atleast 6 characters" placeholder="Enter your password" pattern="[A-Za-z0-9]{6,}" required> </div>
		<div style="position:absolute;left:69.6%; top:45.9%; font-size:12px; color:#9933camp;"> <a href="Forgot_Password.php" style="color:#9933camp; text-decoration:none;"> Forgot your password ? </a> </div>   
		<div style="position:absolute;left:69.8%;top:52.2%; ">  <input type="submit" name="Login" value="Log In" id="login_button" />   </div>
		<div style="position:absolute;left:69.8%;top:60.2%; "><a href="create new.php"><input type="button" value="create new account" id="create_button" /></a>  </div>
	</form>
	
	<!-- campuschat left part -->
	
		<!--Left part-->
		<!--Mobile Image--> 	
	<div style="position:absolute; left:5%; top:35%;"> <img src="camp_files/camp_index_file/camp_image_file/TEXT OCCULUSION13.jpg" width="700" height="375"> </div>
    <div style="position:absolute; left:7%; top:24%; color:#3B5998; font-size:28px;"> <font face="Californian camp">WELCOME TO CAMPUS CHAT </font> </div>
    <div style="position:absolute; left:7%; top:30%; color:#3B5998; font-size:28px;"> <font face="Californian camp">  </font></div>
	
	
	
	
        
 <!--my_details -->  
    <div style="display:none;" id="my_details">
    <div style="position:absolute;left:12%;top:75%; height:30%; width:30%; z-index:2; background:#000; opacity:0.5; box-shadow:10px 0px 10px 1px rgb(0,0,0);">   </div>
    <div style="position:absolute;left:13%;top:77%; z-index:3;"> <img src="camp_files/camp_index_file/camp_background_file/Developer_details/asi.jpg" height="165" width="150" style="box-shadow:0px 0px 10px 5px rgb(0,0,0);"> </div>
    <div style="position:absolute;left:26%;top:77%; z-index:3; color:#FFF;"> <h2> <?php echo("rakan"); ?> </h2> </div>
    <div style="position:absolute;left:26%;top:85%; z-index:3; color:#FFF;">  <h3><?php echo ("asiyo@yahoo.com"); ?> </h3> </div>
    <div style="position:absolute;left:26%;top:92%; z-index:3; color:#FFF;"> <h3> <?php echo ("002917805246"); ?>  </h3> </div>
	</div>
    
		
<?php
	include("camp_files/camp_index_file/camp_erorr_file/camp_erorr.php");
?>					
</body>
</html>