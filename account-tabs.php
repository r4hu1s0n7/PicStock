<div class="account-tabs">
							<ul class="nav nav-tabs">
								<li><a data-toggle="tab" href="#plan"><i class="fa fa-bolt"></i>Plan</a></li>
								<li class="active"><a data-toggle="tab" href="#profile"><i class="fa fa-gg"></i> Profile</a></li>
								<li><a data-toggle="tab" href="#purchase-history"><i class="fa fa-tripadvisor"></i> Purchase History</a></li>
							</ul>
						    <div class="tab-content" id="myTabContent">
								<div id="plan" class="tab-pane fade">
									<div class="plan">
										<div class="row">
											<div class="col-md-8 column">
												<h5 class="border-title">PLANS:</h5>
												<h6 class="sub-title">My Images Plan</h6>
												<ul>
													<li><?php echo $plan_downloads; ?> Downloads per Month</li>
													<li><?php echo $plan_name; ?></li>
													<li>&#x20b9;<?php echo $plan_price; ?></li>
												</ul>
											</div>
											<div class="col-md-4 column">
												<div class="plan-info">
													<span>Plan Expires:</span>
													<strong><?php $newDate = date("d-m-Y", strtotime($expiry_date)); echo $newDate; ?></strong>
													<span>Downloads Remaining:</span>
													<strong><?php echo $available_dwnld ?> / <?php echo $plan_downloads; ?> today</strong>
												</div>
											</div>
										</div>
									</div>
								</div>
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
								
								<div id="purchase-history" class="tab-pane fade">
									<div class="purchase-history">
										<strong class="purchase-date">Date</strong>
										<strong class="purchase-desc">Description</strong>
										<strong class="purchase-total">Total</strong>
										<span class="purchase-date"><?php $subs_date = date("d-m-Y", strtotime($sub_date)); echo $subs_date; ?></span>
										<span class="purchase-desc">30-day Subscription, <?php echo $plan_name; ?> with <?php echo $plan_downloads; ?> Downloads per Month</span>
										<span class="purchase-total">&#x20b9;<?php echo $plan_price; ?></span>
									</div>
								</div>
						    </div>
						</div>