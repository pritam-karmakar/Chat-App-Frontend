{{-- Header Inclusion --}}
@include('layouts.header')

<!-- Main Wrapper -->
<div class="main-wrapper">
    <!-- content -->
    <div class="content main_content">

        <!-- Left Sidebar Menu -->
        <div class="sidebar-menu">
            <div class="logo">
                <a href="index-2.html" class="logo-normal"><img src="{{ asset('build/img/logo.svg') }}" alt="Logo"></a>
            </div>
            <div class="menu-wrap">
                <div class="main-menu">
                    <ul class="nav">
                        <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Chats" data-bs-custom-class="tooltip-primary">
                            <a href="index-2.html" class="active" data-bs-toggle="tab" data-bs-target="#chat-menu">
                                <i class="ti ti-message-2-heart"></i>
                            </a>
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Contacts" data-bs-custom-class="tooltip-primary"> 
                            <a href="#" data-bs-toggle="tab" data-bs-target="#contact-menu">
                                <i class="ti ti-user-shield"></i>
                            </a>
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Groups" data-bs-custom-class="tooltip-primary">
                            <a href="#" class="" data-bs-toggle="tab" data-bs-target="#group-menu">
                                <i class="ti ti-users-group"></i>
                            </a>
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Status" data-bs-custom-class="tooltip-primary">
                            <a href="status.html" class="">
                                <i class="ti ti-circle-dot"></i>
                            </a>
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Calls" data-bs-custom-class="tooltip-primary">
                            <a href="#" data-bs-toggle="tab" data-bs-target="#call-menu">
                                <i class="ti ti-phone-call"></i>
                            </a>
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Profile" data-bs-custom-class="tooltip-primary">
                            <a href="#" data-bs-toggle="tab" data-bs-target="#profile-menu">
                                <i class="ti ti-user-circle"></i>
                            </a>
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Settings" data-bs-custom-class="tooltip-primary">
                            <a href="#" data-bs-toggle="tab" data-bs-target="#setting-menu">
                                <i class="ti ti-settings"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="profile-menu">
                    <ul>
                        <li>
                            <a href="#" id="dark-mode-toggle" class="dark-mode-toggle active">
                                <i class="ti ti-moon"></i>
                            </a>
                            <a href="#" id="light-mode-toggle" class="dark-mode-toggle">
                                <i class="ti ti-sun"></i>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown">
                                <a href="#" class="avatar avatar-md" data-bs-toggle="dropdown">
                                    <img src="{{ asset('build/img/profiles/avatar-16.jpg') }}" alt="img" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end p-3">
                                    <a href="signin.html" class="dropdown-item"><i class="ti ti-logout-2 me-2"></i>Logout </a>
                                </div>
                            </div>   
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Left Sidebar Menu -->

        {{-- Chat Sidebar --}}
        <livewire:chat.sidebar />

        {{-- Chat Sidebar --}}
        <livewire:chat.chat-box />

        <!-- Contact Info -->
        <div class="chat-offcanvas offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="contact-profile" aria-labelledby="chatUserMoreLabel">
            <div class="offcanvas-header">
                <h4 class="offcanvas-title" id="chatUserMoreLabel">Contact Info</h4>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x"></i></button>
            </div>
            <div class="offcanvas-body">
                <div class="chat-contact-info">
                    <div class="profile-content">
                        <div class="contact-profile-info">
                            <div class="avatar avatar-xxl online mb-2">
                                <img src="{{ asset('build/img/profiles/avatar-06.jpg') }}" class="rounded-circle" alt="img">
                            </div>
                            <h6>Edward Lietz</h6>
                            <p>Last seen at 07:15 PM</p>
                        </div>
                        <div class="row gx-3">
                            <div class="col">
                                <a class="action-wrap">
                                    <i class="ti ti-phone"></i>
                                    <p>Audio</p>
                                </a>
                            </div>
                            <div class="col">
                                <a class="action-wrap">
                                    <i class="ti ti-video"></i>
                                    <p>Video</p>
                                </a>
                            </div>
                            <div class="col">
                                <a class="action-wrap">
                                    <i class="ti ti-brand-hipchat"></i>
                                    <p>Chat</p>
                                </a>
                            </div>
                            <div class="col">
                                <a class="action-wrap">
                                    <i class="ti ti-search"></i>
                                    <p>Search</p>
                                </a>
                            </div>
                        </div>
                        <div class="content-wrapper">
                            <h5 class="sub-title">Profile Info</h5>
                            <div class="card">
                                <div class="card-body">
                                    <ul class="list-group profile-item">
                                        <li class="list-group-item">
                                            <div class="profile-info">
                                                <h6>Name</h6>
                                                <p>Edward Lietz</p>
                                            </div>
                                            <div class="profile-icon">
                                                <i class="ti ti-user-circle"></i>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="info">
                                                <h6>Email Address</h6>
                                                <p><a href="https://dreamschat.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cba2a5ada48baeb3aaa6bba7aee5a8a4a6">[email&#160;protected]</a></p>
                                            </div>
                                            <div class="icon">
                                                <i class="ti ti-mail-heart"></i>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="info">
                                                <h6>Phone</h6>
                                                <p>555-555-21541</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ti ti-phone-check"></i>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="info">
                                                <h6>Bio</h6>
                                                <p>Hello, I am using DreamsChat</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ti ti-user-check"></i>
                                            </div>
                                        </li>
                                    </ul>                                        
                                </div>
                            </div>
                        </div>
                        <div class="content-wrapper">
                            <h5 class="sub-title">Social Profiles</h5>
                            <div class="card">
                                <div class="card-body">
                                    <div class="social-icon">
                                        <a href="javascript:void(0);"><i class="ti ti-brand-facebook"></i></a>
                                        <a href="javascript:void(0);"><i class="ti ti-brand-twitter"></i></a>
                                        <a href="javascript:void(0);"><i class="ti ti-brand-instagram"></i></a>
                                        <a href="javascript:void(0);"><i class="ti ti-brand-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-wrapper">
                            <h5 class="sub-title">Media Details</h5>
                            <div class="chat-file">
                                <div class="file-item action-wrap">
                                    <div class="accordion accordion-flush chat-accordion" id="mediafile">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#chatuser-collapse1" aria-expanded="false" aria-controls="chatuser-collapse1">
                                                    <i class="ti ti-photo-shield me-2"></i>Photos
                                                </a>
                                            </h2>
                                            <div id="chatuser-collapse1" class="accordion-collapse collapse" data-bs-parent="#mediafile">
                                                <div class="accordion-body">
                                                    <div class="chat-user-photo">
                                                        <div class="chat-img contact-gallery">
                                                            <div class="img-wrap">
                                                                <img src="{{ asset('build/img/gallery/gallery-01.jpg') }}" alt="img">
                                                                <div class="img-overlay">
                                                                    <a class="gallery-img" data-fancybox="gallery-img" href="build/imggallery/gallery-01.html" title="Demo 01"><i class="ti ti-eye"></i></a>
                                                                    <a href="#"><i class="ti ti-download"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="img-wrap">
                                                                <img src="{{ asset('build/img/gallery/gallery-02.jpg') }}" alt="img">
                                                                <div class="img-overlay">
                                                                    <a class="gallery-img" data-fancybox="gallery-img" href="build/img/gallery/gallery-02.jpg" title="Demo 02"><i class="ti ti-eye"></i></a>
                                                                    <a href="#"><i class="ti ti-download"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="img-wrap">
                                                                <img src="{{ asset('build/img/gallery/gallery-03.jpg') }}" alt="img">
                                                                <div class="img-overlay">
                                                                    <a class="gallery-img" data-fancybox="gallery-img" href="build/img/gallery/gallery-03.jpg" title="Demo 03"><i class="ti ti-eye"></i></a>
                                                                    <a href="#"><i class="ti ti-download"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="img-wrap">
                                                                <img src="{{ asset('build/img/gallery/gallery-04.jpg') }}" alt="img">
                                                                <div class="img-overlay">
                                                                    <a class="gallery-img" data-fancybox="gallery-img" href="build/img/gallery/gallery-04.jpg" title="Demo 04"><i class="ti ti-eye"></i></a>
                                                                    <a href="#"><i class="ti ti-download"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="img-wrap">
                                                                <img src="{{ asset('build/img/gallery/gallery-05.jpg') }}" alt="img">
                                                                <div class="img-overlay">
                                                                    <a class="gallery-img" data-fancybox="gallery-img" href="build/img/gallery/gallery-05.jpg" title="Demo     04"><i class="ti ti-eye"></i></a>
                                                                    <a href="#"><i class="ti ti-download"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <a class="gallery-img view-all link-primary d-inline-flex align-items-center justify-content-center mt-3" href="build/img/gallery/gallery-05.jpg" data-fancybox="gallery-img">
                                                                All Images<i class="ti ti-arrow-right ms-2"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#media-video" aria-expanded="false" aria-controls="media-video">
                                                    <i class="ti ti-video me-2"></i>Videos
                                                </a>
                                            </h2>
                                            <div id="media-video" class="accordion-collapse collapse" data-bs-parent="#mediafile">
                                                <div class="accordion-body">
                                                    <div class="chat-video">
                                                        <a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox="" class="fancybox video-img">
                                                            <img src="{{ asset('build/img/video/video.jpg') }}" alt="img">
                                                            <span><i class="ti ti-player-play-filled"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#media-links" aria-expanded="false" aria-controls="media-links">
                                                    <i class="ti ti-unlink me-2"></i>Links
                                                </a>
                                            </h2>
                                            <div id="media-links" class="accordion-collapse collapse" data-bs-parent="#mediafile">
                                                <div class="accordion-body">
                                                    <div class="link-item">
                                                        <span class="link-icon">
                                                            <img src="{{ asset('build/img/icons/github-icon.svg') }}" alt="icon">
                                                        </span>
                                                        <div class="ms-2">
                                                            <p>https://segmentfault.com/u/ans</p>
                                                        </div>       
                                                    </div>
                                                    <div class="link-item">
                                                        <span class="link-icon">
                                                            <img src="{{ asset('build/img/icons/info-icon.svg') }}" alt="icon">
                                                        </span>
                                                        <div class="ms-2">
                                                            <p>https://segmentfault.com/u/ans</p>
                                                        </div>       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#media-document" aria-expanded="false" aria-controls="media-document">
                                                    <i class="ti ti-unlink me-2"></i>Documents
                                                </a>
                                            </h2>
                                            <div id="media-document" class="accordion-collapse collapse" data-bs-parent="#mediafile">
                                                <div class="accordion-body">
                                                    <div class="document-item">
                                                        <div class="d-flex align-items-center">
                                                            <span class="document-icon">
                                                                <i class="ti ti-file-zip"></i>
                                                            </span>
                                                            <div class="ms-2">
                                                                <h6>Ecommerce.zip</h6>
                                                                <p>10.25 MB zip file</p>
                                                            </div>                                                                
                                                        </div>
                                                        <a href="javascript:void(0);" class="download-icon">
                                                            <i class="ti ti-download"></i>
                                                        </a>
                                                    </div>
                                                    <div class="document-item">
                                                        <div class="d-flex align-items-center">
                                                            <span class="document-icon">
                                                                <i class="ti ti-video"></i>
                                                            </span>
                                                            <div class="ms-2">
                                                                <h6>video-1.mp4</h6>
                                                                <p>20.50 MB video file</p>
                                                            </div>                                                                
                                                        </div>
                                                        <a href="javascript:void(0);" class="download-icon">
                                                            <i class="ti ti-download"></i>
                                                        </a>
                                                    </div>
                                                    <div class="document-item">
                                                        <div class="d-flex align-items-center">
                                                            <span class="document-icon">
                                                                <i class="ti ti-music"></i>
                                                            </span>
                                                            <div class="ms-2">
                                                                <h6>Ecommerce.zip</h6>
                                                                <p>6.25 MB audio file</p>
                                                            </div>                                                                
                                                        </div>
                                                        <a href="javascript:void(0);" class="download-icon">
                                                            <i class="ti ti-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-wrapper other-info">
                            <h5 class="sub-title">Common in 4 Groups</h5>
                            <div class="card">
                                <div class="card-body list-group profile-item">
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-lg bg-skyblue rounded-circle me-2">
                                                GU
                                            </div>
                                            <div class="chat-user-info">                                            
                                                <h6>Gustov _family</h6>
                                                <p>Mark, Elizabeth, Aaron, <span class="text-primary">More...</span></p>
                                            </div>
                                        </div>
                                        <span class="link-icon"><i class="ti ti-chevron-right"></i></span>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item border-0">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-lg bg-info rounded-circle me-2">
                                                AM
                                            </div>
                                            <div class="chat-user-info">                                            
                                                <h6>AM Technology</h6>
                                                <p>Roper, Deborah, David, <span class="text-primary">More..
                                                    
                                                    
                                                    .</span></p>
                                            </div>
                                        </div>
                                        <span class="link-icon"><i class="ti ti-chevron-right"></i></span>
                                    </a>
                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="view-all link-primary d-inline-flex align-items-center justify-content-center">
                                            More Groups<i class="ti ti-arrow-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-wrapper other-info mb-0">
                            <h5 class="sub-title">Others</h5>
                            <div class="card mb-0">
                                <div class="card-body list-group profile-item">
                                    <a href="javascript:void(0);" class="list-group-item" data-bs-toggle="offcanvas" data-bs-target="#contact-favourite">
                                        <div class="profile-info">
                                            <h6><i class="ti ti-graph me-2 text-default"></i>Favorites</h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="badge badge-danger count-message me-1">12</span>
                                            <span class="link-icon"><i class="ti ti-chevron-right"></i></span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="profile-info">
                                            <h6><i class="ti ti-volume-off me-2 text-warning"></i>Mute Notifications</h6>
                                        </div>
                                        <div>
                                            <span class="link-icon"><i class="ti ti-chevron-right"></i></span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="profile-info">
                                            <h6><i class="ti ti-user-off me-2 text-info"></i>Block Users</h6>
                                        </div>
                                        <div>
                                            <span class="link-icon"><i class="ti ti-chevron-right"></i></span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="profile-info">
                                            <h6><i class="ti ti-user-x me-2 text-purple"></i>Report Users</h6>
                                        </div>
                                        <div>
                                            <span class="link-icon"><i class="ti ti-chevron-right"></i></span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-chat" class="list-group-item">
                                        <div class="profile-info">
                                            <h6><i class="ti ti-trash me-2 text-danger"></i>Delete Chat</h6>
                                        </div>
                                        <div>
                                            <span class="link-icon"><i class="ti ti-chevron-right"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Contact Info -->

        <!-- Favourites Info -->
        <div class="chat-offcanvas fav-canvas offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="contact-favourite">
            <div class="offcanvas-header">
                <h4 class="offcanvas-title"><a href="javascript:void(0);"  data-bs-toggle="offcanvas" data-bs-target="#contact-profile"  data-bs-dismiss="offcanvas"><i class="ti ti-arrow-left me-2"></i></a>Favourites</h4>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x"></i></button>
            </div>
            <div class="offcanvas-body">
                <div class="favourite-chats">
                    <div class="text-end mb-4">
                        <a href="javascript:void(0);" class="btn btn-light"><i class="ti ti-heart-minus me-2"></i>Mark all Unfavourite</a>
                    </div>
                    <div class="chats">
                        <div class="chat-avatar">
                            <img src="{{ asset('build/img/profiles/avatar-06.jpg') }}" class="rounded-circle" alt="image">
                        </div>
                        <div class="chat-content">
                            <div class="chat-profile-name">
                                <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39 PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
                            </div>
                            <div class="chat-info">
                                <div class="message-content">
                                    Thanks!!!, I ll Update you Once i check the Examples 
                                </div>                          
                                <div class="chat-actions">
                                    <a class="#" href="#" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Unfavourite</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    </ul>
                                </div> 
                            </div>
                            <p>Saved on 23 Septemer 2024</p>          
                        </div>
                    </div>
                    <div class="chats">
                        <div class="chat-avatar">
                            <img src="{{ asset('build/img/profiles/avatar-04.jpg') }}" class="rounded-circle" alt="image">
                        </div>
                        <div class="chat-content">
                            <div class="chat-profile-name">
                                <h6>Carla Jenkins<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:45 PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
                            </div>
                            <div class="chat-info">
                                <div class="message-content bg-transparent p-0">
                                    <div class="message-audio">
                                        <audio controls>
                                            <source src="{{ asset('build/img/audio/audio.mp3') }}" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                    </div> 						                                       
                                </div>                                 
                                <div class="chat-actions">
                                    <a class="#" href="#" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Unfavourite</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    </ul>
                                </div> 
                            </div>
                            <p>Saved on 26 Septemer 2024</p>   
                        </div>
                    </div>
                </div>       
            </div>
        </div>
        <!-- /Favourites Info -->

        <!-- Mute -->
        <div class="modal fade" id="mute-notification">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Mute Notifications
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="https://dreamschat.dreamstechnologies.com/laravel/template/public/chat">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="mute" id="mute1">
                                <label class="form-check-label" for="mute1">30 Minutes</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="mute" id="mute2">
                                <label class="form-check-label" for="mute2">1 Hour</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="mute" id="mute3">
                                <label class="form-check-label" for="mute3">1 Day</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="mute" id="mute4">
                                <label class="form-check-label" for="mute4">1 Week</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="mute" id="mute5">
                                <label class="form-check-label" for="mute5">1 Month</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="mute" id="mute6">
                                <label class="form-check-label" for="mute6">1 Year</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="mute" id="mute7">
                                <label class="form-check-label" for="mute7">Always</label>
                            </div>
                            <div class="row g-3">       
                                <div class="col-6">                  
                                    <a href="#" class="btn btn-outline-primary w-100" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>     
                                <div class="col-6">      
                                    <button type="submit" class="btn btn-primary w-100">Mute</button>
                                </div> 
                            </div>
                        </form>
                    </div>       
                </div>
            </div>
        </div>
        <!-- /Mute -->

        {{-- Add Call --}}

        <!-- Delete -->
        <div class="modal fade" id="message-delete">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Delete Chat
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="https://dreamschat.dreamstechnologies.com/laravel/template/public/chat">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" checked name="delete-chat" id="delete-for-me">
                                <label class="form-check-label" for="delete-for-me">Delete For Me</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="delete-chat" id="delete-for-everyone">
                                <label class="form-check-label" for="delete-for-everyone">Delete For Everyone</label>
                            </div>
                            <div class="row g-3">       
                                <div class="col-6">                  
                                    <a href="#" class="btn btn-outline-primary w-100" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>     
                                <div class="col-6">      
                                    <button type="submit" class="btn btn-primary w-100">Delete</button>
                                </div> 
                            </div>
                        </form>
                    </div>       
                </div>
            </div>
        </div>
        <!-- /Delete -->

        <!-- Block User -->
        <div class="modal fade" id="block-user">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Block User</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="https://dreamschat.dreamstechnologies.com/laravel/template/public/chat">
                            <div class="block-wrap text-center mb-3">
                                <span class="user-icon mb-3 mx-auto bg-transparent-info">
                                    <i class="ti ti-user-off text-info"></i>
                                </span>
                                <p class="text-grya-9">Blocked contacts will no longer be able to call you or send you messages.</p>
                            </div>
                            <div class="row g-3">       
                                <div class="col-6">                  
                                    <a href="#" class="btn btn-outline-primary w-100" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>     
                                <div class="col-6">      
                                    <button type="submit" class="btn btn-primary w-100">Block</button>
                                </div> 
                            </div>
                        </form>
                    </div>       
                </div>
            </div>
        </div>
        <!-- /Block User -->

        <!-- Report User -->
        <div class="modal fade" id="report-user">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Report User</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="https://dreamschat.dreamstechnologies.com/laravel/template/public/chat">
                            <div class="block-wrap mb-3">
                                <p class="text-grya-9 mb-3">If you block this contact and clear the chat, messages will only be removed from this device and your devices on the newer versions of DreamsChat</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="mute" id="report">
                                    <label class="form-check-label" for="report">Report User</label>
                                </div>
                            </div>
                            <div class="row g-3">       
                                <div class="col-6">                  
                                    <a href="#" class="btn btn-outline-primary w-100" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>     
                                <div class="col-6">      
                                    <button type="submit" class="btn btn-primary w-100">Report</button>
                                </div> 
                            </div>
                        </form>
                    </div>       
                </div>
            </div>
        </div>
        <!-- /Report User -->

        <!-- Delete Chat -->
        <div class="modal fade" id="delete-chat">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Chat</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="https://dreamschat.dreamstechnologies.com/laravel/template/public/chat">
                            <div class="block-wrap text-center mb-3">
                                <span class="user-icon mb-3 mx-auto bg-transparent-danger">
                                    <i class="ti ti-trash text-danger"></i>
                                </span>
                                <p class="text-grya-9">Clearing or deleting entire chats will only remove messages from this device and your devices on the newer versions of DreamsChat.</p>
                            </div>
                            <div class="row g-3">       
                                <div class="col-6">                  
                                    <a href="#" class="btn btn-outline-primary w-100" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>     
                                <div class="col-6">      
                                    <button type="submit" class="btn btn-primary w-100">Delete</button>
                                </div> 
                            </div>
                        </form>
                    </div>       
                </div>
            </div>
        </div>
        <!-- /Delete Chat -->

        <!-- New Chat -->
        <div class="modal fade" id="new-chat">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New Chat</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="https://dreamschat.dreamstechnologies.com/laravel/template/public/chat">
                            <div class="search-wrap contact-search mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <a href="javascript:void(0);" class="input-group-text"><i class="ti ti-search"></i></a>
                                </div>
                            </div>
                            <h6 class="mb-3 fw-medium fs-16">Contacts</h6>
                            <div class="contact-scroll contact-select mb-3">
                                <div class="contact-user d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg">
                                            <img src="{{ asset('build/img/profiles/avatar-01.jpg') }}" class="rounded-circle" alt="image">
                                        </div>
                                        <div class="ms-2">
                                            <h6>Aaryian Jose</h6>
                                            <p>App Developer</p>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="contact">
                                    </div>                                       
                                </div>
                                <div class="contact-user d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg">
                                            <img src="{{ asset('build/img/profiles/avatar-02.jpg') }}" class="rounded-circle" alt="image">
                                        </div>
                                        <div class="ms-2">
                                            <h6>Sarika Jain</h6>
                                            <p>UI/UX Designer</p>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="contact">
                                    </div>                                       
                                </div>
                                <div class="contact-user d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg">
                                            <img src="{{ asset('build/img/profiles/avatar-03.jpg') }}" class="rounded-circle" alt="image">
                                        </div>
                                        <div class="ms-2">
                                            <h6>Clyde Smith</h6>
                                            <p>Web Developer</p>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="contact">
                                    </div>                                       
                                </div>
                                <div class="contact-user d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg">
                                            <img src="{{ asset('build/img/profiles/avatar-04.jpg') }}" class="rounded-circle" alt="image">
                                        </div>
                                        <div class="ms-2">
                                            <h6>Carla Jenkins</h6>
                                            <p>Business Analyst</p>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="contact">
                                    </div>                                       
                                </div>
                            </div>
                            <div class="row g-3">       
                                <div class="col-6">                  
                                    <a href="#" class="btn btn-outline-primary w-100" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>     
                                <div class="col-6">      
                                    <button type="submit" class="btn btn-primary w-100">Start Chat</button>
                                </div> 
                            </div>
                        </form>
                    </div>       
                </div>
            </div>
        </div>
        <!-- /New Chat -->            

        <!-- Add Contact -->
        <div class="modal fade" id="add-contact">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Contact</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="https://dreamschat.dreamstechnologies.com/laravel/template/public/chat">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <div class="input-icon position-relative">
                                            <input type="text" class="form-control">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <div class="input-icon position-relative">
                                            <input type="text" class="form-control">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <div class="input-icon position-relative">
                                            <input type="text" class="form-control">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-mail"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <div class="input-icon position-relative">
                                            <input type="text" class="form-control">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-phone"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Date of Birth</label>
                                        <div class="input-icon position-relative">
                                            <input type="text" class="form-control">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar-event"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Website Address</label>
                                        <div class="input-icon position-relative">
                                            <input type="text" class="form-control">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-globe"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card border">
                                        <div class="card-header border-bottom">
                                            <h6>Social Information</h6>
                                        </div>
                                        <div class="card-body pb-1">
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <label class="form-label text-default fw-normal mb-3">Facebook</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="input-icon position-relative mb-3">
                                                        <input type="text" class="form-control">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-brand-facebook"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label text-default fw-normal mb-3">Twitter</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="input-icon position-relative mb-3">
                                                        <input type="text" class="form-control">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-brand-twitter"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-labe text-default fw-normall mb-3">Instagram</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="input-icon position-relative mb-3">
                                                        <input type="text" class="form-control">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-brand-instagram"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label text-default fw-normal mb-3">Linked in</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="input-icon position-relative mb-3">
                                                        <input type="text" class="form-control">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-brand-linkedin"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label text-default fw-normal mb-3">YouTube</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="input-icon position-relative mb-3">
                                                        <input type="text" class="form-control">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-brand-youtube"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">       
                                <div class="col-6">                  
                                    <a href="#" class="btn btn-outline-primary w-100" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>     
                                <div class="col-6">      
                                    <button type="submit" class="btn btn-primary w-100">Add Contact</button>
                                </div> 
                            </div>
                        </form>
                    </div>       
                </div>
            </div>
        </div>
        <!-- /Add Contact -->

        <!-- Contact Detail -->
        <div class="modal fade" id="contact-details">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Contact Detail</h4>
                        <div class="d-flex align-items-center">
                            <div class="dropdown me-2">
                                <a class="d-block" href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-share-3 me-2"></i>Share</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-edit me-2"></i>Edit</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#block-user"><i class="ti ti-ban me-2"></i>Block</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="ti ti-x"></i>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="card bg-light shadow-none">
                            <div class="card-body pb-1">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="avatar avatar-lg">
                                            <img src="{{ asset('build/img/profiles/avatar-01.jpg') }}" class="rounded-circle" alt="img">
                                        </span>
                                        <div class="ms-2">
                                            <h6>Aaryian Jose</h6>
                                            <p>App Developer</p>
                                        </div>
                                    </div>
                                    <div class="contact-actions d-flex align-items-center mb-3">
                                        <a href="chat.html" class="me-2"><i class="ti ti-message"></i></a>
                                        <a href="javascript:void(0);" class="me-2" data-bs-toggle="modal" data-bs-target="#voice_call"><i class="ti ti-phone"></i></a>
                                        <a href="javascript:void(0);" class="me-2"><i class="ti ti-video"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border mb-3">
                            <div class="card-header border-bottom">
                                <h6>Personal Information</h6>
                            </div>
                            <div class="card-body pb-1">
                                <div class="mb-2">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6">
                                            <p class="mb-2 d-flex align-items-center"><i class="ti ti-clock-hour-4 me-1"></i>Local Time</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="fw-medium fs-14 mb-2">10:00 AM</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="mb-2 d-flex align-items-center"><i class="ti ti-calendar-event me-1"></i>Date of Birth</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="fw-medium fs-14 mb-2">22 July 2024</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="mb-2 d-flex align-items-center"><i class="ti ti-phone me-1"></i>Phone Number</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="fw-medium fs-14 mb-2">+20-482-038-29</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="mb-2 d-flex align-items-center"><i class="ti ti-mail me-1"></i>Email</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="fw-medium fs-14 mb-2"><a href="https://dreamschat.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="056464776c7c646b45607d64687569602b666a68">[email&#160;protected]</a></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="mb-2 d-flex align-items-center"><i class="ti ti-globe me-1"></i>Website Address</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="fw-medium fs-14 mb-2">www.examplewebsite.com</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="card border mb-0">
                            <div class="card-header border-bottom">
                                <h6>Social Information</h6>
                            </div>
                            <div class="card-body pb-1">
                                <div class="mb-2">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6">
                                            <p class="mb-2 d-flex align-items-center"><i class="ti ti-brand-facebook me-1"></i>Facebook</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="fw-medium fs-14 mb-2">www.facebook.com</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="mb-2 d-flex align-items-center"><i class="ti ti-brand-twitter me-1"></i>Twitter</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="fw-medium fs-14 mb-2">www.twitter.com</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="mb-2 d-flex align-items-center"><i class="ti ti-brand-instagram me-1"></i>Instagram</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="fw-medium fs-14 mb-2">www.instagram.com</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="mb-2 d-flex align-items-center"><i class="ti ti-brand-linkedin me-1"></i>Linkedin</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="fw-medium fs-14 mb-2">www.linkedin.com</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="mb-2 d-flex align-items-center"><i class="ti ti-brand-youtube me-1"></i>YouTube</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="fw-medium fs-14 mb-2">www.youtube.com</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>     
                    </div>       
                </div>
            </div>
        </div>
        <!-- /Contact Detail -->

        {{-- Voice Call --}}

        {{-- Video Call --}}

        <!-- Invite -->
        <div class="modal fade" id="invite">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Invite Others</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="form-label">Email Address or Phone Number</label>
                                    <div class="input-icon mb-3 position-relative">                                           
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label">Invitation Message</label>
                                    <textarea class="form-control mb-3"></textarea>
                                </div>
                            </div>
                            <div class="row g-3">       
                                <div class="col-6">                  
                                    <a href="#" class="btn btn-outline-primary w-100" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>     
                                <div class="col-6">      
                                    <button  class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#new-chat">Send Invitation</button>
                                </div> 
                            </div>
                        </form>
                    </div>       
                </div>
            </div>
        </div>
        <!-- /Invite -->

        <!-- Mute User -->
        <div class="modal fade" id="mute-user">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Muted User</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">        
                        <form action="https://dreamschat.dreamstechnologies.com/laravel/template/public/index">
                            <div class="link-item mb-3">
                                <input type="text" class="form-control border-0" placeholder="Search For Muted Users ">
                                <span class="input-group-text"><i class="ti ti-search"></i></span>
                            </div>
                            <h6 class="mb-3 fs-16">Muted User</h6>
                            <div class="mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-lg me-2">
                                                    <img src="{{ asset('build/img/profiles/avatar-01.jpg') }}" class="rounded-circle" alt="">
                                                </span>
                                                <div>
                                                    <h6>Aaryian Jose</h6>
                                                    <span class="fs-14">App Developer</span>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-outline-primary">Unmute</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-lg me-2">
                                                    <img src="{{ asset('build/img/profiles/avatar-02.jpg') }}" class="rounded-circle" alt="">
                                                </span>
                                                <div>
                                                    <h6>Sarika Jain</h6>
                                                    <span class="fs-14">UI/UX Designer</span>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-outline-primary">Unmute</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-lg me-2">
                                                    <img src="{{ asset('build/img/profiles/avatar-03.jpg') }}" class="rounded-circle" alt="">
                                                </span>
                                                <div>
                                                    <h6>Clyde Smith</h6>
                                                    <span class="fs-14">Web Developer</span>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-outline-primary">Unmute</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-lg me-2">
                                                    <img src="{{ asset('build/img/profiles/avatar-04.jpg') }}" class="rounded-circle" alt="">
                                                </span>
                                                <div>
                                                    <h6>Carla Jenkins</h6>
                                                    <span class="fs-14">Business Analyst</span>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-outline-primary">Unmute</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>       
                </div>
            </div>
        </div>
        <!-- /Mute User -->            

        <!-- Delete  Account -->
        <div class="modal fade" id="delete-account">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Account</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="https://dreamschat.dreamstechnologies.com/laravel/template/public/index">
                            <div class="block-wrap mb-3">
                                <h6 class="fs-16">Are you sure you want to delete your account? </h6>
                                <p class="text-grya-9">
                                    This action is irreversible and all your data will be permanently deleted.
                                </p>
                            </div>
                            <div class="mb-3">
                                <ul>
                                    <li class="d-flex align-items-center fs-16 mb-2">
                                        <i class="ti ti-arrow-badge-right me-2 fs-20 text-primary"></i>
                                        Delete your account info and profile photo
                                    </li>
                                    <li class="d-flex align-items-center fs-16 mb-2">
                                        <i class="ti ti-arrow-badge-right me-2 fs-20 text-primary"></i>
                                        Delete you from all dreamschat groups   
                                    </li>
                                    <li class="d-flex fs-16 mb-2">
                                        <i class="ti ti-arrow-badge-right me-2 fs-20 text-primary"></i>
                                        Delete your message history on this phone and your icloud backup
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex mb-3"> 
                                <div>
                                    <input type="checkbox" class="me-2">
                                </div>
                                <div>
                                    <p class="text-grya-9">
                                        I understand that deleting my account is irreversible and all my data will be permanently deleted.
                                    </p>
                                </div>
                            </div>
                            <div class="row g-3">       
                                <div class="col-6">                  
                                    <a href="#" class="btn btn-outline-primary w-100" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>     
                                <div class="col-6">      
                                    <button type="submit" class="btn btn-primary w-100">Delete</button>
                                </div> 
                            </div>
                        </form>
                    </div>       
                </div>
            </div>
        </div>
        <!-- /Delete Account -->

        <!-- Logout -->
        <div class="modal fade" id="acc-logout">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Logout</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="https://dreamschat.dreamstechnologies.com/laravel/template/public/index">
                            <div class="block-wrap text-center mb-3">
                                <span class="user-icon mb-3 mx-auto bg-transparent-danger">
                                    <i class="ti ti-logout text-danger"></i>
                                </span>
                                <p class="text-grya-9">Are you sure you want to logout? </p>
                            </div>
                            <div class="row g-3">       
                                <div class="col-6">                  
                                    <a href="#" class="btn btn-outline-primary w-100" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>     
                                <div class="col-6">      
                                    <button type="submit" class="btn btn-primary w-100">Logout</button>
                                </div> 
                            </div>
                        </form>
                    </div>       
                </div>
            </div>
        </div>
        <!-- /Logout -->

    </div>
    <!-- /Content -->
</div>
<!-- /Main Wrapper -->

{{-- Footer Inclusion --}}
@include('layouts.footer')