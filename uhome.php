<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>
<style>
.uhome	
{
height: 50px;
background-color:white;
}
a.bg{color:white}
h4{
padding-top:10px;}
a.bg{
border-radius :12px;
background-color:white;
color:red;
font-size :50px;	
}
td.top{ font-size:15px;
color:white;
background-color:skyblue;
font-family:Aharoni;
border-radius:20px;
text-align:center;	

}
#detail
{
font-family:Bodoni MT;
padding:10px;
word-wrap:break-word;
word-wrap:break-word;
}
</style>
<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>
<div class="uhome">
<h4><a class="bg" href="que.php">My Question</a>   &nbsp;&nbsp;
<a class="bg" href="ans.php">My Answered </a></h4>
</div>
<?php

	$sql="select * from question,user where question.user_id=user.user_id ORDER BY  datetime desc limit 0,5";
	
	$result=ExecuteQuery($sql);
	

	while($row = mysql_fetch_array($result))
	{
		   
			
			echo "<span class='box2'>";
			echo "<span class='head'><a href='questionview.php?qid=$row[question_id]' >$row[heading]</a></span>";
			
			echo "<table>";
			echo "<tr><td class='top' valign='top' width='100px'>
				<img src='$row[uimg]' alt='' class='uimg'/>
				<br/>
			$row[fullname]
			<td valign='top'>
			
			$row[datetime]<br/><br/>
			</td></tr>";
			
			echo "<div id='detail'>$row[question_detail]</div><hr/>	";
			echo "</table></span><div class='h10'></div>";
		}
	
?>


<?php require("footer.php");?>