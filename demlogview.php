<?php
 session_start();
 $ab = $_SESSION['ide'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>G P T C CHELAKKARA</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/stylee.css" rel="stylesheet" type="text/css" media="all" />
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
<link rel="stylesheet" type="text/css" href="js/jquery-ui.css">
<script type="text/javascript" src="js/jquery-ui.min.js">
 </script>
<script>
   $(document).ready(function() {
    $("#dob").datepicker();
  });
 </script>
</head>
<body class="bg">
<div class="header-bg"></div>
<div class="">
		<!---start-content---->
				<div class="content">
        <div id="sign" align="center">
  <?php
 include 'connect.php';
  if(isset($_POST['submit']))
   {
	 
	   $a = $_POST['name'];
	   $e = $_POST['mob'];

		 
		 
	    $sqll = mysql_query("UPDATE `karatte`.`login` SET `username` = '$a', `password` = '$e' WHERE `login`.`id` = '$ab'");
		 if(!$sqll)
		  die("Failed To Inserted");
		 else
		  echo "<span id='smsg'>Data Updated Successfullyy..!!</span>";
   } ?>


<body>

 <form name="f" id="f" method="post" action="">
 <?php
  include 'connect.php';
 $up = mysql_query("select * from  login where id='$ab'"); 
  while($row = mysql_fetch_array($up))
	{
		$v=$row['role'];
?>
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
                <li><a href="registration.php">registration</a></li>
				<li><a href="view.php">search</a></li>
				<li><a href="trinersview.php">current status</a></li>
				<li><a href="demlogin.php">logout</a></li>
        
            
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
</div>


<div>




    
   <p>
     <input type="image" name="add" id="add" src="images/dds.png" height="720" width="1020">
   </p></div>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <div class="tablee">
   <table width="422" border="1">
 
      <tr>
        <td width="146" height="45">CHANGE USERNAME</td>
        <td width="260"><label for="textfield"></label>
        <input type="text" name="name" id="name" class="textt" value=<?php echo "{$row['username']}";?> /></td>
      </tr>
     
    <tr>
        <td height="41">CHANGE PASSWORD</td>
        <td><label for="textfield6"></label>
        <input type="text" name="mob" id="mob" class="textt" value="<?php echo "{$row['password']}";?>"/></td>
      </tr>
   



      
 
      <tr align="right">
        <td align="right">
                 <p>
                   <input type="submit" id="submit" name="submit" value="Edit" class="btn"  />
                </p>
            </p></td>
      </tr>
      
   </table>
  </form>
   <?php
	}
	?>
    
   

</div>
</div>
						<div class="clear"></div>
  </div>
</div>
				<!---End-content---->
<div class="clear"> </div>
				</div>
</body>
</html>



