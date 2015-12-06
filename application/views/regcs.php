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
                    <img src="<?=base_url('assets')?>/ieee/logo.png" class="img-responsive" alt="Accommodation Landing Page" style="width:260px"/>
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
                    <h2  class="head1">REGISTRATION</h2>
 <section class="contact" id="sc-contact">
        <div class="container">
            <h2 style="margin-top:0px">For IEEE Computer Society Members</h2><br/>
            <form action="#" id="contact-form">
                <input type="hidden" name="action" value="send_contact_form"/>

                <div class="alert hidden" id="contact-form-msg"></div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-barcode fa-fw"></i></span>
                            <input type="text" name="mid" class="form-control" placeholder="Membership Id">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                          <select class="form-control">
                                <option disabled="disabled" selected="selected">Gender</option>
                                <option>Male</option>
                                <option>Female </option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                            <input type="number" name="phone" class="form-control" placeholder="Phone No">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Email Id">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
                          <select class="form-control">
                            	<option disabled="disabled" selected="selected">Section</option>
                            	<option>Kerala</option>
                            	<option>Madras</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-book fa-fw"></i></span>
                            <input type="text" name="email" class="form-control" placeholder="College">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-coffee fa-fw"></i></span>
                            <select class="form-control">
                            	<option disabled="disabled" selected="selected">Food Preference</option>
                            	<option>Veg</option>
                            	<option>Non Veg</option>
                            </select>
                        </div>
                        <br>
                        <h2>Accomodation</h2>


                        <div class="acco">

                         <div class="input-group">
                        <input type="checkbox" class="form-control">26-02-2016
                        </div>
                         <div class="input-group">
                        <input type="checkbox" class="form-control">27-02-2016
                        </div>
                         <div class="input-group">
                        <input type="checkbox" class="form-control">28-02-2016
                        </div>

                        </div>
                        <div class="regfooter">
                            Note : Accomodation for 27<sup>th</sup> Feb is included in the registration fee. For accomodation on 26<sup>th</sup> and 28<sup>th</sup>, an amount of &#x20B9<b></b>100/day should be paid
                        </div>
                        <br>
                                 <p class="contact-form-info">*All fields are required.</p>
                        <button class="btn btn-color1 btn-contact-form">Proceed to payment<i class="fa fa-angle-right"></i></button>
                    </div>
                    
                </div>
                
            </form>
        </div>
    </section>
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
<!--End content before Slider-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url('assets/')?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url('assets/')?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
