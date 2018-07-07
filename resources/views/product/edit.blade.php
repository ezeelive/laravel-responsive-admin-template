@section('title', 'Add Product')
@include('main')
@include('components/mainmenu')
@include('components/breadcrumb')
<div class="cat__content">

<!-- START: ecommerce/Pages-edit -->
<section class="card">
   <div class="card-header">
        <div class="dropdown pull-right">
           <a href="{{ url('product/create')}}" class="btn btn-success "><i class="fa fa-plus"></i>&nbsp; &nbsp; Add Product &nbsp; &nbsp;</a>
       </div>
        <span class="cat__core__title">
            <strong>Add Product</strong>
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
			 	 {!! Form::model($products, ['method' => 'PATCH', 'id'=>'form-validation', 'name'=>'form-validation', 'route' => ['product.update', $products->product_id]]) !!}
				<div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-name">Name <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-name" class="form-control"  placeholder="Name"   name="name"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Name must not be empty!" value="{{ $products->name }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="code">Sku Code <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-code" class="form-control"  placeholder="Sku Code"   name="sku_code"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Sku Code must not be empty!" value="{{ $products->sku_code }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-control-label">Product Description</label>
                    <textarea class="summernote" rows="4" id="l15" name="product_description" placeholder="Product Description">{{ $products->product_description }}</textarea>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-metatitle">Disclaimer <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <textarea  rows="4" class="form-control"  placeholder="Disclaimer"  data-validation="[NOTEMPTY]" data-validation-message="Disclaimer must not be empty!"  name="disclaimer"  type="text" >{{ $products->disclaimer }}</textarea>
                        </div>
                    </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                            <label for="metadescription" style="margin-top:10px;">Meta Description</label>
                            <textarea  rows="4" class="form-control"  placeholder="Meta Description"   name="meta_description"  type="text" >{{ $products->meta_description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-metatitle">Meta Title <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-metatitle" class="form-control"  placeholder="Meta Title"   name="meta_title"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Meta Title must not be empty!" value="{{ $products->meta_title }}">
                        </div>
                    </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-metatitle" style="margin-top:9px;">Meta Keyword</label>
                            <input class="form-control"  placeholder="Meta Keyword"   name="meta_keyword"  type="text"  value="{{ $products->meta_keyword }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group"><br><br>
                            <label class="form-control-label">Show Home Product &nbsp; &nbsp; &nbsp; &nbsp;</label>
                            <input type="checkbox" name="home_show_product" checked value="1" >
                        </div>
                    </div>
                     <div class="col-lg-6">
                        <div class="form-group"><br><br>
                            <label class="form-control-label">Is active &nbsp; &nbsp; &nbsp; &nbsp;</label>
                            <input type="checkbox" name="is_active" checked value="1" >
                        </div>
                     </div>   
               </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary width-150" >Submit</button>
                    <button type="reset" class="btn btn-warning width-150" >Reset</button>
                    <a href="{{ url('product')}}"  class="btn btn-default">Cancel</a>
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
		$("#m_section_name").html("Products");
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
