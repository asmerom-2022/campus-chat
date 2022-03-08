
<?php
	include("Login.php");
	include("camp_files/camp_index_file/camp_SignUp_file/SignUp.php");
?>

<html>
<head>
<title>registiration</title>
<link href="camp_files/camp_index_file/camp_css_file/index_css.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="camp_files/camp_index_file/camp_js_file/Registration_validation.js"> </script>
</head>
<body>
<div style="position:absolute; left:79.7%; top:1.5s%; font-size:16px; color:#9933camp;"><img src="camp_files/camp_index_file/camp_image_file/TEXT OCCULUSION5.jpg" width="240" height="78"></div> 

<?php	
include("camp_files/camp_index_file/camp_background_file/index_background.php");
?>
<div style="position:absolute; left:5%; top:30%;"> <img src="camp_files/camp_index_file/camp_image_file/TEXT OCCULUSION13.jpg" width="670" height="375"> </div>
<!-- Registration -->
	<form  method="post" onSubmit="return check();" name="Reg">
		<div style="position:absolute;left:65%; top:14.5%; color:#000066; font-size:28"> <h4> Sign Up </h4> </div>
		<div style="position:absolute;left:58%; top:24.6%; color:#000000;"> </div>
		<div style="position:absolute;left:57.3%; top:29.1%; height:1; width:385; background-color:#campcampcamp;"> </div>
        
		<div style="position:absolute;left:57.4%; top:34%; font-size:16px; color:#000000" >  First Name: </div>
		<div style="position:absolute;left:65.2%;   top:32.8%; "> <input type="text" name="first_name" size="25" class="inputbox" maxlength="10" /> </div>
		<div style="position:absolute;left:57.4%; top:41%; font-size:16px; color:#000000" >  Last Name: </div>
		<div style="position:absolute;left:65.2%;  top:39.8%;  "> <input type="text" name="last_name"  size="25" class="inputbox" maxlength="10"  /> </div>
		<div style="position:absolute;left:57.2%; top:48%; font-size:16px; color:#000000" >  Your Email:  </div>
		<div style="position:absolute;left:65.2%;  top:46.8%; "> <input type="text" name="email"  size="25" class="inputbox"  /> </div>
		<div style="position:absolute;left:57.4%; top:55%; font-size:16px; color:#000000" > New Password:   </div>  
		<div style="position:absolute;left:65.2%; top:53.8%; "> <input type="password" name="password" size="25" class="inputbox"  /> </div>
		<div style="position:absolute;left:57.4%; top:61%; font-size:16px; color:#000000" > Re-enter pwd:   </div>
		<div style="position:absolute;left:65.2%; top:60.8%; "> <input type="password" name="repassword"  size="25" class="inputbox"  /> </div>
		<div style="position:absolute;left:60.28%; top:68.5%; font-size:16px; color:#000000" > Gender:  </div>
		<div style="position:absolute;left:65.2% ;top:67.8%;">		  
		<select name="sex" style="width:120;height:35;font-size:18px;padding:3;" >
			<option value="Select Sex:"> Select Sex: </option>
			<option value="Female"> Female </option>
			<option value="Male"> Male </option>
		</select>
		</div>
		
<div style="position:absolute;left:60.28%; top:75.8%; font-size:16px; color:#000000">  Birthday:  </div>

	
	<div style="position:absolute;left:65.2%; top:75%;">
	<select name="month" style="width:80;font-size:18px;height:32;padding:3;" >
	<option value="Month:"> Month: </option>
	
	<script type="text/javascript">
	
		var m=new Array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		for(i=1;i<=m.length-1;i++)
		{
			document.write("<option value='"+i+"'>" + m[i] + "</option>");
		}	
	</script>
	
	</select>
	</div>



	<div style="position:absolute; left:72%; top:75%;">
	<select name="day" style="width:63;font-size:18px;height:32;padding:3;">
	<option value="Day:"> Day: </option>
	
	<script type="text/javascript">
	
		for(i=1;i<=31;i++)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
		
	</script>
	
	</select>
	</div>	

	<div style='position:absolute;left:77.5%;top:75%;'>
	<select name="year" style="width:70; font-size:18px; height:32; padding:3;">
	<option value="Year:"> Year: </option>
	
	<script type="text/javascript">
	
		for(i=2000;i>=1960;i--)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
	</script>
	
	</select>
	</div>		
		<input type="hidden" name="camp_join_time">
		<div style="position:absolute;left:65.2%; top:82%; ">  <input type="submit" ID="createnew_button" name="signup" value="Sign Up" id="sign_button" / onClick="time_get()"> </div>
		</form>
		
		<div style="position:absolute;left:57.3%; top:90%; height:1; width:385; background-color:#campcampcamp; "> </div> 
		
				
<?php
	include("camp_files/camp_index_file/camp_erorr_file/camp_erorr.php");
?>	

</body>
</head>
</html>