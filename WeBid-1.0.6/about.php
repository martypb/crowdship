<!DOCTYPE html>
<html lang="en">
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
    <!-- elusive icons ie7 support -->
    <!--[if lte IE 7]><script src="js/lte-ie7.js"></script><![endif]-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
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
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php">CrowdShip</a>

          <ul class="nav boxer_nav">
            <li class="active"><a href="about.php">About Crowdship</a></li>
            <li><a href="register.php?">Register Now</a></li>
            <li><a href="faqs.php?">Help</a></li>
          </ul>
            <form class="navbar-form pull-right" name="user_login" action="user_login.php" method="post">
                <input type="text" class="span2" placeholder="Login" name="username">
                <input type="password" class="span2" placeholder="Password" name="password">
                <input type="submit" value="Login" class="btn" />
                <input type="hidden" name="action" value="login">
            </form>
        </div>
      </div>
    </div>

    <article class="featured_top">
      <div class="container">
        <div class="white_gradient">
          <div class="row">
            <div class="span12 align_center">
              <h1 class="boxer_title">How it works</h1>
              <p>Click on the the button below to see how CrowdShip works for you:</p>
              <a class="btn btn-large btn-success" href="#product2">I need something shipped</a>
              <a class="btn btn-large btn-info" href="#product3">I want to make money shipping</a>
            </div> 
        </div>
      </div>
    </article>

    <article class="body_article">
      <div class="container">
        <div class="row">
          <div class="span5"><img src="img/FreightForward.jpg" /></div>
          <div class="span5">
            <h2 class="boxer_title">What is freight forwarding?</h2>
				Freight forwarding involves shipping a product you can get your hands on, to someone else who would otherwise be unable to access that product. For example some big brand name companies in the US wont ship outside of the US. At the same time a number of consumers around the world want access to those goods and will happily pay US locals to ship it to them. This site brings together people who want to purchase those goods together with people who can freight forward.
			</div>
        </div>
      </div>
    </article>
    
    <article class="section_divider"></article>
    
    <span id="product2"></span>
    <article class="body_article">
      <div class="container">
        <div class="row">
		  <div class="span4"><img src="img/Delivery.jpg"/></div>
          <div class="span5 offset1"><h2 class="boxer_title">Find the cheapest freight forwarding</h2>
            Ever had that feeling when you get to the checkout, only to find the store you are purchasing from does not ship the product you want, to your country? Well no more. Simply list the product and watch as people in the shipping area bid to forward that product on to you from an address local to the store.
          </div>
        </div>
      </div>
    </article>

    <article class="section_divider"></article>
    
    <span id="product3"></span>
    <article class="body_article">
      <div class="container">
        <div class="row">
          <div class="span4"><img src="img/MakeMoney.jpg"></div>
          <div class="span5 offset1"><h2 class="boxer_title">Make money on-shipping peoples purchases</h2>
            There are people in the world who dont have access to products near you, because stores in your area do not ship to their locations. You simply bid for how much money you would like to charge for on-shipping and if the purchases choose you, you make money. Its that simple.</div>
          </div>
      </div>
    </article>
    <article class="body_article">
      <div class="container">
        <div class="row">
          <div class="span12 align_center"><a href="register.php?" class="btn btn-success btn-large">Register Now!</a></div>
      </div>
    </article>

    <article class="section_divider"></article>

    <div class="boxer_footer">
      <div class="container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><a href="tsandcs.html">Terms and Conditions</a></li>
              <li><a href="privacy.html">Privacy Policy</a></li>
              <li><a href="sitemap.html">Site Map</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><a href="mediapack.html">Media Pack</a></li>
			  <li><a href="team.html">The Team</a></li>
            </ul>
            <div class="boxer_copyright">
              &copy; 2013 CrowdShip
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
