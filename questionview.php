<?php session_start(); 
require("header.php");
require("checkUser.php");
?>
<style>
h2{background-color:white;
padding-top:10px;
padding-left:20px;
font-family:Aharoni;
height:30px;
margin-bottom:1px;
}

td.top{ font-size:15px;
color:white;
background-color:skyblue;
font-family:Aharoni;
border-radius:20px;
text-align:center;	
height:50px;
}
td
{
word-wrap:break-word;
word-wrap:break-word;
}
#detail
{
padding:10px;
font-family:Bodoni MT;
word-wrap:break-word;
word-wrap:break-word;
}
</style>

<?php 
$upd="update question set views=views+1 where question_id=$_GET[qid]";
$res=ExecuteNonQuery($upd);
	
$str="SELECT * from question, user where  user.user_id=question.user_id AND question_id=$_GET[qid]";
	$result=ExecuteQuery($str);
	
	$no_rows = mysql_num_rows($result);
	$head="";
	
	if ($no_rows > 0)
	{	
		while($row = mysql_fetch_array($result))
		{
			
			
			$head = $row['heading'];
			echo "<h4>";
			echo '<h2>'.$head.'</h2>';	
			echo "</h4>";
			echo "<span class='box2'>";
			echo "<span class='head'><a href='answer.php?id=$_GET[qid]'>REPLY</a></span>";
			
			
			echo "<table>";
			echo "<tr><td class='top' valign='top' width='100px'>
				<img src='$row[uimg]' alt='' class='uimg'/>
				<br/>
			$row[fullname]
			<td valign='top'>
			<b>$head</b><br/>
			$row[datetime]<br/><br/>
			</tr>";
			
			echo"<div id='detail'>$row[question_detail]</div><hr/>";
			echo "</table></span><div class='h10'></div>";
		}
		
	}
?>

<?php
	$sql="select * from answer,user where question_id=$_GET[qid] and answer.user_id=user.user_id ORDER BY  datetime desc";

	$result=ExecuteQuery($sql);
	$no_rows = mysql_num_rows($result);
	
	if ($no_rows > 0)
	{	
		
		while($row1 = mysql_fetch_array($result))
		{
			
			echo "<span class='box2'>";
			echo "<span class='head'><a href='answer.php?id=$_GET[qid]'>REPLY</a><a href='like.php?id=$row1[answer_id] ' class='view2' >Like $row1[like]</a> <a href='dwdpap.php?id=$_GET[qid]' class='view2'>Download</a>
</span>";
	
			echo "<table>";
						echo "<tr><td class='top' valign='top' width='100px'>
			<img src='$row1[uimg]' alt='' class='uimg'/>
				<br/>
			$row1[fullname]<td valign='top'><b>Re : $head</b><br/>$row1[datetime]<br/><br/></td></tr>";
			echo"<div id='detail'>$row1[answer_detail]</div><hr/>";
			echo "</table></span><div class='h10'></div>";	
			
		}
	}
		
?>

<?php 
require("footer.php")?>