<div class="account-tabs">
	<ul class="nav nav-tabs">
		<li><a data-toggle="tab" href="#profile"><i class="fa fa-gg"></i> Profile</a></li>
	</ul>
    <div class="tab-content" id="myTabContent">
		<div id="profile" class="tab-pane fade active in">
			<div class="profile-info">
				<ul>
					<li><strong>USERNAME:</strong><span><?php echo $username; ?></span></li>
					<li><strong>PASSWORD:</strong>
						<div><a class="change" href="#" title="" data-title="Change Your password" data-change="Cancel">Change Your password</a>
							<form method="POST" action="#">
								<div class="row">
									<div class="col-md-12">
										<div class="field"><i class="ti-key"></i>
											<input type="password" placeholder="Current Password" name="CurrentPassword">
										</div>
									</div>

									<div class="col-md-12">
										<div class="field"><i class="ti-key"></i>
											<input type="password" name="NewPassword" placeholder="New Password">
										</div>
									</div>
									
									<div class="col-md-12">
										<div class="field"><i class="ti-key"></i>
											<input type="password" name="ConfirmPassword" placeholder="Confirm Password">
										</div>
									</div>
									
									<div class="col-md-12">
										<div class="field button">
											<input type="submit" name="pass_btn" value="Change Password" />
										</div>
									</div>
								</div>
							</form>
						</div>
					</li>
					<li><strong>EMAIL:</strong><div><?php echo $email; ?> <a class="change" href="#" title="" data-title="Change Email" data-change="Cancel">Change Email</a>
						<form method="POST" action="#">
							<div class="row">
								
								<div class="col-md-12">
									<div class="field"><i class="ti-key"></i>
										<input type="password" placeholder="Current Password" name="CurrentPasswordEmail">
									</div>
								</div>

								<div class="col-md-12">
									<div class="field"><i class="ti-key"></i>
										<input type="email" name="new_email"  placeholder="Enter New Email">
									</div>
								</div>														
								<div class="col-md-12">
									<div class="field button">
										<input name="email_btn" type="submit" value="Change Email" />
									</div>
								</div>
							</div>
						</form>
					</div></li>
				</ul>
			</div>
		</div>
    </div>
</div>