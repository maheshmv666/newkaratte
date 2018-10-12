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
<div class="wrap">
		<!---start-content---->
				<div class="contentt">
<form name="f" id="f" action="" method="post">
  <table  style="font-family: cursive;" cellpadding="3" border="2" id="io" align="center">

    <tr>      <th width="69"><div align="center"><b>sln</b></div></th>
      <th width="69"><div align="center"><b>idno</b></div></th>
      <th width="69"><div align="center"><b>firstName</b></div></th>
      <th width="69"><div align="center"><b>Last Name</b></div></th>
      <th width="66"><div align="center"><b>Date Of Birth</b></div></th>
      <th width="68"><div align="center"><b>Gender</b></div></th>
      <th width="57"><div align="center"><b>Address</b></div></th>
      <th width="68"><div align="center"><b>Phone</b></div></th>
      <th width="105"><div align="center"><b>currentstatus</b></div></th>

    </tr>
    <?php
	 include 'connect.php';
	  $i = 1 ;
	  $sql = mysql_query("select * from registration");
	   while($r =mysql_fetch_array($sql))
	   {
		   $id =$r['id'];
		   $a = $r['firstname'];
	?>
    <tr>
      <td align="center" width="37" height="50"><?php echo $i++;?></td>
    <td align="center"><?php echo "{$r['id']}";?></td>
      <td align="center"><?php echo "{$r['firstname']}";?></td>
      <td align="center"><?php echo "{$r['lastname']}";?></td>
      <td align="center"><?php echo "{$r['dob']}";?></td>
      <td align="center"><?php echo "{$r['gender']}";?></td>
      <td align="center"><?php echo "{$r['address']}";?></td>
       <td align="center"><?php echo "{$r['phoneno']}";?></td>
      <td align="center"><?php echo "{$r['currentstatus']}";?></td>
   

    </tr>
   
	<?php	} ?>	
</table>
 </form> 
 
			<div class="clear"></div>
  </div>
				</div>
				<!---End-content---->
				<div class="clear"> </div>
				</div>
</body>
</html>



   