<?php session_start();
 require("header.php")?>
 <style>
 #unreg
 {
 background-color: white;
 
 }
 h3:hover
 { 
 font-size:18px;
 color: white;

 font-weight:bold;
 background-color:black;
 }
 </style>
 <div  id="unreg">
 <h2>You are  not registered user!!!!<br/></h2>
<h3> <a href="register.php">Please register</h3><hr/>
<h3> <a href="index.php">Please Login</h3>
 
 </div>
 <?php require("footer.php")?>
