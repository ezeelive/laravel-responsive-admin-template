@section('title', 'Update Category')
@include('main')
@include('components/mainmenu')
@include('components/breadcrumb')
<div class="cat__content">

<!-- START: ecommerce/Pages-edit -->
<section class="card">
    <div class="card-header">
        <div class="dropdown pull-right">
           <a href="{{ url('category/create')}}" class="btn btn-success "><i class="fa fa-plus"></i>&nbsp; &nbsp; Add Category &nbsp; &nbsp;</a>
       </div>
        <span class="cat__core__title">
            <strong>Edit Category</strong>
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
			 {!! Form::model($categories, ['method' => 'PATCH', 'id'=>'form-validation', 'name'=>'form-validation', 'route' => ['category.update', $categories->category_id], 'enctype'=>'multipart/form-data']) !!}
				<div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-categoryname">Category Name <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-categoryname" class="form-control"  placeholder="Category Name"   name="category_name"  type="text" data-validation="[NOTEMPTY]" value="{{ $categories->category_name }}" data-validation-message="Category Name must not be empty!">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label style="margin-top:10px;">Sub Category</label>
                             <select name="is_parent"  class="form-control">  
                                 <?php echo $subcat_dropdown; ?>
                             </select>
                        </div>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="form-control-label">Content</label>
                    <textarea class="summernote" type="text" id="contents"  name="content" placeholder="Write a Content" > {{ $categories->content }}</textarea>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
						    <label for="validation-metatitle">Meta Title <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-metatitle" class="form-control"  placeholder="Meta Title"   name="meta_title" value="{{ $categories->meta_title }}"  type="text"  data-validation="[NOTEMPTY]" data-validation-message="Meta Title must not be empty!">
                         </div> 
					</div>
                    <div class="col-lg-6">
                        <label class="form-control-label" style="margin-top:10px;">Meta Description</label>
                        <textarea class="form-control" rows="4" id="l5" name="meta_description" placeholder="Meta Description">{{ $categories->meta_description }}</textarea>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-6">
                        <label class="form-control-label">Banner Image <span style="color:red; font-weight:900; font-size:20px;">*</span></label><br><br>
                         <img src="<?php echo asset("upload/categoryimage/$categories->banner_image")?>" style="width:100px;"><br><br>
                        {!! Form::file('banner_image', array('class' => 'image', 'data-validation'=>'[NOTEMPTY]','data-validation-message'=>'Banner Image must not be empty!', 'value'=>'{{$categories->banner_image}}')) !!}
                    </div>
                    <div class="col-lg-6"><br><br>
                        <label class="form-control-label">Is active &nbsp; &nbsp; &nbsp; &nbsp;</label>
                        <input type="checkbox" name="is_active" checked value="1" >
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary width-150" >Submit</button>
                    <button type="reset" class="btn btn-warning width-150" >Reset</button>
                    <a href="{{ url('category   ')}}"  class="btn btn-default">Cancel</a>
                </div>
			{!! Form::close() !!}
            </div>
 
        </div>
    </div>
</section>
<!-- END: ecommerce/product-edit -->
<!-- END: ecommerce/products-list -->
<script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
</script>
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
		$("#m_section_name").html("Categories");
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
