@section('title', 'Update Testimonial')
@include('main')
@include('components/mainmenu')
@include('components/breadcrumb')
<div class="cat__content">

<!-- START: ecommerce/Pages-edit -->
<section class="card">
    <div class="card-header">
        <div class="dropdown pull-right">
          <a href="{{ url('testimonial/create')}}" class="btn btn-success "><i class="fa fa-plus"></i>&nbsp; &nbsp; Add Testimonial &nbsp; &nbsp;</a>
       </div>
        <span class="cat__core__title">
            <strong>Edit Testimonial</strong>
        </span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
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
			 {!! Form::model($testimonials, ['method' => 'PATCH', 'id'=>'form-validation', 'name'=>'form-validation', 'route' => ['testimonial.update', $testimonials->testimonial_id], 'enctype'=>'multipart/form-data']) !!}
				<div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-name">Name <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                             <input id="validation-name" class="form-control"  placeholder="Name"   name="name"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Name must not be empty!" value="{{$testimonials->name}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="company" style="margin-top:10px;">Comapny Name</label>
                            <input  class="form-control"  placeholder="Company Name"   name="compnay_name"  type="text" value="{{$testimonials->compnay_name}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Description <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <textarea class="form-control" rows="4" id="l15" name="description" data-validation="[NOTEMPTY]" data-validation-message="Description must not be empty!" placeholder="Write a Description">{{$testimonials->description}}</textarea>
                        </div>
                    </div>
                </div>        
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-metatitle">Testimonial Image</label><br><br>
                            <img src="<?php echo asset("/upload/testimonialimage/$testimonials->testimonial_image");?>" style="width:100px;"><br><br>
                            <input type="hidden" name="testimonial_image" value="{{$testimonials->testimonial_image}}">
                            <input type="file" name="testimonial_image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="metadescription">Testimonial Video</label>
                            {!! Form::text('testimonial_video', null, array('placeholder' => 'Please Write Youtube Url','class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
				<div class="row">
                     <div class="col-lg-6"><br><br>
                        <div class="form-group"><br><br><br><br><br><br>
                            <label class="form-control-label">Is active &nbsp; &nbsp; &nbsp; &nbsp;</label>
                            <input type="checkbox" name="is_active" checked value="1" >
                        </div>
                     </div>   
                    <div class="col-lg-6" style="margin-top:-100px;">
						<label class="form-control-label">Testimonial Video File</label><br><br>
                         <video width="400" controls>
                            <source src="<?php echo asset("/upload/testimonialvideo/$testimonials->testimonial_video_file");?>" type="video/ogg">
                          </video>
                         <br>
                          <input type="hidden" name="testimonial_video_file" value="{{$testimonials->testimonial_video_file}}">
                         {!! Form::file('testimonial_video_file', array('class' => 'image', 'accept' => 'video/mp4', 'data-bucket' => 'video','data-filekey' => 'video')) !!}
					</div>
                </div>
               
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary width-150" >Submit</button>
                    <button type="reset" class="btn btn-warning width-150" >Reset</button>
                    <a href="{{ url('testimonial')}}"  class="btn btn-default">Cancel</a>
                </div>
			{!! Form::close() !!}
            </div>
 
        </div>
    </div>
</section>
<!-- END: ecommerce/product-edit -->
<!-- END: ecommerce/products-list -->

<!-- START: page scripts -->
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
		$("#m_section_name").html("Testimonials");
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
