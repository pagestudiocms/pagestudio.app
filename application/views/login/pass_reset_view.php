<!DOCTYPE html>
<html lang="en">
<head>    
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="asset-host" content="">
    <meta name="asset-provider" content="default">

    <title>Login - PageStudio</title>
    
    <meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
    
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>
    
    <!-- stylesheets
	============================================= -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>public_html/themes/_system/css/login.css" media="screen" rel="stylesheet">    
    <link href="<?php echo BASE_URL; ?>public_html/themes/_system/css/ui-icons.css" media="screen" rel="stylesheet">    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
    
    <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>public_html/themes/_system/ico/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>public_html/themes/_system/ico/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo BASE_URL; ?>public_html/themes/_system/ico/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo BASE_URL; ?>public_html/themes/_system/ico/apple-touch-icon-114x114.png">

</head>
<body class="login">

    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-wrap">
                        <h1><?php echo $page['heading']; ?></h1>
                        <?php 
                        foreach($errors as $error) {
                            echo '<div class="alert alert-danger">' . $error . '</div>';
                        }

                        if(Session::exists('success')) {
                            echo '<div class="alert alert-success">' . Session::flash('success') . '</div>';
                        }
                        ?>
                        <!-- Login Form
                        ================================================ -->
                        <form id="login-form" name="admin_login" method="POST" action="<?php $_SERVER['PHP_SELF'];?>" target="_self" accept-charset="UTF-8" autocomplete="off">
                            <div class="form-group <?php if (isset($_SESSION['no_username'])) { echo 'has-error'; } ?>">
                                <label for="email" class="sr-only">Email</label>
                                <input type="text" name="username" class="form-control" value="<?php echo Input::get('username'); ?>" placeholder="Username" tabindex="1" />
                            </div>

                            <input type="hidden" name="token" value="<?php echo Token::gen(); ?>" />
                            <button type="submit" id="submit" name="reset" value="submit" tabindex="3" class="btn btn-black btn-block">Reset</button>
                        </form>
                        
                        <p><a href="<?php echo BASE_URL . 'login/';?>" class="forget">&larr; Back to login</a></p>
                        <hr />
                    </div>
                </div> <!-- /.col-xs-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>
	
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>&copy; 2014 <strong><a href="#" target="_blank">Page Studio</a>.</strong></p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Core Scripts - Include with every page -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> 
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <script src="<?php echo BASE_URL; ?>public_html/themes/_system/js/app.js"></script>    
    <script src="<?php echo BASE_URL; ?>public_html/themes/_system/js/custom.js"></script>
    
    <script>
    /*!
     * Show password in type field
     */
    function showPassword() {    
        var key_attr = $('#key').attr('type');
        
        if(key_attr != 'text') {
            $('.checkbox').addClass('show');
            $('#key').attr('type', 'text');
        } else {
            $('.checkbox').removeClass('show');
            $('#key').attr('type', 'password');
        }
    }
    </script>    
</body>
</html>
<?php
/* End of file login_view.php */
/* Location: ./application/views/login/login_view.php */