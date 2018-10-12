
<!DOCTYPE HTML>
<html>
<head>
<title>G P T C CHELAKKARA</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="style.css" rel="stylesheet" type="text/css">
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

<div class="header-bg"></div>
<div class="wrap" align="center">
		<!---start-content---->
			
            <div class="contact">
        <table width="" border="0" height="81" align="right">
  <tr>
    <td width="40" align="right"><div align="right"><img src="images/place.png"></div></td>
    <td width="166"><div align="right">    Wadakkancherry</div></td>
  </tr>
  <tr>
    <td height="24" align="right"><div align="right"><img src="images/email.png"></div></td>
    <td> <div align="right">          worldmartialarts555@gmail.com</div>
  </tr>
  <tr>
    <td align="right"><div align="right"><img src="images/contact.png"></div></td>
    <td><div align="right">9539218017</div></td>
  </tr>
</table>

      </div>
	<div class="logoanu" align="left">
				<a href="index.html"><img src="images/AKF.png" title="logo" /></a>
			</div>
	<div class="top-header">
			<div class="wrap">
		<!----start-logo---->
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" title="logo" /></a>
			</div>
		<!----end-logo---->
		<!----start-top-nav---->
		<div class="top-nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="store.html">Trainers</a></li>
				<li><a href="blog.html">Traing</a></li>
                <li><a href="feedback.php">Careers</a></li>
                <li><a href="gallery.php">gallery</a></li>
			  <li><a href="contact.html">Contact</a></li>
            
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
</div>
					  <div class="loaderanu"  	>		 
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; </p>
<div align="center">

 <?php
 include 'connect.php';
  if(isset($_POST['submit']))
   {
	 
	   $a = $_POST['de'];
	   

 
    $sqll=mysql_query("DELETE FROM `karatte`.`registration` WHERE `registration`.`id` = '$a';");
		 if(!$sqll)
		  die("Failed To delete");
		 else
		  echo "<span id='smsg'>Data deleted Successfullyy..!!</span>";


   }
?>

<form id="form1" name="form1" method="post" action="">

 <table border="0">
<tr>
  DELETE </tr>  <tr><input type="text" name="de" id="de" /></tr>
  
  
  <tr> <input type="submit" id="submit" name="submit" value="Edit" class="btn"  /></tr>
</form>


</div>
</div>
						<div class="clear"></div>

				<!---End-content---->
<div class="clear"> </div>
				</div>
</body>
</html>

