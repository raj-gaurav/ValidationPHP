<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
		
		<!-- font awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
		<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="row" style="margin-left:25%;width:50%;">
		<div class="container">
				<div class="alert alert-warning alert-dismissible fade show" id="message" style="display:none;">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Warning!</strong> <label id="wmsg"></label>
				</div>
				<div class="alert alert-success alert-dismissible fade show" id="message_success" style="display:none;">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Success!</strong> <label id="smsg"></label>
				</div>
				<div class="alert alert-danger alert-dismissible fade show" id="message_error" style="display:none;">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> <label id="emsg"></label>
				</div>
			<form action="#" method="post">
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-user"></i> Your Name </label>
					<input type="text" name="yname"  class="form-control"  required /> 
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-mobile-alt"></i> Email Address</label>
					<input type="email" name="emailadd" class="form-control" required /> 
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-thumbtack"></i> Country </label>
					<!--<input type="text" name="country" class="form-control"  />-->
					<select name="country" class="form-control" required>
						<option>Your country</option>
						<option>India</option>
						<option>Austria</option>
						<option>Pakistan</option>
						<option>Bhutan</option>
						<option>Nepal</option>
						<option>Afganishtan</option>
					</select>
				</div>
				<!--<div class="form-group">
					<label class="text-danger"> <i class="fas fa-thumbtack"></i> Phone Number </label>
					<input class="form-control" name="mob" required="required"/>
					
				</div>-->
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-thumbtack"></i> Travel Date </label>
					<input type="date" name="date" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-thumbtack"></i> Tour Duration </label>
					<select name="duration" class="form-control" required>
						<option>Days</option>
						<?php
							for($j=0;$j<=11;$j=$j+1)
							{
							if($j==11)
							{
							?>
								<option><?php  echo "10+";?></option>
							<?php
							}
							else
							{
							?>
								<option><?php  echo $j;?></option>
							<?php
							}
							
							}
						?>
					</select>
					
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="far fa-id-card"></i> Number of PAX</label>
					<div class="row">
						<div class="col">
						<select name="adult" class="form-control" required>
							<option>Adults</option>
							
						<?php
							for($j=0;$j<=11;$j=$j+1)
							{
							if($j==11)
							{
							?>
								<option><?php  echo "10+";?></option>
							<?php
							}
							else
							{
							?>
								<option><?php  echo $j;?></option>
							<?php
							}
							
							}
						?>
						</select>
						</div>
						<div class="col">
						<select name="child" class="form-control" required>
							<option>Childs</option>
						<?php
							for($j=0;$j<=11;$j=$j+1)
							{
							if($j==11)
							{
							?>
								<option><?php  echo "10+";?></option>
							<?php
							}
							else
							{
							?>
								<option><?php  echo $j;?></option>
							<?php
							}
							
							}
						?>
						</select>
						</div>
					</div>
					
				</div>
				<div class="form-group">
					<label class="text-danger"> <i class="fas fa-unlock"></i> Details/Enquiry </label>
					<input type="text" name="details" class="form-control" required /> 
				</div>
				<div class="form-group">
					<input type="submit" name="register" style="width:100%;" value="Ask Experts" class="btn btn-success"/>
				</div>
			</form>
		</div>
	</div>
	
	
	
	
	
	
	
	<?php
		if(isset($_POST['register']))
		{
			$to="rajgauravraj97@gmail.com";
			$name=$_POST['yname'];
			$email=$_POST['emailadd'];
			$country=$_POST['country'];
			//$phone=$_POST['mob'];
			$date=$_POST['date'];
			$duration=$_POST['duration'];
			$adult=$_POST['adult'];
			$child=$_POST['child'];
			$detail=$_POST['details'];
			
			if(!preg_match("/^[A-Za-z ]*$/",$name))
			{
				$msg="Name should  contain characters(A-Za-z) only. ";
				?>
					<script>
						document.getElementById('message').style.display='block';
						document.getElementById('wmsg').innerHTML="<?php echo $msg;?>";
					</script>
				<?php
			}
			else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
			{
				$msg="Email should be like example@example.example ";
				?>
					<script>
						document.getElementById('message').style.display='block';
						document.getElementById('wmsg').innerHTML="<?php echo $msg;?>";
					</script>
				<?php
			}
			/*else if(!preg_match("/^[0-9]*$/",$phone))
			{
				$msg="Other than +91 => Mobile no. should  contain digits only.";
				?>
					<script>
						document.getElementById('message').style.display='block';
						document.getElementById('lmsg').innerHTML="<?php echo $msg;?>";
					</script>
				<?php
			}
			else if(strlen($phone)!=10)
			{
				$msg="Mobile no. should  contain 10 digits only.";
				?>
					<script>
						document.getElementById('message').style.display='block';
						document.getElementById('lmsg').innerHTML="<?php echo $msg;?>";
					</script>
				<?php
			}*/
			else if(!preg_match("/^[A-Za-z0-9.@!$#%^&*()]*$/",$detail))
			{
				$msg="Details should  contain digits and alphabets only. ";
				?>
					<script>
						document.getElementById('message').style.display='block';
						document.getElementById('wmsg').innerHTML="<?php echo $msg;?>";
					</script>
				<?php
			}
			else
			{
				
				$subject_to_expert="Travel Help ";
				$message_to_expert=$name." ". "requested help regarding a travel. Details are following : country - $country, date - $date, duration - $duration, adult - $adult , child - $child, details - $detail";
				$header_to_expert="Thank you $name";
				
				$subject_to_sender="Your response  to our expert about travel on $date";
				$message_to_sender="Hello ".$name." ". "You requested help regarding your followed travel : country - $country, date - $date, duration - $duration, adult - $adult , child - $child, details - $detail";
				$header_to_sender="Thank you $name. You response is sent to our expert. We will respond ASAP.";
				
				$res_expert=mail($to,$subject_to_expert,$message_to_expert,$header_to_expert);
				$res_sender=mail($email,$subject_to_sender,$message_to_sender,$header_to_sender);
				if($res_expert && $res_sender)
				{
					?>
					<script>
						document.location.href='result1.php';
					</script>
					<?phps
				}
				else
				{
					?>
					<script>
						alert("Something went wrong. Please try again.");
					</script>
					<?php
				}
			}
			
			
			
			
			
			
		}
	?>
	
	
	
	</body>
</html>

