<!DOCTYPE HTML>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Contact Form</title>
		<link rel="stylesheet" href="contact.css">
	</head>

	<body>

    	<header class="body">

        	<h1>Get in Touch</h1>
        
	    </header>
	
	    <section class="body">
	    	<form method="post" action="contact-form.php">
	    	        
	    	    <label>Name</label>
	    	    <input name="name" placeholder="Type Here">
    			
    		    <label>Email</label>
    		    <input name="email" type="email" placeholder="Type Here">
    	    	
    	    	<label>Message</label>
    	    	<textarea name="message" placeholder="Type Here"></textarea>
    	        
    	        <label>*What is 2+2 (Anti-spam)</label>
    	        <input name="human" placeholder="Type Here">
    		    <input id="submit" name="submit" type="submit" value="Submit">
    	        
    		</form>
    		
	    </section>

    	<footer class="body">
    	</footer>

	</body>

</html>

