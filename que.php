<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
	echo "<h4 class='head'>My Questions<img src='res/images/askq.jpg'  class='imagedel'/></h4>";
?>
<style>

.head{background-color:white;
margin-bottom:1px;}
#detail
{
word-wrap:break-word;
word-wrap:break-word;
}
.box1{

margin-bottom:1px;
height:55px;
border:10px solid brown;
color:white;
padding-left:20px;
text-aligh
font-family:Aharoni;
font-size:17px;
border-radius:20px;
font-family:sans serif;
	width: auto;
	color:white;
	border:4px solid white ;
    font-weight:42px;
	background-color:black;
	display:block;
}
#detail{
font-size:18px;
font-family:Bodoni MT;
border:10px solid brown;
border-radius:20px;background-color:black;
height:auto;
color:white;
padding-top:5px;
padding-left:5px;
padding-bottom:20px;
}


#que{

background-color:white;}
</style>
<div id="que"></br>
<?php

$sql="SELECT * from question where user_id=$_SESSION[uid]";
$result=ExecuteQuery($sql);
	
		while($row = mysql_fetch_array($result))
		{
		
		echo "<span class='box1'>";
		echo "<span class='head'><a href='questionview.php?qid=$row[question_id]'><h4><b><u>Topic</b></u>:&ensp; $row[heading]</h4></a></span>";
		echo "</span>";
		echo  "<br/>";
		echo "<div id='detail'>"."<p><b><u>Question</b></u>:<p>".$row['question_detail']."</div>";
		echo  "<br/>";
		
		echo $row['datetime']."<br/>"."<br/>";
		echo "<div class='line'></div>";
				

		}
		if(!($row = mysql_fetch_array($result)))
	  {
	  echo "<h2>You have no Questions!!!!</h2>"."</br>";
	  }

?>
</div>

<?php require("footer.php")?>