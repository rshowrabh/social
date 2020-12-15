<header class="sticky-top" id="top">
    <!-- Header Top -->
    <div class="header-top">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand p-0" href="/">
                    <img src="./images/Fyre 01.svg" alt="brand-logo">
                    <!-- <img src="./images/top-logo.svg" alt="brand-logo"> -->
                    <img src="./images/Fyre 02.svg" class="nav-logo-text" alt="brand-logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline mx-auto mt-2 mt-sm-0 position-relative header-top-searchbar">
                        <input class="form-control ml-sm-2 rounded-pill shadow-none bg-white w-100" type="search"
                               placeholder="Search videos by keyword, artist, etc." aria-label="Search">
                        <button class="btn shadow-none my-2 my-sm-0 position-absolute" type="submit"><i
                                class="fas fa-video pr-1"></i><i class="fas fa-sort-down pr-1"></i><i
                                class="fas text-danger fa-search"></i></button>

                                  <div id='searchArea' class="dropdown position-absolute" aria-labelledby="dropdownMenuLink">

                                     </div>

                    </form>

                    <ul class="navbar-nav flex-row justify-content-around my-3 my-lg-0 ml-auto notification-icons">
                        <!-- <li class="nav-item dropdown mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <div class="notify">3</div>
                                <img src="./images/video-top.png" class="top-notification-pic" alt="">
                                <img src="./images/Video-Dark.png" class="top-notification-pic-hover" alt="">
                            </a>
                            <div
                                    class="dropdown-menu most-watched notify-dropdown-menu py-0 rounded border-0 position-absolute"
                                    aria-labelledby="navbarDropdown">
                                <div class="dropdown-menu-head rounded-top p-2 text-white d-flex align-items-center position-relative">
                                    <a href="#"
                                       class="most-watched-settings"><i class="fas fa-cog mr-2"></i></a>Most Watched
                                </div>
                                <div class="most-watched-list">
                                    <div class="most-watched-post">
                                        <p>
                                            Best selling artist of the year from 1970 to 2019
                                        </p>
                                        <div class="bg-thumbnail">
                                        </div>
                                    </div>
                                    <div class="most-watched-post">
                                        <p>
                                            Best selling artist of the year from 1970 to 2019
                                        </p>
                                        <div class="bg-thumbnail">
                                        </div>
                                    </div>
                                    <div class="most-watched-post">
                                        <p>
                                            Best selling artist of the year from 1970 to 2019
                                        </p>
                                        <div class="bg-thumbnail">
                                        </div>
                                    </div>
                                    <div class="most-watched-post">
                                        <p>
                                            Best selling artist of the year from 1970 to 2019
                                        </p>
                                        <div class="bg-thumbnail">
                                        </div>
                                    </div>
                                    <div class="most-watched-post">
                                        <p>
                                            Best selling artist of the year from 1970 to 2019
                                        </p>
                                        <div class="bg-thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> -->

                        <!-- Following notification -->

                        <li class="nav-item dropdown mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <div class="notify">{{auth()->user()->follower->where('is_read', 0)->where('status',0)->count()}}</div>
                                <img src="./images/Friends-top.png" class="top-notification-pic" alt="">
                                <img src="./images/Friends-Dark.png" class="top-notification-pic-hover" alt="">
                            </a>
                            <div class="dropdown-menu py-0 rounded border-0 position-absolute"
                                 aria-labelledby="navbarDropdown">
                                <div class="dropdown-menu-head rounded-top p-2 text-white d-flex align-items-center position-relative">
                                    <img src="./images/discover_members.png" class="follower-req-img" alt="discover_members"
                                         class="mr-2 follow-req-img">Follower
                                    Requests
                                </div>
                                @foreach(auth()->user()->follower->where('is_read', 0)->where('status',0) as $item)
                                 <div class="dropdown-menu-content d-flex align-items-center mb-1 p-2">
                                    <div class="mr-2">
                                        <a href="#"><img src="./dist/img/user-data/profile/{{$item->user->profile}}" alt="one"></a>
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="#">{{$item->user->name}} <span>has followed you</span></a>
                                        <div class="my-2" data-id='{{$item->id}}'>
                                            <a href="#" data-action='read' class="acceptFollowBtn dropdown-menu-btn d-inline-block px-3 py-1 text-white">Accept</a>
                                            <a href="#" data-action='delete'
                                               class="acceptFollowBtn dropdown-menu-btn d-inline-block px-3 py-1 border bg-white">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <div class="dropdown-footer text-center py-2 rounded-bottom">
                                    <a href="#" class="d-inline-block text-dark">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#">
                                <div class="notify">3</div>
                                <img src="./images/Market-top.png" class="top-notification-pic" alt="">
                                <img src="./images/Market-Dark.png" class="top-notification-pic-hover" alt="">
                            </a>
                        </li>

                        <!-- Notification -->
                        <li class="nav-item dropdown mx-1">
                            <a class="nav-link dropdown-toggle"  role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               @if(auth()->user()->unreadNotifications->count() > 0)
                                <div class="notify">{{auth()->user()->unreadNotifications->count()}}</div>
                                @endif
                                <img src="./images/Notification-top.png" class="top-notification-pic" alt="">
                                <img src="./images/Notification-Dark.png" class="top-notification-pic-hover" alt="">
                            </a>
                            <div class="dropdown-menu notify-dropdown-menu py-0 rounded border-0 position-absolute"
                                 aria-labelledby="navbarDropdown">
                                <div class="dropdown-menu-head rounded-top p-2 text-white d-flex align-items-center position-relative">
                                    <a href="#"><i class="fas fa-cog mr-2"></i></a>Notification
                                </div>

                                @foreach(auth()->user()->unreadNotifications->take(3) as $noti)
                                <div class="dropdown-menu-content d-flex align-items-center p-2 mb-1">
                                    <div class="mr-2">
                                        <a width='20px' href="#"><img src="./dist/img/user-data/profile/{{$noti->data['profile']}}" alt="one"></a>
                                    </div>
                                    <div class="flex-grow-1 py-2">
                                        <a href="#">{{$noti->data['name']}}
                                            @if($noti->type == 'App\Notifications\UserLikeNotifications')
                                             <span>like your post</span>
                                             @elseif($noti->type == 'App\Notifications\UserFollowAccept')
                                             <span>accept your request</span>
                                             @else
                                             <span>comment on your post</span>
                                            @endif

                                        </a>
                                        <div>
                                            <small class="text-muted">{{$noti->created_at->diffForHumans()}}</small>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <div class="dropdown-footer text-center py-2 rounded-bottom">
                                    <a href="#" class="d-inline-block text-dark">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-1">
                            <a class="nav-link dropdown-toggle"  role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <div class="notify">
                                    <small id='messageCount'>0</small>
                                </div>

                                <img src="./images/message-icon.png" class="top-notification-pic" alt="">
                                <img src="./images/message-icon.png" class="top-notification-pic-hover" alt="">
                            </a>
                            <div class="dropdown-menu notify-dropdown-menu py-0 rounded border-0 position-absolute"
                                 aria-labelledby="navbarDropdown">
                                <div class="dropdown-menu-head rounded-top p-2 text-white d-flex align-items-center position-relative">
                                    <a href="#"><i class="fas fa-cog mr-2"></i></a>Messages
                                </div>

                                <div id="plusIconAppend">

                                </div>

                                <div class="dropdown-footer text-center py-2 rounded-bottom">
                                    <a href="#" class="d-inline-block text-dark">View All</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="profile-nav ml-auto">
                        <a href="#" class="d-flex justify-content-center align-items-center profile-dropdown-toggler">
                            <b>{{Auth::user()->name}}</b>
                            <img width='30px' src="./dist/img/user-data/profile/{{Auth::user()->profile}}" alt="profile2" class="ml-2">
                            <i class="fas fa-sort-down ml-1"></i>
                            <div class="profile-dropdown">
                            <a href="{{route('my.profile')}}"><i class="fas fa-user-circle"></i> My Profile</a>
                            <a href="#"><i class="fas fa-sliders-h"></i> Profile Settings</a>
                            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                             </form>
                       </div>
                        </a>
                    </div>
                    <div class="vertical-side-bars d-block d-sm-none">
                        <div class="categories">
                            <div class="categorie-list">
                                <div class="vertical-side-head"><h2 class="my-2">Categories</h2></div>
                                <div class="categorie-items py-3">
                                    <a class="d-flex align-items-center" href="#">
                                        <div class="img-box">
                                            <img src="images/videos.png" class="real-img">
                                            <img src="images/videos-red.png" class="hover-img">
                                        </div>
                                        <p class="mb-0 ml-3">Videos</p>
                                    </a>
                                </div>
                                <div class="categorie-items py-3">
                                    <a class="d-flex align-items-center" href="#">
                                        <div class="img-box">
                                            <img src="images/market_classifieds.png" class="real-img">
                                            <img src="images/market_classifieds-red.png" class="hover-img">
                                        </div>
                                        <p class="mb-0 ml-3">Market Classifieds</p>
                                    </a>
                                </div>
                                <div class="categorie-items py-3">
                                    <a class="d-flex align-items-center" href="#">
                                        <div class="img-box">
                                            <img src="images/twitch_stream.png" class="real-img">
                                            <img src="images/twitch_stream-red.png" class="hover-img">
                                        </div>
                                        <p class="mb-0 ml-3">Twitch Stream</p>
                                    </a>
                                </div>
                                <div class="categorie-items py-3">
                                    <a class="d-flex align-items-center" href="#">
                                        <div class="img-box">
                                            <img src="images/live_stream.png" class="real-img">
                                            <img src="images/live_stream-red.png" class="hover-img">
                                        </div>
                                        <p class="mb-0 ml-3">Live Stream</p>
                                    </a>
                                </div>
                                <div class="categorie-items py-3">
                                    <a class="d-flex align-items-center" href="#">
                                        <div class="img-box">
                                            <img src="images/events.png" class="real-img">
                                            <img src="images/events-red.png" class="hover-img">
                                        </div>
                                        <p class="mb-0 ml-3">Events</p>
                                    </a>
                                </div>
                                <div class="categorie-items py-3">
                                    <a class="d-flex align-items-center" href="#">
                                        <div class="img-box">
                                            <img src="images/group_channels.png" class="real-img">
                                            <img src="images/group_channels-red.png" class="hover-img">
                                        </div>
                                        <p class="mb-0 ml-3">Group Channels</p>
                                    </a>
                                </div>
                                <div class="categorie-items py-3">
                                    <a class="d-flex align-items-center" href="#">
                                        <div class="img-box">
                                            <img src="images/discover_members.png" class="real-img">
                                            <img src="images/discover_members-red.png" class="hover-img">
                                        </div>
                                        <p class="mb-0 ml-3">Discover Members</p>
                                    </a>
                                </div>
                                <div class="categorie-items py-3">
                                    <a class="d-flex align-items-center" href="#">
                                        <div class="img-box">
                                            <img src="images/custom_themes.png" class="real-img">
                                            <img src="images/custom_themes-red.png" class="hover-img">
                                        </div>
                                        <p class="mb-0 ml-3">Custom Themes</p>
                                    </a>
                                </div>
                                <div class="categorie-items py-3">
                                    <a class="d-flex align-items-center" href="#">
                                        <div class="img-box">
                                            <img src="images/pro_services.png" class="real-img">
                                            <img src="images/pro_services-red.png" class="hover-img">
                                        </div>
                                        <p class="mb-0 ml-3">Pro Services</p>
                                    </a>
                                </div>
                                <div class="categorie-items py-3">
                                    <a class="d-flex align-items-center" href="#">
                                        <div class="img-box">
                                            <img src="images/Invite_new.png" class="real-img">
                                            <img src="images/Invite_new-red.png" class="hover-img">
                                        </div>
                                        <p class="mb-0 ml-3">Invite</p>
                                    </a>
                                </div>
                                <div class="categorie-items py-3">
                                    <a class="d-flex align-items-center" href="#">
                                        <div class="img-box">
                                            <img src="images/resources.png" class="real-img">
                                            <img src="images/resources-red.png" class="hover-img">
                                        </div>
                                        <p class="mb-0 ml-3">Resources</p>
                                    </a>
                                </div>
                                <div class="categorie-items py-3">
                                    <a class="d-flex align-items-center" href="#">
                                        <div class="img-box">
                                            <img src="images/saved.png" class="real-img">
                                            <img src="images/saved-red.png" class="hover-img">
                                        </div>
                                        <p class="mb-0 ml-3">Saved</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contacts">
                            <div class="vertical-side-head border-top"><h2 class="my-2">Contacts</h2></div>
                            <div class="contacts-items py-3">
                                <a class="d-flex align-items-center active" href="#">
                                    <img src="images/five.png" class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
                                </a>
                            </div>
                            <div class="contacts-items py-3">
                                <a class="d-flex align-items-center active" href="#">
                                    <img src="images/six.png" class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
                                </a>
                            </div>
                            <div class="contacts-items py-3">
                                <a class="d-flex align-items-center active" href="#">
                                    <img src="images/seven.png" class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
                                </a>
                            </div>
                            <div class="contacts-items py-3">
                                <a class="d-flex align-items-center active" href="#">
                                    <img src="images/eight.png" class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
                                </a>
                            </div>
                            <div class="contacts-items py-3">
                                <a class="d-flex align-items-center active" href="#">
                                    <img src="images/nine.png" class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
                                </a>
                            </div>
                            <div class="contacts-items py-3">
                                <a class="d-flex align-items-center active" href="#">
                                    <img src="images/ten.png" class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
                                </a>
                            </div>
                            <div class="contacts-items py-3">
                                <a class="d-flex align-items-center active" href="#">
                                    <img src="images/11.png" class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
                                </a>
                            </div>
                            <div class="contacts-items py-3">
                                <a class="d-flex align-items-center active" href="#">
                                    <img src="images/12.png" class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
                                </a>
                            </div>
                            <div class="contacts-items py-3 mb-5">
                                <a class="d-flex align-items-center active" href="#">
                                    <img src="images/13.png" class="mr-1">
                                    <p class="mb-0 panel-text"><b>Katie Daviscourt</b></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Header Bottom  -->
    <div class="header-bottom bg-white">
        <div class="container-fluid">
        </div>
    </div>
</header>
