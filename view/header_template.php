<video autoplay muted loop nodownload id="headerVideo">
	<source src="../images/background.mp4" type="video/mp4"/>
</video>
<header>
	<h1 id="title">CREATIVE</h1>
	<h3 id="tagline">A platform for creatives</h3>	
</header>
<ul id="navigation" class="nav nav-pills">
	<li><a href="index.php">Home</a></li>
	<li><a href="#about">About</a></li>
	<li><a href="#" data-toggle="modal" data-target="#register">Register</a></li>
	<li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
</ul>
<a id="scroll-down" href="#about"><i class="fas fa-angle-down" style="font-size: 30px;"></i></a><div class="banner">

<div id="register" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				REGISTER
			</div>
			<div class="modal-body">
				<form class="register-form" action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<input class="form-control" type="text" name="name" placeholder="Full Name" />
					</div>
					<div class="form-group">
						<input class="form-control" type="email" name="email" placeholder="Email Address" />
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="social_links" placeholder="Social Media Links" />
					</div>
					<div class="form-group">
						<input class="form-control" type="file" name="portfolioFile"/>
					</div>
					<div class="form-group">
						<select class="form-control" name="category">
							<optgroup label="Photography">
								<option value="portrait">Potrait</option>
								<option value="commercial">Commercial</option>
								<option value="wedding">Wedding</option>
							</optgroup>
						</select>
					</div>
					I agree to all the <a href="">Terms and services</a> and <a href="">privacy policies</a>.
					<input class="btn btn-secondary" type="submit" name="submit" value="Submit" />
				</form>		
			</div>
			<div class="modal-footer">
				Already have account then?
				<a href="#" data-toggle="modal" data-target="#login" data-dismiss="modal"><button class="btn btn-primary">LOGIN</button></a>
			</div>
		</div>
	</div>	
</div>

<div id="login" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				LOGIN
			</div>
			<div class="modal-body">
				<form class="register-form" action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<input class="form-control" type="text" name="name" placeholder="Email" />
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="name" placeholder="Password" />
					</div>
					<input class="btn btn-secondary" type="submit" name="submit" value="Submit" />
				</form>		
			</div>
			<div class="modal-footer">
				Don't have account then?
				<a href="#" data-toggle="modal" data-target="#register" data-dismiss="modal"><button class="btn btn-primary">Register</button></a>
			</div>
		</div>
	</div>	
</div>