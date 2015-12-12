<!DOCTYPE html>
<html>

<head>
    <title>CSIS Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/select2.min.css">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/themes.css">
</head>


<body class="flat-blue login-page">
    <div class="container">
        <div class="login-box">
                <?php if(isset($error)){?>
                    <div class="alert alert-warning">
                        <?=$error?>
                    </div>
                <?}?>

            <div>
                <div class="login-form row">
                    <div class="col-sm-12 text-center login-header">
                        <i class="login-logo fa fa-connectdevelop fa-5x"></i>
                        <h4 class="login-title">Computer Society India Symposium</h4>
                    </div>
                    <div class="col-sm-12">
                        <div class="login-body">
                            <div class="progress hidden" id="login-progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    Log In...
                                </div>
                            </div>
                            <form method="post">
                                <div class="control">
                                    <input type="text" name="user" class="form-control" placeholder="Username" />
                                </div>
                                <div class="control">
                                    <input type="password" name="pass" class="form-control" placeholder="Password" />
                                </div>
                                <div class="login-button text-center">
                                    <input type="submit" class="btn btn-primary" value="Login">
                                </div>
                            </form>
                        </div>
<!--                         <div class="login-footer">
                            <span class="text-right"><a href="#" class="color-white">Forgot password?</a></span>
                        </div>
 -->                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript Libs -->
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/Chart.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/bootstrap-switch.min.js"></script>
    
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/select2.full.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/ace.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/mode-html.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/theme-github.js"></script>
    <!-- Javascript -->
    <script type="text/javascript" src="<?=base_url()?>assets/js/app.js"></script>
</body>

</html>
