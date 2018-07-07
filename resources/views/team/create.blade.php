@section('title', 'Add Team')
@include('main')
@include('components/mainmenu')
@include('components/breadcrumb')

<div class="cat__content">

<!-- START: ecommerce/Pages-edit -->
<section class="card">
   <div class="card-header">
        <div class="dropdown pull-right">
           <a href="{{ url('team/create')}}" class="btn btn-success "><i class="fa fa-plus"></i>&nbsp; &nbsp; Add Team &nbsp; &nbsp;</a>
       </div>
        <span class="cat__core__title">
            <strong>Add Team</strong>
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
			 {!! Form::open(array('route' => 'team.store','method'=>'POST', 'id'=>'form-validation', 'name'=>'form-validation', 'enctype'=>'multipart/form-data')) !!}
				<div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-name">Name  <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-name" class="form-control"  placeholder="Name"   name="name"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Name must not be empty!">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label style="margin-top:10px;">Desigenation <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input  class="form-control"  placeholder="Desigenation"   name="desigenation"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Desigenation must not be empty!">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
						<label class="form-control-label">Team Image <span style="color:red; font-weight:900; font-size:20px;">*</span></label><br>
                        {!! Form::file('team_image', array('class' => 'image', 'data-validation'=>'[NOTEMPTY]' ,'data-validation-message'=>'Team Image must not be empty!')) !!}
				    </div>
                    <div class="col-lg-6">
						<label class="form-control-label">Facebook Url</label>
                          <input class="form-control"  placeholder="Please Enter Facebook url"   name="fb_url"  type="url" >
					</div>
                </div>
				<div class="row">
                    <div class="col-lg-6"><br>
                        <div class="form-group" style="margin-top:10px;">
                            <label for="validation-name">Twitter Url</label>
                            <input id="validation-name" class="form-control"  placeholder="Twitter Url"   name="twitter_url"  type="text" >
                        </div>
                    </div>
                    <div class="col-lg-6"><br>
                        <div class="form-group">
                            <label style="margin-top:10px;">Google Plus Url</label>
                            <input  class="form-control"  placeholder="Google Plus Url"   name="googleplus_url"  type="text" >
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary width-150" >Submit</button>
                    <button type="reset" class="btn btn-warning width-150" >Reset</button>
                    <a href="{{ url('team')}}"  class="btn btn-default">Cancel</a>
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
		$("#m_section_name").html("Team");
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
