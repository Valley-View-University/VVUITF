<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>
<script type="text/javascript" src="script.js"></script>
<style>
#ans{
padding-left:20px;
background-color:white;}

.box1{
width:800px;
margin-bottom:1px;
height:50px;
border:10px solid skyblue;
color:white;
padding-left:20px;
text-aligh
font-family:Aharoni;
font-size:17px;
border-radius:20px;
font-family:sans serif;
	width: auto;
	color:white;
    font-weight:42px;
	background-color:black;
	display:block;
}
#detail{
word-wrap:break-word;
font-size:18px;
font-family:Bodoni MT;
border:10px solid brown;
border-radius:20px;background-color:black;
height:auto;
color:white;
padding-top:5px;
padding-left:5px;
padding-bottom:20px;
width:840px;
}

</style>
<div id="ans"></br>
<?php
$sql="SELECT * from  answer,question where answer.user_id=$_SESSION[uid] and answer.question_id=question.question_id";
$result=ExecuteQuery($sql);
      
	  	
	  
		while($row = mysql_fetch_array($result))
		{
		echo "<span class='box1'>";	
		echo "<span class='head'><a href='questionview.php?qid=$row[question_id]'><h4>$row[heading]</h4></a></span>";
		echo "</span>";
		echo  "<br/>";
		
		
		
		echo "<div id='detail'>"."<p><b><u>Answer</b></u>:<p>".$row['answer_detail']."</div>";
		echo  "<br/>";
		
		
		echo $row['datetime'];
		echo  "<br/>";
		echo "<div class=line></div>";
		}
		
	  
   
?>
<a class="art-button" href="uhome.php">Back</a>
</div>
<?php require("footer.php");?>