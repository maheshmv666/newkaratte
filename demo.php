<!DOCTYPE HTML>
<html>
<head>
<title>G P T C CHELAKKARA</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
 <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'> 
<!-- Scripts--> 
    <script type='text/javascript' src='js/jquery.min.js'></script>
    <script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='js/camera.min.js'></script> 
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script>
</head>
<body>
<div class="header-bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
		  		<a href="index.html"><img src="images/l.png"> </a>
		 </div>
		<div class="menu">
			<ul class='kwicks kwicks-horizontal'>
				<li ><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="login.php">Login</a></li>
        <li><a href="staffRegistration.php">Gallery</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
	 </div>
	 <div class="clear"></div>
	</div>
</div>
</div>
<div class="fluid_container">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div  data-src="images/aaaa.jpg">
            </div>
            <div data-src="images/fg.jpg">
            </div>
            <div  data-src="images/j.jpg">
            </div>
        </div><!-- #camera_wrap_1 -->
   </div><!-- .fluid_container -->
<div class="footer-bgk">
<div class="wrap">
<div class="footer">
		<div class="f_grid">

		</div>
		<div class="f_grid1">
		  <div class="copy"></div>
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