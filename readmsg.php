<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>
<style>
#message
{
background-color:rosybrown	;
border-radius :12px;
width:200px;
height 200px;
}
#message:hover
{
background-color:brown;
color:white;
}

textarea
{
padding-top:10px;
font-family:Aharoni;
border-radius :12px;
width:300px;
background-color:#388E8E;
color:black;
font-size:20px}
textarea:hover
{
background-color:white;
}

#read{
padding-bottom:20px;
padding-left:20px;
background-color:white;}

b{color:#388E8E ;
background-color:white;
padding-left:5px;
padding-right:5px;}
#MessageArea
{
padding-top:20px;
border:3px solid brown;
border-radius :12px;
padding-left:12px;
color:white;
background-color:black;
width:700px;
margin-bottom:20px;
padding-bottom:20px;}

strong{

color:brown;
background-color:white;
padding-left:5px;
padding-right:5px;
}
</style>
<div id="read"></br>
<a href="javascript:void()" onclick="history.back()">Back</a>

<hr/>
<div id="MessageArea">
<?php
	$rows = ExecuteQuery ("SELECT user_id_from, (select fullname from user where user_id=user_id_from) as fromname,  user_id_to, (select fullname from user where user_id=user_id_to) as toname FROM chatmaster where chat_id=$_GET[id]");
	
	$row = mysql_fetch_array ($rows);
	
	$fromid = $row["user_id_from"];
	$toid = $row["user_id_to"];
	$from = $row["fromname"];
	$to = $row["toname"];

	$sql = "SELECT * FROM chat WHERE chat_id=$_GET[id] ORDER BY cdatetime ASC";
	$rows = ExecuteQuery ($sql);


	while ($row = mysql_fetch_array($rows))
	{
		if ($row["user_id"] == $fromid)
			echo "<strong>$from</strong><br/><br/>";
		else
			echo "<b>$to</b><br/><br/>";
			
		echo "$row[message]";
		
		echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>";
	}
?>
<script type="text/javascript">
	function check(f)
	{
		if(f.tt.value=="")
		{
			document.getElementById("a").innerHTML="Please,Enter the reply message";
			//alert("Please,Enter The Reply Message");
			f.tt.focus();
			return false;
			
			}
			else
			return true;
		}
</script>

<form action="writemsg.php" method="POST" onsubmit="return check(this)">
    <input type="hidden" value="<?php echo $_GET['id'] ?>" name="chid" />
<table>

<tr><td></td><td></td><td><textarea rows="3" cols="30" name="tt" ></textarea><span id='a' style="color: red;"></br></br></span></td></tr>
<tr><td></td><td></td><td><input id ="message" type="submit" value="SEND" ></td></tr>
</table>
</form>
</div>
</div>

<?php require("footer.php");?>