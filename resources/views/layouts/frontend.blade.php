@include('inc.header')


<!-- Header -->
@include('inc.navbar')
<!-- Off Canvas Sidebar -->

<!-- Post Section -->
<div class="post-wrapper py-3">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <!-- Left Sidebar Section -->
            @include('inc.sidebar_left')



            @yield('content')
            <!-- Right Sidebar Section -->
            @include('inc.sidebar_right')
        </div>
    </div>
</div>
<img class="side-bar-reopen" src="images/down-arrow.png" alt="">
<div class="side-bar-reopen-hint">
    Close Notifications
</div>
@include('inc.footer')




