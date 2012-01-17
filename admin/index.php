<!DOCTYPE HTML>


<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin Luvshop</title>
	
	<!-- Imports General CSS and jQuery CSS -->
	<link href="css/screen.css" rel="stylesheet" media="screen" type="text/css" />
	
	<!-- CSS for Fluid and Fixed Widths - Double to prevent flickering on change -->
	<link href="css/fixed.css" rel="stylesheet" media="screen" type="text/css" />
	<link href="css/fixed.css" rel="stylesheet" media="screen" type="text/css" class="width" />
	
	<!-- CSS for Theme Styles - Double to prevent flickering on change -->
	<link href="css/theme/blue.css" rel="stylesheet" media="screen" type="text/css" />
	<link href="css/theme/blue.css" rel="stylesheet" media="screen" type="text/css" class="theme" />
	
	<!-- jQuery thats loaded before document ready to prevent flickering - Rest are found at the bottom -->
	<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
	<script type="text/javascript" src="js/jquery.styleswitcher.js"></script>
	<script type="text/javascript" src="js/jquery.visualize.js"></script>
	
</head>

<body>

<!-- Start: Page Wrap -->
<div id="wrap" class="container_24">

	<!-- Header Grid Container: Start -->
	<div class="login">
		
	<!-- Info Notice: Start -->
	<div class="notice info">
		<p>Tekan enter atau klik tombol login untuk masuk ke admin panel.</p>
	</div>
	<!-- Info Notice: End -->
	
		<!-- Header: Start -->
		<div id="header">
				
			<!-- Logo: Start -->
			<a href="#" id="logo">LuvShop Admin</a>
			<!-- Logo: End -->
			
			<!-- Login: Start -->
			<form action="<?php include '../../config/url.php'?>model/model_login.php" method="POST" id="login">
				
				<!-- Username Input: Start -->
				<label for="username" class="label_username">User</label>
				<input type="text" name="usernam" value="" id="usernam" class="password tip-stay validate" title="Enter your username" />
				<!-- Username Input: End -->
				
				<!-- Password Input: Start -->
				<label for="password" class="label_password">Password</label>
				<input type="password" name="password" value="" id="password" class="password tip-stay validate" title="Enter your password" />
				<!-- Password Input: End -->
				
				<!-- Login Button: Start -->
				<input type="submit" value="login" class="tip" title="Login" />
				<!-- Login Button: End -->
				
			</form>
			<!-- Login: End -->
			
		</div>
		<!-- Header: End -->
		
		<!-- Breadcrumb Bar: Start -->
		<div id="breadcrumb">
			
			<!-- Breadcrumb: Start -->
			<ul class="left">
				<li class="icon key"><a href="#">Forgot password?</a></li>
			</ul>
			<!-- Breadcrumb: End -->
			
			<!-- Breadcrumb Icon Links: Start -->
			<ul class="right">
				<li><a href="#" class="icon home tip" title="Home">Home</a></li>
			</ul>
			<!-- Breadcrumb Icon Links: End -->
			
		</div>
		<!-- Breadcrumb Bar: End -->
		
	</div>
	<!-- Header Grid Container: End -->

</div>
<!-- End: Page Wrap -->

	<!-- jQuery libs - Rest are found in the head section (at top) -->
	<script type="text/javascript" src="js/jquery.visualize-tooltip.js"></script>
	<script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery.poshytip.min.js"></script>
	<script type="text/javascript" src="js/jquery.quicksand.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/jquery.facebox.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/jquery.wysiwyg.js"></script>
	<script type="text/javascript" src="js/syntaxHighlighter/shCore.js"></script>
	<script type="text/javascript" src="js/syntaxHighlighter/shBrushXml.js"></script>
	<script type="text/javascript" src="js/syntaxHighlighter/shBrushJScript.js"></script>
	<script type="text/javascript" src="js/syntaxHighlighter/shBrushCss.js"></script>
	<script type="text/javascript" src="js/syntaxHighlighter/shBrushPhp.js"></script>
	
	<!-- jQuery Customization -->
	<script type="text/javascript" src="js/custom.js"></script>

</body>

</html>