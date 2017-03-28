<?php  session_start();
 require("header.php"); 
	require("checkuser.php");
		
?>
<style>
body
{
text-transform:bold;
color:brown;
}

#que
{
background-color:rosybrown	;
border-radius :12px;
width:200px;
height 200px;
}
#que:hover
{
background-color:brown;
color:white;
}

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
word-wrap: break-word;
border:3px solid black;
border-radius :12px;
padding-left:12px;
background-color:ivory;
width:700px;}
</style>
	<script type="text/javascript">
		function check(f)
		{
			if(f.head.value=="")
			{
				document.getElementById("a").innerHTML="Please,Enter the heading";
				//alert("Please,Enter The Heading");
				f.head.focus();
				return false;
				
				}
				else if(f.ta.value=="")
				{
					document.getElementById("b").innerHTML="Please,Enter The Question";
					//alert("Please,Enter The Question")}
					f.ta.focus();
					return false;
		}
			   else
			   return true;
			}
			
	if (qa_ckeditor_content = CKEDITOR.replace('content', qa_wysiwyg_editor_config))
	{ 
	qa_ckeditor_content.setData(document.getElementById('content_ckeditor_data').value);
	document.getElementById('content_ckeditor_ok').value = 1; }		
	</script>
	</br>
	<div id="questionArea">
	</br>
	<h2>Ask a question</h2>
	 <img src="res/images/question.jpg" width=350 height=250/>  </br></br> </br>
<form action="questionH.php" method="POST" onsubmit="return check(this)">
<input type="hidden" value="<?php echo $_GET["stid"] ?>" name="stid" />
<table>
<tr>Heading (At least 50 words):<br><textarea rows="1"cols="40" name="head"></textarea><span id='a' style="color: red;"></span></tr><br/><br/>
<input name="content_ckeditor_ok" id="content_ckeditor_ok" type="hidden" value="0"><input name="content_ckeditor_data" id="content_ckeditor_data" type="hidden" value="">
<tr><tr>Enter your question:<br/><textarea rows="6" cols="50" name="ta" ></textarea><span id='b' style="color: red;"></span></tr><br/>

									
<tr><td><input id ="que" type="submit" value="Ask the question"></td><td><input id="que"type="reset" value="Clear"></td></tr><br/>
</table><br/>
</form>
</div>


<?php require("footer.php"); ?>