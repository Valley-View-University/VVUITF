<?php 
session_start();
require("header.php");
require("checkUser.php")
?>
<style>
body{
color: brown;
}
#button:hover
{
background-color:brown;
color:white;
}
input
{
padding-top:5px;
padding-bottom:5px;
font-family:Aharoni;
border-radius :5px;
background-color:black;
color:white;
font-size:15px}

#searchArea
{
border:3px solid black;
border-radius :12px;
padding-left:12px;
background-color:ivory;
width:700px;}
</style>
<script type="text/javascript">
function check(f)
{
 if (f.utos.value == "")
		{ document.getElementById("spuid").innerHTML="Please enter the name of the person that you want to chat...";
			
			//alert ("Please,Please Enter The Name Of The Person That You Want To Chat With.....");
			f.utos.focus();
			return false;
		}
		else 
		return true;
}
</script>
<div id="searchArea">
<form action="" method="post" onsubmit="return check(this)">
	<p>
    	Enter name to search 
    	<input type="text" name="utos" /><span id='spuid' style="color: red;"></span> 
        <br/>
        <br/>
        <input id="button" type="submit" value="Click Me" />
    </p>
</form>

<?php
if (isset($_POST['utos']))
{
$uto=$_POST['utos'];

$sql="SELECT * FROM user WHERE fullname LIKE '$uto%'";
$rows=ExecuteQuery($sql);

if (mysql_num_rows($rows) > 0)
{
	echo "<table cellpadding='2' cellspacing='2'>";
	
	while ($row = mysql_fetch_array($rows))
	{
		echo "<tr>";
		echo "<td valign='top'><img src='$row[uimg]' alt='' style='height:100px; width:100px;' />";
		echo "<td valign='top'><a href=message.php?id=$row[user_id] style='font-weight:bold;'>$row[fullname]</a> <br/>";
		echo ($row['gender'] == 1 ? "Male" : "Female")."<br/>";
		echo $row['country'];
		echo "<br/>";
		echo "<br/>";
		echo "<a href=message.php?id=$row[user_id] style='font-weight:bold;'><input id='button' type='button' value='Send Message'></a>";
		echo "</tr>";
	}
	
	echo "</table>";
}
}
?>
</div>

<?php require("footer.php")?>