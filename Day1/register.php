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
						<form>
							
							<label for="email">Email:<span class="red super">*</span></label>
							<input type="text" name="email" placeholder="email address" required="required" autofocus="autofocus"/>
							
							<label for="username">Username:<span class="red super">*</span></label>
							<input type="text" name="username" placeholder="username" required="required"/>
							
							<label for="first">First Name:</label>
							<input type="text" name="first" placeholder="first name"/>
							
							<label for="last">Last Name:</label>
							<input type="text" name="last" placeholder="last name"/>

							<label for="password">Password:<span class="red super">*</span></label>
							<input type="password" name="password" placeholder="password" required="required"/>
							
							<label for="passagain">PW Again:<span class="red super">*</span></label>
							<input type="password" name="passagain" placeholder="password again" required="required"/>
							
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







