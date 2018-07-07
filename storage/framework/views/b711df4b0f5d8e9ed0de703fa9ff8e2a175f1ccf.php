<?php $__env->startSection('title', 'My Profile'); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('components/mainmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('components/breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- START: apps/profile -->
<nav class="cat__core__top-sidebar cat__core__top-sidebar--bg">
    <div class="row">
        <div class="col-xl-8 offset-xl-4">
            <div class="width-100 text-center pull-right hidden-md-down">
                <h2>154</h2>
                <p class="mb-0">Followers</p>
            </div>
            <div class="width-100 text-center pull-right hidden-md-down">
                <h2>17</h2>
                <p class="mb-0">Posts</p>
            </div>
            <h2>
			     <span class="text-black">
					<strong><?php echo e(Auth::user()->name); ?></strong>
				</span>
			    <small class="text-muted"><?php echo e(Auth::user()->email); ?></small>
            </h2>
            <!-- <p class="mb-1">Founder / CEO</p> -->
        </div>
    </div>
</nav>
<div class="row">
    <div class="col-xl-4">
        <section class="card cat__apps__profile__card" style="background-image: url(<?php echo asset('/dist/modules/dummy-assets/common/img/photos/4.jpeg'); ?>">
            <div class="card-body text-center">
                 <?php
                    if(isset(Auth::user()->user_id) && isset(Auth::user()->profile_image) && !empty(Auth::user()->profile_image))
                    {
                        $profileimage=Auth::user();
                   ?>   
                    <a class="cat__core__avatar cat__core__avatar--border-white cat__core__avatar--110" href="javascript:void(0);">
                        <img src="<?php echo asset("/upload/profileimage/$profileimage->profile_image") ?>" alt="Alternative text to the image">
                    </a>   
                   <?php }else{ ?>
                          <a class="cat__core__avatar cat__core__avatar--border-white cat__core__avatar--110" href="javascript:void(0);">
                             <img src="<?php echo asset('/upload/profileimage/user_profile.jpg'); ?>" alt="Alternative text to the image">
                           </a>
                   <?php } ?>
                
                <br />
                <br />
                <div class="btn-group btn-group-justified" aria-label="" role="group">
                    <div class="btn-group">
                        <button type="button" class="btn width-150 swal-btn-success">Follow</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn width-150 swal-btn-success-2">Add to Friend</button>
                    </div>
                </div>
                <br />
                <p class="text-white">
                    Last activity: <?php echo e(date('d-M-y -  H:i', strtotime(Auth::user()->created_at))); ?>

                </p>
                <p class="text-white">
                    <span class="cat__core__donut cat__core__donut--success"></span>
                    Online
                </p>
            </div>
        </section>
        <section class="card">
            <div class="card-body">
                <h5 class="mb-3 text-black">
                    <strong>Actions</strong>
                </h5>
                <div class="btn-group-vertical btn-group-justified">
                    <button type="button" class="btn">Send Message</button>
                    <button type="button" class="btn">Send File</button>
                    <button type="button" class="btn">Access History</button>
                    <button type="button" class="btn">Rename User</button>
                    <button type="button" class="btn">Ban User</button>
                </div>
            </div>
        </section>
        <section class="card">
            <div class="card-body">
                <h5 class="mb-3 text-black">
                    <strong>Skills</strong>
                </h5>
                <div class="mb-1">Management</div>
                <div class="progress mb-3" style="height: 7px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%"></div>
                </div>
                <div class="mb-1">Investing</div>
                <div class="progress mb-3" style="height: 7px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%"></div>
                </div>
                <div class="mb-1">Programming</div>
                <div class="progress mb-3" style="height: 7px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%"></div>
                </div>
                <div class="mb-1">Leading</div>
                <div class="progress mb-3" style="height: 7px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                </div>
                <div class="mb-1">Learning</div>
                <div class="progress mb-3" style="height: 7px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%"></div>
                </div>
            </div>
        </section>
        <section class="card">
            <div class="card-body">
                <h5 class="mb-3 text-black">
                    <strong>Information</strong>
                </h5>
                <dl class="row">
                    <dt class="col-xl-3">Courses End</dt>
                    <dd class="col-xl-9">Digital Ocean, Nokia</dd>
                    <dt class="col-xl-3">Address</dt>
                    <dd class="col-xl-9">New York, US</dd>
                    <dt class="col-xl-3">Skills</dt>
                    <dd class="col-xl-9"><span class="badge badge-default">html</span> <span class="badge badge-default">css</span> <span class="badge badge-default">design</span> <span class="badge badge-default">javascript</span></dd>
                    <dt class="col-xl-3">Last companies</dt>
                    <dd class="col-xl-9">Microsoft, Soft Mailstorm</dd>
                    <dt class="col-xl-3">Personal Information</dt>
                    <dd class="col-xl-9">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</dd>
                </dl>
            </div>
        </section>
        <div class="card">
            <div class="card-body">
                <div class="example-calendar-block"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <section class="card">
            <div class="card-body">
                <div class="nav-tabs-horizontal">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript: void(0);" data-toggle="tab" data-target="#posts" role="tab">
                                <i class="icmn-eye"></i>
                                View Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" data-toggle="tab" data-target="#messaging" role="tab">
                                <i class="icmn-pencil2"></i>
                                Edit Detail
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-4">
                        <div class="tab-pane active" id="posts" role="tabcard">
                            <h5 class="text-black mt-4">
                                <strong>Personal Information</strong>
                            </h5>
                             <?php if($message = Session::get('error')): ?>
                                <div class="alert alert-danger" role="alert" id="id">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Oh snap! </strong> <?php echo e($message); ?>

                                </div>
                            <?php endif; ?>
                            <?php if($message = Session::get('success')): ?>
                                <div class="alert alert-success" role="alert" id="id">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Well done! </strong>&nbsp; <?php echo e($message); ?> !
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group"><br>
                                        <label class="form-control-label" for="l6"><b>Profile Image</b></label><br><br>
                                        <img src="<?php echo asset("/upload/profileimage/$profileimage->profile_image") ?>"><br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="l0"><b>Name</b></label>
                                        <p><?php echo e(Auth::user()->name); ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="l0"><b>Username</b></label>
                                        <p><?php echo e(Auth::user()->username); ?></p>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="l1"><b>Email</b></label>
                                        <p><?php echo e(Auth::user()->email); ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="l3"><b>Mobile</b></label>
                                        <p><?php echo e(Auth::user()->contact_no); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="form-group"><br>
                                        <label class="form-control-label" for="l6"><b>Profile Summary / Description</b></label><br><br>
                                        <p><?php echo e(Auth::user()->profile_summary); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="messaging" role="tabcard">
                            <h5 class="text-black mt-4">
                                <strong>Edit Information</strong>
                            </h5><br>
                           <?php echo Form::open(array('url' => ['/update/'.$profileimage->user_id],'method'=>'POST', 'id'=>'form-validation', 'name'=>'form-validation', 'enctype'=>'multipart/form-data')); ?>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group"><br>
                                        <label class="form-control-label" for="l6"><b>Profile Image</b></label><br><br>
                                        <img src="<?php echo asset("/upload/profileimage/$profileimage->profile_image") ?>">&nbsp; &nbsp;&nbsp; &nbsp;
                                        <input type="hidden" name="profile_image" value="<?php echo e(Auth::user()->profile_image); ?>">
                                        <input type="file" name="profile_image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="l0"><b>Name</b></label>
                                        <input type="text" class="form-control" name="name" value="<?php echo e(Auth::user()->name); ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="l1"><b>Username</b></label>
                                        <input type="text" class="form-control" name="username" value="<?php echo e(Auth::user()->username); ?>">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="l3"><b>Email</b></label>
                                        <input type="email" class="form-control" name="email" value="<?php echo e(Auth::user()->email); ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="l4"><b>Mobile</b></label>
                                        <input type="number" class="form-control" name="contact_no" value="<?php echo e(Auth::user()->contact_no); ?>">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="l6"><b>Profile Summary / Description</b></label>
                                        <textarea name="profile_summary" class="form-control" cols="10" rows="5"><?php echo e(Auth::user()->profile_summary); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="form-group">
                                    <button type="submit" class="btn width-200 btn-primary">Update Profile</button>
                                </div>
                            </div>
                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- END: apps/profile -->
<script>
    $('#id').delay(3000).fadeOut('fast');
</script>
<!-- START: page scripts -->
<script>
    $(function() {
		$("#m_section_name").html("Our Profile");
        ///////////////////////////////////////////////////////////
        // ADJUSTABLE TEXTAREA
        autosize($('.adjustable-textarea'));

        ///////////////////////////////////////////////////////////
        // CALENDAR
        $('.example-calendar-block').fullCalendar({
            //aspectRatio: 2,
            height: 450,
            header: {
                left: 'prev, next',
                center: 'title',
                right: 'month, agendaWeek, agendaDay'
            },
            buttonIcons: {
                prev: 'none fa fa-arrow-left',
                next: 'none fa fa-arrow-right',
                prevYear: 'none fa fa-arrow-left',
                nextYear: 'none fa fa-arrow-right'
            },
            Actionable: true,
            eventLimit: true, // allow "more" link when too many events
            viewRender: function(view, element) {
                if (!(/Mobi/.test(navigator.userAgent)) && jQuery().jScrollPane) {
                    $('.fc-scroller').jScrollPane({
                        autoReinitialise: true,
                        autoReinitialiseDelay: 100
                    });
                }
            },
            eventClick: function(calEvent, jsEvent, view) {
                if (!$(this).hasClass('event-clicked')) {
                    $('.fc-event').removeClass('event-clicked');
                    $(this).addClass('event-clicked');
                }
            },
            defaultDate: '2016-05-12',
            events: [
                {
                    title: 'All Day Event',
                    start: '2016-05-01',
                    className: 'fc-event-success'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-05-09T16:00:00',
                    className: 'fc-event-default'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-05-16T16:00:00',
                    className: 'fc-event-success'
                },
                {
                    title: 'Conference',
                    start: '2016-05-11',
                    end: '2016-05-14',
                    className: 'fc-event-danger'
                }
            ]
        });

        ///////////////////////////////////////////////////////////
        // SWAL ALERTS
        $('.swal-btn-success').click(function(e){
            e.preventDefault();
            swal({
                title: "Following",
                text: "Now you are following Artour Scott",
                type: "success",
                confirmButtonClass: "btn-success",
                confirmButtonText: "Ok"
            });
        });

        $('.swal-btn-success-2').click(function(e){
            e.preventDefault();
            swal({
                title: "Friends request",
                text: "Friends request was succesfully sent to Artour Scott",
                type: "success",
                confirmButtonClass: "btn-success",
                confirmButtonText: "Ok"
            });
        });

    });
</script>
<!-- END: page scripts -->
<?php echo $__env->make('components/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
