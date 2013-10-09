
<?php foreach($data as $par){ ?>

	<div class="reg-form user-set">
		<form action="?action=update-user" method="post">
			
			<div class="form-block">
				<label for="email">Email:<span class="red super">*</span></label>
				<input value="<?=$par['email']?>" type="text" name="email" placeholder="email address" required="required" autofocus="autofocus"/>
				<p class="email error"></p>
			</div><!-- /.form-block-->

			<div class="form-block">
				<label for="username">Username:<span class="red super">*</span></label>
				<input value="<?=$par['username']?>" type="text" name="username" placeholder="username" required="required"/>
				<p class="username error"></p>
			</div><!-- /.form-block-->

			<div class="form-block"> 
				<label for="first">First Name:</label>
				<input value="<?=$par['first']?>" type="text" name="first" placeholder="first name"/>
				<p class="first error"></p>
			</div><!-- /.form-block-->

			<div class="form-block"> 
				<label for="last">Last Name:</label>
				<input value="<?=$par['last']?>" type="text" name="last" placeholder="last name"/>
				<p class="last error"></p>
			</div><!-- /.form-block-->

			<div class="form-block">
				<div class="radio-block">
					<div class="radio-option">
						<label class="radio" for="male">Male:</label>
						<input <?php
							if($par['gender'] == "male"){

								?>checked="checked"<?php
							}
						?>type="radio" name="gender" value="male">
					</div><!-- /.radio-option-->

					<div class="radio-option">
						<label class="radio" for="female">Female:</label>
						<input <?php
							if($par['gender'] == "female"){

								?>checked="checked"<?php
							}
						?>type="radio" name="gender" value="female">
					</div><!-- /.radio-option-->
				</div><!-- /.radio-block-->
				<p class="radio error"></p>
			</div><!-- /.form-block-->

			<div class="form-block">
				<label for="state">State:</label>
				<select name="state">
				
					<!--used only for displaying stored value-->
					<option><?=$par['state']?></option>
				
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
				<input value="<?=$par['website']?>" type="text" name="site" placeholder="Your Website"/>
				<p class="website error"></p>
			</div><!-- /.form-block-->

			<div class="form-block"> 
				<label for="dob">DOB:</label>
				<input value="<?=$par['dob']?>" type="text" name="dob" id="dob-field" placeholder="11/11/2011"/>
				<p class="dob error"></p>
			</div><!-- /.form-block-->

			<div class="form-block"> 
				<label for="phone">Phone:</label>
				<input value="<?=$par['phone']?>" type="text" name="phone" placeholder="212-345-6789"/>
				<p class="phone error"></p>
			</div><!-- /.form-block-->

			<div class="form-block"> 
				<label for="donate">Want to Donate?</label>
				<input value="<?=$par['donation']?>" type="text" name="donate" placeholder="99.99"/>
				<p class="donate error"></p>
			</div><!-- /.form-block-->

			<div class="form-block"> 
				<label for="password">Password:<span class="red super">*</span></label>
				<input value="<?=$par['password']?>" type="password" name="password" placeholder="password" required="required"/>
			</div><!-- /.form-block-->
				
			<div class="form-block">	
				<label for="passagain">PW Again:<span class="red super">*</span></label>
				<input value="<?=$par['password']?>" type="password" name="passagain" placeholder="password again" required="required"/>
				<p class="password error"></p>
			</div><!-- /.form-block-->

			<input type="submit" value="Save Settings"/>
		</form>
	</div><!-- /.reg-form-->

	<div class="delete-acct-link">
		<a href="?action=delete-user">Delete your account?</a>
		<p>Some things are forever. Deleting your account is one of those things. Are you sure you want to do this?</p>
	</div><!-- /.delete-acct-link-->		

<?php } ?>