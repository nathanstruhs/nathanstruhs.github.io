<?php $screen_name = "Contact"; include('includes/header.php'); include('includes/home_button.php');?>

<div id="single-container">

	<h2 id="contact-header">Contact</h2>
	<div id="form-container">
		<form method="post" action="contact_validate.php">
				<div class="form-field">
					<label for="Name">Name:</label>
					<input type="text" name="Name" id="Name" />
				</div>
				
				<div class="form-field">
					<label for="Email">Email:</label>
					<input type="text" name="Email" id="Email" />
				</div>

				<div class="form-field" id="form-field-message">
					<label for="Message">Message:</label>
					<textarea name="Message" rows="10" cols="20" id="Message"></textarea>
				</div>
				<div id="submit-container">
					<input type="submit" name="submit" value="Submit" id="submit-button" />
				</div>
			</form>
	</div>
</div>
