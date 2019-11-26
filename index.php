<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>ZIPCITY MACAU | Worlds 1st immersive Zipline</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" content="ZipCity | Macau | Longest Urban Zip-line | Asia Pacific" />
  <meta property="og:site_name" content="ZipCity | Macau | Longest Urban Zip-line | Asia Pacific" />
  <meta name="twitter:title" content="ZipCity | Macau | Longest Urban Zip-line | Asia Pacific" />
  <meta name="twitter:description" content="ZipCity is Asia Pacific's Longest Urban Zip-line located in Macau." />
  <meta name="news_keywords" content="ZipCity Macau Longest Urban Zip-line Asia Pacific" />
  <meta name="description" content="ZipCity is Asia Pacific's Longest Urban Zip-line located in Macau." />
  <meta property="og:url" content="http://www.zipcity.com/" />
  <meta name="abstract" content="ZipCity is Asia Pacific's Longest Urban Zip-line located in Macau." />
  <meta property="og:title" content="ZipCity | Macau | Longest Urban Zip-line | Asia Pacific" />
  <meta name="keywords" content="ZipCity Macau Longest Urban Zip-line Asia Pacific"" />
  <meta name="twitter:url" content="http://www.zipcity.com/" />
  <meta property="og:description" content="ZipCity is Asia Pacific's Longest Urban Zip-line located in Macau." />
  
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" href="favicon.png" type="image/png" />

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/custom.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <video autoplay muted loop id="myVideo">
    <source src="video/bg_video.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <div id="page-wrapper">
    <header>
	  <div class="logo"><a href="/"><img src="img/logo.png" /></a></div>
	  <div class="contact">
	    <a href="#">聯絡我們 CONTACT</a>
	  </div>
	  <div class="clear"><!-- --></div>
	</header>
	<div id="main-content">
	  <div id="countdown"></div>
	  <div class="clear"><!-- --></div>
	  <div id="newsletter">
	    <div class="title">Stay tuned for updates</div>
		<div class="form">
		  <form action="/PHP-SMTP-Mailer/newsletter_send.php" method="post">
		    <!-- Create fields for the honeypot -->
			<input name="firstnamep" type="text" id="firstnamep" class="hide-robot">
			<!-- honeypot fields end -->
		    <input name="email" type="email" placeholder="Your Email" required/>
			<?php if(isset($_GET['newsletter']) && $_GET['newsletter'] == 1): ?>
			<div class="description">You have successfully subcribed to our mailing list!</div>
			<?php endif; ?>
		    <input type="submit" name="newslettersubmit"/>
		  </form>	
		</div>
	  </div>
	</div>
	<footer>
	  <div class="left"><button onclick="disableMute()" type="button">Enable Sound <img src="img/unmute.jpg" /></button></div> 
	  <div class="right">Copyright ZipCity Macau Limited 2019.</a>
	  <div class="clear"><!-- --></div>
	</footer>
  </div>
  <div id="contact-modal" class="<?php if(isset($_GET['contact']) && $_GET['contact'] == 1){  echo 'show'; } ?>">
    <div id="contact-modal-form">
	  <div class="title">Contact Us</div>
	  <div class="text">You can leave a message using the contact form below.</div>
	  <form action="/PHP-SMTP-Mailer/contact_send.php" method="post">
	    <!-- Create fields for the honeypot -->
		<input name="firstnamep" type="text" id="firstnamep" class="hide-robot">
		<!-- honeypot fields end -->
		<div class="label">You name</div>
		<input name="name" type="text" id="name" required>
		<div class="label">E-mail</div>
		<input name="email" type="email" placeholder="Your Email" required/>
		<div class="label">Message</div>
		<textarea name="message" rows="5" required></textarea>
		<div><input type="submit" name="contactsubmit"/></div>
		<div class="close-btn">
		  <svg class="Cur(p)" width="19" height="19" viewBox="-1 -1 50 50" data-icon="close" style="stroke-width: 2; fill: rgb(255, 255, 255); stroke: rgb(255, 255, 255); vertical-align: bottom;"><path d="M37.98 34.827l-9.9-9.9 9.9-9.898c.78-.782.78-2.05 0-2.83-.78-.78-2.047-.78-2.828 0l-9.9 9.9-9.898-9.9c-.78-.78-2.048-.78-2.828 0-.78.78-.78 2.047 0 2.828l9.9 9.9-9.9 9.898c-.78.78-.78 2.047 0 2.828.78.78 2.047.78 2.828 0l9.9-9.9 9.898 9.9c.78.78 2.048.78 2.828 0 .782-.78.782-2.047 0-2.827z"></path></svg>
		</div>
		<?php if(isset($_GET['contact']) && $_GET['contact'] == 1): ?>
		<div class="status">Thank you for your submission. We will get back to you shortly.</div>	
		<?php endif ?>
      </form>	
	</div>
  </div>
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  <script>
    var vid = document.getElementById("myVideo");
	
	function disableMute() { 
      vid.muted = false;
    }
	
  </script>
  <script>
	// Set the date we're counting down to
	var countDownDate = new Date("May 1, 2020 00:00:00").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

	  // Get today's date and time
	  var now = new Date().getTime();
		
	  // Find the distance between now and the count down date
	  var distance = countDownDate - now;
		
	  // Time calculations for days, hours, minutes and seconds
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		
	  // Output the result in an element with id="demo"
	  document.getElementById("countdown").innerHTML = "<div class='days countdown-div'><span class='title'>" + days + "</span><br /><span class='text'>days</span></div><div class='hours countdown-div'><span class='title'>" + hours + "</span><br /><span class='text'>hrs</span></div><div class='minutes countdown-div'><span class='title'>"+ minutes + "</span><br /><span class='text'>mins</span></div><div class='seconds countdown-div countdown-div-secs'><span class='title'>" + seconds + "</span><br /><span class='text'>secs</span></div>";
		
	  // If the count down is over, write some text 
	  if (distance < 0) {
		clearInterval(x);
		document.getElementById("demo").innerHTML = "EXPIRED";
	  }
	}, 1000);
	
	$( "header .contact a" ).click(function() {
      $('#contact-modal').fadeIn();
    });
	
	$( "#contact-modal-form .close-btn svg" ).click(function() {
      $('#contact-modal').fadeOut();
    });

</script>
  
</body>

</html>
