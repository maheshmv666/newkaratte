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
        <li class="active"><a href="staffRegistration.php">Signup</a></li>
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
        <div id="sign" align="center">
   <?php
if(isset($_POST['submit']))
{
 include 'connect.php';
		 $t  =$_POST['tid'];
	    $a  =$_POST['fname'];
		$b  =$_POST['lname'];
		$c  =$_POST['dob'];
		$d  =$_POST['radio'];
		$e  =$_POST['sid'];
		$f =$_POST['add'];
		$g  =$_POST['cno'];
		$h  =$_POST['eid'];
	  $target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	$lm = basename( $_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

	  
	   $sql = mysql_query("INSERT INTO `karatte`.`registration` (`id`, `firstname`, `lastname`, `gender`, `dob`, `address`, `phoneno`, `emailid`, `currentstatus`, `upload`) VALUES ('$t', '$a', '$b', '$d', '$c', '$f', '$g', '$h', '$e', '$lm')");
	    if(!$sql) 
		 die("Failed To Insert");
		else
		 echo "<span id='msgo'>Data Saved Successfullyy..!!</span>";  
}

?>
<body>

<form id="form1" name="form1" method="post" enctype="multipart/form-data">
  <table width="455">
    <tbody>
  <tr><?php
 function make5digit($num)
 {
	$str = str_pad($num,2,"w",STR_PAD_LEFT);
	return $str;
   }
?>
        <td width="90" height="44"><div align="justify">Trainers id</div></td>
        <td width="459"><input type="text" name="tid" id="tid" class="text"  placeholder="                Enter ID(do not use number)" value=""/></td>
      </tr>
      <tr>
        <td width="90" height="44"><div align="justify">First Name</div></td>
        <td width="459"><input type="text" name="fname" id="fname" class="text" required></td>
      </tr>
      <tr>
        <td height="44"><div align="justify">Last Name</div></td>
        <td><input type="text" name="lname" id="lname" class="text" required></td>
      </tr>
      <tr>
        <td height="66"><div align="justify">Address</div></td>
        <td><textarea name="add" id="add" class="text" required></textarea></td>
      </tr>
      <tr>
        <td height="38"><div align="justify">Birth Date</div></td>
        <td><input type="text" name="dob" id="dob" class="textt" required></td>
      </tr>
      <tr>
        <td height="36"><div align="justify">Gender</div></td>
        <td><input type="radio" name="radio" id="radio" value="Male">
          Male 
            <input type="radio" name="radio" id="radio2" value="Female">
Female </td>
      </tr>
      <tr>
        <td height="44"><div align="justify">current status</div></td>
        <td><div id="stateee">
          <label for="sid"></label>
          <select name="sid" id="sid">
            <option value="white">white</option>
            <option value="orenge">orenge</option>
            <option value="black">black</option>
            </select>
          </div></td>
      </tr>
      <tr>
        <td height="46"><div align="justify">Contact No</div></td>
        <td><input type="text" name="cno" id="cno" class="text" required></td>
      </tr>
      <tr>
        <td height="47"><div align="justify">Email Id</div></td>
        <td><input type="email" name="eid" id="eid" class="text" required></td>
      </tr>
   <tr>
        <td><div align="justify">Photo</div></td>
        <td><input type="file" name="fileToUpload" id="fileToUpload" class="textt" required></td>
      </tr>
 
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="submit" id="submit" value="Submit" class="btn">
        </div></td>
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
<div class="footer-bg">
<div class="wrap">
<div class="footer">
		<div class="f_grid">

		</div>
		<div class="f_grid1">
			<div class="copy">
				<p class="w3-link">&nbsp;</p>
			</div>
			<div class="clear"></div>
		</div>
		<div class="f_logo">
			<a href=""><img src="images/logo2.png" alt=""></a>
 		</div>
		<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>



