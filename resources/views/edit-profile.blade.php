@include('inc.header')
<!-- Header -->
@include('inc.navbar')
<!-- Off Canvas Sidebar -->
@include('inc.sidebar_left')
	<!-- Post Section -->
	<div class="post-wrapper py-3">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<!-- Left Sidebar Section -->
				<aside class="col-lg-1 col-sm-2 pl-0">
					<div class="post-left d-none d-sm-block position-fixed">
						<div id="mySidebar" class="sidebar">
							<div class="fixed-part">
								<div title="Close" id="myBtn" class="neew">
									<span>Applications Center</span>
									<a href="javascript:void(0)" class="left-menu-closebtn">
										<img src="images/cross.png">
									</a>
								</div>
								<div class="about-list">
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/videos.png">
											<p class="mb-0 ml-3">Videos</p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/market_classifieds.png">
											<p class="mb-0 ml-3">Market Classifieds</p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/twitch_stream.png">
											<p class="mb-0 ml-3">Twitch Stream</p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/live_stream.png">
											<p class="mb-0 ml-3">Live Stream</p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/events.png">
											<p class="mb-0 ml-3">Events</p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/group_channels.png">
											<p class="mb-0 ml-3">Group Channels</p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/discover_members.png">
											<p class="mb-0 ml-3">Discover Members</p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/custom_themes.png">
											<p class="mb-0 ml-3">Custom Themes</p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/pro_services.png">
											<p class="mb-0 ml-3">Pro Services</p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/Invite_new.png">
											<p class="mb-0 ml-3">Invite</p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/resources.png">
											<p class="mb-0 ml-3">Resources</p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/saved.png">
											<p class="mb-0 ml-3">Saved</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="left-menu h-100" title="Open">
							<ul class="two mb-0">
								<li>
									<a href="#" class="mySidebar-toggoler">
										<img src="images/list-arrow.png" alt="list-arrow" class="toggoler-img">
									</a>
								</li>
								<li>
									<a href="#" class="mySidebar-toggoler">
										<img src="images/videos.png" class="real-img">
										<img src="images/videos-red.png" class="hover-img">
										<div class="tooltip">videos</div>
									</a>
								</li>
								<li>
									<a href="#" class="mySidebar-toggoler">
										<img src="images/market_classifieds.png" class="real-img">
										<img src="images/market_classifieds-red.png" class="hover-img">
										<div class="tooltip">Market</div>
									</a>
								</li>
								<li>
									<a href="#" class="mySidebar-toggoler">
										<img src="images/twitch_stream.png" class="real-img">
										<img src="images/twitch_stream-red.png" class="hover-img">
										<div class="tooltip">Stream</div>
									</a>
								</li>
								<li>
									<a href="#" class="mySidebar-toggoler">
										<img src="images/live_stream.png" class="real-img">
										<img src="images/live_stream-red.png" class="hover-img">
										<div class="tooltip">Live Stream</div>
									</a>
								</li>
								<li>
									<a href="#" class="mySidebar-toggoler">
										<img src="images/events.png" class="real-img">
										<img src="images/events-red.png" class="hover-img">
										<div class="tooltip">Events</div>
									</a>
								</li>
								<li>
									<a href="#" class="mySidebar-toggoler">
										<img src="images/group_channels.png" class="real-img">
										<img src="images/group_channels-red.png" class="hover-img">
										<div class="tooltip">Channels</div>
									</a>
								</li>
								<li>
									<a href="#" class="mySidebar-toggoler">
										<img src="images/discover_members.png" class="real-img">
										<img src="images/discover_members-red.png" class="hover-img">
										<div class="tooltip">Members</div>
									</a>
								</li>
								<li>
									<a href="#" class="mySidebar-toggoler">
										<img src="images/custom_themes.png" class="real-img">
										<img src="images/custom_themes-red.png" class="hover-img">
										<div class="tooltip">Custom</div>
									</a>
								</li>
								<li>
									<a href="#" class="mySidebar-toggoler">
										<img src="images/pro_services.png" class="real-img">
										<img src="images/pro_services-red.png" class="hover-img">
										<div class="tooltip">Services</div>
									</a>
								</li>
								<li>
									<a href="#" class="mySidebar-toggoler">
										<img src="images/Invite_new.png" class="real-img">
										<img src="images/Invite_new-red.png" class="hover-img">
										<div class="tooltip">Invite</div>
									</a>
								</li>
								<li>
									<a href="#" class="mySidebar-toggoler">
										<img src="images/resources.png" class="real-img">
										<img src="images/resources-red.png" class="hover-img">
										<div class="tooltip">Resources</div>
									</a>
								</li>
								<li>
									<a href="#" class="mySidebar-toggoler">
										<img src="images/saved.png" class="real-img">
										<img src="images/saved-red.png" class="hover-img">
										<div class="tooltip">Saved</div>
									</a>
								</li>
								<li>
									<a href="#" class="create-tab">
										<i class="fas fa-plus-circle"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="create-container position-fixed border py-2">
							<h3 class="text-dark pl-2">Create</h3>
							<div class="create-items">
								<a href="#" class="d-flex align-items-center p-2" data-toggle="modal" data-target="#createPostModal">
									<i class="far fa-edit rounded-circle bg-white text-center border"></i>
									<div class="ml-2">
										<h5 class="mb-1">Post</h5>
										<span>Share a post</span>
									</div>
								</a>
							</div>
							<div class="create-items">
								<a href="#" class="d-flex align-items-center p-2">
									<i class="fas fa-book-open rounded-circle bg-white text-center border"></i>
									<div class="ml-2">
										<h5 class="mb-1">Story</h5>
										<span>Share your story</span>
									</div>
								</a>
							</div>
							<div class="create-items">
								<a href="groups-members.html" class="d-flex align-items-center p-2">
									<i class="fas fa-users rounded-circle bg-white text-center border"></i>
									<div class="ml-2">
										<h5 class="mb-1">Group</h5>
										<span>Connect with people</span>
									</div>
								</a>
							</div>
							<div class="create-items">
								<a href="market-listing.html" class="d-flex align-items-center p-2">
									<i class="fas fa-store rounded-circle bg-white text-center border"></i>
									<div class="ml-2">
										<h5 class="mb-1">Marketplace Listing</h5>
										<span>Sell items to people</span>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="modal status-modal fade" id="createPostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
						  <div class="modal-content border-0">
							 <div class="modal-header border-0 p-0">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							 </div>
							 <div class="modal-body pt-0">
								<div class="form-group w-100 position-relative">
									<textarea class="form-control w-100 h-100 shadow-none m-0" placeholder="What do you want to share"></textarea>
									<ul class="color-plate text-center list-inline mb-0 position-absolute">
										<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block active"></a></li>
										<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
										<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
										<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
										<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
										<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
										<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
										<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
										<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
										<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
										<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
										<li class="list-inline-item"><a href="#" class="d-inline-block"></a></li>
									</ul>
									<div class="user-icon rounded-circle overflow-hidden position-absolute">
										<img class="w-100 h-100" src="./images/tanya.png" alt="tanya">
									</div>
								</div>
								<div class="text-muted text-center font-weight-bold">Drag and drop image/video hera or <a href="#" class="link">Browse</a></div>
							 </div>
							 <div class="modal-footer align-items-center justify-content-center border-0 pt-0">
								<div>
									<div class="input-group">
										<select class="custom-select shadow-none">
										  <option selected>Public Audience</option>
										  <option value="1">Personal</option>
										  <option value="2">Friends</option>
										  <option value="3">Custom</option>
										</select>
									</div>
								</div>
								 <div class="d-flex align-items-center justify-content-between">
									 <a href="#" class="btn-tag rounded d-inline-block">Friend Tagging</a>
									 <a href="#" class="d-inline-block mx-3"><img src="./images/camera3.png" alt="camera3"></a>
									 <a href="#" class="btn-post d-inline-block text-white rounded" data-dismiss="modal" aria-label="Close">Post</a>
								 </div>
							 </div>
						  </div>
						</div>
					</div>
				</aside>
				<div class="col-lg-9 col-sm-8 col-break">
					<div class="row">
						<!-- Main Post Section -->
						<div class="col-lg-4 d-flex flex-column">
							<div class="card edit-card mb-5">
								<div class="card-body p-2">
								  <div class="d-flex align-items-center justify-content-between mb-2">
									  <h5 class="mb-0 text-dark">Andrew Torda</h5>
									  <img src="./images/most.png" alt="most">
								  </div>
								  <div>
									  Youtube:
									  <br>
									  Instagram:
									  <br>
									  <a href="#" class="edit-btn my-2 font-weight-bold d-inline-block text-white rounded-pill" data-toggle="modal" data-target="#editModal">Edit Profile</a>
									  <!--Edit Profile Modal -->
										<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
											<div class="modal-content">
												<div class="modal-body">
													<h3 class="text-center text-secondary">Edit Profile</h3>
													<form>
														<div class="form-group row">
															<div class="col-12 d-flex align-items-center justify-content-center">
																<a href="#" class="change-img"><i class="far fa-user-circle"></i></a>
															</div>
															<label class="col-12 col-form-label text-center font-weight-bold">Change Profile</label>
														 </div>
														<div class="form-group row">
															<label for="firstName" class="col-sm-2 col-md-3 col-form-label">Name:</label>
															<div class="col-sm-10 col-md-9">
															  <input type="text" class="form-control" id="firstName" value="Andrew Torda">
															</div>
														 </div>
														<div class="form-group row">
															<label for="userName" class="col-sm-2 col-md-3 col-form-label">User Name:</label>
															<div class="col-sm-10 col-md-9">
															  <input type="text" class="form-control" id="userName" value="Maggla">
															</div>
														 </div>
														<div class="form-group row">
														  <label for="staticEmail" class="col-sm-2 col-md-3 col-form-label">Email:</label>
														  <div class="col-sm-10 col-md-9">
															 <input type="text" class="form-control" id="staticEmail" value="email@example.com">
														  </div>
														</div>
														<div class="form-group row">
														  <label for="inputPassword" class="col-sm-2 col-md-3 col-form-label">Password:</label>
														  <div class="col-sm-10 col-md-9">
															 <input type="password" class="form-control" id="inputPassword" value="12345678">
														  </div>
														</div>
														<div class="form-group row">
														  <label for="youtubeLink" class="col-sm-2 col-md-3 col-form-label">Youtube link:</label>
														  <div class="col-sm-10 col-md-9">
															 <input type="text" class="form-control" id="youtubeLink" value="www.youtube.com/maggle">
														  </div>
														</div>
														<div class="form-group row">
														  <label for="instaLink" class="col-sm-2 col-md-3 col-form-label">Instagram link:</label>
														  <div class="col-sm-10 col-md-9">
															 <input type="text" class="form-control" id="instaLink" value="maggle@420">
														  </div>
														</div>
														<div class="form-group row align-items-center justify-content-center">
														  <button class="btn shadow-none rounded-pill bg-success text-white px-3 py-2 font-weight-bold mr-3">Save Changes</button>
														  <button type="button" class="btn shadow-none rounded-pill bg-danger text-white px-3 py-2 font-weight-bold" data-dismiss="modal">Close</button>
														</div>
													 </form>
												</div>
											</div>
											</div>
										</div>
								  </div>
								  <div class="profile-image position-relative">
									  <img src="./images/mg-video1.png" alt="mg-video1" class="w-100">
									  <div class="profile-image-overlay position-absolute p-2 py-3 w-100">
										  <a href="#" class="d-inline-block active text-white mr-2 mb-2 mb-sm-0">About</a>
										  <a href="#" class="d-inline-block text-white mr-2 mb-2 mb-sm-0">Contacts</a>
										  <a href="#" class="d-inline-block text-white mr-2 mb-2 mb-sm-0">Groups</a>
										  <a href="#" class="d-inline-block text-white mb-2 mb-sm-0">Message</a>
									  </div>
								  </div>
								  <h4 class="text-dark font-italic mt-2">About:</h4>
								  <h6 class="font-italic">General Rules:</h6>
								  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur minima maxime corrupti esse amet temporibus, dolore hic quod tempore ducimus veniam obcaecati perferendis vel aut.</p>
								</div>
							 </div>
						</div>
						<div class="col-lg-8 px-lg-0 mb-5">
							<div class="profile-edit-details">
								<h4 class="text-dark position-relative pl-4">The world is yours for the taking. Follow destiny</h4>
								<div class="d-flex align-items-center my-3">
									<ul class="star-box mb-0 list-inline border rounded p-2">
										<li class="list-inline-item mr-1"><i class="fas fa-star"></i></li>
										<li class="list-inline-item mr-1"><i class="fas fa-star"></i></li>
										<li class="list-inline-item mr-1"><i class="fas fa-star"></i></li>
										<li class="list-inline-item mr-1"><i class="fas fa-star"></i></li>
										<li class="list-inline-item"><i class="far fa-star"></i></li>
									 </ul>
									 <p class="mb-0 mx-3">4.6 stars</p>
									 <a href="#" class="rate-btn d-inline-block">Rate Me!</a>
								</div>
								<div class="my-3">
									<a href="#" class="red-btn active d-inline-block mr-4 mb-2">Spotlight Wall</a>
									<a href="#" class="red-btn d-inline-block mr-4 mb-2">Followers 2</a>
									<a href="#" class="red-btn d-inline-block mr-4 mb-2">Photos</a>
									<a href="#" class="red-btn d-inline-block mr-4 mb-2">Videos</a>
									<a href="#" class="red-btn d-inline-block mb-2">More</a>
								</div>
							</div>
							<div class="card status-card">
								<div class="card-top py-1 d-flex flex-column flex-lg-row justify-content-between align-items-center">
									<ul class="list-inline mb-0">
										<li class="list-inline-item mr-3 mb-3 mb-md-0"><a href="#" class="active">Status</a></li>
										<li class="list-inline-item mr-3 mb-3 mb-md-0"><a href="#"><img src="./images/story-image.png" alt="story-image"></a></li>
										<li class="list-inline-item mr-3 mb-3 mb-md-0"><a href="#"><img src="./images/story-video.png" alt="story-video"></li>
										<li class="list-inline-item mb-3 mb-md-0"><a href="market-listing.html"><img src="./images/story-shop.png" alt="story-shop"> Market Post</a></li>
									</ul>
									<div class="story-card-toggoler d-flex align-items-center">
										<img src="./images/story-moments.png" alt="story-moments">
										<span class="font-weight-bold mr-2"><span class="toggle-text">Show</span> Moments</span>
										<div class="switch d-flex align-items-center rounded-pill position-relative"></div>
									</div>
								</div>
								<div class="card-body d-flex flex-column flex-sm-row align-items-center border-top p-2">
									<div class="profile-pic mr-2">
										<img src="./images/tanya.png" alt="tanya">
									</div>
									<form action="#" class="ml-auto w-100">
										<div class="status-form">
											<div class="form-group w-100 position-relative mb-0">
												<textarea class="form-control w-100 h-100 shadow-none"
													placeholder="What do you want to share now?" rows="3" data-toggle="modal" data-target="#exampleModal"></textarea>
												<div class="btn-submit rounded-pill position-absolute" data-toggle="modal" data-target="#exampleModal">
													<img src="./images/send.png" alt="send">
													<b>Publish</b>
												</div>
											</div>
										</div>
									</form>
									<div class="modal status-modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered">
										  <div class="modal-content border-0">
											 <div class="modal-header border-0 p-0">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												  <span aria-hidden="true">&times;</span>
												</button>
											 </div>
											 <div class="modal-body pt-0">
												<div class="form-group w-100 position-relative">
													<textarea class="form-control w-100 h-100 shadow-none m-0" placeholder="What do you want to share"></textarea>
													<ul class="color-plate text-center list-inline mb-0 position-absolute">
														<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block active"></a></li>
														<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
														<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
														<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
														<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
														<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
														<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
														<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
														<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
														<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
														<li class="list-inline-item mr-1 mb-3 mb-sm-0"><a href="#" class="d-inline-block"></a></li>
														<li class="list-inline-item"><a href="#" class="d-inline-block"></a></li>
													</ul>
													<div class="user-icon rounded-circle overflow-hidden position-absolute">
														<img class="w-100 h-100" src="./images/tanya.png" alt="tanya">
													</div>
												</div>
												<div class="text-muted text-center font-weight-bold">Drag and drop image/video hera or <a href="#" class="link">Browse</a></div>
											 </div>
											 <div class="modal-footer align-items-center justify-content-center border-0 pt-0">
												<div>
													<div class="input-group">
														<select class="custom-select shadow-none">
														  <option selected>Public Audience</option>
														  <option value="1">Personal</option>
														  <option value="2">Friends</option>
														  <option value="3">Custom</option>
														</select>
													</div>
												</div>
												 <div class="d-flex align-items-center justify-content-between">
													 <a href="#" class="btn-tag rounded d-inline-block">Friend Tagging</a>
													 <a href="#" class="d-inline-block mx-3"><img src="./images/camera3.png" alt="camera3"></a>
													 <a href="#" class="btn-post d-inline-block text-white rounded" data-dismiss="modal" aria-label="Close">Post</a>
												 </div>
											 </div>
										  </div>
										</div>
									</div>
								</div>
							</div>
							<div class="card story-card">
								<div class="card-body pb-3 pt-4 px-1">
									<div class="hover-box overflow-hidden rounded position-relative">
										<img src="./images/view3.png" alt="view3" class="hover-box-img w-100 h-100">
										<div class="hover-box-details w-100 d-flex flex-column align-items-center justify-content-end text-center text-white position-absolute">
											<img src="./images/red-avtar.png" alt="red-avtar">
											<p class="mb-0"></p>Sed augue elit</p>
										</div>
										<div class="hover-overlay text-center text-white w-100 h-100 d-flex flex-column align-items-center justify-content-end position-absolute">
											<img src="./images/camera2.png" alt="camera2">
											<p class="mb-0 mt-3 mt-lg-5"></p>Share a Moment</p>
										</div>
									</div>
									<div class="hover-box overflow-hidden rounded position-relative">
										<img src="./images/view1.png" alt="view1" class="hover-box-img w-100 h-100">
										<div
											class="hover-box-details w-100 d-flex flex-column align-items-center justify-content-end text-center text-white position-absolute">
											<img src="./images/red-avtar.png" alt="red-avtar">
											<p class="mb-0"></p>Sed augue elit</p>
										</div>
										<div
											class="hover-overlay text-center text-white w-100 h-100 d-flex flex-column align-items-center justify-content-end position-absolute">
											<img src="./images/play2.png" alt="play2">
											<p class="mb-0 mt-3 mt-lg-5"></p>Watch Moments</p>
										</div>
									</div>
									<div class="hover-box overflow-hidden rounded position-relative">
										<img src="./images/view2.png" alt="view2" class="hover-box-img w-100 h-100">
										<div class="hover-box-details-fixed w-100 h-100 d-flex flex-column align-items-center justify-content-end text-center text-white position-absolute">
											<img src="./images/camera2.png" alt="camera2">
											<p class="mb-0 mt-3 mt-lg-5"></p>Sed augue elit</p>
										</div>
									</div>
									<div class="hover-box overflow-hidden rounded position-relative">
										<img src="./images/view3.png" alt="view3" class="hover-box-img w-100 h-100">
										<div
											class="hover-box-details w-100 d-flex flex-column align-items-center justify-content-end text-center text-white position-absolute">
											<img src="./images/red-avtar.png" alt="red-avtar">
											<p class="mb-0"></p>Sed augue elit</p>
										</div>
										<div
											class="hover-overlay text-center text-white w-100 h-100 d-flex flex-column align-items-center justify-content-end position-absolute">
											<img src="./images/camera2.png" alt="camera2">
											<p class="mb-0 mt-3 mt-lg-5"></p>Share a Moment</p>
										</div>
									</div>
									<div class="hover-box overflow-hidden rounded position-relative">
										<img src="./images/view1.png" alt="view1" class="hover-box-img w-100 h-100">
										<div
											class="hover-box-details w-100 d-flex flex-column align-items-center justify-content-end text-center text-white position-absolute">
											<img src="./images/red-avtar.png" alt="red-avtar">
											<p class="mb-0"></p>Sed augue elit</p>
										</div>
										<div
											class="hover-overlay text-center text-white w-100 h-100 d-flex flex-column align-items-center justify-content-end position-absolute">
											<img src="./images/play2.png" alt="play2">
											<p class="mb-0 mt-3 mt-lg-5"></p>Watch Moments</p>
										</div>
									</div>
									<div class="hover-box overflow-hidden rounded position-relative">
										<img src="./images/view3.png" alt="view3" class="hover-box-img w-100 h-100">
										<div class="hover-box-details w-100 d-flex flex-column align-items-center justify-content-end text-center text-white position-absolute">
											<img src="./images/red-avtar.png" alt="red-avtar">
											<p class="mb-0"></p>Sed augue elit</p>
										</div>
										<div class="hover-overlay text-center text-white w-100 h-100 d-flex flex-column align-items-center justify-content-end position-absolute">
											<img src="./images/camera2.png" alt="camera2">
											<p class="mb-0 mt-3 mt-lg-5"></p>Share a Moment</p>
										</div>
									</div>
									<div class="hover-box overflow-hidden rounded position-relative">
										<img src="./images/view1.png" alt="view1" class="hover-box-img w-100 h-100">
										<div
											class="hover-box-details w-100 d-flex flex-column align-items-center justify-content-end text-center text-white position-absolute">
											<img src="./images/red-avtar.png" alt="red-avtar">
											<p class="mb-0"></p>Sed augue elit</p>
										</div>
										<div
											class="hover-overlay text-center text-white w-100 h-100 d-flex flex-column align-items-center justify-content-end position-absolute">
											<img src="./images/play2.png" alt="play2">
											<p class="mb-0 mt-3 mt-lg-5"></p>Watch Moments</p>
										</div>
									</div>
									<div class="hover-box overflow-hidden rounded position-relative">
										<img src="./images/view2.png" alt="view2" class="hover-box-img w-100 h-100">
										<div class="hover-box-details-fixed w-100 h-100 d-flex flex-column align-items-center justify-content-end text-center text-white position-absolute">
											<img src="./images/camera2.png" alt="camera2">
											<p class="mb-0 mt-3 mt-lg-5"></p>Sed augue elit</p>
										</div>
									</div>
									<div class="hover-box overflow-hidden rounded position-relative">
										<img src="./images/view3.png" alt="view3" class="hover-box-img w-100 h-100">
										<div
											class="hover-box-details w-100 d-flex flex-column align-items-center justify-content-end text-center text-white position-absolute">
											<img src="./images/red-avtar.png" alt="red-avtar">
											<p class="mb-0"></p>Sed augue elit</p>
										</div>
										<div
											class="hover-overlay text-center text-white w-100 h-100 d-flex flex-column align-items-center justify-content-end position-absolute">
											<img src="./images/camera2.png" alt="camera2">
											<p class="mb-0 mt-3 mt-lg-5"></p>Share a Moment</p>
										</div>
									</div>
									<div class="hover-box overflow-hidden rounded position-relative">
										<img src="./images/view1.png" alt="view1" class="hover-box-img w-100 h-100">
										<div
											class="hover-box-details w-100 d-flex flex-column align-items-center justify-content-end text-center text-white position-absolute">
											<img src="./images/red-avtar.png" alt="red-avtar">
											<p class="mb-0"></p>Sed augue elit</p>
										</div>
										<div
											class="hover-overlay text-center text-white w-100 h-100 d-flex flex-column align-items-center justify-content-end position-absolute">
											<img src="./images/play2.png" alt="play2">
											<p class="mb-0 mt-3 mt-lg-5"></p>Watch Moments</p>
										</div>
									</div>
								</div>
							</div>
							<div class="post-card d-flex flex-column flex-md-row border rounded p-2 mt-2">
								<div class="profile-pic mr-2">
									<div class="user-details-toggoler">
										<img src="./images/tanya.png" alt="tanya">
										<div class="user-details-card p-2">
											<div class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start details-card-top">
												<div><img src="./images/tanya.png" alt="tanya" class="profile-img"></div>
												<div class="ml-3">
													<h4 class="profile-name mb-1">
														<a href="#">Andrew Torda</a>
														<img src="./images/details-card-flag.png" alt="details-card-flag">
													</h4>
													<span class="text-success">Active Now</span>
													<div class="social">
														<a href="mailto:"><i class="far fa-envelope text-white pr-2"></i><span class="link">demo@demo.com</span></a>
														<br>
														<a href="#"><i class="fas fa-globe text-white pr-2"></i><span class="link">www.fyrestream.com</span></a>
													</div>
												</div>
											</div>
											<div class="details-card-bottom d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start flex-wrape my-2">
												<a href="#!" class="btn text-white mr-2"><i class="fas fa-user-plus pr-2"></i></i>Add Friend</a>
												<div>
													<p class="text-white mb-0"><span class="font-weight-bold pr-1">Member since:</span><span>January 4, 2019</span></p>
													<p class="text-white mb-0"><span class="font-weight-bold pr-1">Followers:</span><span>11,612</span></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="d-flex">
										<div class="user-details-toggoler">
											<h5 class="profile__name">Andrew Torda</h5>
											<div class="user-details-card p-2">
												<div class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start details-card-top">
													<div><img src="./images/tanya.png" alt="tanya" class="profile-img"></div>
													<div class="ml-3">
														<h4 class="profile-name mb-1">
															<a href="#">Andrew Torda</a>
															<img src="./images/details-card-flag.png" alt="details-card-flag">
														</h4>
														<span class="text-success">Active Now</span>
														<div class="social">
															<a href="mailto:"><i class="far fa-envelope text-white pr-2"></i><span class="link">demo@demo.com</span></a>
															<br>
															<a href="#"><i class="fas fa-globe text-white pr-2"></i><span class="link">www.fyrestream.com</span></a>
														</div>
													</div>
												</div>
												<div class="details-card-bottom d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start flex-wrape my-2">
													<a href="#!" class="btn text-white mr-2"><i class="fas fa-user-plus pr-2"></i></i>Add Friend</a>
													<div>
														<p class="text-white mb-0"><span class="font-weight-bold pr-1">Member since:</span><span>January 4, 2019</span></p>
														<p class="text-white mb-0"><span class="font-weight-bold pr-1">Followers:</span><span>11,612</span></p>
													</div>
												</div>
											</div>
										</div>
										<ul class="list-inline mb-0 ml-2">
											<li class="list-inline-item mr-2">1h</li>
											<li class="list-inline-item"><i class="fas fa-globe-americas"></i></li>
										</ul>
									</div>
									<p class="post__details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et
										hendrerit Integer pellentesque, ipsum eget eleifend gravida,<a href="#" class="link">read
											more</a></p>
									<div class="post__img rounded overflow-hidden">
										<img src="./images/tanya-video.png" alt="tanya-video" class="w-100">
									</div>
									<div class="post__reacts border-top mt-2 py-2">
										<ul class="list-inline mb-0">
											<li class="list-inline-item mr-3"><a href="#"><i
														class="fa fa-thumbs-up mr-1"></i><span>5</span></a></li>
											<li class="list-inline-item mr-3"><a href="#"><i
														class="fa fa-comments mr-1"></i><span>10</span></a></li>
											<li class="list-inline-item"><a href="#"><i
														class="fa fa-retweet mr-1"></i><span>2</span></a></li>
										</ul>
									</div>
									<form
										class="post__form d-block d-md-flex align-items-center justify-content-between form-inline border rounded p-2">
										<div class="d-flex align-items-center flex-grow-1">
											<a href="#">
												<img src="./images/sender.png" alt="sender">
											</a>
											<textarea class="form-control flex-grow-1 rounded-pill shadow-none mx-2"
												placeholder="Write your reply or comment"></textarea>
										</div>
										<button class="btn mt-2 mt-md-0 text-white" type="submit">Send</button>
									</form>
								</div>
							</div>
							<div class="post-card d-flex flex-column flex-md-row border rounded p-2 mt-2">
								<div class="profile-pic mr-2">
									<div class="user-details-toggoler">
										<img src="./images/tanya.png" alt="tanya">
										<div class="user-details-card p-2">
											<div class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start details-card-top">
												<div><img src="./images/tanya.png" alt="tanya" class="profile-img"></div>
												<div class="ml-3">
													<h4 class="profile-name mb-1">
														<a href="#">Andrew Torda</a>
														<img src="./images/details-card-flag.png" alt="details-card-flag">
													</h4>
													<span class="text-success">Active Now</span>
													<div class="social">
														<a href="mailto:"><i class="far fa-envelope text-white pr-2"></i><span class="link">demo@demo.com</span></a>
														<br>
														<a href="#"><i class="fas fa-globe text-white pr-2"></i><span class="link">www.fyrestream.com</span></a>
													</div>
												</div>
											</div>
											<div class="details-card-bottom d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start flex-wrape my-2">
												<a href="#!" class="btn text-white mr-2"><i class="fas fa-user-plus pr-2"></i></i>Add Friend</a>
												<div>
													<p class="text-white mb-0"><span class="font-weight-bold pr-1">Member since:</span><span>January 4, 2019</span></p>
													<p class="text-white mb-0"><span class="font-weight-bold pr-1">Followers:</span><span>11,612</span></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="d-flex">
										<div class="user-details-toggoler">
											<h5 class="profile__name">Andrew Torda</h5>
											<div class="user-details-card p-2">
												<div class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start details-card-top">
													<div><img src="./images/tanya.png" alt="tanya" class="profile-img"></div>
													<div class="ml-3">
														<h4 class="profile-name mb-1">
															<a href="#">Andrew Torda</a>
															<img src="./images/details-card-flag.png" alt="details-card-flag">
														</h4>
														<span class="text-success">Active Now</span>
														<div class="social">
															<a href="mailto:"><i class="far fa-envelope text-white pr-2"></i><span class="link">demo@demo.com</span></a>
															<br>
															<a href="#"><i class="fas fa-globe text-white pr-2"></i><span class="link">www.fyrestream.com</span></a>
														</div>
													</div>
												</div>
												<div class="details-card-bottom d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start flex-wrape my-2">
													<a href="#!" class="btn text-white mr-2"><i class="fas fa-user-plus pr-2"></i></i>Add Friend</a>
													<div>
														<p class="text-white mb-0"><span class="font-weight-bold pr-1">Member since:</span><span>January 4, 2019</span></p>
														<p class="text-white mb-0"><span class="font-weight-bold pr-1">Followers:</span><span>11,612</span></p>
													</div>
												</div>
											</div>
										</div>
										<ul class="list-inline mb-0 ml-2">
											<li class="list-inline-item mr-2">1h</li>
											<li class="list-inline-item"><i class="fas fa-globe-americas"></i></li>
										</ul>
									</div>
									<p class="post__details">The following video is a demo youtube video. Which is Luis Fonsi - Despacito song ft. Daddy Yankee, you definitely gonna like it<a href="#" class="link">https://www.youtube.com/watch?v=kJQP7kiw5Fk</a></p>
									<div class="post__reacts border-top mt-2 py-2">
										<ul class="list-inline mb-0">
											<li class="list-inline-item mr-3"><a href="#"><img src="./images/single-reaction.png" alt="single-reaction" class="mr-2"><span>5</span></a></li>
											<li class="list-inline-item mr-3"><a href="#"><i
														class="fa fa-comments mr-1"></i><span>10</span></a></li>
											<li class="list-inline-item"><a href="#"><i
														class="fa fa-retweet mr-1"></i><span>2</span></a></li>
										</ul>
									</div>
									<div class="media post__replys border-top mt-2 py-2">
										<img src="./images/comenter.png" class="mr-lg-3 mr-md-2 mr-0" alt="comenter">
										<div class="media-body">
											<div class="comment">
												<h5 class="m-0">Joe Dean</h5>
												I Live in Texas, and I think know better than to call me.
											</div>
											<div class="comment-reply">
												<ul class="list-inline mb-0">
													<li class="list-inline-item mr-3"><a href="#"><img src="./images/like.png"
																alt="like" class="mr-2"><span>Developer Zahid</span></a></li>
													<li class="list-inline-item mr-3"><a href="#"><img src="./images/reply.png"
																alt="reply" class="mr-2"><span>Respond</span></a></li>
												</ul>
											</div>
											<div class="media mt-3">
												<a class="mr-lg-3 mr-md-2 mr-0" href="#">
													<img src="./images/13.png">
												</a>
												<div class="media-body">
													<div class="comment comment--sub">
														<h5 class="m-0">Sunny</h5>
														Lorem ipsum dolor sit amet, adipiscing elit. Aenean vulputate sed diam sit
														amet tristique. orci sed velit
													</div>
													<div class="comment-reply">
														<ul class="list-inline mb-0">
															<li class="list-inline-item mr-3"><a href="#"><img src="./images/like.png"
																		alt="like" class="mr-2"><span>Yo Yo</span></a></li>
															<li class="list-inline-item mr-3"><a href="#"><img src="./images/reply.png"
																		alt="reply" class="mr-2"><span>Respond</span></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<form
										class="post__form d-block d-md-flex align-items-center justify-content-between form-inline border rounded p-2">
										<div class="d-flex align-items-center flex-grow-1">
											<a href="#">
												<img src="./images/sender.png" alt="sender">
											</a>
											<textarea class="form-control flex-grow-1 rounded-pill shadow-none mx-2"
												placeholder="Write your reply or comment"></textarea>
										</div>
										<button class="btn mt-2 mt-md-0 text-white" type="submit">Send</button>
									</form>
								</div>
							</div>
							<div class="post-card d-flex flex-column flex-md-row border rounded p-2 mt-2">
								<div class="profile-pic mr-2">
									<div class="user-details-toggoler">
										<img src="./images/tanya.png" alt="tanya">
										<div class="user-details-card p-2">
											<div class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start details-card-top">
												<div><img src="./images/tanya.png" alt="tanya" class="profile-img"></div>
												<div class="ml-3">
													<h4 class="profile-name mb-1">
														<a href="#">Andrew Torda</a>
														<img src="./images/details-card-flag.png" alt="details-card-flag">
													</h4>
													<span class="text-success">Active Now</span>
													<div class="social">
														<a href="mailto:"><i class="far fa-envelope text-white pr-2"></i><span class="link">demo@demo.com</span></a>
														<br>
														<a href="#"><i class="fas fa-globe text-white pr-2"></i><span class="link">www.fyrestream.com</span></a>
													</div>
												</div>
											</div>
											<div class="details-card-bottom d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start flex-wrape my-2">
												<a href="#!" class="btn text-white mr-2"><i class="fas fa-user-plus pr-2"></i></i>Add Friend</a>
												<div>
													<p class="text-white mb-0"><span class="font-weight-bold pr-1">Member since:</span><span>January 4, 2019</span></p>
													<p class="text-white mb-0"><span class="font-weight-bold pr-1">Followers:</span><span>11,612</span></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="d-flex">
										<div class="user-details-toggoler">
											<h5 class="profile__name">Andrew Torda</h5>
											<div class="user-details-card p-2">
												<div class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start details-card-top">
													<div><img src="./images/tanya.png" alt="tanya" class="profile-img"></div>
													<div class="ml-3">
														<h4 class="profile-name mb-1">
															<a href="#">Andrew Torda</a>
															<img src="./images/details-card-flag.png" alt="details-card-flag">
														</h4>
														<span class="text-success">Active Now</span>
														<div class="social">
															<a href="mailto:"><i class="far fa-envelope text-white pr-2"></i><span class="link">demo@demo.com</span></a>
															<br>
															<a href="#"><i class="fas fa-globe text-white pr-2"></i><span class="link">www.fyrestream.com</span></a>
														</div>
													</div>
												</div>
												<div class="details-card-bottom d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start flex-wrape my-2">
													<a href="#!" class="btn text-white mr-2"><i class="fas fa-user-plus pr-2"></i></i>Add Friend</a>
													<div>
														<p class="text-white mb-0"><span class="font-weight-bold pr-1">Member since:</span><span>January 4, 2019</span></p>
														<p class="text-white mb-0"><span class="font-weight-bold pr-1">Followers:</span><span>11,612</span></p>
													</div>
												</div>
											</div>
										</div>
										<ul class="list-inline mb-0 ml-2">
											<li class="list-inline-item mr-2">1h</li>
											<li class="list-inline-item"><i class="fas fa-globe-americas"></i></li>
										</ul>
									</div>
									<p class="post__details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et
										hendrerit Integer pellentesque, ipsum eget eleifend gravida,<a href="#" class="link">read
											more</a></p>
									<div class="post__img rounded overflow-hidden">
										<img src="./images/tanya-video.png" alt="tanya-video" class="w-100">
									</div>
									<div class="post__reacts border-top mt-2 py-2">
										<ul class="list-inline mb-0">
											<li class="list-inline-item mr-3"><a href="#"><i
														class="fa fa-thumbs-up mr-1"></i><span>5</span></a></li>
											<li class="list-inline-item mr-3"><a href="#"><i
														class="fa fa-comments mr-1"></i><span>10</span></a></li>
											<li class="list-inline-item"><a href="#"><i
														class="fa fa-retweet mr-1"></i><span>2</span></a></li>
										</ul>
									</div>
									<form
										class="post__form d-block d-md-flex align-items-center justify-content-between form-inline border rounded p-2">
										<div class="d-flex align-items-center flex-grow-1">
											<a href="#">
												<img src="./images/sender.png" alt="sender">
											</a>
											<textarea class="form-control flex-grow-1 rounded-pill shadow-none mx-2"
												placeholder="Write your reply or comment"></textarea>
										</div>
										<button class="btn mt-2 mt-md-0 text-white" type="submit">Send</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Right Sidebar Section -->
				<aside class="col-lg-1 col-sm-2 pr-0">
					<div class="post-left post-right d-none d-sm-block position-fixed ml-auto">
						<div id="mySidebar1" class="sidebar-right border-left">
							<div class="fixed-part">
								<div title="Close" id="myBtn1" class="neew-right">
									<span>Community Affairs</span>
									<a href="javascript:void(0)" class="right-menu-closebtn">
										<img src="images/cross.png">
									</a>
								</div>
								<div class="about-list">
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/one.png" class="mr-1">
											<div>
												<p class="mb-1 panel-text">Mike John reacted to your photo</p>
												<small class="mb-0"> March 10 at 9:05PM </small>
											</div>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/two.png" class="mr-1">
											<div>
												<p class="mb-1 panel-text">Mike John reacted to your photo</p>
												<small class="mb-0"> March 10 at 9:05PM </small>
											</div>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/three.png" class="mr-1">
											<div>
												<p class="mb-1 panel-text">Mike John reacted to your photo</p>
												<small class="mb-0"> March 10 at 9:05PM </small>
											</div>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center" href="#">
											<img src="images/four.png" class="mr-1">
											<div>
												<p class="mb-1 panel-text">Mike John reacted to your photo</p>
												<small class="mb-0"> March 10 at 9:05PM </small>
											</div>
										</a>
									</div>
									<h4 class="contact m-0 py-2">Contacts</h4>
									<div class="panel-title">
										<a class="d-flex align-items-center active" href="#">
											<img src="images/five.png" class="mr-1">
											<p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center active" href="#">
											<img src="images/six.png" class="mr-1">
											<p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center active" href="#">
											<img src="images/seven.png" class="mr-1">
											<p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center active" href="#">
											<img src="images/eight.png" class="mr-1">
											<p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center active" href="#">
											<img src="images/nine.png" class="mr-1">
											<p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center active" href="#">
											<img src="images/ten.png" class="mr-1">
											<p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center active" href="#">
											<img src="images/11.png" class="mr-1">
											<p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center active" href="#">
											<img src="images/12.png" class="mr-1">
											<p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
										</a>
									</div>
									<div class="panel-title">
										<a class="d-flex align-items-center active" href="#">
											<img src="images/13.png" class="mr-1">
											<p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="right-menu h-100" title="Open">
							<ul class="two mb-0">
								<li>
									<a href="#">
										<img src="images/back.png" alt="back" class="toggoler-img">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/one.png" class="menu-pic img-responsive">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/two.png" class="menu-pic img-responsive">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/three.png" class="menu-pic img-responsive">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/four.png" class="menu-pic img-responsive">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/five.png" class="menu-pic img-responsive">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/six.png" class="menu-pic img-responsive">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/seven.png" class="menu-pic img-responsive">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/eight.png" class="menu-pic img-responsive">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/nine.png" class="menu-pic img-responsive">
									</a>
								</li>
								<li>
									<a href="#" class="text-center setting-bar">
										<i class="fas fa-cog"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="contact-list-toggoler rounded-circle position-fixed d-flex align-items-center justify-content-center">
						<a href="#!"><i class="fas fa-plus-circle"></i></a>
					</div>
					<div class="contact-list-container position-fixed border w-100 overflow-hidden">
						<div class="head d-flex align-items-center justify-content-between bg-white p-2">
							<div class="user d-flex align-items-center">
								<img src="./images/profile2.png" alt="profile2" class="mr-2">
								<div>
									<h5 class="mb-0 text-dark">Maggla</h5>
									<small class="online-status active">Online</small>
								</div>
							</div>
							<a href="#" class="setting"><i class="fas fa-cog"></i></a>
						</div>
						<div class="body overflow-auto">
							<div class="contact-list-items">
								<a href="#!" class="d-flex align-items-center justify-content-between p-2 border-bottom">
									<div class="user d-flex align-items-center">
										<img src="./images/one.png" alt="one" class="mr-2">
										<div>
											<h5 class="mb-0 text-dark">Jon</h5>
											<small class="online-status active">Online</small>
										</div>
									</div>
									<time>10:00 pm</time>
								</a>
							</div>
							<div class="contact-list-items">
								<a href="#!" class="d-flex align-items-center justify-content-between p-2 border-bottom">
									<div class="user d-flex align-items-center">
										<img src="./images/two.png" alt="two" class="mr-2">
										<div>
											<h5 class="mb-0 text-dark">Rock</h5>
											<small class="online-status">Offline</small>
										</div>
									</div>
									<time>12:00 am</time>
								</a>
							</div>
							<div class="contact-list-items">
								<a href="#!" class="d-flex align-items-center justify-content-between p-2 border-bottom">
									<div class="user d-flex align-items-center">
										<img src="./images/three.png" alt="three" class="mr-2">
										<div>
											<h5 class="mb-0 text-dark">Jasmin</h5>
											<small class="online-status">Offline</small>
										</div>
									</div>
									<time>01:00 am</time>
								</a>
							</div>
							<div class="contact-list-items">
								<a href="#!" class="d-flex align-items-center justify-content-between p-2 border-bottom">
									<div class="user d-flex align-items-center">
										<img src="./images/one.png" alt="one" class="mr-2">
										<div>
											<h5 class="mb-0 text-dark">Jon</h5>
											<small class="online-status active">Online</small>
										</div>
									</div>
									<time>10:00 pm</time>
								</a>
							</div>
							<div class="contact-list-items">
								<a href="#!" class="d-flex align-items-center justify-content-between p-2 border-bottom">
									<div class="user d-flex align-items-center">
										<img src="./images/two.png" alt="two" class="mr-2">
										<div>
											<h5 class="mb-0 text-dark">Rock</h5>
											<small class="online-status">Offline</small>
										</div>
									</div>
									<time>12:00 am</time>
								</a>
							</div>
							<div class="contact-list-items">
								<a href="#!" class="d-flex align-items-center justify-content-between p-2 border-bottom">
									<div class="user d-flex align-items-center">
										<img src="./images/one.png" alt="one" class="mr-2">
										<div>
											<h5 class="mb-0 text-dark">Jon</h5>
											<small class="online-status active">Online</small>
										</div>
									</div>
									<time>10:00 pm</time>
								</a>
							</div>
							<div class="contact-list-items">
								<a href="#!" class="d-flex align-items-center justify-content-between p-2 border-bottom">
									<div class="user d-flex align-items-center">
										<img src="./images/two.png" alt="two" class="mr-2">
										<div>
											<h5 class="mb-0 text-dark">Rock</h5>
											<small class="online-status">Offline</small>
										</div>
									</div>
									<time>12:00 am</time>
								</a>
							</div>
							<div class="contact-list-items">
								<a href="#!" class="d-flex align-items-center justify-content-between p-2 border-bottom">
									<div class="user d-flex align-items-center">
										<img src="./images/three.png" alt="three" class="mr-2">
										<div>
											<h5 class="mb-0 text-dark">Jasmin</h5>
											<small class="online-status">Offline</small>
										</div>
									</div>
									<time>01:00 am</time>
								</a>
							</div>
						</div>
					</div>
					<!-- Messeger Area -->
					<div class="messenger-container">
						<div class="mini-messenger-container rounded-circle position-fixed">
							<div class="mini-messenger-content w-100 h-100 position-relative">
								<img src="./images/tanya.png" alt="12" class="w-100 h-100">
								<div class="mini-messenger-user d-flex align-items-center justify-content-center position-absolute p-2 font-weight-bold rounded-pill">Andrew T.</div>
							</div>
							<div class="close-btn position-absolute">
								<i class="fas fa-plus-circle"></i>
							</div>
						</div>
						<div class="messenger-chat border overflow-hidden">
							<div class="messenger-header bg-white border-bottom d-flex align-items-center justify-content-between">
								<div class="user d-flex align-items-center p-2">
									<img src="./images/avtar1.png" alt="avtar1">
									<div class="ml-2">
										<a href="#!" class="font-weight-bold text-dark">John Doe</a>
										<br>
										<small>Active Now</small>
									</div>
								</div>
								<div>
									<a href="#" class="d-inline-block icons"><i class="fas fa-video"></i></a>
									<a href="#" class="d-inline-block icons ml-1"><i class="fas fa-phone-alt"></i></a>
									<a href="#" class="d-inline-block icons mini-messenger-toggoler ml-1"><i class="fas fa-minus-circle"></i></a>
									<a href="#" class="d-inline-block icons close-messenger mx-2"><i class="fas fa-times"></i></a>
								</div>
							</div>
							<div class="messenger-body overflow-auto p-2">
								<div class="message-block d-flex align-items-center mb-2">
									<img src="./images/12.png" alt="12">
									<div class="message reply ml-2 p-2">
										Hi, There.
									</div>
								</div>
								<div class="message-block d-flex align-items-center justify-content-end mb-2">
									<div class="message text-white ans mr-2 p-2">
										Hello. How are you?
									</div>
									<img src="./images/11.png" alt="12">
								</div>
								<div class="text-center my-2">
									<small>Sun, 22:22 pm</small>
								</div>
								<div class="message-block d-flex align-items-center mb-2">
									<img src="./images/12.png" alt="12">
									<div class="message reply ml-2 p-2">
										Hi, There.
									</div>
								</div>
								<div class="message-block d-flex align-items-center justify-content-end mb-2">
									<div class="message text-white ans mr-2 p-2">
										Hello. How are you?
									</div>
									<img src="./images/11.png" alt="12">
								</div>
								<div class="message-block d-flex align-items-center mb-2">
									<img src="./images/12.png" alt="12">
									<div class="message reply ml-2 p-2">
										Hi, There.
									</div>
								</div>
								<div class="message-block d-flex align-items-center justify-content-end mb-2">
									<div class="message text-white ans mr-2 p-2">
										Hello. How are you?
									</div>
									<img src="./images/11.png" alt="12">
								</div>
							</div>
							<div class="messenger-bottom border-top p-2">
								<div class="d-flex align-items-center justify-content-center mb-1">
									<a href="#" class="att-icons d-inline-block mx-2"><i class="fas fa-images"></i></a>
									<a href="#" class="att-icons d-inline-block mx-2"><i class="fas fa-icons"></i></a>
									<a href="#" class="att-icons d-inline-block mx-2"><i class="fas fa-paperclip"></i></a>
								</div>
								<form action="#">
									<div class="form-group position-relative mb-0">
										<textarea class="form-control shadow-none rounded-pill" placeholder="Reply"></textarea>
										<button type="submit" class="btn position-absolute shadow-none"><i class="fas fa-paper-plane"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</div>
	<!-- Footer Section -->
	<footer class="footer">
		<div class="container">
			<div class="row justify-content-center py-4 text-center">
				<div class="col-lg-9 col-12">
					<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive"><img src="./images/social.png" alt="social"></a>
					<ul class="list-inline first-menu my-4">
						<li class="list-inline-item mr-3"><a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Privacy</a></li>
						<li class="list-inline-item mr-3"><a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Terms of Service</a></li>
						<li class="list-inline-item mr-3"><a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Help</a></li>
						<li class="list-inline-item mr-3"><a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Code of Conduct</a></li>
						<li class="list-inline-item mr-3"><a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Cookie Policy</a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Fyrestream News</a></li>
					</ul>
					<ul class="list-inline second-menu mb-4">
						<li class="list-inline-item mr-3"><a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Safety Tips</a></li>
						<li class="list-inline-item mr-3"><a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">FAQs</a></li>
						<li class="list-inline-item mr-3"><a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Post An Ad</a></li>
						<li class="list-inline-item mr-3"><a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Subscribe to Classifieds Alerts</a></li>
					</ul>
					<h5>Check out the Fyrestream Market Classifieds and find everything near you:</h5>
					<p class="find">
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Apartments for rent,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">homes for sale,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">new and used cars,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">services,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">furniture,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">boats,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">bicycles,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">electronics,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">cell phones,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">games,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">lessons,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">used sporting goods,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">motorcycles,</a>
						and more.
					</p>
					<h5>United States Top Communities Classifieds:</h5>
					<p class="us-top">
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Akron,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Albuquerque,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Anaheim,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Anchorage,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Arlington (TX),</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive"> Arlington (VA),</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Atlanta,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Aurora,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Austin,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Bakersfield,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Baltimore,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Baton Rouge,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Birmingham,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Boise,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Boston,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Buffalo,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Chandler,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Charlotte,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Chesapeake,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Chicago,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Chula Vista,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Cincinnati,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Cleveland,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Colorado Springs,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Columbus,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Corpus Christi,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Dallas,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Denver,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Detroit,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Durham,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">El Paso,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Fort Wayne,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Fort Worth,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Fresno,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Garland,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Gilbert,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Glendale,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Greensboro,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Henderson,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Hialeah,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Honolulu,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Houston,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Indianapolis,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Irvine,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Jacksonville,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Jersey City,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Kansas City,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Laredo,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Las Vegas,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Lexington,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Lincoln,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Long Beach,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Los Angeles,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Louisville,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Lubbock,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Madison,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Memphis,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Mesa,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Miami,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Milwaukee,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Minneapolis,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Nashville,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">New Orleans,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">New York City,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Newark,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Norfolk,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">North Las Vegas,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Oakland,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Oklahoma City,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Omaha,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Orlando,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Philadelphia,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Phoenix,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Pittsburgh,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Plano,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Portland,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Raleigh,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Reno, </a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Riverside,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Rochester,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Sacramento,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Saint Louis,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Saint Paul,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Saint Petersburg,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">San Antonio,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">San Diego,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">San Francisco,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">San Jose,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Santa Ana,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Scottsdale,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Seattle,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Stockton,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Tampa,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Toledo,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Tucson,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Tulsa,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Virginia Beach,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Washington,</a>
						<a href="https://www.fiverr.com/developer_zahid/psd-to-html-landing-page-html5-bootstrap-website-design-convert-html">Wichita,</a>
						<a href="https://www.fiverr.com/developer_zahid/convert-psd-to-html-xd-to-html5-psd-to-bootstrap-sketch-css-landing-responsive">Winston Salem</a>
					</p>
					<h5>U.S. and Canadian Classifieds by State or Province:</h5>
					<p class="us_can"><a href="#">Alabama,</a> <a href="#">Alaska,</a> <a href="#">Alberta,</a> <a
							href="#">Arizona,</a> <a href="#">Arkansas,</a> <a href="#">British Columbia,</a> <a
							href="#">California,</a> <a href="#">Colorado,</a> <a href="#">Connecticut,</a> <a
							href="#">Delaware,</a> <a href="#">District Of Columbia,</a> <a href="#">Florida,</a> <a
							href="#">Georgia,</a> <a href="#">Hawaii,</a> <a href="#">Idaho,</a> <a href="#">Illinois,</a>
						<a href="#">Indiana,</a> <a href="#">Iowa,</a> <a href="#">Kansas,</a> <a href="#">Kentucky,</a> <a
							href="#">Louisiana,</a> <a href="#">Maine,</a> <a href="#">Manitoba,</a> <a href="#">Maryland,</a>
						<a href="#">Massachusetts,</a> <a href="#">Michigan,</a> <a href="#">Minnesota,</a> <a
							href="#">Mississippi,</a> <a href="#">Missouri,</a> <a href="#">Montana,</a> <a
							href="#">Nebraska,</a> <a href="#">Nevada,</a> <a href="#">New
							Brunswick,</a> <a href="#">New Hampshire,</a> <a href="#">New Jersey,</a> <a href="#">New
							Mexico,</a> <a href="#">New York,</a> <a href="#">Newfoundland,</a> <a href="#">North
							Carolina,</a> <a href="#">North Dakota,</a> <a href="#">Northwest Territories,</a> <a href="#">Nova
							Scotia,</a> <a href="#">Nunavut,</a> <a href="#">Ohio,</a> <a href="#">Oklahoma,</a> <a
							href="#">Ontario,</a> <a href="#">Oregon,</a> <a href="#">Pennsylvania,</a> <a href="#">Prince
							Edward Island,</a> <a href="#">Quebec,</a> <a href="#">Rhode Island,</a> <a
							href="#">Saskatchewan,</a> <a href="#">South Carolina,</a> <a href="#">South Dakota,</a> <a
							href="#">Tennessee,</a> <a href="#">Texas,</a> <a href="#">Utah,</a> <a href="#">Vermont,</a> <a
							href="#">Virginia,</a> <a href="#">Washington,</a> <a href="#">West Virginia,</a> <a
							href="#">Wisconsin,</a> <a href="#">Wyoming,</a> <a href="#">Yukon</a></p>
					<p class="mt-5 text-dark">©2020. Fyrestream.com. All rights reserved.</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- All Script -->
	<script src="./js/jquery-1.12.4.min.js"></script>
	<script src="./plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="./plugins/slick-slider/js/slick.min.js"></script>
	<script src="./js/script.js"></script>
</body>

</html>