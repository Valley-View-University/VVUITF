<?php session_start();
require("header.php");
require("checkUser.php")?>

<script type="text/javascript">
	function check(f)
	{
		if(f.ata.value=="")
		{
			document.getElementById("spuid").innerHTML = "Please, Enter Answer.";
			//alert("Please,Enter The Answer")
			f.ata.focus();
			return false;
			}
			else
			return true;
		}
</script>
<style>
textarea
{
word-wrap: break-word;
padding-top:10px;
font-family:Aharoni;
border-radius :12px;
background-color:black;
color:white;
font-size:20px}
#questionArea
{
border:3px solid black;
border-radius :12px;
padding-left:12px;
background-color:ivory;
width:700px;}

#que:hover
{
background-color:brown;
color:white;
}

#que
{

margin-top:15px;
margin-bottom:20px;
background-color:rosybrown	;
border-radius :12px;
width:200px;
height 200px;
}
</style>
<?php
$sql="SELECT heading from question where question_id=$_GET[id]";
$rows=ExecuteQuery($sql);
$row=mysql_fetch_array($rows);
?>
<div id="questionArea">
<form action="answerH.php" method="POST" onsubmit="return check(this)">
<input type="hidden" value="<?php echo $_GET["id"] ?>" name="qid" />
<table>
<tr><td style="color:brown"><b>RE : <?php echo $row["heading"] ?></b><hr/></td></tr>
<tr><td>Answer:</td></tr><br/>
<tr><td><textarea rows="4" cols="38" name="ata"></textarea><span id='spuid' style="color: red;"></span></td></tr>
<tr><td><input id ="que"type="submit" value="Reply"></td></tr>
</table>
</form>
</div>


<?php require("footer.php")?>