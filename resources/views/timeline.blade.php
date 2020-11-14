@extends('layouts.frontend')

@section('content')

<div class="col-lg-9 col-sm-8 col-break">
                <div class="row">
                    <!-- Main Post Section -->
                    <div class="col-lg-8 px-lg-0 mb-5">
                        <div class="card status-card">
                            <div class="relative-parent card-body d-flex flex-column flex-sm-row align-items-center border-top p-2">
                                <!-- <a href="" class="side-add-icon" data-toggle="modal" data-target="#exampleModal">
                                    <img src="images/post-add-icon.png" alt="">
                                </a>
                                <a href="#" class="side-add-icon open-moments">
                                    <img src="images/open-moments.png" alt="">
                                </a> -->
                                <form action="#" class="">
                                    <div class="create-post-div">
                                        <div class="form-group w-100 mb-0">
                                                <img src="./dist/img/user-data/profile/{{auth()->user()->profile}}" alt="tanya">
                                            <input type="text" class="write-post"
                                                   placeholder="What do you want to share now?"
                                                   data-toggle="modal" data-target="#exampleModal"/>
                                            <span class="create-post-side-btn">
                                                <i class="fas fa-camera"></i>
                                                <i class="far fa-smile"></i>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                                <div class="modal status-modal fade" id="exampleModal" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content create-post-box create border-0">
                                            <h4>Create Your Post</h4>
                                            <div class="container"><div class="row">
                                                <div class="col-md-2 col-sm-10 col-10 user-image text-center">
                                                    <img src="images/11.png" alt="">
                                                </div>
                                                <div class="col-md-10 col-sm-10 col-10 name-privacy">
                                                     <p>{{Auth::user()->name}}</p>
                                                     <div class="grey-bg">
                                                        <i class="fas fa-globe-asia"></i>
                                                        <select name="" id="sharePostPrivacy">
                                                            <option value="0" selected>Anyone</option>
                                                            <option value="1">Friends</option>
                                                            <option value="2">Only Me</option>
                                                        </select>
                                                     </div>
                                                </div>
                                            </div></div>
                                            <input id='sharePostText' type="text" class="share-now" placeholder="What do you want to share now?">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <a href="#" class="create-post-buttons" data-toggle="modal" data-target="#exampleModal1"><img src="images/story-image.png" alt=""> Upload Photos</a>
                                                        <a href="#" class="create-post-buttons"><img src="images/story-moments.png" alt=""> Colored Posts</a>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <a href="#" class="create-post-buttons"><img src="images/story-video.png" alt=""> Upload Videos</a>
                                                        <a href="#" class="create-post-buttons"><img src="images/story-shop.png" alt=""> Sell Something</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal status-modal fade" id="exampleModal1" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                           <div class="modal-dialog modal-dialog-centered">
                                               <div class="modal-content create-post-box create border-0">
                                                   <div class="container">
                                                    <div class="row">
                                                       <div class="col-md-2 col-sm-10 col-10 user-image text-center">
                                                           <img src="images/11.png" alt="">
                                                       </div>
                                                       <div class="col-md-10 col-sm-10 col-10 what-would-you">
                                                           What would you like to say, John?
                                                       </div>
                                                   </div>
                                                </div>
                                                   <div class="input-file-box">
                                                    <input  type="file" name="file" id="file" class="inputfile" />
                                                    <label for="file">
                                                        <i class="fas fa-cloud-upload-alt"></i>
                                                        <br>
                                                        Drag & Drop Your File Here or <span class="blue-text">Select a Folder.</span>
                                                    </label>
                                                   </div>
                                                   <div class="container">
                                                       <div class="row">
                                                           <div class="col-md-12 post-btn-parent">
                                                               <button id='sharePostSubmitMoment' class="post-btn">Post Moments</button>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                            <hr>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-6 click-here-div">
                                                        <a href="#"><i class="fas fa-plus-circle"></i></a> Click here to <a href="#" class="tag-friends">Tag Friends or Hashtag</a>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 post-btn-parent col-6">
                                                        <button id='sharePostSubmit' class="post-btn">Post</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card status-card create-modify">
                            <div class="card-top py-1 d-flex flex-column flex-lg-row justify-content-between align-items-center">
                                <div class="relative-parent">
                                    <ul class="list-inline row mb-0">
                                        <li class="col-md-3 col-sm-6 col-6 list-inline-item mb-3 mb-md-0"><a
                                                href="#"><img
                                                src="./images/create-post.png" class="create-post-icon" alt="story-video"> Create Post</a></li>
                                        <li class="col-md-3 col-sm-6 col-6 list-inline-item mb-3 mb-md-0"><a
                                                href="market-listing.html"><img
                                                src="./images/shopping-zone-marker.png" class="story-stop-img" alt="story-shop"> Market Listing</a></li>
                                        <li class="col-md-4 col-sm-6 col-6 list-inline-item toggler-li mb-md-0">
                                            <div class="story-card-toggoler d-flex align-items-center">
                                                <img src="./images/Fyrestream Moments.png" alt="story-moments">
                                                <span class="font-weight-bold mr-2">Share moments</span>
                                                <div class="show-moments-toggler-switch switch d-flex align-items-center rounded-pill position-relative">
                                                    <div class="toggle-tip">Show Moments</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-md-2 col-sm-6 col-6 list-inline-item mb-3 mb-md-0">
                                            <a href="#top"><img src="images/Airplane Icon - Back to Top.png" alt=""></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="card story-card big-moments-div">
                            <div class="card-body pb-3 pt-4 px-1 moments-slider-box">
                                <div class="hover-box overflow-hidden rounded position-relative">
                                    <img src="./images/view3.png" alt="view3" class="hover-box-img w-100 h-100">
                                    <div class="hover-box-details w-100 d-flex flex-column align-items-center justify-content-end text-center text-white position-absolute">
                                        <div class="moments-avatar">
                                            <div class="middle-gap">
                                                <img src="./images/12.png" alt="red-avtar">
                                            </div>
                                        </div>
                                        <p class="mb-0"></p>Sed augue elit</p>
                                    </div>
                                    <div class="hover-overlay text-center text-white w-100 h-100 d-flex flex-column align-items-center justify-content-end position-absolute">
                                        <img src="./images/camera2.png" alt="camera2">
                                        <p class="mb-0 mt-3 mt-lg-5"></p>Watch Moment</p>
                                    </div>
                                </div>
                                <div class="hover-box overflow-hidden rounded position-relative">
                                    <img src="./images/view3.png" alt="view3" class="hover-box-img w-100 h-100">
                                    <div class="hover-box-details w-100 d-flex flex-column align-items-center justify-content-end text-center text-white position-absolute">
                                        <div class="moments-avatar">
                                            <div class="middle-gap">
                                                <img src="./images/12.png" alt="red-avtar">
                                            </div>
                                        </div>
                                        <p class="mb-0"></p>Sed augue elit</p>
                                    </div>
                                    <div class="hover-overlay text-center text-white w-100 h-100 d-flex flex-column align-items-center justify-content-end position-absolute">
                                        <img src="./images/camera2.png" alt="camera2">
                                        <p class="mb-0 mt-3 mt-lg-5"></p>Watch Moment</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id='post'>
                          <!-- Post injected here -->
                        </div>
                                            
                        
                        
                    </div>
                    <div class="col-lg-4 div-to-shrink d-flex flex-column">
                        <div class="card news-card">
                            <div
                                    class="card-top d-flex align-items-center justify-content-between p-2">
                                <div class="d-flex align-items-center">
                                    <img src="./images/most.png" alt="most">
                                    <h5 class="mb-0 ml-2 text-dark">Most Watched</h5>
                                </div>
                                <div>
                                    <a href="#" class="setting-icon"><i class="fas fa-cog"></i></a>
                                </div>
                            </div>
                            <div class="most-viewed-list-scroll">
                                <div class="most-viewed-post">
                                    <p>Best selling artist of the year 1971 - 2019</p>
                                    <img src="images/wtch-vid.png" alt="">
                                </div>
                                <div class="most-viewed-post">
                                    <p>Best selling artist of the year 1971 - 2019</p>
                                    <img src="images/wtch-vid.png" alt="">
                                </div>
                                <div class="most-viewed-post">
                                    <p>Best selling artist of the year 1971 - 2019</p>
                                    <img src="images/wtch-vid.png" alt="">
                                </div>
                                <div class="most-viewed-post">
                                    <p>Best selling artist of the year 1971 - 2019</p>
                                    <img src="images/wtch-vid.png" alt="">
                                </div>
                                <div class="most-viewed-post">
                                    <p>Best selling artist of the year 1971 - 2019</p>
                                    <img src="images/wtch-vid.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!--                        <div class="add-box my-3 mx-auto">-->
                        <!--                            <img src="./images/add2.png" alt="add" class="img-fluid rounded">-->
                        <!--                        </div>-->
                        <div class="card news-card moments-slider-div">
                            <div class="card-top d-flex align-items-center p-2">
                                <img src="./images/moment2.png" alt="moment2">
                                <h5 class="mb-0 ml-2 text-dark"><a href="moments-megamenu.html">Moments</a></h5>
                                <div class="div-right">
                                    <a href="#" class="setting-icon"><i class="fas fa-cog"></i></a>
                                </div>
                            </div>
                            <div class="card-body moments-slider border-top py-3 px-1">
                                <div class="moments-individual my-moments">
                                    <div class="second-border">
                                        <div class="add-moment-btn">
                                            <i class="fas fa-plus-circle"></i>
                                        </div>
                                        <img src="images/11.png" alt="">
                                    </div>
                                    <p>Me</p>
                                </div>
                                <div class="moments-individual">
                                    <img src="images/11.png" alt="">
                                    <p>Warner</p>
                                </div>
                                <div class="moments-individual">
                                    <img src="images/12.png" alt="">
                                    <p>Warner</p>
                                </div>
                                <div class="moments-individual">
                                    <img src="images/13.png" alt="">
                                    <p>Warner</p>
                                </div>
                                <div class="moments-individual">
                                    <img src="images/13.png" alt="">
                                    <p>Warner</p>
                                </div>
                            </div>
                        </div>
                        <div class="card news-card">
                            <div
                                    class="card-top d-flex align-items-center justify-content-between p-2">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-search"></i>
                                    <h5 class="mb-0 ml-2 text-dark">Market Classifieds</h5>
                                </div>

                            </div>
                            <div class="container classifieds-parent">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div class="classifieds">
                                            <a href="" class="cross"><img src="images/market1.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div class="classifieds">
                                            <a href="" class="cross"><img src="images/market2.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card news-card">
                            <div
                                    class="card-top p-2">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 ml-2 mb-2 text-dark">People to follow</h5>
                                </div>
                                <div class="people-to-follow">
                                    <div class="people-individual">
                                        <div class="left-div-follow">
                                            <img src="images/11.png" alt="">
                                            <span>Patriot Rob</span>
                                        </div>
                                        <div class="follow-btn-div">
                                            <button class="follow-btn">Follow</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" news-card">
                            <div class="text-center mini-footer">
                                <p>© 2020 by Fyrestream.</p>
                                <a href="#" class="side-border">Advertise?</a>
                                <a href="#" class="side-border">Help</a>
                                <a href="#">Privacy</a>
                                <br>
                                <img src="images/colorful-logo.png" alt="">
                                <img src="images/brand-name-red.png" alt="">
                            </div>
                        </div>
                        <!--                        <div class="add-box mt-3 mx-auto">-->
                        <!--                            <img src="./images/add1.png" alt="add" class="img-fluid rounded">-->
                        <!--                        </div>-->
                        <!--                        <div class="add-box my-3 mx-auto">-->
                        <!--                            <img src="./images/add2.png" alt="add" class="img-fluid rounded">-->
                        <!--                        </div>-->
                    </div>
                </div>
            </div>
@endsection


@push('scripts')

@auth
<script>
window.user = @json(auth()->user());
</script>

@endauth
<script type="text/javascript" src="js/timeline.js"></script>

@endpush

@push('styles')
<link rel="stylesheet" href="./css/timeline.css">
@endpush