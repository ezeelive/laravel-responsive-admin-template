@section('title', 'Update Blog')
@include('main')
@include('components/mainmenu')
@include('components/breadcrumb')
<div class="cat__content">

<!-- START: ecommerce/Pages-edit -->
<section class="card">
    <div class="card-header">
        <div class="dropdown pull-right">
           <a href="{{ url('blog/create')}}" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; &nbsp; Add Blog &nbsp; &nbsp;</a>
       </div>
        <span class="cat__core__title">
            <strong>Edit Blog</strong>
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
			 {!! Form::model($blogs, ['method' => 'PATCH', 'id'=>'form-validation', 'name'=>'form-validation', 'route' => ['blog.update', $blogs->blog_id], 'enctype'=>'multipart/form-data']) !!}
				<div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-blogname">Blog Name <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-blogname" class="form-control"  placeholder="Blog Name"   name="blog_name" value="{{ $blogs->blog_name }}"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Blog Name must not be empty!">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-blogcategory" style="margin-top:10px;">Blog Category</label>
                             <select name="blogcategory_id" id="validation-blogcategory" class="form-control"  data-validation="[NOTEMPTY]" data-validation-message="Blog Category must not be empty!">  
                                 <?php echo $blogcategories_dropdown; ?>
                             </select>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Brief Description  <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <textarea class="form-control" rows="4"  name="blog_brief_description" placeholder="Write a Brief Description" data-validation="[NOTEMPTY]" data-validation-message="Brief Description must not be empty!">{{$blogs->blog_brief_description}}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-control-label" style="margin-top:8px;">Meta Description</label>
                        <textarea class="form-control" rows="4"  name="meta_description" placeholder="Meta Description">{{ $blogs->meta_description }}</textarea>
                    </div>
                </div> 
                 <div class="form-group">
                    <label class="form-control-label">Full Description</label>
                    <textarea class="summernote" type="text" id="contents"  name="blog_full_description"  placeholder="Write a Full  Description" >{{ $blogs->blog_full_description }}</textarea>
                </div>
                <div class="row">
                    <div class="col-lg-6">
						<label class="form-control-label">Meta Title</label>
                          <input class="form-control"  placeholder="Meta Title"   name="meta_title" value="{{ $blogs->meta_title }}"  type="text" >
					</div>
                    <div class="col-lg-6">
                        <label class="form-control-label">Meta Keyword</label>
                       <input class="form-control"  placeholder="Meta Keyword"   name="meta_keyword" value="{{ $blogs->meta_keyword }}"  type="text" >
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-6">
                        <label class="form-control-label">Blog Image</label><br><br>
                        <img src="<?php echo asset("/upload/blogimage/$blogs->blog_image")?>" style="width:100px;"><br><br>
                        {!! Form::file('blog_image', array('class' => 'image', 'data-validation'=>'[NOTEMPTY]', 'data-validation-message'=>'Blog Image must not be empty!', 'value'>'{{$blogs->blog_image}}')) !!}
                    </div>
                    <div class="col-lg-6"><br><br>
                        <label class="form-control-label">Is active &nbsp; &nbsp; &nbsp; &nbsp;</label>
                        <input type="checkbox" name="is_active" checked value="1" >
                    </div>
               </div>
               
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary width-150" >Submit</button>
                    <button type="reset" class="btn btn-warning width-150" >Reset</button>
                    <a href="{{ url('blog')}}"  class="btn btn-default">Cancel</a>
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
		$("#m_section_name").html("Blogs");
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
