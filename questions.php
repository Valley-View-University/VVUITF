<?php session_start();
	require("header.php");
	require("checkUser.php");
	
	$id=$_GET["id"];
?>
<style>
.ask
{
padding-left:30px;
}
hr{ 
width:800px
}
.box1{
  
padding-left:20px;
margin-left:10px;
font-family:Aharoni;
font-size:17px;
border-radius:20px;
font-family:sans serif;
	width: 800px;
	color:black;
	border:4px solid skyblue ;
    font-weight:42px;
	background-color:white;
	display:block;	}
#question{
padding-left:20px;
background-color:white;}

#top{ 
border:5px solid skyblue ;
padding-top:6px;
padding-bottom:1px;
font-size:15px;
color:white;
height:32px;
width:250px;
background-color:black;
font-family:Aharoni;
border-radius:50px;
text-align:center;	
}

#detail{
word-wrap: break-word;
overflow:scroll;	
height:50px;
padding-left:40px;
width:835px;
font-size:18px;
font-family:Bodoni MT;
border:10px solid skyblue;
border-radius:20px;
background-color:white;
color:black;
padding:10px;
}

</style>
<div id="question"></br>
<a class="ask" href="question.php?stid=<?php echo $id ?>">Ask Question<img src="res/images/askq.jpg"  class='imagedel'/></a>
<hr />
<?php 
	
	$str="SELECT * FROM question, user WHERE question.user_id=user.user_id and subtopic_id=$id";
	$result=ExecuteQuery($str);
	
	$no_rows = mysql_num_rows($result);
	
	if ($no_rows > 0)
	{
		while($row = mysql_fetch_array($result))
		{
			$rowsc=ExecuteQuery("SELECT count(*) as counter from answer where question_id=$row[question_id]");
			$rowc = mysql_fetch_array($rowsc);
			$count = $rowc['counter'];
			
			
			echo "</h4>";
						echo "<h4>";
			echo "<span class='box1'>";
			echo "<span class='head'><a href='questionview.php?qid=$row[question_id]' >$row[heading]</a></span>";
			
			echo "</span>"."<div id='detail'>"."$row[question_detail] <span class='view2'>Views : $row[views], Replies :$count.</span>"."</div>";
			
			
			
			echo "<div id='top'>"."Asked by<br/>$row[fullname]"."</div>";
			
		
			echo "<br/><div class='line'></div>";
				echo "<hr/>";
			//echo  "<a href='answer.php?qid=$row[question_id]' class='reply'>REPLY</a>";
			
			
		}
	
		
	}
	
			

	else
	{
		echo "No questions at the moment";
	}
	
 

?>
<p><a href="questions.php?id=12">^Top</a></p>
</div>

<?php require("footer.php")?>