<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en" dir="{DOCDIR}">
<head>
    <meta charset="utf-8">
    <title>CrowdShip: your product shipped whereever, for cheap</title>
    <meta name="description" content="Crowd sourced freight forwarding">
    <meta name="author" content="Vaughan Ramsey & Martin Butler">
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">    
    <link href='css/boxer.css' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.smooth-scroll.js"></script>
    <script src="js/boxer.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('a.new-window').click(function(){
		var posY = ($(window).height()-550)/2;
		var posX = ($(window).width())/2;
		window.open(this.href, this.alt, "toolbar=0,location=0,directories=0,scrollbars=1,screenX="+posX+",screenY="+posY+",status=0,menubar=0,width=550,height=550");
		return false;
	});
	var currenttime = '{ACTUALDATE}';
	var serverdate = new Date(currenttime);
	function padlength(what){
		var output=(what.toString().length==1)? "0"+what : what;
		return output;
	}
	function displaytime(){
		serverdate.setSeconds(serverdate.getSeconds()+1)
		var timestring=padlength(serverdate.getHours())+":"+padlength(serverdate.getMinutes())+":"+padlength(serverdate.getSeconds());
		$("#servertime").html(timestring);
	}
	setInterval(displaytime, 1000);
	$(function() {
		$('#gallery a').lightBox();
	});
});
</script>
    <style>
      body {
        padding-top: 50px; /* Only include this for the fixed top bar */
      }
    </style>
</head>
  <body id="top">
    

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">

          <a class="brand" href="index.php">CrowdShip</a>
     	   <ul class="nav boxer_nav">
	            <li><a href="{SITEURL}index.php?">{L_166}</a></li>
	            <li><a href="{SITEURL}about.php?">About CrowdShip</a></li>
	<!-- IF B_CAN_SELL -->
	<!-- IF B_LOGGED_IN -->
				<li><a href="{SITEURL}select_category.php?">List an Item</a></li>
	            <!--<li><a href="register.php?">Register Now</a></li>-->
	<!-- ENDIF --><!-- ENDIF -->
	            <li><a href="{SITEURL}faqs.php" alt="faqs" class="new-window">{L_148}</a></li>
	        </ul>
	<!-- IF B_LOGGED_IN -->
	            <!--<li><a href="{SITEURL}user_menu.php?">{L_622}</a></li>-->
	        <ul class="nav boxer_nav pull-right">
	            <li><a href="{SITEURL}user_menu.php?">My Profile</a></li>
	            <li><a href="{SSLURL}logout.php?">{L_245}</a></li>
			</ul>
	<!-- ELSE -->
	            
	        <!--<li><a href="{SSLURL}register.php?">{L_235}</a></li>
	            <li><a href="{SSLURL}user_login.php?">{L_052}</a></li>-->

			<form class="navbar-form pull-right" name="user_login" action="{SSLURL}user_login.php" method="post">
                <input type="text" class="span2" placeholder="Login" name="username">
                <input type="password" class="span2" placeholder="Password" name="password">
                <input type="submit" value="{L_052}" class="btn" />
                <input type="hidden" name="action" value="login">
            </form>
            <!-- IF ERROR ne '' -->
                <br/>{ERROR}
			<!-- ENDIF -->
	<!-- ENDIF -->
	<!-- IF B_BOARDS -->
				<!--<li><a href="{SITEURL}boards.php">{L_5030}</a></li>-->
	<!-- ENDIF -->

        </div>
      </div>
    </div>
    <div class="counters">
        <span class="leftside"><!-- IF B_LOGGED_IN -->{L_200} {YOURUSERNAME}. <a href="{SSLURL}logout.php?">{L_245}</a><!-- ENDIF --></span>
        <span class="rightside">{HEADERCOUNTER}</span>
	</div><br/><br/>
