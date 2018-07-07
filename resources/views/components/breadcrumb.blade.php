<div class="cat__top-bar">
    <!-- left aligned items -->
    <div class="cat__top-bar__right">
        <div class="cat__top-bar__logo">
            <a href="dashboards-alpha.html">
                <img src="{!! asset('/dist/modules/dummy-assets/common/img/logo-inverse.png') !!}" />
            </a>
        </div>
        <div class="cat__top-bar__left">
            <!-- START: dashboard -->
            <nav class="cat__core__top-sidebar cat__core__top">
                <br />
                <span class="cat__core__title d-block mb-2">
                    <span class="text-muted">Home ·</span>
                     <span id="m_section_name"> Dashboard </span>
                </span>
            </nav>
        </div>
        <div class="cat__top-bar__item">
            <div class="dropdown cat__top-bar__avatar-dropdown">
                <?php
                    if(isset(Auth::user()->user_id) && isset(Auth::user()->profile_image) && !empty(Auth::user()->profile_image))
                    {
                        $profileimage=Auth::user();
                   ?>   
                    <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="cat__top-bar__avatar" href="javascript:void(0);">
                            <img src="<?php echo asset("/upload/profileimage/$profileimage->profile_image") ?>" />
                        </span>
                    </a>    
                   <?php }else{ ?>
                          <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span class="cat__top-bar__avatar" href="javascript:void(0);">
                                    <img src="{!! asset('/upload/profileimage/user_profile.jpg') !!}" />
                                </span>
                            </a>
                   <?php } ?>
               
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="" role="menu">
                    <a class="dropdown-item" href="{{ URL ('profile')}}"><i class="dropdown-icon icmn-user"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ URL ('changepassword')}}"><i class="dropdown-icon icmn-circle-right"></i> Change Password</a>
                    <!--<a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i> Support Ticket</a>-->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('/main/logout')}}"><i class="dropdown-icon icmn-exit"></i> Logout</a>
                </ul>
            </div>
        </div>
    </div>
    <!-- right aligned items -->
</div>