

<?php 
	if(!isset($_SESSION["fn"]))
		header("location:login.php");
?>
<style>
#user{background-color:white;
color:white;}
</style>

<span style="float:right">
<div id="user">
welcome <?php echo $_SESSION["fn"];?>, [ <a href="logout.php">log-out</a> ] 
</div>
</span>
