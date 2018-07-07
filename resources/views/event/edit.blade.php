@section('title', 'Update Event')
@include('main')
@include('components/mainmenu')
@include('components/breadcrumb')

<div class="cat__content">

<!-- START: ecommerce/Pages-edit -->
<section class="card">
   <div class="card-header">
        <div class="dropdown pull-right">
           <a href="{{ url('event/create')}}" class="btn btn-success "><i class="fa fa-plus"></i>&nbsp; &nbsp; Add Event &nbsp; &nbsp;</a>
       </div>
        <span class="cat__core__title">
            <strong>Edit Event</strong>
        </span>
    </div>
    <div class="card-body">
        <div class="row">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
            <div class="col-lg-12">
			  {!! Form::model($events, ['method' => 'PATCH', 'id'=>'form-validation', 'name'=>'form-validation', 'route' => ['event.update', $events->event_id], 'enctype'=>'multipart/form-data']) !!}
                <input type="hidden" name="created_by" value="1">
                <input type="hidden" name="updated_by" value="1">
             	<div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="countryId" class="form-label">Event Title  <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                             <input id="validation-event" class="form-control"  placeholder="Event Title"   name="event_title"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Event Title must not be empty!" value="{{ $events->event_title }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-event">Event Type  <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <select class="form-control" name="event_type" data-validation="[NOTEMPTY]" data-validation-message="Event Type must not be empty!">
                                <option value="">-- Select Event Type --</option>
                                <option  value="1"  {{ ( $events->event_type == 1 ) ? 'selected' : '' }}>Hongkong Appointment</option>
                                <option  value="2"  {{ ( $events->event_type == 2 ) ? 'selected' : '' }}>Overseas Appointment</option>
                            </select>
                        </div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="eventId" class="form-label">Event City  <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                             <select class="form-control" id="eventId" name="event_city_id" style="height:45px;"  data-validation="[NOTEMPTY]" data-validation-message="Event City must not be empty!">  
                                 <?php echo $city_dropdown; ?>
                             </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-countryid">Event Country  <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <select class="select2" id="countryid" name="country_id"   data-validation="[NOTEMPTY]" data-validation-message="Event Country must not be empty!">  
                                 <?php echo $count_dropdown; ?>
                             </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Email  <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input class="form-control" type="email" name="email_id" placeholder="Email " data-validation="[NOTEMPTY]" data-validation-message="Email must not be empty!" value="{{ $events->email_id }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">City  <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input class="form-control" type="text" name="city" placeholder="City" data-validation="[NOTEMPTY]" data-validation-message="City must not be empty!" value="{{ $events->city }}">
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-lg-6">
                        <label class="form-control-label">Address</label>
                        <textarea class="form-control" rows="4"  name="address" placeholder="Address">{{$events->address}}</textarea>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Contact No.  <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input class="form-control" type="text" name="contact_no" placeholder="Mobile" data-validation="[NOTEMPTY]" data-validation-message="Phone No. must not be empty!" value="{{ $events->contact_no }}">
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-lg-6">
                        <label class="form-control-label">Representor</label>
                        <input class="form-control" type="text"  name="representor" placeholder="Representor"  value="{{ $events->representor }}">
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">GEO Latitude</label>
                            <input class="form-control" type="text" name="geo_lat" placeholder="GEO Latitude" value="{{ $events->geo_lat }}">
                        </div>
                    </div>
                 </div> 
                 <div class="row">
                     <div class="col-lg-6">
                        <label class="form-control-label" >GEO Longitude</label>
                        <input class="form-control" type="text"  name="geo_long" placeholder="GEO Longitude" value="{{ $events->geo_long }}">
                     </div> 
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Event Image</label><br>
                             <img src="<?php echo asset("/upload/eventimage/$events->event_image")?>" style="width:100px;"><br><br><br>
                            <input type="hidden" name="event_image" value="{{ $events->event_image }}">
                            <input type="file" name="event_image">
                        </div>
                    </div>
                 </div> 
                 <div class="row">
                    <div class="col-lg-6">
                        <label class="form-control-label" style="margin-top:8px;">Event Video</label><br>
                         <video width="300" controls>
                            <source src="<?php echo asset("/upload/eventvideo/$events->event_video");?>" type="video/ogg">
                          </video>
                         <br><br>
                         <input type="hidden" name="event_video" value="{{ $events->event_video }}">
                         <input type="file" name="event_video">
                     </div>  
                     <div class="col-lg-6"><br>
                        <label class="form-control-label" style="margin-top:8px;">Event Youtube</label>
                        <input type="text" name="event_youtube_url" class="form-control" placeholder="Youtube Url" value="{{ $events->event_youtube_url }}">
                     </div> 
                 </div>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group"><br><br>
                            <label class="form-control-label">Event Detail</label>
                           <textarea class="summernote" type="text" id="contents"  name="event_detail" placeholder="Write a Details" >{{ $events->event_detail }}</textarea>
                        </div>
                    </div>
                 </div> 
                 <div class="row">
                    <div class="col-lg-6">
                        <label class="form-control-label">Meta Title</label>
                        <input class="form-control" type="text"  name="meta_title" placeholder="Meta Title" value="{{ $events->meta_title }}">
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Meta Keyword</label>
                            <input class="form-control" type="text" name="meta_keyword" placeholder="Meta Keyword" value="{{ $events->meta_keyword }}">
                        </div>
                    </div>
                 </div>  
                 <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group"><br><br>
                            <label class="form-control-label">Meta Description</label>
                            <textarea type="text" class="form-control" name="meta_description" placeholder="Meta Description">{{ $events->meta_description }}</textarea>
                        </div>
                     </div> 
                    <div class="col-lg-6">
                        <div class="form-group"><br><br><br><br>
                            <label class="form-control-label">Is active &nbsp; &nbsp; &nbsp; &nbsp;</label>
                            <input type="checkbox" name="is_active" checked value="1" >
                        </div>
                     </div> 
                 </div>           
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary width-150" >Submit</button>
                    <button type="reset" class="btn btn-warning width-150" >Reset</button>
                    <a href="{{ url('event')}}"  class="btn btn-default">Cancel</a>
                </div>
			{!! Form::close() !!}
            </div>
 
        </div>
    </div>
</section>
<!-- END: ecommerce/product-edit -->
<!-- END: ecommerce/products-list -->

<!-- START: page scripts -->
 
<!-- include summernote css/js-->
 <script>
    $(function(){

        $('.select2').select2();
        $('.select2-tags').select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });

        $('.selectpicker').selectpicker();

    })
