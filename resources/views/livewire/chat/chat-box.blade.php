<!-- Chat -->
<div class="chat chat-messages show" id="middle">
    <div>
        {{-- Chat Header --}}
        <div class="chat-header">
            <div class="user-details">
                <div class="d-xl-none">
                    <a class="text-muted chat-close me-2" href="#">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>
                <div class="avatar avatar-lg online flex-shrink-0">
                    <img src="{{ asset('build/img/profiles/avatar-06.jpg') }}" class="rounded-circle" alt="image">
                </div>
                <div class="ms-2 overflow-hidden">
                    <h6>Edward Lietz</h6>
                    <span class="last-seen">Online</span>
                </div>
            </div>
            <div class="chat-options">
                <ul>
                    <li>
                        <a href="javascript:void(0)" class="btn chat-search-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search">
                            <i class="ti ti-search" ></i>
                        </a>
                    </li>
                    <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="Video Call">
                        <a href="javascript:void(0)" class="btn" data-bs-toggle="modal" data-bs-target="#video-call">
                            <i class="ti ti-video" ></i>
                        </a>
                    </li>
                    <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="Voice Call">
                        <a href="javascript:void(0)" class="btn" data-bs-toggle="modal" data-bs-target="#voice_call">
                            <i class="ti ti-phone" ></i>
                        </a>
                    </li>
                    <li  title="Contact Info" data-bs-toggle="tooltip" data-bs-placement="bottom">
                        <a href="javascript:void(0)" class="btn" data-bs-toggle="offcanvas" data-bs-target="#contact-profile">
                            <i class="ti ti-info-circle" ></i>
                        </a>
                    </li>
                    <li>
                        <a class="btn no-bg" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical" ></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a href="index-2.html" class="dropdown-item"><i class="ti ti-x me-2"></i>Close Chat</a></li>
                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#mute-notification"><i class="ti ti-volume-off me-2"></i>Mute Notification</a></li>
                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#disappearing-messages"><i class="ti ti-clock-hour-4 me-2"></i>Disappearing Message</a></li>
                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#clear-chat"><i class="ti ti-clear-all me-2"></i>Clear Message</a></li>
                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-chat"><i class="ti ti-trash me-2"></i>Delete Chat</a></li>
                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#report-user"><i class="ti ti-thumb-down me-2"></i>Report</a></li>
                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#block-user"><i class="ti ti-ban me-2"></i>Block</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Chat Search -->
            <div class="chat-search search-wrap contact-search">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Contacts">
                        <span class="input-group-text"><i class="ti ti-search"></i></span>
                    </div>
                </form>
            </div>
            <!-- /Chat Search -->
        </div>
        {{-- End Chat Header --}}
        
        <div class="chat-body chat-page-group slimscroll">
            <div class="messages">
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
                                Hi there! I'm interested in your services. 
                                <div class="emoj-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-03.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-10.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-09.svg') }}"  alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chat-actions">
                                <a class="#" href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li><a class="dropdown-item reply-btn" href="#"><i class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                </ul>
                            </div>   
                        </div>
                        <div class="chat-profile-name">
                            <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39 PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
                        </div>
                        <div class="chat-info">
                            <div class="message-content">
                                Can you tell me more about what you offer?, Can you explain it breifly...
                                <div class="emoj-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-03.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-10.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-09.svg') }}"  alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chat-actions">
                                <a class="#" href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li><a class="dropdown-item reply-btn"  href="#"><i class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                </ul>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="chats chats-right">
                    <div class="chat-content">
                        <div class="chat-profile-name text-end">
                            <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39 PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>                                        
                        </div>
                        <div class="chat-info">
                            <div class="chat-actions">
                                <a class="#" href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li><a class="dropdown-item reply-btn" href="#"><i class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                </ul>
                            </div>   
                            <div class="message-content">
                                Hello! Absolutely, we provide a range of services tailored to meet various business needs. Could you specify what you're looking for?  
                                <div class="emoj-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-03.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-10.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-09.svg') }}"  alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                    </ul>
                                </div>                                           
                            </div>   
                        </div>
                        <div class="emonji-wrap">
                            <a href="javascript:void(0);"><img src="{{ asset('build/img/icons/emonji-02.svg') }}" class="me-2" alt="icon">24</a>
                            <a href="javascript:void(0);"><img src="{{ asset('build/img/icons/emonji-03.svg') }}" class="me-2" alt="icon">15</a>
                            <a href="javascript:void(0);"><img src="{{ asset('build/img/icons/emonji-04.svg') }}" class="me-2" alt="icon">15</a>
                        </div>
                    </div>
                    <div class="chat-avatar">
                        <img src="{{ asset('build/img/profiles/avatar-17.jpg') }}" class="rounded-circle dreams_chat" alt="image">
                    </div>
                </div>                            
                <div class="chat-line">
                    <span class="chat-date">Today, July 24</span>
                </div>
                <div class="chats">
                    <div class="chat-avatar">
                        <img src="{{ asset('build/img/profiles/avatar-02.jpg') }}" class="rounded-circle dreams_chat" alt="image">
                    </div>
                    <div class="chat-content">
                        <div class="chat-profile-name">
                            <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39 PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
                        </div>
                        <div class="message-content bg-transparent p-0">
                            <div class="message-audio">
                                <audio controls>
                                    <source src="{{ asset('build/img/audio/audio.mp3') }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div> 						                                       
                        </div>
                    </div>
                </div>
                <div class="chats chats-right">
                    <div class="chat-content">
                        <div class="chat-profile-name justify-content-end">
                            <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39 PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>                                        
                        </div>
                        <div class="message-content">
                            <div class="file-attach">
                                <span class="file-icon">
                                    <i class="ti ti-files"></i>
                                </span>
                                <div class="ms-2 overflow-hidden">
                                    <h6 class="mb-1">Ecommerce.zip</h6>
                                    <p>14.23 KB</p>
                                </div>
                                <a href="javascript:void(0);" class="download-icon">
                                    <i class="ti ti-download"></i>
                                </a>
                            </div>
                            <div class="emoj-group wrap-emoji-group ">
                                <ul>
                                    <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                        <div class="emoj-group-list">
                                            <ul>
                                                <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                </ul>
                            </div>                                       
                        </div>
                    </div>
                    <div class="chat-avatar">
                        <img src="{{ asset('build/img/profiles/avatar-17.jpg') }}" class="rounded-circle dreams_chat" alt="image">
                    </div>
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
                                Hi there! I'm interested in learning more
                                <div class="emoj-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-03.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-10.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-09.svg') }}"  alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                    </ul>
                                </div>
                            </div>                                        
                            <div class="chat-actions">
                                <a class="#" href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li><a class="dropdown-item reply-btn" href="#"><i class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                </ul>
                            </div> 
                        </div>
                        <div class="emonji-wrap">
                            <a href="javascript:void(0);"><img src="{{ asset('build/img/icons/emonji-02.svg') }}" class="me-2" alt="icon">24</a>
                            <a href="javascript:void(0);"><img src="{{ asset('build/img/icons/emonji-03.svg') }}" class="me-2" alt="icon">15</a>
                            <a href="javascript:void(0);"><img src="{{ asset('build/img/icons/emonji-04.svg') }}" class="me-2" alt="icon">15</a>
                        </div>
                    </div>
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
                                <div class="chat-img">
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
                                <a class="gallery-img view-all d-flex align-items-center justify-content-center mt-3" href="build/img/gallery/gallery-05.jpg" data-fancybox="gallery-img">
                                    View All Images<i class="ti ti-arrow-right ms-2"></i>
                                </a>
                                <div class="emoj-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-03.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-10.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-09.svg') }}"  alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chat-actions">
                                <a class="#" href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li><a class="dropdown-item reply-btn" href="#"><i class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                </ul>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="chats chats-right">
                    <div class="chat-content">
                        <div class="chat-profile-name text-end">
                            <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39 PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6> 
                        </div>
                        <div class="chat-info">
                            <div class="chat-actions">
                                <a class="#" href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li><a class="dropdown-item reply-btn" href="#"><i class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                </ul>
                            </div>   
                            <div class="message-content">
                                Send me your Profile Video if Any??   
                                <div class="emoj-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-03.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-10.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-09.svg') }}"  alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                    </ul>
                                </div>                                    
                            </div>   
                        </div>
                    </div>
                    <div class="chat-avatar">
                        <img src="{{ asset('build/img/profiles/avatar-17.jpg') }}" class="rounded-circle dreams_chat" alt="image">
                    </div>
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
                                <div class="message-link">
                                    <div class="link-img">
                                        <img src="{{ asset('build/img/icons/github.svg') }}"  alt="Icon">
                                    </div>
                                    <a href="javascript:void(0);" class="link-primary mt-2">https://segmentfault.com/u/guanguans/articles</a>
                                </div>
                                <div class="emoj-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-03.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-10.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-09.svg') }}"  alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chat-actions">
                                <a class="#" href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li><a class="dropdown-item reply-btn" href="#"><i class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                </ul>
                            </div> 
                        </div>
                    </div>
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
                                <div class="chat-forward">
                                    <div class="forward-text text-primary"><i class="ti ti-arrow-forward me-2"></i>Forward</div>
                                </div>
                                <div class="file-attach">
                                    <span class="file-icon">
                                        <i class="ti ti-files"></i>
                                    </span>
                                    <div class="ms-2 overflow-hidden">
                                        <h6 class="mb-1">Ecommerce.zip</h6>
                                        <p>14.23 KB</p>
                                    </div>
                                    <a href="javascript:void(0);" class="download-icon">
                                        <i class="ti ti-download"></i>
                                    </a>
                                </div>
                                <div class="emoj-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-03.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-10.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-09.svg') }}"  alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                    </ul>
                                </div>
                            </div>                                    
                            <div class="chat-actions">
                                <a class="#" href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li><a class="dropdown-item reply-btn" href="#"><i class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="chats chats-right">
                    <div class="chat-content">
                        <div class="chat-profile-name text-end">
                            <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39 PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6> 
                        </div>
                        <div class="chat-info">
                            <div class="chat-actions">
                                <a class="#" href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li><a class="dropdown-item reply-btn" href="#"><i class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                </ul>
                            </div>   
                            <div class="message-content">
                                Send me your Profile Video if Any??                                              
                                <div class="emoj-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-03.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-10.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-09.svg') }}"  alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                    </ul>
                                </div>                          
                            </div>   
                        </div>
                    </div>
                    <div class="chat-avatar">
                        <img src="{{ asset('build/img/profiles/avatar-17.jpg') }}" class="rounded-circle dreams_chat" alt="image">
                    </div>
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
                                <div class="message-video">
                                    <video width="400" controls>
                                        <source src="{{ asset('build/img/video/video.mp4') }}" type="video/mp4">
                                        Your browser does not support HTML5 video.
                                    </video>
                                </div>
                                <div class="emoj-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-03.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-10.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-09.svg') }}"  alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                    </ul>
                                </div>
                            </div>                                    
                            <div class="chat-actions">
                                <a class="#" href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li><a class="dropdown-item reply-btn" href="#"><i class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                </div>                           
                <div class="chats chats-right">
                    <div class="chat-content">
                        <div class="chat-profile-name text-end">
                            <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39 PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6> 
                        </div>
                        <div class="chat-info">
                            <div class="chat-actions">
                                <a class="#" href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li><a class="dropdown-item reply-btn"  href="#"><i class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                </ul>
                            </div>   
                            <div class="message-content">
                                Thanks for Sharing!!! Can we have a call  
                                <div class="emoj-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-03.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-10.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-09.svg') }}"  alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                    </ul>
                                </div>                                    
                            </div>   
                        </div>
                    </div>
                    <div class="chat-avatar">
                        <img src="{{ asset('build/img/profiles/avatar-17.jpg') }}" class="rounded-circle dreams_chat" alt="image">
                    </div>
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
                                <div class="chat-profile-name">
                                    <h6>You</h6>
                                </div>
                                <div class="message-reply">
                                    Thanks for Sharing!!! Can we have a call??
                                </div>
                                Yes Please
                                <div class="emoj-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-03.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-10.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-09.svg') }}"  alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                    </ul>
                                </div>
                            </div>                                    
                            <div class="chat-actions">
                                <a class="#" href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li><a class="dropdown-item reply-btn" href="#"><i class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                </ul>
                            </div> 
                        </div>
                    </div>
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
                                <div class="file-attach">
                                    <div class="d-flex align-items-center">
                                        <span class="file-icon bg-danger text-white">
                                            <i class="ti ti-phone-call"></i>
                                        </span>
                                        <div class="ms-2 overflow-hidden">
                                            <h6 class="mb-1 text-truncate">Missed Audio Call</h6>
                                            <p>10 Min 23 Sec</p>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="download-icon">
                                        <i class="ti ti-download"></i>
                                    </a>
                                </div>      
                                <div class="emoj-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-03.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-10.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-09.svg') }}"  alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                    </ul>
                                </div>
                            </div>                                    
                            <div class="chat-actions">
                                <a class="#" href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li><a class="dropdown-item reply-btn"  href="#"><i class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                </div>                           
                <div class="chats chats-right">
                    <div class="chat-content">
                        <div class="chat-profile-name text-end">
                            <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39 PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6> 
                        </div>
                        <div class="chat-info">
                            <div class="chat-actions">
                                <a class="#" href="#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li><a class="dropdown-item reply-btn"  href="#"><i class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                </ul>
                            </div>   
                            <div class="message-content">
                                <div class="file-attach">
                                    <span class="file-icon bg-success text-white">
                                        <i class="ti ti-phone-incoming"></i>
                                    </span>
                                    <div class="ms-2 overflow-hidden">
                                        <h6 class="mb-1">Audio Call Ended</h6>
                                        <p>07 Min 34 Sec</p>
                                    </div>
                                    <a href="javascript:void(0);" class="download-icon">
                                        <i class="ti ti-download"></i>
                                    </a>
                                </div>  
                                <div class="emoj-group">
                                    <ul>
                                        <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                            <div class="emoj-group-list">
                                                <ul>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-03.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-10.svg') }}"  alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-09.svg') }}"  alt="Icon"></a></li>
                                                    <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                    </ul>
                                </div>                           
                            </div>   
                        </div>
                    </div>
                    <div class="chat-avatar">
                        <img src="{{ asset('build/img/profiles/avatar-17.jpg') }}" class="rounded-circle dreams_chat" alt="image">
                    </div>
                </div>  
                <div class="chats">
                    <div class="chat-avatar">
                        <img src="{{ asset('build/img/profiles/avatar-06.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                    <div class="chat-content">
                        <div class="chat-profile-name">
                            <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39 PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
                        </div>
                        <div class="message-content">
                            <span class="animate-typing">is typing
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                </span>
                            <div class="emoj-group">
                                <ul>
                                    <li class="emoj-action"><a href="javascript:void(0);"  ><i class="ti ti-mood-smile"></i></a>
                                        <div class="emoj-group-list">
                                            <ul>
                                                <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                                                <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                                                <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                                                <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                                                <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                                                <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>                       
            
            </div>
        </div>
    </div>
    <div class="chat-footer">
        <form class="footer-form">
            <div class="chats reply-chat reply-div" id="reply-div">
                <div class="chat-avatar">
                    <img src="{{ asset('build/img/profiles/avatar-06.jpg') }}" class="rounded-circle" alt="image">
                </div>
                <div class="chat-content">
                    <div class="chat-profile-name">
                        <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39 PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
                    </div>
                    <div class="chat-info">
                        <div class="message-content">
                            <div class="message-reply reply-content">
                                Thank you for your support
                            </div>
                        </div>    
                    </div>
                </div>
                <a href="#" class="close-replay">
                    <i class="ti ti-x"></i>
                </a>
            </div>
            <div class="chat-footer-wrap">
                <div class="form-item">
                    <a href="#"  class="action-circle"><i class="ti ti-microphone"></i></a>
                </div>
                <div class="form-wrap">
                    <input type="text" class="form-control" placeholder="Type Your Message">
                </div>
                <div class="form-item emoj-action-foot">
                    <a href="#" class="action-circle"><i class="ti ti-mood-smile"></i></a>
                    <div class="emoj-group-list-foot down-emoji-circle">
                        <ul>
                            <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-02.svg') }}"  alt="Icon"></a></li>
                            <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-05.svg') }}"  alt="Icon"></a></li>
                            <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-06.svg') }}"  alt="Icon"></a></li>
                            <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-07.svg') }}"  alt="Icon"></a></li>
                            <li><a href="javascript:void(0);" ><img src="{{ asset('build/img/icons/emonji-08.svg') }}"  alt="Icon"></a></li>
                            <li class="add-emoj"><a href="javascript:void(0);" ><i class="ti ti-plus"></i></a></li>
                        </ul>
                    </div>
                </div>                            
                <div class="form-item position-relative d-flex align-items-center justify-content-center ">
                    <a href="#" class="action-circle file-action position-absolute">
                        <i class="ti ti-folder"></i>
                    </a>
                    <input type="file" class="open-file position-relative" name="files" id="files">
                </div>
                <div class="form-item">
                    <a href="#" data-bs-toggle="dropdown">
                        <i class="ti ti-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end p-3" >
                        <a href="#" class="dropdown-item"><i class="ti ti-camera-selfie me-2"></i>Camera</a>
                        <a href="#" class="dropdown-item"><i class="ti ti-photo-up me-2"></i>Gallery</a>
                        <a href="#" class="dropdown-item" ><i class="ti ti-music me-2"></i>Audio</a>
                        <a href="#" class="dropdown-item"><i class="ti ti-map-pin-share me-2"></i>Location</a>
                        <a href="#" class="dropdown-item" ><i class="ti ti-user-check me-2"></i>Contact</a>
                    </div>
                </div>
                <div class="form-btn">
                    <button class="btn btn-primary" type="submit">
                        <i class="ti ti-send"></i>
                    </button>
                </div>
            </div>                        
        </form>
    </div>
</div>
<!-- /Chat -->