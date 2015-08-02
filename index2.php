<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>index</title>
		<!-- Jquery -->
		<script src="js/jquery-1.11.3.js"></script>
		<script src="js/tab.js"></script>
		<script src="js/autoload.js"></script>
		<!-- Bootstrap -->
		<!-- 最新編譯和最佳化的 CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<!-- 選擇性佈景主題 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		<!-- 最新編譯和最佳化的 JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		
		<!-- Material Design Lite -->
	    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
	    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-pink.min.css">
	    <!-- Material Design icon font -->
	    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- css -->
		<link rel="stylesheet" href="css/carouse.css" type="text/css">
		<link rel="stylesheet" href="css/hcf.css" type="text/css">
		<link rel="stylesheet" href="css/index.css" type="text/css">
		
		<?php
			echo"<input type=\"hidden\" class=\"typeGroup\" value=\"tab1\">";
		?>
	</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.4";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="header">
			<div class="header_content">LOGO BANNER</div>
			<div class="glyphicon glyphicon-search" id="search_icon"></div>
		</div>
		<style>
			.demo-card-wide.mdl-card {
				width: 940px;
				margin: 0px auto;
			}
			.demo-card-wide > .mdl-card__title {
				color: #fff;
				height: 176px;
				
			}
			.demo-card-wide > .mdl-card__menu {
				color: #fff;
				
				
		
			}
		</style>
		<section class="wrapper">
			<ul class="tabs">
				<li id="#tab1"><a href="">分類一</a></li>
				<li id="#tab2"><a href="">分類二</a></li>
				<li id="#tab3"><a href="">分類三</a></li>
				<li id="#tab4"><a href="">分類四</a></li>
				<li id="#tab5"><a href="">分類五</a></li>
				<li id="#tab6"><a href="">分類六</a></li>
				<li id="#tab7"><a href="">分類七</a></li>
				<li id="#tab8"><a href="">分類八</a></li>
			</ul>
			
			<div class="clr"></div>
			
			<section class="block">
				<article id="tab1">
					<div class="row" id="results" style="margin:10px 0px 0px 10px"></div>
					<div class="animation_image" style="display:none" align="center"><img src="images/ajax-loader.gif"></div>
				</article>
				
				<article id="tab2">
					
					<div class="row" id="results_2" style="margin:10px 0px 0px 10px"></div>
					<div class="animation_image" style="display:none" align="center"><img src="images/ajax-loader.gif"></div>
				</article>
				
				<article id="tab3">
					
					<div class="row" id="results_3" style="margin:10px 0px 0px 10px"></div>
					<div class="animation_image" style="display:none" align="center"><img src="images/ajax-loader.gif"></div>
				</article>
				
				<article id="tab4">
					
					<div class="row" id="results_4" style="margin:10px 0px 0px 10px"></div>
					<div class="animation_image" style="display:none" align="center"><img src="images/ajax-loader.gif"></div>
				</article>
				
				
				<article id="tab5">
					
					<div class="row" id="results_5" style="margin:10px 0px 0px 10px"></div>
					<div class="animation_image" style="display:none" align="center"><img src="images/ajax-loader.gif"></div>
				</article>
				
				
				<article id="tab6">
					
					<div class="row" id="results_6" style="margin:10px 0px 0px 10px"></div>
					<div class="animation_image" style="display:none" align="center"><img src="images/ajax-loader.gif"></div>
				</article>
				
				<article id="tab7">
					
					<div class="row" id="results_7" style="margin:10px 0px 0px 10px"></div>
					<div class="animation_image" style="display:none" align="center"><img src="images/ajax-loader.gif"></div>
				</article>
				
				<article id="tab8">
					
					<div class="row" id="results_8" style="margin:10px 0px 0px 10px"></div>
					<div class="animation_image" style="display:none" align="center"><img src="images/ajax-loader.gif"></div>
				</article>
				
			</section>
		</section>

		<!--幻燈片
		<div id="abgneBlock">
						<ul class="list">
									<li><img src="example-slide-1.jpg"></li>
									<li><img src="example-slide-2.jpg"></li>
									<li><img src="example-slide-3.jpg"></li>
									<li><img src="example-slide-4.jpg"></li>
									<li><img src="example-slide-5.jpg"></li>
						</ul>
		</div>
		
		-->
		
		<div class="footer">
			<p class="footer_content footer_left">SPONSER HERE</p>
			<div class="fb-like" data-href="https://140.116.250.20" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
			<div class="footer_content footer_right">
				<p id="footer_right_upper">power by</p>
				<p id="footer_right_lower">SSX LOGO HERE</p>
			</div>
		</div>
		
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		
		<!-- carousel-->
		<script src="js/carouse.js"></script>
		
	</body>
</html>