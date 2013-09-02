<!DOCTYPE html>

<?php

	// Customize your profile here. Very little HTML/CSS rquired.
	// Template by Evan Sobkowicz, Evtika Web Design (http://evtikawebdesign.com)
	
	$profile_image = "profile.png"; // Filename of profile image. Place image in /assets/images/.

	$name = "John Smith";
	$tagline = "Web Developer";
	
	$email = "john@smith.com";

	$phone = "111-111-1111";
	
	$facebook = "username"; 	// http://www.facebook.com/username
	$twitter = "username"; 		// http://twitter.com/username
	$github = "username";		// http://github.com/username
	$linkedin = "username";		// http://www.linkedin.com/in/username
	
	
	// Education
	// (list: "Title" => "URL",)
	$edu = array(
    	"College" => "http://www.college.edu/",
		"High School" => "http://www.school.org/"
	);
	
	// Work & Projects
	// (list: "Title" => "URL",)
	$work = array(
    	"John Smith, Inc." => "http://smith.com/",
    	"Smith Development" => "http://dev.smith.com/",
	);


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo($name); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
    
  </head>

  <body>
  	
  	<div class="container-wrapper">
    	<div class="container container-custom">
  
	      	<div class="row-fluid jumbotron">
	      		<div class="span12">
	      		
	      			<div class="photo">
	      				<img src="/assets/images/<?php echo($profile_image); ?>" class="img-circle"/>
	      			</div>
	      			
	      			<h1><?php echo($name); ?></h1>
	      			<h2><?php echo($tagline); ?></h2>
	      			
	      			<ul class="contact">
	      				<li><a href="mailto:<?php echo($email); ?>"><i class="icon-envelope"></i> &nbsp; <?php echo($email); ?></a></li>
	      				<li><a href="tel:<?php echo($phone); ?>"><i class="icon-phone"></i> &nbsp; <?php echo($phone); ?></a></li>
	      			</ul>

	      			<ul class="social">
	      				<li><a href="http://www.facebook.com/<?php echo($facebook); ?>"><i class="icon-facebook-sign"></i></a></li>
	      				<li><a href="http://twitter.com/<?php echo($twitter); ?>"><i class="icon-twitter-sign"></i></a></li>
	      				<li><a href="http://github.com/<?php echo($github); ?>"><i class="icon-github-sign"></i></a></li>
	      				<li><a href="http://linkedin.com/in/<?php echo($linkedin); ?>"><i class="icon-linkedin-sign"></i></a></li>
	      			</ul>
	      			
	      			
	      			<div class="row-fluid list-wrap">
	      			
	      				<div class="span5 offset1">
	      					<h3>Work &amp; Projects</h3>
			      			<ul class="work list">
			      				<?php foreach($work as $key=>$value) { ?>
					      			<li><a href="<?php echo($value); ?>" target="_blank"><?php echo($key); ?></a></li>
					      		<?php } ?>
			      			</ul>
	      				</div>
	      				
	      				<div class="span5">
	      					<h3>Education</h3>
			      			<ul class="edu list">
			      				<?php foreach($edu as $key=>$value) { ?>
					      			<li><a href="<?php echo($value); ?>" target="_blank"><?php echo($key); ?></a></li>
					      		<?php } ?>
			      			</ul>
	      				</div>
	      				
	      			</div>
	      						
	      		</div>
		  	</div>
		  	
		  	<div class="footer">
		 		<p>&copy;<?php echo date('Y'); ?> <?php echo($name); ?></p>
		 	</div>
      
		</div> <!-- /container -->
    </div>

    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.js"></script>

  </body>
</html>