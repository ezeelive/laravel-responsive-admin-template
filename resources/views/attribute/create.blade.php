@section('title', 'Add Attributes')
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
            <strong>Add Attributes</strong>
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
			 {!! Form::open(array('route' => 'attribute.store','method'=>'POST', 'id'=>'form-validation', 'name'=>'form-validation', 'enctype'=>'multipart/form-data')) !!}
				<div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-attributename">Attribute Name  <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-attributename" class="form-control"  placeholder="Attribute Name"   name="attribute_name"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Attribute Name must not be empty!">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label style="margin-top:10px;">Attribute Value</label>
                            <input  class="form-control"  placeholder="Attribute Value"   name="attribute_value"  type="text" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
						<label class="form-control-label">Attribute Image <span style="color:red; font-weight:900; font-size:20px;">*</span></label><br><br>
                        {!! Form::file('attribute_image', array('class' => 'image', 'data-validation'=>'[NOTEMPTY]' ,'data-validation-message'=>'Attribute Image must not be empty!')) !!}
						<!--<div class="cat__ecommerce__catalog__item">
							 <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" id="testimonail_image" name="testimonail_image">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div><br>
                                <img id='img-upload' style="width:250px;"/>
                            </div>
						</div>-->
                    </div>
                   
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary width-150" >Submit</button>
                    <button type="reset" class="btn btn-warning width-150" >Reset</button>
                    <a href="{{ url('attribute')}}"  class="btn btn-default">Cancel</a>
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
		$("#m_section_name").html("Attributes");
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
