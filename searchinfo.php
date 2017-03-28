<?php
session_start();
require("header.php");
require("checkUser.php")
?>
<style>
#wikiArea
{
margin-top:20px;
margin-bottom:20px;
color:black;
border:3px solid black;
border-radius :12px;

padding:12px;
padding-bottom:12px;
background-color:ivory;
width:880px;}
input {
  width:80%;
}
.heading {
  border-radius:25px;
  margin:1%;
  padding:1%;
  display:inline-block;
  font-family:'Lobster';
}
.heading img {
  background-color:#0099cc;
  border-radius:25px;
  display:inline-block;
  font-family:'Lobster';
  width:50%;
}
a { color: inherit; 
} 
h2 {
  color:black;
  padding-left:1%;
  padding-top:1%;
}
p {
  padding-bottom: 1%;
  padding-left:1%;
  font-size:25px;
}
div {
  border-radius:25px;
}

#output {
  margin-top:1%;
  border-radius:25px;
  font-family:'Lobster';
}
h2 {
  font-family:Times New Roman;
}

</style>
<div id="wikiArea">
<div class="container">
  <h1>Wikipedia Search</h1>
  <input id="searchTerm" name="search" placeholder="Search..">
  <button id='search' type="button" class ="btn btn-primary">Submit</button>
  <a href="https://en.wikipedia.org/wiki/Special:Random" class="btn btn-primary">Random</a>
  <div id="output"></div>
  
</div>
</div>

