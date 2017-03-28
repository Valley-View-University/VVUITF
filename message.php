<?php 
session_start();
require("header.php");
require("checkUser.php");

$sql="SELECT * from user where user_id=$_GET[id]";

$rows=ExecuteQuery($sql);
$row = mysql_fetch_array($rows);
?>
<style>
textarea
{
padding-top:10px;
font-family:Aharoni;
border-radius :12px;
background-color:black;
color:white;
font-size:20px}

input
{
padding-top:10px;
font-family:Aharoni;
border-radius :12px;
background-color:black;
color:white;
font-size:20px}


#questionArea
{
padding-top:20px;
border:3px solid black;
border-radius :12px;
padding-left:12px;
background-color:ivory;
width:700px;}
</style>
<script type="text/javascript">
function check(f)
{
	if(f.tt.value=="")	
	{
		document.getElementById("a").innerHTML="Please,Enter the message";
		//alert("Please,Enter The Question");
		f.tt.focus();
		return false;
		}
		else
		return true;
	}

</script>
<div id="questionArea">
<form action="messageH.php" method="POST" onsubmit="return check(this)">
	<input type="hidden" name="uto" value="<?php echo $_GET['id'] ?>" />
<table>
<tr><td>To</td><td>:</td><td><?php echo $row['fullname']; ?></td></tr>
<tr><td></td><td></td><td><textarea rows="3" cols="30" name="tt" ></textarea><span id='a' style="color: red;"></span></td></tr>
<tr><td></td><td></td><td><input type="submit" value="SEND" ></td></tr>
</table>
</form>
<br/>
</div>


<?php require("footer.php")?>