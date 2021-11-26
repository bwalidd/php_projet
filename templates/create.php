<?php include('includes/header.php'); ?>	
<form role="form">
							<div class="form-group">
								<label>Topic Titre</label>
								<input type="text" class="form-control" name="title" placeholder="Enter Post Title">
							</div>
							<div class="form-group">
								<label>Category</label>
								<select class="form-control">
									<option>génie informatique</option>
									<option>technique de management</option>
									<option>génie agroenvironnement</option>
									<option>génie mecanique</option>
									<option>genie electrique</option>
							</select>
							</div>
								<div class="form-group">
									<label>Topic Body</label>
									<textarea id="body" rows="10" cols="80" class="form-control" name="body"></textarea>
									<script>CKEDITOR.replace('body');</script>
								</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div id="sidebar">
					<div class="block">
						<h3>Login Form</h3>
						<form role="form">
						<div class="form-group">
							<label>Username</label>
							<input name="username" type="text" class="form-control" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input name="password" type="password" class="form-control" placeholder="Enter Password">
						</div>			
						<button name="do_login" type="submit" class="btn btn-primary">Login</button> <a  class="btn btn-default" href="register.html"> Create Account</a>
					</form>
<?php include('includes/footer.php'); ?>	