</script>
<script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
</script>
<script>
    $(function () {

        // Datatables
        $('#example1').DataTable({
            "lengthMenu": [[10, 25, 50, 100, 200, -1], [10, 25,50, 100, 200, "All"]],
            responsive: true,
            "autoWidth": false
        });

    })
</script>
<!-- END: page scripts -->
<!-- END: page scripts -->
<!-- START: page scripts -->
<script>
    $( function() {
		$("#m_section_name").html("Event City");
        ///////////////////////////////////////////////////////////
        // tooltips
        $("[data-toggle=tooltip]").tooltip();

        ///////////////////////////////////////////////////////////
        // chart1
        new Chartist.Line(".chart-line", {
            labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            series: [
                [5, 0, 7, 8, 12],
                [2, 1, 3.5, 7, 3],
                [1, 3, 4, 5, 6]
            ]
        }, {
            fullWidth: !0,
            chartPadding: {
                right: 40
            },
            plugins: [
                Chartist.plugins.tooltip()
            ]
        });

        ///////////////////////////////////////////////////////////
        // chart 2
        var overlappingData = {
                    labels: ["Jan", "Feb", "Mar", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    series: [
                        [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
                        [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
                    ]
                },
                overlappingOptions = {
                    seriesBarDistance: 10,
                    plugins: [
                        Chartist.plugins.tooltip()
                    ]
                },
                overlappingResponsiveOptions = [
                    ["", {
                        seriesBarDistance: 5,
                        axisX: {
                            labelInterpolationFnc: function(value) {
                                return value[0]
                            }
                        }
                    }]
                ];

        new Chartist.Bar(".chart-overlapping-bar", overlappingData, overlappingOptions, overlappingResponsiveOptions);

        ///////////////////////////////////////////////////////////
        // custom scroll
        if (!('ontouchstart' in document.documentElement) && jQuery().jScrollPane) {
            $('.custom-scroll').each(function() {
                $(this).jScrollPane({
                    contentWidth: '100%',
                    autoReinitialise: true,
                    autoReinitialiseDelay: 100
                });
                var api = $(this).data('jsp'),
                        throttleTimeout;
                $(window).bind('resize', function() {
                    if (!throttleTimeout) {
                        throttleTimeout = setTimeout(function() {
                            api.reinitialise();
                            throttleTimeout = null;
                        }, 50);
                    }
                });
            });
        }

    } );
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
