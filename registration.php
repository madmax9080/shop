<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>

<?php 
	if (isset($_POST['submit'])) {
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$email = $_POST['email'];
		$birth = $_POST['birthday'];
		$radio = $_POST['radio'];
		$address = $_POST['address'];

		$alert = "Fields cannot be empty"

		if (!empty($fname) && !empty($lname) && !empty($email) && !empty($birth) && !empty($radio) && !empty($address)) {
				$query = "INSERT INTO registration(fname, lname, email, age, gender, address) VALUE ('$fname', 
						  '$lname','$email', '$birth', '$radio', '$address')";
	        	$result = mysqli_query($connection, $query);
	       		if (!$result) {
	      			die("query failed" . mysqli_error($connection));
	       		}
		}else{
			echo "<div class='alert alert-danger alert-dismissible fade show'>
                    <button type='button' class='close' >&times;</button>
                    $alert
                  </div>";	
		}
	}
 ?>

<section id="form">
	<h3 class="text-center">Registration form</h3><br>
	<div class="container col-md-5 back">
		<form action="registration.php" method="post">
		    <div class="form-group">
		        <input type="text" name="firstname" class="form-control" placeholder="Enter first name">
		    </div>
		    <div class="form-group">
		        <input type="text" name="lastname" class="form-control" placeholder="Enter last name">
		    </div>
		   	<div class="form-group">
			    <input type="email" name="email" class="form-control" placeholder="somebody@example.com">
		    </div>
		    <div class="form-group">
			    <input type="date" name="birthday" class="form-control">
		    </div>
		    <div class="form-group">
		    	<label>
		    		<input type="radio" name="radio" value="male" checked> Male<br>	
		    	</label>
			    <label>
			    	<input type="radio" name="radio" value="female"> Female<br>	
			    </label>
		    </div>
		    <div class="form-group">
			    <label for="address">Address</label>
			    <textarea class="form-control" rows="5" name="address"></textarea>
		    </div>
		    <div class="form-group text-center">
		    	<input type="submit" name="submit" class="btn btn-danger" value="Register">
		    </div>
		</form>	
	</div>
</section>
<?php include "includes/footer.php" ?>