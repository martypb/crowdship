<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en" dir="<?php echo (isset($this->_rootref['DOCDIR'])) ? $this->_rootref['DOCDIR'] : ''; ?>">
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
	var currenttime = '<?php echo (isset($this->_rootref['ACTUALDATE'])) ? $this->_rootref['ACTUALDATE'] : ''; ?>';
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
	            <li><a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>index.php?"><?php echo ((isset($this->_rootref['L_166'])) ? $this->_rootref['L_166'] : ((isset($MSG['166'])) ? $MSG['166'] : '{ L_166 }')); ?></a></li>
	            <li><a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>about.php?">About CrowdShip</a></li>
	<?php if ($this->_rootref['B_CAN_SELL']) {  if ($this->_rootref['B_LOGGED_IN']) {  ?>
				<li><a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>select_category.php?">List an Item</a></li>
	            <!--<li><a href="register.php?">Register Now</a></li>-->
	<?php } } ?>
	            <li><a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>faqs.php" alt="faqs" class="new-window"><?php echo ((isset($this->_rootref['L_148'])) ? $this->_rootref['L_148'] : ((isset($MSG['148'])) ? $MSG['148'] : '{ L_148 }')); ?></a></li>
	        </ul>
	<?php if ($this->_rootref['B_LOGGED_IN']) {  ?>
	            <!--<li><a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>user_menu.php?"><?php echo ((isset($this->_rootref['L_622'])) ? $this->_rootref['L_622'] : ((isset($MSG['622'])) ? $MSG['622'] : '{ L_622 }')); ?></a></li>-->
	        <ul class="nav boxer_nav pull-right">
	            <li><a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>user_menu.php?">My Profile</a></li>
	            <li><a href="<?php echo (isset($this->_rootref['SSLURL'])) ? $this->_rootref['SSLURL'] : ''; ?>logout.php?"><?php echo ((isset($this->_rootref['L_245'])) ? $this->_rootref['L_245'] : ((isset($MSG['245'])) ? $MSG['245'] : '{ L_245 }')); ?></a></li>
			</ul>
	<?php } else { ?>
	            
	        <!--<li><a href="<?php echo (isset($this->_rootref['SSLURL'])) ? $this->_rootref['SSLURL'] : ''; ?>register.php?"><?php echo ((isset($this->_rootref['L_235'])) ? $this->_rootref['L_235'] : ((isset($MSG['235'])) ? $MSG['235'] : '{ L_235 }')); ?></a></li>
	            <li><a href="<?php echo (isset($this->_rootref['SSLURL'])) ? $this->_rootref['SSLURL'] : ''; ?>user_login.php?"><?php echo ((isset($this->_rootref['L_052'])) ? $this->_rootref['L_052'] : ((isset($MSG['052'])) ? $MSG['052'] : '{ L_052 }')); ?></a></li>-->

			<form class="navbar-form pull-right" name="user_login" action="<?php echo (isset($this->_rootref['SSLURL'])) ? $this->_rootref['SSLURL'] : ''; ?>user_login.php" method="post">
                <input type="text" class="span2" placeholder="Login" name="username">
                <input type="password" class="span2" placeholder="Password" name="password">
                <input type="submit" value="<?php echo ((isset($this->_rootref['L_052'])) ? $this->_rootref['L_052'] : ((isset($MSG['052'])) ? $MSG['052'] : '{ L_052 }')); ?>" class="btn" />
                <input type="hidden" name="action" value="login">
            </form>
            <?php if ($this->_rootref['ERROR'] != ('')) {  ?>
                <br/><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?>
			<?php } } if ($this->_rootref['B_BOARDS']) {  ?>
				<!--<li><a href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>boards.php"><?php echo ((isset($this->_rootref['L_5030'])) ? $this->_rootref['L_5030'] : ((isset($MSG['5030'])) ? $MSG['5030'] : '{ L_5030 }')); ?></a></li>-->
	<?php } ?>

        </div>
      </div>
    </div>
    <div class="counters">
        <span class="leftside"><?php if ($this->_rootref['B_LOGGED_IN']) {  echo ((isset($this->_rootref['L_200'])) ? $this->_rootref['L_200'] : ((isset($MSG['200'])) ? $MSG['200'] : '{ L_200 }')); ?> <?php echo (isset($this->_rootref['YOURUSERNAME'])) ? $this->_rootref['YOURUSERNAME'] : ''; ?>. <a href="<?php echo (isset($this->_rootref['SSLURL'])) ? $this->_rootref['SSLURL'] : ''; ?>logout.php?"><?php echo ((isset($this->_rootref['L_245'])) ? $this->_rootref['L_245'] : ((isset($MSG['245'])) ? $MSG['245'] : '{ L_245 }')); ?></a><?php } ?></span>
        <span class="rightside"><?php echo (isset($this->_rootref['HEADERCOUNTER'])) ? $this->_rootref['HEADERCOUNTER'] : ''; ?></span>
	</div><br/><br/>