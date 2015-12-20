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
                    <h2  style="margin-bottom:13px" class="head1">REGISTRATION</h2>
 <section class="contact" id="sc-contact">
        <div class="container">
            <h2 style="margin-top:0px">For Non IEEE Computer Society Members</h2><br/>
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
                                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                          <select name="mtype" style="color: #57BCCA"class="form-control">
                                <option disabled="disabled" selected="selected">Membership Type</option>
                                <option value="1">IEEE Member</option>
                                <option value="0">Non IEEE Member</option>
                            </select>
                        </div>
                        <br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-barcode fa-fw"></i></span>
                            <input type="number" name="mid" class="form-control" placeholder="Membership Id">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                          <select name="sex" style="color: #57BCCA"class="form-control">
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
                          <select name="section" style="color: #57BCCA" class="form-control">
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
                            <span class="input-group-addon"><i class="fa fa-book fa-fw"></i></span>
                            <input type="text" name="college" class="form-control" placeholder="College">
                        </div>
                        <br>
                        <textarea name="why"cols="10" rows="5" class="form-control" style="background:#F1F1F1" placeholder="what makes you a good candidate for IEEE CSIS (include your leadership experience in IEEE too, this question decides your selection to second phase)"></textarea>
                        <br/>
                        <p class="contact-form-info" style="float:none;margin-top:0;margin-bottom:0">* All fields are required.</p>

                        <div class="alert alert-danger msg" id="err">
                            Please Enter all fields
                        </div>
                        <div class="alert alert-danger msg" id="wrong">
                            Something went wrong. Please try again
                        </div>

                        <input type="hidden" name="register" value="1">

                        <button id="register" class="btn btn-color1 btn-contact-form">Register for Phase 1<i class="fa fa-angle-right"></i></button>



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

<div id="loading"style="width:100%; height:100%; position:fixed; z-index:100; top:0; text-align:center; padding-top:25%; background: rgba(255,255,255,0.6)">
    <img style="height:50%"src="<?=base_url('assets')?>/img/loading.gif">
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url('assets/')?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url('assets/')?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='<?=base_url('assets/')?>/bower_components/jAlert-master/src/jAlert-v3.css'>
<script src='<?=base_url('assets/')?>/bower_components/jAlert-master/src/jAlert-v3.js'></script>
<script src='<?=base_url('assets/')?>/bower_components/jAlert-master/src/jAlert-functions.js'></script>

<script>
    $(document).ready(function(){
        var loading = $('#loading');
        loading.hide()
        $('.msg').hide()
        $("#register").click(function(event){
            event.preventDefault()
            data = {}
            data.name = $('input[name="name"]').val()
            data.mtype = $('select[name="mtype"]').val()
            data.mid = $('input[name="mid"]').val()
            data.sex = $('select[name="sex"]').val()
            data.phone = $('input[name="phone"]').val()
            data.email = $('input[name="email"]').val()
            data.section = $('select[name="section"]').val()
            data.college = $('input[name="college"]').val()
            data.why = $('textarea[name="why"]').val()
            console.log(data)


            if(!(data.name&&data.mtype&&data.sex&&data.phone&&data.email&&data.section&&data.college&&data.why)){
                errorAlert('Please fill all the details');
            }else{
                $('#loading').show()
                $.post("<?=base_url('regnoncs/register')?>",data,function(res,status){
                $('#loading').hide();
                console.log(res);
                var result=$.parseJSON(res);
                if(result.status==true){
                    successAlert("Registration for Phase 1 successful. We will contact you if you're selected for Phase 2");
                    document.forms[0].reset()    
                }
                else
                    errorAlert('Something went wrong');
                })
            }
        })
    })
</script