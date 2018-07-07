@section('title', 'Add Event Date')
@include('main')
@include('components/mainmenu')
@include('components/breadcrumb')

<div class="cat__content">

<!-- START: ecommerce/Pages-edit -->
<section class="card">
   <div class="card-header">
        <div class="dropdown pull-right">
           <a href="{{ url('eventdate/create')}}" class="btn btn-success "><i class="fa fa-plus"></i>&nbsp; &nbsp; Add Event Date &nbsp; &nbsp;</a>
       </div>
        <span class="cat__core__title">
            <strong>Add Event Date</strong>
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
			 {!! Form::model($events, ['method' => 'PATCH', 'id'=>'form-validation', 'name'=>'form-validation', 'route' => ['eventdate.update', $events->event_date_id], 'enctype'=>'multipart/form-data']) !!}
				<div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="eventId" class="form-label">Event Name  </label>
                             <select class="form-control" id="eventId" name="event_id" data-validation="[NOTEMPTY]" data-validation-message="Event must not be empty!">  
                                 <?php echo $evt_dropdown; ?>
                             </select>
                        </div>
                    </div>
                  </div>
                <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-event">From Date  <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input type="text" class="form-control datepicker-only-init  display-inline-block mr-2 mb-2" placeholder="From Date"  name="from_date" data-validation="[NOTEMPTY]" data-validation-message="From Date must not be empty!" value="{{ $events->from_date }}"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">From Time  <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input type="text"  class="form-control timepicker-init" name="from_time" placeholder="Form Time" data-validation="[NOTEMPTY]" data-validation-message="Form Time must not be empty!" value="{{ $events->from_time }}">
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-event">To Date  <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                             <input type="text" class="form-control datepicker-only-init  display-inline-block mr-2 mb-2" placeholder="To Date"  name="to_date" data-validation="[NOTEMPTY]" data-validation-message="To Date must not be empty!" value="{{ $events->to_date }}"/>
                        </div>
                    </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">To Time  <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input type="text"  class="form-control timepicker-init" name="to_time" placeholder="To Time" data-validation="[NOTEMPTY]" data-validation-message="To Time must not be empty!" value="{{ $events->to_time }}">
                            
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary width-150" >Submit</button>
                    <button type="reset" class="btn btn-warning width-150" >Reset</button>
                    <a href="{{ url('eventdate')}}"  class="btn btn-default">Cancel</a>
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

         $('.datepicker-only-init').datetimepicker({
            widgetPositioning: {
                horizontal: 'left'
            },
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                previous: 'fa fa-arrow-left',
                next: 'fa fa-arrow-right'
            },
            format: 'LL'
        });  
        
        $('.timepicker-init').datetimepicker({
            widgetPositioning: {
                horizontal: 'left'
            },
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                previous: 'fa fa-arrow-left',
                next: 'fa fa-arrow-right'
            },
            format: 'LT'
        });
    
    });
</script>
<!-- END: page scripts -->
@include('components/footer')
