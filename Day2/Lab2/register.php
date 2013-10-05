<!-- gets header-->
<? include 'views/header.php';?>
		
			<div class="container">
				<section class="featured">
				
				</section>

				<section class="content register-content">
					<img src="images/logo_grey.png" alt="Bloggity logo grey"/>
				<div class="reg-desc">
					<h2>Register For An Account</h2>
					<p><span class="bold">If you register for a bloggity account</span> you can post articles and access a whole world of additional features not available to those "other" people. Here's why you should register!</p>
					<ul>
						<li>Full Access</li>
						<li>Post Articles</li>
						<li>Own Your Own Blog!</li>
					</ul>
					<p>What are you waiting for? Register for an account.</p>
				</div><!-- /.reg-desc-->	

					<div class="reg-form">
						<form action="?action=register" method="post">
							
							<div class="form-block">
								<label for="email">Email:<span class="red super">*</span></label>
								<input type="text" name="email" placeholder="email address" required="required" autofocus="autofocus"/>
								<p class="email error"></p>
							</div><!-- /.form-block-->

							<div class="form-block">
								<label for="username">Username:<span class="red super">*</span></label>
								<input type="text" name="username" placeholder="username" required="required"/>
								<p class="username error"></p>
							</div><!-- /.form-block-->

							<div class="form-block"> 
								<label for="first">First Name:</label>
								<input type="text" name="first" placeholder="first name"/>
								<p class="first error"></p>
							</div><!-- /.form-block-->

							<div class="form-block"> 
								<label for="last">Last Name:</label>
								<input type="text" name="last" placeholder="last name"/>
								<p class="last error"></p>
							</div><!-- /.form-block-->

							<div class="form-block">
								<div class="radio-block">
									<div class="radio-option">
										<label class="radio" for="male">Male:</label>
										<input type="radio" name="gender" value="male">
									</div><!-- /.radio-option-->

									<div class="radio-option">
										<label class="radio" for="female">Female:</label>
										<input type="radio" name="gender" value="female">
									</div><!-- /.radio-option-->
								</div><!-- /.radio-block-->
								<p class="radio error"></p>
							</div><!-- /.form-block-->

							<div class="form-block">
								<label for="state">State:</label>
								<select name="state">
									<option value="AL">Alabama</option>
									<option value="AK">Alaska</option>
									<option value="AZ">Arizona</option>
									<option value="AR">Arkansas</option>
									<option value="CA">California</option>
									<option value="CO">Colorado</option>
									<option value="CT">Connecticut</option>
									<option value="DE">Delaware</option>
									<option value="DC">District of Columbia</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="HI">Hawaii</option>
									<option value="ID">Idaho</option>
									<option value="IL">Illinois</option>
									<option value="IN">Indiana</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="ME">Maine</option>
									<option value="MD">Maryland</option>
									<option value="MA">Massachusetts</option>
									<option value="MI">Michigan</option>
									<option value="MN">Minnesota</option>
									<option value="MS">Mississippi</option>
									<option value="MO">Missouri</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NV">Nevada</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NM">New Mexico</option>
									<option value="NY">New York</option>
									<option value="NC">North Carolina</option>
									<option value="ND">North Dakota</option>
									<option value="OH">Ohio</option>
									<option value="OK">Oklahoma</option>
									<option value="OR">Oregon</option>
									<option value="PA">Pennsylvania</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="SD">South Dakota</option>
									<option value="TN">Tennessee</option>
									<option value="TX">Texas</option>
									<option value="UT">Utah</option>
									<option value="VT">Vermont</option>
									<option value="VA">Virginia</option>
									<option value="WA">Washington</option>
									<option value="WV">West Virginia</option>
									<option value="WI">Wisconsin</option>
									<option value="WY">Wyoming</option>
								</select>
								<p class="state error"></p>
							</div><!-- /.form-block-->

							<div class="form-block"> 
								<label for="site">Website:</label>
								<input type="text" name="site" placeholder="Your Website"/>
								<p class="website error"></p>
							</div><!-- /.form-block-->

							<div class="form-block"> 
								<label for="dob">DOB:</label>
								<input type="text" name="dob" placeholder="11/11/2011"/>
								<p class="dob error"></p>
							</div><!-- /.form-block-->

							<div class="form-block"> 
								<label for="phone">Phone:</label>
								<input type="text" name="phone" placeholder="212-345-6789"/>
								<p class="phone error"></p>
							</div><!-- /.form-block-->

							<div class="form-block"> 
								<label for="donate">Want to Donate?</label>
								<input type="text" name="donate" placeholder="99.99"/>
								<p class="donate error"></p>
							</div><!-- /.form-block-->

							<div class="form-block"> 
								<label for="password">Password:<span class="red super">*</span></label>
								<input type="password" name="password" placeholder="password" required="required"/>
							</div><!-- /.form-block-->
								
							<div class="form-block">	
								<label for="passagain">PW Again:<span class="red super">*</span></label>
								<input type="password" name="passagain" placeholder="password again" required="required"/>
								<p class="password error"></p>
							</div><!-- /.form-block-->

							<input type="submit" value="submit"/>
						</form>
					</div><!-- /.reg-form-->
				</section><!-- /.content-->

				<section class="sidebar">
					<h2>Recent Posts</h2>
						<ul>
							<li><a href="#">The State of the Onion</a></li>
							<li><a href="#">Long Live the Bean</a></li>
							<li><a href="#">One Fish, Who's Phish?</a></li>
							<li><a href="#">In a Rut Shell</a></li>
							<li><a href="#">Three Cheese For the Team!</a></li>
						</ul>

						<div class="sidebar-ads">
							<script type="text/javascript"><!--
							google_ad_client = "ca-pub-6392619401477214";
							/* SSL Blog Project */
							google_ad_slot = "5422591503";
							google_ad_width = 336;
							google_ad_height = 280;
							//-->
							</script>
							<script type="text/javascript"
							src="//pagead2.googlesyndication.com/pagead/show_ads.js">
							</script>
						</div><!-- /.sidebar-ads-->
				</section><!-- /.sidebar-->
			</div><!-- /.container -->

<!-- gets footer-->
<? include 'views/footer.php';?>

<?php
include "models/validationModel.php";
$validationModel = new ValidationModel();


if(!empty($_GET["action"])){

	if($_GET["action"] == "register"){

		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$state = $_POST['state'];
		$url = $_POST['site'];
		$dob = $_POST['dob'];
		$phone = $_POST['phone'];
		$donation = $_POST['donate'];
		$pass = $_POST['password'];

		$result = $validationModel->ValidateReg($email, $gender, $state, $url, $dob, $phone, $donation, $pass);

		if($result == "true"){
			// var_dump("success");
			echo "true";
		}else{
			echo "false $result";
		}
	}

}


	



?>







