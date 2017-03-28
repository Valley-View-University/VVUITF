<?php  require("header.php"); ?>
<script type="text/javascript">
	function check(form1)
	{
		if(
		form1.u_name.value == "" ||
		form1.f_name.value == "" ||
		form1.pwd.value == "" ||
		form1.e_mail.value == ""||
		form1.gender.value == ""||
		form1.dob.value == ""||
		form1.add.value == ""||
		form1.sta.value == "" ||
		form1.cou.value == "" )
		{
		
			if (form1.u_name.value == "")
			{
				document.getElementById("a").innerHTML = "Please, Enter user name.";
				//alert("Please, Enter The Username");
			form1.u_name.form1.focus();
				
			}
			else
			{
				document.getElementById("a").innerHTML = "";
				//alert("Please, Enter The Username");
				form1.u_name.focus();
				
			}
			 if (form1.f_name.value == "")
			{
				document.getElementById("b").innerHTML = "Please, Enter full name.";
				//alert ("Please,Please Enter The Fullname");
				form1.f_name.focus();
				
			}
			else
			{
				document.getElementById("b").innerHTML = "";
				//alert ("Please,Please Enter The Fullname");
				form1.f_name.focus();
			}
			 if (form1.pwd.value == "")
			{
				document.getElementById("c").innerHTML = "Please, Enter password.";
				//alert ("Please,Please Enter The Password");
				form1.pwd.focus();
				
			}
			else
			{
				document.getElementById("c").innerHTML = "";
				//alert ("Please,Please Enter The Password");
				form1.pwd.focus();

			}
			
			 if (form1.e_mail.value == "")
			{
				document.getElementById("d").innerHTML = "Please, Enter e-mail address.";
				//alert ("Please,Please Enter The E-mail Address");
				form1.e_mail.focus();
				
			}
			else
			{
				document.getElementById("d").innerHTML = "";
				//alert ("Please,Please Enter The E-mail Address");
				form1.e_mail.focus();
			}
			 if (form1.gender.value == "")
			{
				document.getElementById("spuid").innerHTML = "Please, Enter the gender.";
				//alert("Please,Please Enter The Gender");
				form1.gender.focus();
				
			}else
			{
				document.getElementById("spuid").innerHTML = "";
				//alert("Please,Please Enter The Gender");
				form1.gender.focus();
			}
			 if (form1.dob.value == "")
			{
				document.getElementById("e").innerHTML = "Please, Enter date of birth.";
		//		alert ("Please,Please Enter The Date Of Birth");
				form1.dob.focus();
				
			}
			else
			{
				document.getElementById("e").innerHTML = "";
		//		alert ("Please,Please Enter The Date Of Birth");
				form1.dob.focus();

			}
			 if (form1.add.value == "")
			{
				document.getElementById("f").innerHTML = "Please, Enter address.";
				//alert ("Please,Please Enter The Address");
				form1.add.focus();
				
			}
			else
			{
				document.getElementById("f").innerHTML = "";
				//alert ("Please,Please Enter The Address");
				form1.add.focus();
			}
			 if (form1.sta.value == "")
			{
				document.getElementById("g").innerHTML = "Please, Enter state.";
				//alert ("Please,Please Enter The State");
				form1.sta.focus();
				
			}
			else
			{
				document.getElementById("g").innerHTML = "";
				//alert ("Please,Please Enter The State");
				form1.sta.focus();

			}
			 if (form1.cou.value == "")
			{
				document.getElementById("h").innerHTML = "Please, Enter country.";
				//alert ("Please,Please Enter The Country");
				form1.cou.focus();
				
			}
			else
			{
				document.getElementById("h").innerHTML = "";
				//alert ("Please,Please Enter The Country");
				form1.cou.focus();
			}
			return false;
		}
		else
			return true;
	}
</script>



<style>
textarea
{
padding-top:10px;
font-family:Aharoni;
border-radius :12px;
background-color:black;
color:white;
font-size:20px}
	
#registerArea
{
margin-top:20px;
margin-bottom:20px;
color:black;
border:3px solid black;
border-radius :12px;
padding-left:12px;
padding-top:12px;
padding-bottom:12px;
background-color:ivory;
width:880px;}

p#title

{
font-size:20px;
color:white;
text-align: center;
width: 500px;
background-color:CornflowerBlue  }
body{color:white;} 
#button{background-color:brown;}
#button:hover
{
background-color:CornflowerBlue ;
color:white;
}
input, select
{
padding-top:5px;
padding-bottom:5px;
font-family:Aharoni;
border-radius :5px;
background-color:black;
color:white;
font-size:15px}
 select
{
padding-top:5px;
padding-bottom:5px;
font-family:Aharoni;
border-radius :5px;
background-color:white;
color:brown;
font-size:15px}
</style>
<div id="registerArea">
<p id="title"><u>Register Student</u></p>
<form action="registerH.php" method="post" onsubmit="return check(this)" enctype="multipart/form-data" name = "form1">
<table>
<tr><td>Username/Student ID</td><td>:</td><td><input type="text" name="u_name" ><span id='a' style="color: red;"></span></td></tr>
<tr><td>Fullname</td><td>:</td><td><input type="text" name="f_name"><span id='b' style="color: red;"></span></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="pwd"><span id='c' style="color: red;"></span></td></tr>
<tr><td>E_Mail</td><td>:</td><td><input type="text" name="e_mail"><span id='d' style="color: red;"></span></td></tr>
<tr><td>Gender</td><td>:</td><td><input type="radio" name="gender" value="1" checked="checked">male <input type="radio" name="gender" value="2">female<span id='spuid' style="color: red;"></span></td></tr>
<tr><td>Date Of Birth</td><td>:</td><td><input type="text" name="dob" ><span id='e' style="color: red;"></span></td></tr>
<tr><td>Image</td><td>:</td><td><input type="file" name="ima"></td></tr>
<tr><td>Address</td><td>:</td><td><textarea rows="4" cols="35" name="add"></textarea><span id='f' style="color: red;"></span></td></tr>
<tr><td>State</td><td>:</td><td><input type="text" name="sta"><span id='g' style="color: red;"></span></td></tr>
<tr><td>Country</td><td>:</td><td><select name="devices">
<option value="Ghana" selected="selected">
Ghana</option>
<option value="Nigeria">Nigeria</option>
<option value="Liberia">Liberia</option>
<option value="Cote D'Voire">Cote D'Voire</option>
</select></span></td></tr>

<tr><td><input id="button" type="submit" value="Submit"></td><td></td><td><input id="button" type="reset" value="Reset"></td></tr></table></form>
</div>
<?php require("footer.php"); ?>