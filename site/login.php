<html>
<?php include("header.php"); ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<h1 style="color: #424e53;">Login Page</h1>

<link rel="stylesheet" type="text/css" href="stylesheet/framework.css">
<link rel="stylesheet" type="text/css" href="stylesheet/boxy.css">

<script>
function clearForms()
{
  var i;
  for (i = 0; (i < document.forms.length); i++) {
    document.forms[i].reset();
	document.form1.username.focus();
  }
}
function alertempty()
{
	  alert("PLEASE ENTER USERNAME AND PASSWORD !");
	  window.close();  
}
</script>
</head>

<body style="font-family: Arial, sans-serif;" onLoad="document.form1.username.focus()">		
<div style="line-height:0.92em; padding-top:5px; border-bottom:#ccc 1px solid;"></div>
<br />

<table class="content" border="0"><tbody>	
	<tr><td align="left" valign="top" bgcolor="#F4F4F4" class="closed" id="left">
			<div style="font-size:18px; font-weight:bold; text-align:center; margin-top:5px;; padding-top:3px;">Existing User</div><br />
			<div style="line-height:0.92em; border-top:#ccc 1px solid; border-bottom:#ccc 1px solid;">&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;&lowast;</div><br />
			
			<form method="post" action="download.php" name="form1" OnSubmit="setTimeout('clearForms()', 100); return true; document.forms.form1.username.focus()">
<div style="margin-left: 60px; margin-top: 5px;"><input type="hidden" value="login">
Username: &nbsp; <input type="text" size="25" maxlength="25" name="username" id="user"/><br /><br />
Password: &nbsp; <input type="password" size="25" maxlength="25" name="password" id="pass"/><br /><br />
<span style="margin-left:195px;">
<input type="submit" value="Log in" name="submit" class="button" /></span><br />
</div>

			</form>
				
				
	</td></tr>
</tbody></table>


<br /><br />	
	
</body>
<?php include("footer.php"); ?>
</html>
