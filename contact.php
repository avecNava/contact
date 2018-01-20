<!DOCTYPE html>
<html lang="en">

	<head>	
		<link rel="stylesheet" type="text/css" href="contact.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Contact Us</title>
	</head>

	<body>
	<h2>Contact Us </h2>
	

	<div id="error_label"></div>
	<br/>

	<form method="POST" action="message.php">
	<div class="container">		
		
			<div class="item">
  				<label for="fullname">Your name</label>
	  		</div>
	  		<div class="item">
		    	<input name="message_id" type="hidden" value="-1">
		    	<input name="fullname" type="text" placeholder=" Enter Name">
	  		</div>
		  	<div class="item">
		    	<label for="email">Email Address</label>
		    </div>
		    <div class="item">
		    	<input name="email" type="email" placeholder=" Enter Email id">
		  	</div>	
			<div class="item">
		    	<label for="telephone">Mobile No.</label>
		    </div>
		    <div class="item">
		    	<input name="telephone" placeholder=" Enter 10-digit mobile no.">
  			</div>
	  		<div class="item">
  				<label for ="message"> Message</label>
  			</div>
  			<div class="item">
  			 	<textarea rows="10" cols="70"  name="message" placeholder="Enter Your Message"></textarea>
  			</div>
	  		<div class="item">
	  				<button type="submit">Send Message</button>
	  		</div>
	  			
	</div>
	</form>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="jquery.validate.js"></script>

	<script>

// form validation script goes here

	</script>

</body>
</html>
