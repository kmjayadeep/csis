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
                    <h2  class="head1">PAYMENT</h2>
 <section class="contact" id="sc-contact">
        <div class="container">
            <h2 style="margin-top:0px">For IEEE Computer Society Members</h2><br/>

            Hi <?=$name;?><br/>
            <p>Thank you for registering. Please proceed to pay the registration fee</p>

            <h4>Total Amount Payable : &#x20B9<b></b><?=$mem?> + &#x20B9<b></b><?=$acco?> + Service charge = &#x20B9<b></b><?=$total?></h4>

            <br/>
            <button onclick="popupTs()" class="btn btn-color1">Pay Now
            </button>
            <noscript id="tsNoJsMsg">
            JS Not supported on your browser
            </noscript>


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
<script src="//www.townscript.com/popup-widget/townscript-widget.nocache.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        var loading = $('#loading');
        loading.hide()
    });

    var popupTs = function(){
        data =  {
            name: "<?=$name?>",
            email: "<?=$email?>",
            ticketname1:"<?=$ticket?>",
            ticketvalue1:"1",
            ticketname2:"1 Day Accomodation",
            ticketvalue2:"<?=$accotickets?>"
        };
        var k = "https://www.townscript.com/widget/ieeecsis?name=" + data.name + "&emailid=" + data.email + "&" + data.ticketname1 + "=" + data.ticketvalue1+ "&" + data.ticketname2 + "=" + data.ticketvalue2;
        document.getElementById("popupcontents").innerHTML = '<iframe id="tsiframe" height="100%" width="100%" frameborder="0" scrolling="auto" src="' + k + '" type= "text/javascript"></iframe>', document.getElementById("popupbackground").style.display = "block", document.getElementById("popupcontainer").style.maxWidth = "630px"
    }
</script