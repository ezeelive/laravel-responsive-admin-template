@section('title', 'Change Password')
@include('main')
@include('components/mainmenu')
@include('components/breadcrumb')
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
					<strong>{{ Auth::user()->name }}</strong>
				</span>
			    <small class="text-muted">{{ Auth::user()->email }}</small>
            </h2>
            <p class="mb-1">Founder / CEO</p>
        </div>
    </div>
</nav>
<div class="row">
    <div class="col-xl-4">
        <section class="card cat__apps__profile__card" style="background-image: url({!! asset('/dist/modules/dummy-assets/common/img/photos/4.jpeg')!!}">
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
                             <img src="{!! asset('/upload/profileimage/user_profile.jpg') !!}" alt="Alternative text to the image">
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
                    Last activity: {{date('d-M-y -  H:i', strtotime(Auth::user()->created_at))}}
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
                            <a class="nav-link active" href="javascript: void(0);" data-toggle="tab" data-target="#settings" role="tab">
                                <i class="icmn-cog"></i>
									Change Password
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-4">
                        <div class="tab-pane active" id="settings" role="tabcard">
                            <h5 class="text-black mt-4">
                                <strong>Edit Password</strong>
                            </h5><br>
                             @if ($message = Session::get('error'))
                                <div class="alert alert-danger" role="alert" id="id">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Oh snap! </strong> &nbsp; {{ $message }}
                                </div>
                            @endif
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success" role="alert" id="id">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Well done! </strong> &nbsp; {{ $message }} !
                                </div>
                            @endif
                           {!! Form::open(array('url' => ['/changePassword/'.$profileimage->user_id],'method'=>'POST', 'id'=>'form-validation', 'name'=>'form-validation')) !!}
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label class="form-control-label" for="l3"><b>Current Password</b> <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                                            <input type="password"  name="old_password" class="form-control"  data-validation="[NOTEMPTY]" data-validation-message="Current Password must not be empty!" placeholder="Current Password">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label class="form-control-label" for="l3"><b>New Password</b> <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                                            <input type="password"  name="new_password" class="form-control" data-validation="[NOTEMPTY]" data-validation-message="New Password must not be empty!" placeholder="New Password">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label class="form-control-label" for="l4"><b>Confirm Password</b> <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                                            <input type="password"  name="confirm_password"  class="form-control" data-validation="[NOTEMPTY]" data-validation-message="Confirm Password must not be empty!" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="form-group">
                                        <input type="submit" type="submit" value="Update Password" class="btn width-200 btn-primary">
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </div>
                                </div>
                             </form>   
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
		$("#m_section_name").html("Change Password");
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
<script>
    $(function() {

        // Form Validation
        $('#form-validation').validate({
            submit: {
                settings: {
                    inputContainer: '.form-group',
                    errorListClass: 'form-control-error',
                    errorClass: 'has-danger'
                }
            }
        });

       
    });
</script>
<!-- END: page scripts -->
@include('components/footer')
