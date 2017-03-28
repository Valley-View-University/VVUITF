<?php require("header.php");?>
<?php 
session_start();

ExecuteNonQuery ("UPDATE User SET isuser=false WHERE user_id='$_SESSION[uid]'");

session_destroy();
?>
<style>
#logout{
word-wrap: break-word;
border:3px solid black;
border-radius :12px;
padding-left:12px;
background-color:ivory;
width:700px;}
</style>
<div id="logout">
<h1>Logged out Sucessfully</h1>
<p>
	You have logged out.  <a href="index.php">Click hear</a> to login again.
</p>
</div>
<?php require("footer.php");?>
