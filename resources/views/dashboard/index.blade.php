@section('title', 'Dashboard')
@include('main')
@include('components/mainmenu')
@include('components/breadcrumb')
 <meta name="csrf-token" content="{{ csrf_token() }}">
<div class="cat__content">

<div class="row">
    <div class="col-xl-4"  style="background-color:#fff; margin-bottom:21px;">
        <div class="cat__core__widget cat__core__widget__2">
            <div class="cat__core__widget__2__head" style="background-image: url('{!! asset('/dist/modules/dummy-assets/common/img/photos/5.jpeg') !!}');">
            </div>
            <div class="cat__core__widget__2__content">
                <div class="cat__core__widget__2__left">
                 <?php
                    if(isset(Auth::user()->user_id) && isset(Auth::user()->profile_image) && !empty(Auth::user()->profile_image))
                    {
                        $profileimage=Auth::user();
                   ?>   
                   <a class="cat__core__avatar cat__core__avatar--90 cat__core__avatar--border-white" href="javascript:void(0);">
                     <img src="<?php echo asset("/upload/profileimage/$profileimage->profile_image") ?>" alt="">
                    </a>      
                   <?php }else{ ?>
                         <a class="cat__core__avatar cat__core__avatar--90 cat__core__avatar--border-white" href="javascript:void(0);">
                            <img src="{!! asset('/upload/profileimage/user_profile.jpg') !!}" alt="Alternative text to the image">
                         </a>
                   <?php } ?>
                    <br />
					<h3>Welcome  {{ Auth::user()->name }}</h3>
					<h6>{{ Auth::user()->email }}</h6><br>
                	<p>{{ Auth::user()->profile_summary }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-lg-6">
                <div class="cat__core__widget p-3">
                    <strong>Orders:</strong>
                    <p class="text-muted">Placed order by customer</p>
                    <div class="progress mb-3" style="height: 7px">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                    </div>
                    <strong>Customers:</strong>
                    <p class="text-muted">Registered customer</p>
                    <div class="progress mb-3" style="height: 7px">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                    </div>
                    <strong>Search:</strong>
                    <p class="text-muted">Count of search queries</p>
                    <div class="progress mb-3" style="height: 7px">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
                    </div>
                    <strong>Page Viewed:</strong>
                    <p class="text-muted">Website viewed by visitors</p>
                    <div class="progress mb-3" style="height: 7px">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 56%"></div>
                    </div>
                    <strong>Products:</strong>
                    <p class="text-muted">Total products in shopping cart</p>
                    <div class="progress mb-3" style="height: 7px">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 18%"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cat__core__widget cat__core__widget__3 bg-default">
                    <div class="carousel slide" id="carousel-1" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <a href="javascript: void(0);" class="cat__core__widget__3__body text-white">
                                    <div class="cat__core__widget__3__icon">
                                        <i class="icmn-accessibility"></i>
                                    </div>
                                    <h2><i class="icmn-accessibility"></i> Sales Growth</h2>
                                    <p>View Report</p>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="javascript: void(0);" class="cat__core__widget__3__body text-white">
                                    <div class="cat__core__widget__3__icon">
                                        <i class="icmn-download"></i>
                                    </div>
                                    <h2><i class="icmn-download"></i> All Reports</h2>
                                    <p>Download</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cat__core__widget cat__core__widget__3 bg-default">
                    <div class="carousel slide" id="carousel-2" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-2" data-slide-to="1" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <a href="javascript: void(0);" class="cat__core__widget__3__body text-white">
                                    <div class="cat__core__widget__3__icon">
                                        <i class="icmn-barcode"></i>
                                    </div>
                                    <h2>
                                        <i class="icmn-barcode"></i> Products
                                    </h2>
                                    <p>Download
                                    </p>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="javascript: void(0);" class="cat__core__widget__3__body text-white">
                                    <div class="cat__core__widget__3__icon">
                                        <i class="icmn-stats-dots"></i>
                                    </div>
                                    <h2>
                                        <i class="icmn-stats-dots"></i> Orders
                                    </h2>
                                    <p>Download
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cat__core__widget cat__core__widget__3 bg-default">
                    <div class="carousel slide" id="carousel-4" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-4" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-4" data-slide-to="1" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <a href="javascript: void(0);" class="cat__core__widget__3__body text-white">
                                    <div class="cat__core__widget__3__icon">
                                        <i class="icmn-users"></i>
                                    </div>
                                    <h2>
                                        <i class="icmn-users"></i> Customers
                                    </h2>
                                    <p>Download
                                    </p>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="javascript: void(0);" class="cat__core__widget__3__body text-white">
                                    <div class="cat__core__widget__3__icon">
                                        <i class="icmn-cart"></i>
                                    </div>
                                    <h2>
                                        <i class="icmn-cart"></i> In Cart
                                    </h2>
                                    <p>Download
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="cat__core__widget">
            <p class="pt-3 px-3"><strong>REVENUE STATISTICS</strong></p>
            <div class="chart-line height-300 chartist"></div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="cat__core__widget">
            <p class="pt-3 px-3"><strong>SITE VISITS GROWTH</strong></p>
            <div class="chart-overlapping-bar height-300 chartist"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="cat__core__widget">
            <div class="cat__core__step cat__core__step--success">
                <span class="cat__core__step__digit">
                    <i class="icmn-database"><!-- --></i>
                </span>
                <div class="cat__core__step__desc">
                    <span class="cat__core__step__title">Databases</span>
                    <p>Total Products: 61756</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="cat__core__widget">
            <div class="cat__core__step cat__core__step--primary">
                <span class="cat__core__step__digit">
                    <i class="icmn-users"><!-- --></i>
                </span>
                <div class="cat__core__step__desc">
                    <span class="cat__core__step__title">Users</span>
                    <p>Total Users: 7658</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="cat__core__widget">
            <div class="cat__core__step cat__core__step--danger">
                <span class="cat__core__step__digit">
                    <i class="icmn-bullhorn"><!-- --></i>
                </span>
                <div class="cat__core__step__desc">
                    <span class="cat__core__step__title">Connections</span>
                    <p>Total Visitors: 5543</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="cat__core__widget">
            <div class="cat__core__step cat__core__step--default">
                <span class="cat__core__step__digit">
                    <i class="icmn-price-tags"><!-- --></i>
                </span>
                <div class="cat__core__step__desc">
                    <span class="cat__core__step__title">Sales</span>
                    <p>Total Orders: 646</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="cat__core__widget">
            <div class="table-responsive">
                <table class="table table-hover nowrap" width="100%">
                    <thead class="thead-inverse">
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Registration Date</th>
                        <th>Last Login Date</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Date</th>
                        <th>Salary</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>Damon</td>
                        <td>5516 Adolfo Green</td>
                        <td>Littelhaven</td>
                        <td>85</td>
                        <td>2014/06/13</td>
                        <td>2016/06/13</td>
                    </tr>
                    <tr>
                        <td>Torrey</td>
                        <td>1995 Richie Neck</td>
                        <td>West Sedrickstad</td>
                        <td>77</td>
                        <td>2014/09/12</td>
                        <td>2014/11/12</td>
                    </tr>
                    <tr>
                        <td>Miracle</td>
                        <td>176 Hirthe Squares</td>
                        <td>Ryleetown</td>
                        <td>82</td>
                        <td>2013/09/27</td>
                        <td>2013/12/27</td>
                    </tr>
                    <tr>
                        <td>Damon</td>
                        <td>5516 Adolfo Green</td>
                        <td>Littelhaven</td>
                        <td>85</td>
                        <td>2014/06/13</td>
                        <td>2014/07/13</td>
                    </tr>
                    <tr>
                        <td>Torrey</td>
                        <td>1995 Richie Neck</td>
                        <td>West Sedrickstad</td>
                        <td>77</td>
                        <td>2014/09/12</td>
                        <td>2014/10/12</td>
                    </tr>
                    <tr>
                        <td>Miracle</td>
                        <td>176 Hirthe Squares</td>
                        <td>Ryleetown</td>
                        <td>82</td>
                        <td>2013/09/27</td>
                        <td>2013/11/02</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- END: page scripts -->
<!-- START: page scripts -->
<script>
    $( function() {

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
<!-- END: page scripts -->
@include('components/footer')
