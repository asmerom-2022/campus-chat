<?php
session_start();
include ("background.php");
$one=$_SESSION['uid'];
	mysql_connect("localhost","root","");
	mysql_select_db("campuschat") ;

$sql="SELECT users.user_id,users.Email,users.Name,users.Gender,friends.created,friends.friend_one,friends.status
 from users INNER JOIN friends ON users.user_id=friends.friend_one where friends.friend_two=$one";
$res=mysql_query($sql)or die(mysql_error());
while($row=mysql_fetch_assoc($res))
{
	if($row['status']==0)
	{
	echo "<div style=\"position:relative; left:19%; top:42%; \">";
	echo $row['Name']."<br>";
	echo "</div>";
	}
}
?>
</div>