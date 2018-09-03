<form class="form-control" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Text Field </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Full Length </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" placeholder="Text Field" class="form-control" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password Field </label>

										<div class="col-sm-9">
											<input type="password" id="form-field-2" placeholder="Password" class="col-xs-10 col-sm-5" />
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle">Inline help text</span>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Readonly field </label>

										<div class="col-sm-9">
											<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="This text field is readonly!" />
											<span class="help-inline col-xs-12 col-sm-7">
												<label class="middle">
													<input class="ace" type="checkbox" id="id-disable-check" />
													<span class="lbl"> Disable it!</span>
												</label>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Relative Sizing</label>

										<div class="col-sm-9">
											<input class="input-sm" type="text" id="form-field-4" placeholder=".input-sm" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Grid Sizing</label>

										<div class="col-sm-9">
											<div class="clearfix">
												<input class="col-xs-1" type="text" id="form-field-5" placeholder=".col-xs-1" />
											</div>

											<div class="space-2"></div>

											<div class="help-block" id="input-span-slider"></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Input with Icon</label>

										<div class="col-sm-9">
											<span class="input-icon">
												<input type="text" id="form-field-icon-1" />
												<i class="ace-icon fa fa-leaf blue"></i>
											</span>

											<span class="input-icon input-icon-right">
												<input type="text" id="form-field-icon-2" />
												<i class="ace-icon fa fa-leaf green"></i>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Tooltip and help button</label>

										<div class="col-sm-9">
											<input data-rel="tooltip" type="text" id="form-field-6" placeholder="Tooltip on hover" title="Hello Tooltip!" data-placement="bottom" />
											<span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="More details." title="Popover on hover">?</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Tag input</label>

										<div class="col-sm-9">
											<div class="inline">
												<input type="text" name="tags" id="form-field-tags" value="Tag Input Control" placeholder="Enter tags ..." />
											</div>
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>

									
									<div class="space-24"></div>

									<h3 class="header smaller lighter blue">
										Checkboxes & Radio
										<small>All Checkboxes, Radios and Switch Buttons Are Pure CSS</small>
									</h3>

									<div class="row">
										<div class="col-xs-12 col-sm-5">
											<div class="control-group">
												<label class="control-label bolder blue">Checkbox</label>

												<div class="checkbox">
													<label>
														<input name="form-field-checkbox" type="checkbox" class="ace" />
														<span class="lbl"> choice 1</span>
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input name="form-field-checkbox" type="checkbox" class="ace" />
														<span class="lbl"> choice 2</span>
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox" />
														<span class="lbl"> choice 3</span>
													</label>
												</div>

												<div class="checkbox">
													<label class="block">
														<input name="form-field-checkbox" disabled="" type="checkbox" class="ace" />
														<span class="lbl"> disabled</span>
													</label>
												</div>

												<div class="checkbox">
													<label class="block">
														<input name="form-field-checkbox" type="checkbox" class="ace input-lg" />
														<span class="lbl bigger-120"> large checkbox</span>
													</label>
												</div>
											</div>
										</div>

										<div class="col-xs-12 col-sm-6">
											<div class="control-group">
												<label class="control-label bolder blue">Radio</label>

												<div class="radio">
													<label>
														<input name="form-field-radio" type="radio" class="ace" />
														<span class="lbl"> radio option 1</span>
													</label>
												</div>

												<div class="radio">
													<label>
														<input name="form-field-radio" type="radio" class="ace" />
														<span class="lbl"> radio option 2</span>
													</label>
												</div>

												<div class="radio">
													<label>
														<input name="form-field-radio" type="radio" class="ace" />
														<span class="lbl"> radio option 3</span>
													</label>
												</div>

												<div class="radio">
													<label>
														<input disabled="" name="form-field-radio" type="radio" class="ace" />
														<span class="lbl"> disabled</span>
													</label>
												</div>

												<div class="radio">
													<label>
														<input name="form-field-radio" type="radio" class="ace input-lg" />
														<span class="lbl bigger-120"> large radio</span>
													</label>
												</div>
											</div>
										</div>
									</div><!-- /.row -->

									<hr />
									<div class="form-group">
										<label class="control-label col-xs-12 col-sm-3">On/Off Switches</label>

										<div class="controls col-xs-12 col-sm-9">
											<div class="row">
												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-2" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch" type="checkbox" />
														<span class="lbl" data-lbl="CUS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOM"></span>
													</label>
												</div>
											</div>

											<div class="row">
												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-4" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-5" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-6" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-7" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>
											</div>

											<div class="row">
												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch btn-rotate" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-rotate" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-empty" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>
											</div>
										</div>
									</div>

								</form>
















                                                        	<div class="row">
														<div class="col-xs-12 col-sm-6">
															<div class="widget-box transparent">
																<div class="widget-header widget-header-small">
																	<h4 class="widget-title smaller">
																		<i class="ace-icon fa fa-check-square-o bigger-110"></i>
																		Little About Me
																	</h4>
																</div>

																<div class="widget-body">
																	<div class="widget-main">
																		<p>
																			My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
																		</p>
																		<p>
																			Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
																		</p>
																		<p>
																			The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
																		</p>
																		<p>
																			Thanks for visiting my profile.
																		</p>
																	</div>
																</div>
															</div>
														</div>

														<div class="col-xs-12 col-sm-6">
															<div class="widget-box transparent">
																<div class="widget-header widget-header-small header-color-blue2">
																	<h4 class="widget-title smaller">
																		<i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
																		My Skills
																	</h4>
																</div>

																<div class="widget-body">
																	<div class="widget-main padding-16">
																		<div class="clearfix">
																			<div class="grid3 center">
																				<div class="easy-pie-chart percentage" data-percent="45" data-color="#CA5952">
																					<span class="percent">45</span>%
																				</div>

																				<div class="space-2"></div>
																				Graphic Design
																			</div>

																			<div class="grid3 center">
																				<div class="center easy-pie-chart percentage" data-percent="90" data-color="#59A84B">
																					<span class="percent">90</span>%
																				</div>

																				<div class="space-2"></div>
																				HTML5 & CSS3
																			</div>

																			<div class="grid3 center">
																				<div class="center easy-pie-chart percentage" data-percent="80" data-color="#9585BF">
																					<span class="percent">80</span>%
																				</div>

																				<div class="space-2"></div>
																				Javascript/jQuery
																			</div>
																		</div>

																		<div class="hr hr-16"></div>

																		<div class="profile-skills">
																			<div class="progress">
																				<div class="progress-bar" style="width:80%">
																					<span class="pull-left">HTML5 & CSS3</span>
																					<span class="pull-right">80%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div class="progress-bar progress-bar-success" style="width:72%">
																					<span class="pull-left">Javascript & jQuery</span>

																					<span class="pull-right">72%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div class="progress-bar progress-bar-purple" style="width:70%">
																					<span class="pull-left">PHP & MySQL</span>

																					<span class="pull-right">70%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div class="progress-bar progress-bar-warning" style="width:50%">
																					<span class="pull-left">Wordpress</span>

																					<span class="pull-right">50%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div class="progress-bar progress-bar-danger" style="width:38%">
																					<span class="pull-left">Photoshop</span>

																					<span class="pull-right">38%</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>


                                                    	<div class="col-xs-12 col-sm-9">
                                                      
                                                      <!-- PAGE CONTENT BEGINS -->
                        

                                                        <h4 class="blue">
                                                            <span class="middle"><?= $_SESSION['fullname']?></span>

                                                            <span class="label label-purple arrowed-in-right">
                                                                <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                                                                online
                                                            </span>
                                                        </h4>

                                                        <div class="profile-user-info">
                                        <div class="profile-info-row col-md-12">
                                                <div class="profile-info-name">บัตรประชาชน </div>

                                                <div class="profile-info-value">
                                                    <span class="editable" id="username">alexdoe</span>
                                                </div>
                                                
                                        </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Location </div>

                                                                <div class="profile-info-value">
                                                                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                    <span>Netherlands</span>
                                                                    <span>Amsterdam</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Age </div>

                                                                <div class="profile-info-value">
                                                                    <span>38</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Joined </div>

                                                                <div class="profile-info-value">
                                                                    <span>2010/06/20</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Last Online </div>

                                                                <div class="profile-info-value">
                                                                    <span>3 hours ago</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="hr hr-8 dotted"></div>

                                                        <div class="profile-user-info">
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Website </div>

                                                                <div class="profile-info-value">
                                                                    <a href="#" target="_blank">www.alexdoe.com</a>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name">
                                                                    <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                                                                </div>

                                                                <div class="profile-info-value">
                                                                    <a href="#">Find me on Facebook</a>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name">
                                                                    <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                                                                </div>

                                                                <div class="profile-info-value">
                                                                    <a href="#">Follow me on Twitter</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.col -->