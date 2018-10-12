<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>G P T C CHELAKKARA</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/stylee.css" rel="stylesheet" type="text/css" media="all" />
<link href="style.css" rel="stylesheet" type="text/css">
<link href="stylee.css" rel="stylesheet" type="text/css">
<script src='js/jquery-1.8.1.min.js' type='text/javascript'></script>
<script src='js/jquery.kwicks.js' type='text/javascript'></script>
<script type='text/javascript'>
	$(function() {
	$('.kwicks').kwicks({
		maxSize : 250,
		spacing : 5,
		behavior: 'menu'
		});
	});
</script>
<script type="text/javascript">
 function validation()
 {
	 var a = document.getElementById('u').value;
	 var b = document.getElementById('p').value;
	  if(a == "")
		 {
			 alert("Plz Enter Your Name");
			 return false;
		 }
		 else if(b == "")
		  {
				alert("Plz Enter your Password");
				return false;
			}
			else
			{
				return true;
			}
 }
</script>
</head>
<body class="bg">
<div class="header-bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
		  		<a href="index.html"><img src="images/logo1.png"> </a>
	  </div>
		<div class="menu">
	  <ul class='kwicks kwicks-horizontal'>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="login.php">Login</a></li>
        <li><a href="staffRegistration.php">Signup</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
	 </div>
	 <div class="clear"></div>
	</div>
</div>
</div>
<div class="wrap">
		<!---start-content---->
				<div class="content">
        <div id="loginpage">
					    			  <?php
 include 'connect.php';
  if(isset($_POST['submit']))
   { 
    $_SESSION['ab'] = $_POST['u'];
    $_SESSION['ac'] = $_POST['p'];
	   $a = $_POST['u'];
		$b = $_POST['p'];
		$role="";
		$id ="";
		 $sql = mysql_query("select * from  login where username='$a' AND password='$b'");
		  while($row = mysql_fetch_array($sql))
		   {
			    $id =$row['id'];
				$_SESSION['ide'] = $id;
		 
				 $role =$row['role'];
			 }
		    if($role == 'admin')
			 header("location:demlogview.php");
	

			  else
			   echo "<span id='msg'>Invalid Username And Password....!!!!</span>";
   }
?>
<?php
?>

<form name="f" id="f" action="" method="post"  onSubmit="return val();">
  <table width="414" align="center">
    <tbody>
      <tr>
        <td width="70" height="50" align="right"><img src="images/user-icon-1005123344.png" width="35px" height="38px" class="user"></td>
        <td width="332"><input type="text" name="u" id="u" class="textt" placeholder="                Enter Your Username" ></td>
      </tr>
      <tr>
        <td height="90"><img src="images/lock-multi-size.ico" width="42px" height="42px" class="pass"></td>
        <td><input type="password" name="p" id="p" class="textt" placeholder="                 Enter Your Password" ></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit"  value="Login" id="btn" onClick="return validation();"></td>
      </tr>
    
    </tbody>
  </table>
</form>
</div>
						<div class="clear"></div>
  </div>
</div>
				<!---End-content---->
<div class="clear"> </div>
				</div>
</body>
</html>

