<?php
	include 'common/config.inc.php';
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>大连海事大学指导员助理网</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Stunning Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--flexslider-css-->
<!--bootstrap-->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--coustom css-->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,800italic,800,700italic,700,600,600italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<link rel="stylesheet" type="text/css" href="css/mycss.css">
<!--script-->
<script src="js/jquery.min.js"> </script>
	<!-- js -->
		 <script src="js/bootstrap.js"></script>
	<!-- js -->
		<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->

</head>

<body>
	
		<div class="header" id="home">
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">打开栏目</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><h1>大连海事大学</h1><br /><span>导员助理网</span></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
								<li><a href="index.php"><span data-hover="首页">首页</span></a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="关于我们">关于我们</span> <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="about.html"><p class="myfont">关于我们</p></a></li>
										<li><a href="about_daozhu.php"><p class="myfont">人员名单</p></a></li>
									</ul>
								</li>
								<li><a href="study.php"><span data-hover="学习园地">学习园地</span></a></li>
								<li><a href="activitys.php"><span data-hover="动态资讯">动态资讯</span></a></li>
								<li><a href="gallery.html"><span data-hover="导助风采">导助风采</span></a></li>
							</ul>
							<div class="clearfix"></div>
						</div><!-- /.navbar-collapse -->
						<div class="clearfix"></div>
				</div><!-- /.container-fluid -->
			</nav>
			<!-- 			
			<div class="header-banner">
					Top Navigation
					<section class="bgi banner5"><h2>新闻详情</h2> </section> -->

	<!--detail -->
	<div class="content">
		<div class="container">
			<div class="mynewsdetail">
				<div class="mynewsdetailborder">
				    <?php
				        $id = $_GET['id'];
				    	$sql="select * from news where news.id = $id";
				    	// print_r($sql);
				    	// exit;
				    	$rst = $pdo->query($sql);
				    	$row = $rst->fetch();
				    	
				    	echo "<h1><center>$row[title] </center><br><center><small>编辑：小研</small></center></h1>";
				    	echo "<p class ='article'>&nbsp;&nbsp;$row[content]</p>";
				    	
				      ?>
				</div>
			</div>
		</div>
	</div>
	<!--detail -->	
	<!--footer-->
		<div class="footer-section">
			<div class="container">
				<div class="footer-top">
					<p>版权：大连海事大学研究生会 </p>
				</div>						
			</div>
		</div>
	<!--footer-->	


</body>
</html>