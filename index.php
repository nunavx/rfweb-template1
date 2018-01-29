<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<meta name="description" content="Your RF Server Name - Private Server International">
	<meta name="keywords" content="rf private server, rf ps, rf private server terbaru, private server indonesia, top rf online, rising force private server, rising force online, new rf private server, rf champion, rf private server champion, rf ps champion, 2.2.3.2, 2.2.3, ga, gu, golden update, age of patron" />
	<meta http-equiv="copyright" content="Your RF Server Name" />
	<meta name="author" content="Nuna">
	<meta name="robots" content="all">
	<title>Your RF Server Name - Private Server International</title>
	<meta property="og:site_name" content="Your RF Server Name - Private Server International" />
	<meta property="og:title" content="Your RF Server Name - Private Server International" />
	<meta property="og:description" content="RF Online, Rising Force Online, RFO. Download and Play the Ultimate Fantasy Sci-fi 3D Online MMORPG for Free. Explore the NOVUS Galaxy. Master Might, Magic, and Mech and Become Leader of Your Race." />
	<meta property="og:image" content="" /> 
	<meta property="og:url" content="http://127.0.0.1/test/www/" /> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="css/styles.css?=v3000">
    <link rel="stylesheet" href="css/engine.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/scrollup.js"></script>
    <script src="js/stressweb.js"></script>
    <script src="js/progressbar.js"></script>
    <script src="js/main.js"></script>
    <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>

	<div id="header-bg">
        <div id="header-top-bg">
            <div id="header-bottom-bg">
                <header>
                    <div class="wrapper">
                        <div id="menu">
                            <ul>
                                <li><a href="/web2/index.php">Home</a></li>
                                <li><a href="/web2/index.php?do=about">About</a></li>
                                <li><a href="/web2/index.php?do=register">Register</a></li>
                                <li><a href="/web2/index.php?do=files">Download</a></li>
                                <li><a href="/web2/index.php?do=stat">Contact</a></li>
                                <li><a href="/web2/forum/">Forum</a></li>
                                <div class="clr"></div>
                            </ul>
                            <div class="clr"></div>
                        </div>
                        <a href="web2/index.php" id="logo"></a>
                    </div>
                </header>
            </div>
    	</div>
    </div>
    <div id="btns-bg">
    	<div id="btns">
    		<div class="wrapper">
    			<a href="#">Download<br>Client</a>
    			<a href="#">Download<br>Patch</a>
    			<a href="#">Register</a>
    			<div class="clr"></div>
    		</div>
    	</div>
    </div>
    <div id="content-bottom-bg">
	    <div id="content">
	    	<div class="wrapper">
	    		<div id="info">
	    			<div id="info-title">Welcome HERO!</div>
	    			<div class="news-block">
											<?php
												if (isset($_GET['do'])){
													switch ($_GET['do']){
														case 'home':
															include_once '/page/news.php';
															break;
														case 'register':
															include_once 'page/register.php';
															break;
														case 'login':
															include_once 'page/login.php';
															break;
														case 'rules':
															include_once 'page/rules.php';
															break;
														case 'register':
															include_once 'page/register.php';
															break;
														case 'download':
															include_once 'page/download.php';
															break;
														case 'donate':
															include_once 'page/donate.php';
															break;
														default:
															include_once 'page/news.php';
															break;
													}
												}
												else{
													include_once 'page/news.php';
												}
											?>  
</div>
	    		</div>
	    		<aside>
	    			<div id="aside-title-first">Server Status</div>
	    			<div id="status">
						<?php include_once('page/totalonline.php') ?>
	    			</div>
	    			<div class="aside-title">Total Player</div>
	    			<div id="forum">

Total Player

    			</div>
	    		</aside>
	    		<div class="clr"></div>
	    	</div>
	    </div>
	</div>
	<div id="bottom-navbar-bg">
		<div id="bottom-navbar">
		<a href="" id="up-btn"></a>
			<div class="wrapper">
				<div id="btm-nav-menu">
					<h1>Menu</h1>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="/index.php?do=about">About</a></li>
						<li><a href="/index.php?do=register">Register</a></li>
						<li><a href="/files">Download</a></li>
						<li><a href="/index.php?do=cp">Game CP</a></li>
						<li><a href="/index.php?do=stat">Rules</a></li>
						<li><a href="/forum/">Forum</a></li>
					</ul>
				</div>
				<div class="btm-nav-top">
					<h1>Тоp PvP</h1>
					
<!-- Модуль PvP Top -->
{pvptop}


				</div>
				<div class="btm-nav-top">
					<h1>Top PK</h1>
					
<!-- Модуль PK Top -->
{pktop}


				</div>
				<div id="banners">
					<h1>Banners</h1>
				</div>
				<div class="clr"></div>
			</div>
		</div>
	</div>
				

</body>
</html>