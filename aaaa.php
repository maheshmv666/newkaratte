<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="f" id="f" action="" method="post">
  <table  style="font-family: cursive;" cellpadding="3" border="2" id="io" align="center">

    <tr>      <th width="69"><div align="center"><b>sln</b></div></th>
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
		
</body>
</html>