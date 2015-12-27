    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

<!--Navigation Top start-->
<section class="top-navbar container navbar-fixed-top" style="width:90%">
    <nav class="navbar navbar-default" id="navigation-top">
        <div class="container-fluid" style="background:white">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--Brand / Logo start-->
                <a class="navbar-brand scroll-to" href="#page-top" style="height: 71px;padding-top: 0px;margin-top: 0px;padding-bottom:0px;">
                    <img src="<?=base_url('assets')?>/ieee/logo.png" class="img-responsive" style="width:260px"/>
                </a>
                <!--Brand / Logo end-->
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- Nav-Links start -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?=base_url()?>">HOME</a></li>
                    <li>
                      
                    </li>
                </ul>
                <!-- Nav-Links end -->
            </div>
        </div>
    </nav>
</section>
<!--Navigation Top end-->

<!--Teaser Slider end-->

<!--Start content before Slider-->
<div class="content-after-slider">

    <!--Attractions start-->
    <section class="attractions" id="sc-attractions" style="margin-top:6em">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                     <div class="page-title">
                        <h2>Banglore</h2>
                        <div class="description"></div>
                    </div>
    <div class="row">
                        <div class="col-xs-12">
                            <div class="card" style="overflow-x:scroll">
                                <div class="card-header">

                                    <div class="card-title">
                                    <!-- <div class="title"></div> -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center">Train No.</th>
                                                <th style="text-align:center">Train Name</th>
                                                <th style="text-align:center">Arrival Time</th>
                                                <th style="text-align:center">Arrival Day</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align:center; font-weight:bold">
                                                
                                                <td colspan="4">From Banglore</td>
                                            </tr>
                                            <tr>
                                                <td>16526</td>
                                                <td>Island Express</td>
                                                <td>12:40 PM</td>
                                                <td>Friday</td>
                                            </tr>
                                            <tr>
                                                <td>16561</td>
                                                <td>Yeshvantpur-Kochiveli AC Exp</td>
                                                <td>6:50 AM</td>
                                                <td>Saturday</td>
                                            </tr>
                                            
                                        </tbody>

                                        
                                    </table>
                                    <br>
                                    <br>
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                    <thead>
                                            <tr>
                                                <th style="text-align:center">Train No.</th>
                                                <th style="text-align:center">Train Name</th>
                                                <th style="text-align:center">Departure Time</th>
                                                <th style="text-align:center">Departure Day</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align:center; font-weight:bold">
                                                
                                                <td colspan="4">To Banglore</td>
                                            </tr>
                                            <tr>
                                                <td>16525</td>
                                                <td>Island Express</td>
                                                <td>12:45 PM</td>
                                                <td>Monday</td>
                                            </tr>
                                            <tr>
                                                <td>16316</td>
                                                <td>Kochuveli-Banglore Express</td>
                                                <td>4:45 PM</td>
                                                <td>Monday</td>
                                            </tr>
                                            <tr>
                                                <td>12258</td>
                                                <td>Kochuveli-Yeshvantpur Garib Rath</td>
                                                <td>%:00 PM</td>
                                                <td>Monday</td>
                                            </tr>
                                            
                                        </tbody>
                                        </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Attractions end-->


    <!--Footer start-->
    <footer class="footer" id="sc-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="footer-copyright">
                        &copy;  IEEE CET Computer Society Chapter Web Team.
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="footer-social-media">
                        <li><a target="_blank" href="https://www.facebook.com/ieeecsis/"><i class="fa fa-facebook fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer end-->
</div>

<div id="loading"style="width:100%; height:100%; position:fixed; z-index:100; top:0; text-align:center; padding-top:25%; background: rgba(255,255,255,0.6)">
    <img style="height:50%"src="<?=base_url('assets')?>/img/loading.gif">
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url('assets/')?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url('assets/')?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){
        var loading = $('#loading');
        loading.hide()
        
    })
</script