<!-- Add Call -->
<div class="modal fade" id="new-call">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New Call</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="https://dreamschat.dreamstechnologies.com/laravel/template/public/all-calls">
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
                                    <img src="{{ asset('build/img/profiles/avatar-06.jpg') }}" class="rounded-circle" alt="image">
                                </div>
                                <div class="ms-2">
                                    <h6>Edward Lietz</h6>
                                    <p>App Developer</p>
                                </div>
                            </div>
                            <div class="d-inline-flex">
                                <a href="#" class="model-icon bg-light d-flex justify-content-center align-items-center rounded-circle me-2" data-bs-toggle="modal" data-bs-target="#voice_call"><span><i class="ti ti-phone"></i></span></a>
                                <a href="#" class="model-icon bg-light d-flex justify-content-center align-items-center rounded-circle" data-bs-toggle="modal" data-bs-target="#video-call"><span><i class="ti ti-video"></i></span></a>
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
                            <div class="d-inline-flex">
                                <a href="#" class="model-icon bg-light d-flex justify-content-center align-items-center rounded-circle me-2" data-bs-toggle="modal" data-bs-target="#voice_call"><span><i class="ti ti-phone"></i></span></a>
                                <a href="#" class="model-icon bg-light d-flex justify-content-center align-items-center rounded-circle" data-bs-toggle="modal" data-bs-target="#video-call"><span><i class="ti ti-video"></i></span></a>
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
                            <div class="d-inline-flex">
                                <a href="#" class="model-icon bg-light d-flex justify-content-center align-items-center rounded-circle me-2" data-bs-toggle="modal" data-bs-target="#voice_call"><span><i class="ti ti-phone"></i></span></a>
                                <a href="#" class="model-icon bg-light d-flex justify-content-center align-items-center rounded-circle" data-bs-toggle="modal" data-bs-target="#video-call"><span><i class="ti ti-video"></i></span></a>
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
                            <div class="d-inline-flex">
                                <a href="#" class="model-icon bg-light d-flex justify-content-center align-items-center rounded-circle me-2" data-bs-toggle="modal" data-bs-target="#voice_call"><span><i class="ti ti-phone"></i></span></a>
                                <a href="#" class="model-icon bg-light d-flex justify-content-center align-items-center rounded-circle" data-bs-toggle="modal" data-bs-target="#video-call"><span><i class="ti ti-video"></i></span></a>
                            </div>                                       
                        </div>
                    </div>
                </form>
            </div>       
        </div>
    </div>
</div>
<!-- /Add Call -->

<!-- Voice Call -->
<div class="modal fade" id="voice_call">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-center border-0">
                <span class="model-icon bg-primary d-flex justify-content-center align-items-center rounded-circle me-2">
                    <i class="ti ti-phone-call"></i>
                </span>
                <h4 class="modal-title">Audio Calling...</h4>
            </div>
            <div class="modal-body pb-0">
                <div class="card bg-light mb-0">
                    <div class="card-body d-flex justify-content-center">
                        <div>
                            <span class="avatar avatar-xxl">
                                <img src="{{ asset('build/img/profiles/avatar-06.jpg') }}" class="rounded-circle" alt="user">
                            </span>
                            <h6 class="fs-14">Edward Lietz</h6>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="modal-footer justify-content-center border-0">
                <a href="#" class="voice-icon btn btn-success rounded-circle d-flex justify-content-center align-items-center me-2" data-bs-toggle="modal" data-bs-target="#voice_attend">
                    <i class="ti ti-phone fs-20"></i>
                </a>
                <a href="#" class="voice-icon btn btn-danger rounded-circle d-flex justify-content-center align-items-center">
                    <i class="ti ti-phone-off fs-20"></i>
                </a>
            </div>     
        </div>
    </div>
</div>
<!-- /Voice Call -->

<!-- Voice Call attend -->
<div class="modal fade" id="voice_attend" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex border-0 pb-0">
                <div class="card bg-transparent-dark flex-fill border mb-3">
                    <div class="card-body d-flex justify-content-between p-3 flex-wrap row-gap-3">
                        <div class="d-flex align-items-center">
                            <span class="avatar avatar-lg online me-2">
                                <img src="{{ asset('build/img/profiles/avatar-06.jpg') }}" class="rounded-circle" alt="user">
                            </span>
                            <div>
                                <h6>Edward Lietz</h6>
                                <span>+22-555-345-11</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="badge border border-primary  text-primary badge-sm me-2">
                                <i class="ti ti-point-filled"></i>
                                01:15:25
                            </span>
                            <a href="#" class="user-add bg-primary rounded d-flex justify-content-center align-items-center text-white" data-bs-toggle="modal" data-bs-target="#voice_group">
                                <i class="ti ti-user-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body border-0 pt-0">
                <div class="card audio-crd bg-transparent-dark border">
                    <div class="modal-bgimg">
                        <span class="modal-bg1">
                            <img src="{{ asset('build/img/bg/bg-02.png') }}" class="img-fluid" alt="bg">
                        </span>
                        <span class="modal-bg2">
                            <img src="{{ asset('build/img/bg/bg-03.png') }}" class="img-fluid" alt="bg">
                        </span>
                    </div>
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-center align-items-center pt-5">
                            <span class="avatar avatar-xxxl bg-soft-primary rounded-circle p-2">
                                <img src="{{ asset('build/img/profiles/avatar-06.jpg') }}" class="rounded-circle" alt="user">
                            </span>
                            
                        </div>
                        <div class="d-flex align-items-end justify-content-end">
                            <span class="call-span border border-2 border-primary d-flex justify-content-center align-items-center rounded">
                                <span class="avatar avatar-xl bg-soft-primary rounded-circle p-2">
                                    <img src="{{ asset('build/img/profiles/avatar-17.jpg') }}" class="rounded-circle" alt="user">
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="modal-footer justify-content-center border-0 pt-0">
                <div class="call-controll-block d-flex align-items-center justify-content-center rounded-pill">
                    <a href="javascript:void(0);" class="call-controll mute-bt d-flex align-items-center justify-content-center">
                        <i class="ti ti-microphone"></i>
                    </a>
                    <a href="javascript:void(0);" class="call-controll d-flex align-items-center justify-content-center">
                        <i class="ti ti-volume"></i>
                    </a>
                    <a href="javascript:void(0);"  data-bs-dismiss="modal" class="call-controll call-decline d-flex align-items-center justify-content-center">
                        <i class="ti ti-phone"></i>
                    </a>
                    <a href="javascript:void(0);" class="call-controll d-flex align-items-center justify-content-center">
                        <i class="ti ti-maximize"></i>
                    </a>
                    <a href="javascript:void(0);" class="call-controll d-flex align-items-center justify-content-center">
                        <i class="ti ti-dots"></i>
                    </a>
                </div>
            </div>     
        </div>
    </div>
</div>
<!-- /Voice Call attend -->