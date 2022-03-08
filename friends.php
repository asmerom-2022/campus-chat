<?php
session_start();
$one=$_SESSION['uid'];
$two=$_GET['id'];
	mysql_connect("localhost","root","");
	mysql_select_db("campuschat");
	mysql_query("insert into friends (friend_one,friend_two,created)values($one,$two,'curdate()')");
    
	//notifications
	//$res=mysql_query("select count(*) from friends where friend_two=$one and status=0");
	//$row=mysql_fetch_row($res);
	//echo "<a href=notifications.php>Notifications(".$row[0].")";
?>