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
<link rel = "stylesheet"
        type = "text/css"
        href="css/styleanu.css">
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
<div class="wrap">
		<!---start-content---->
				<div class="content">
        <div id="sign" align="center">
  <?php
 include 'connect.php';
  if(isset($_POST['submit']))
   {
	 
	   $a = $_POST['name'];
	   $e = $_POST['dob'];
	   $g = $_POST['addm'];
	   $h = $_POST['mob'];
	   $i = $_POST['em'];
         $cu = $_POST['sel'];
		 
		 
	    $sqll = mysql_query("UPDATE `karatte`.`registration` SET `firstname` = '$a', `dob` = '$e', `address` = '$g', `phoneno` = '$h', `emailid` = '$i', `currentstatus` = '$cu' WHERE `registration`.`id` = '$ab'");
		 if(!$sqll)
		  die("Failed To Inserted");
		 else
		  echo "<span id='smsg'>Data Updated Successfullyy..!!</span>";
   } ?>


<body>

 <form name="f" id="f" method="post" action="">
 <?php
  include 'connect.php';
 $up = mysql_query("select * from  registration where id='$ab'"); 
  while($row = mysql_fetch_array($up))
	{
		$v=$row['upload'];
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



                     <div class="imagecontainer"><div align="center" > <img class="" src="images/<?php echo "{$row['upload']}";?>" height="210" width="180" ></div></div>
    
   <table width="422" border="1">
 
      <tr>
        <td width="146" height="45">Name</td>
        <td width="260"><label for="textfield"></label>
        <input type="text" name="name" id="name" class="textt" value=<?php echo "{$row['firstname']}";?> /></td>
      </tr>
     
      <tr>
        <td height="41">Date Of Birth</td>
        <td><label for="textfield4"></label>
        <input type="text" name="dob" id="dob"class="textt" value="<?php echo "{$row['dob']}";?>" /></td>
      </tr>
   
      <tr>
        <td height="39">Address</td>
        <td><label for="textarea"></label>
        <textarea name="addm" id="addm"  class="textt" cols="45" rows="5"><?php echo "{$row['address']}";?></textarea></td>
      </tr>
      <tr>
        <td height="41">Mobile</td>
        <td><label for="textfield6"></label>
        <input type="text" name="mob" id="mob" class="textt" value="<?php echo "{$row['phoneno']}";?>"/></td>
      </tr>
      <tr>
        <td height="42">Email Id</td>
        <td><label for="textfield7"></label>
        <input type="email" name="em" id="em" class="textt" value="<?php echo "{$row['emailid']}";?>"/></td>
      </tr>
      <tr>
        <td height="40">current status</td>
        <td><label for="textfield8"></label>
        <input type="text" name="uname" id="uname" class="textt" value="<?php echo "{$row['currentstatus']}";?>"  readonly/></td>
      </tr>



      
 
          <td align="center" colspan="2"><p>change update
            <label for="sel"></label>
            <select name="sel" id="sel">
              <option value="white">white</option>
              <option value="orenge">orenge</option>
              <option value="black">black</option>
            </select>
          
          </p>
              <p>
                <input type="submit" id="submit" name="submit" value="Edit" class="btn"  />
            </p></td>
      </tr>
      
   </table>
 
   <?php
	}
	?>
    
   
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



