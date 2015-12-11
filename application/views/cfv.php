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
                    <h2  class="head1">Volunteer Call</h2>
 <section class="contact" id="sc-contact">
        <div class="container">
            <h2 style="margin-top:0px"></h2><br/>

            <form method="post" id="contact-form">
                

                <input type="hidden" name="action" value="send_contact_form"/>

                <div class="alert hidden" id="contact-form-msg"></div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <br>
                        <input type="hidden" value="1" name="submit">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-barcode fa-fw"></i></span>
                            <input type="number" name="mid" class="form-control" placeholder="Membership Id">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                          <select name="gen" style="color: #57BCCA"class="form-control">
                                <option disabled="disabled" selected="selected">Gender</option>
                                <option>Male</option>
                                <option>Female </option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                            <span class="input-group-addon" style="font-size:20px">(+91)</span>
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
                          <select name="sec" style="color: #57BCCA" class="form-control">
                            	<option disabled="disabled" selected="selected">Section</option>
                                <option>Banglore</option>
                                <option>Bombay</option>
                                <option>Kolkata</option>
                                <option>Delhi</option>
                                <option>Gujrat</option>
                                <option>Hyderabad</option>
                                <option>Kerala</option>
                                <option>Kharagpur</option>
                                <option>Madras</option>
                                <option>Pune</option>
                                <option>Uttar Pradesh</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                          <select name="mem" style="color: #57BCCA"class="form-control">
                                <option disabled="disabled" selected="selected">Are you a CS member?</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-book fa-fw"></i></span>
                            <input type="text" name="college" class="form-control" placeholder="College">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                          <select name="whatsapp"style="color: #57BCCA"class="form-control">
                                <option disabled="disabled" selected="selected">Are you ready to join discussion in WhatsApp?</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-clock-o fa-fw"></i></span>
                            <input type="text" name="hrs" class="form-control" placeholder="How much time can you spend for CSIS weekly?">
                        </div>
                        <br>
                            <textarea form="contact-form" placeholder="Previous volunteering experiences"form="contact" name="exp"cols="10" rows="5" class="form-control" style=" color:#57BCCA; background-color: #f1f1f1;border-bottom-width: 1px;padding-bottom: 20px;margin-bottom: 13px;"></textarea>
                        <br>
                        <h4 style="margin-bottom:1em">Which field would you like to volunteer in?</h4>
                        <div class="acco">

                         <div class="input-group">
                        <input name="des" type="checkbox" class="form-control">Design
                        </div>
                         <div class="input-group">
                        <input name="pub" type="checkbox" class="form-control">Publicity
                        </div>

                        </div>
                        <p class="contact-form-info" style="float:none;margin-top:0;margin-bottom:0">* All fields are required.</p>
                        <div class="alert alert-danger msg" id="err">
                            Please Enter all fields
                        </div>
                        <div class="alert alert-danger msg" id="wrong">
                            Something went wrong. Please try again
                        </div>
                        <div class="alert alert-danger msg" id="nocap">
                            Please Prove that you're not a robot
                        </div>
                        <div style="padding-left: 25%;"id="cap"class="g-recaptcha" data-sitekey="6Lel2BITAAAAALzZCjscDnfBWs7KfSYl_0rJ19FF"></div>
                        <button class="btn btn-color1 btn-contact-form" onclick="register(event)">Submit<i class="fa fa-angle-right"></i></button>
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
<div id="loading"style="width:100%; height:100%; position:fixed; z-index:100; top:0; text-align:center; padding-top:30%; background: rgba(255,255,255,0.6); display:none;">
    <img src="<?=base_url('assets')?>/img/loading.gif">
</div>
<!--End content before Slider-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url('assets/')?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url('assets/')?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='<?=base_url('assets/')?>/bower_components/jAlert-master/src/jAlert-v3.css'>
<script src='<?=base_url('assets/')?>/bower_components/jAlert-master/vendor/jquery-1.11.3.min.js'></script>
<script src='<?=base_url('assets/')?>/bower_components/jAlert-master/src/jAlert-v3.js'></script>
<script src='<?=base_url('assets/')?>/bower_components/jAlert-master/src/jAlert-functions.js'></script>
<script type="text/javascript">
    $('.msg').hide();
    function register(event){
        event.preventDefault();
        var data = {};
        data.response = grecaptcha.getResponse()
        data.name=$('input[name="name"]').val();
        data.mid=$('input[name="mid"]').val();
        data.gen=$('select[name="gen"]').val();
        data.phone=$('input[name="phone"]').val();
        data.sec=$('select[name="sec"]').val();
        data.mem=$('select[name="mem"]').val();
        data.college=$('input[name="college"]').val();
        data.whatsapp=$('select[name="whatsapp"]').val();
        data.hrs=$('input[name="hrs"]').val();
        data.exp=$('textarea[name="exp"]').val();
        data.des=$('input[name="des"]').is(':checked');
        data.pub=$('input[name="pub"]').is(':checked');
        data.email=$('input[name="email"]').val();
        console.log(data)
        $('#loading').show();
        if(!(data.name&&data.mid&&data.gen&&data.phone&&data.sec&&data.mem&&data.college&&data.whatsapp&&data.hrs&&data.exp&&data.email&&(data.des||data.pub))){
            $('#err').slideDown()
            $('#loading').hide();
        }
        else if(0&&!data.response){
            $('.msg').hide();
            $('#nocap').slideDown();
        }
        else{
            $.post("<?=base_url('cfv/register')?>",data,function(res,status){
                $('#loading').hide();
                $('.msg').hide();
                console.log(res)
                if(res.status){
                    successAlert('Success', "We'll get back to you soon, if you are selected as volunteer");
                    window.location.replace('/');
                }
                else
                    errorAlert('Something went wrong');
            })
        }
    }
</script>
