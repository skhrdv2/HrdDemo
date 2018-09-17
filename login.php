<?php
session_start();
if(isset($_SESSION['loginname']))
{
   
        echo "<script> window.location.replace('index.php') </script>" ;
}

include_once('lib/config.inc.php');
$Db = new MySqlConn;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Login</title>

        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
        <link rel="stylesheet" href="assets/css/ace.min.css" />
        <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="includes/sweet-alert/sweet-alert.css">
    </head>

    <body class="login-layout">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <i class="ace-icon fa fa-leaf green"></i>
                                    <span class="red">HRD</span>
                                    <span class="white" id="id-text2">ระบบบุคลากร</span>
                                </h1>
                                <h4 class="blue" id="id-company-text"><?php $result= $Db->query('SELECT * FROM hrd_gen_organization');
                                foreach($result AS $row){
                                    echo $row['org_name'];
                                } ?>
                                </h4>
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header blue lighter bigger">
                                                <i class="ace-icon fa fa-coffee green"></i>
                                                Please Enter Your Information
                                            </h4>

                                            <div class="space-6"></div>

                                            <form name='LoginFrm' action="" method="post">
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" name="username" class="form-control" placeholder="Username" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" name="password" class="form-control" placeholder="Password" />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>

                                                    <div class="space"></div>

                                                    <div class="clearfix">
                                                        <label class="inline">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"> Remember Me</span>
                                                        </label>

                                                        <button type="submit" name='LoginBtn'  id='LoginBtn' class="width-35 pull-right btn btn-sm btn-primary">
                                                            <i class="ace-icon fa fa-key"></i>
                                                           
                                                            <span class="bigger-110">Login</span>
                                                        </button>
                                                    </div>

                                                    <div class="space-4"></div>
                                                </fieldset>
                                            </form>

                                            <div class="social-or-login center">
                                                <span class="bigger-110">Or Login Using</span>
                                            </div>

                                            <div class="space-6"></div>

                                            <div class="social-login center">
                                                <a class="btn btn-primary">
                                                    <i class="ace-icon fa fa-facebook"></i>
                                                </a>

                                                <a class="btn btn-info">
                                                    <i class="ace-icon fa fa-twitter"></i>
                                                </a>

                                                <a class="btn btn-danger">
                                                    <i class="ace-icon fa fa-google-plus"></i>
                                                </a>
                                            </div>
                                        </div><!-- /.widget-main -->

                                        <!-- <div class="toolbar clearfix">
                                             <div>
                                                <a href="#" data-target="#forgot-box" class="forgot-password-link">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    ลืมรหัสผ่าน
                                                </a>
                                            </div>

                                            <div>
                                                <a href="#" data-target="#signup-box" class="user-signup-link">
                                                    สมัครสมาชิก
                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>  
                                            </div>  
                                        </div> -->
                                    </div><!-- /.widget-body -->
                                </div><!-- /.login-box -->

                                <div id="forgot-box" class="forgot-box widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header red lighter bigger">
                                                <i class="ace-icon fa fa-key"></i>
                                                Retrieve Password
                                            </h4>

                                            <div class="space-6"></div>
                                            <p>
                                                Enter your email and to receive instructions
                                            </p>

                                            <form>
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="email" class="form-control" placeholder="Email" />
                                                            <i class="ace-icon fa fa-envelope"></i>
                                                        </span>
                                                    </label>

                                                    <div class="clearfix">
                                                        <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                            <i class="ace-icon fa fa-lightbulb-o"></i>
                                                            <span class="bigger-110">Send Me!</span>
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div><!-- /.widget-main -->

                                        <div class="toolbar center">
                                            <a href="#" data-target="#login-box" class="back-to-login-link">
                                                Back to login
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div><!-- /.widget-body -->
                                </div><!-- /.forgot-box -->

                                <div id="signup-box" class="signup-box widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header green lighter bigger">
                                                <i class="ace-icon fa fa-users blue"></i>
                                                New User Registration
                                            </h4>

                                            <div class="space-6"></div>
                                            <p> Enter your details to begin: </p>

                                            <form>
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="email" class="form-control" placeholder="Email" />
                                                            <i class="ace-icon fa fa-envelope"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="Username" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="Password" />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="Repeat password" />
                                                            <i class="ace-icon fa fa-retweet"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl">
                                                            I accept the
                                                            <a href="#">User Agreement</a>
                                                        </span>
                                                    </label>

                                                    <div class="space-24"></div>

                                                    <div class="clearfix">
                                                        <button type="reset" class="width-30 pull-left btn btn-sm">
                                                            <i class="ace-icon fa fa-refresh"></i>
                                                            <span class="bigger-110">Reset</span>
                                                        </button>

                                                        <button type="button" class="width-65 pull-right btn btn-sm btn-success">
                                                            <span class="bigger-110">Register</span>

                                                            <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                      
                                        <div class="toolbar center">
                                            <a href="#" data-target="#login-box" class="back-to-login-link">
                                                <i class="ace-icon fa fa-arrow-left"></i>
                                                Back to login
                                            </a>
                                        </div>
                                    </div><!-- /.widget-body -->
                                </div><!-- /.signup-box -->
                            </div><!-- /.position-relative -->

                            <div class="navbar-fixed-top align-right">
                                <br />
                                &nbsp;
                                <a id="btn-login-dark" href="#">Dark</a>
                                &nbsp;
                                <span class="blue">/</span>
                                &nbsp;
                                <a id="btn-login-blur" href="#">Blur</a>
                                &nbsp;
                                <span class="blue">/</span>
                                &nbsp;
                                <a id="btn-login-light" href="#">Light</a>
                                &nbsp; &nbsp; &nbsp;
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.main-content -->
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="includes/sweet-alert/sweet-alert.js"></script>
        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement)
                document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function ($) {
                $(document).on('click', '.toolbar a[data-target]', function (e) {
                    e.preventDefault();
                    var target = $(this).data('target');
                    $('.widget-box.visible').removeClass('visible');//hide others
                    $(target).addClass('visible');//show target
                });
            });



            //you don't need this, just used for changing background
            jQuery(function ($) {
                $('#btn-login-dark').on('click', function (e) {
                    $('body').attr('class', 'login-layout');
                    $('#id-text2').attr('class', 'white');
                    $('#id-company-text').attr('class', 'blue');

                    e.preventDefault();
                });
                $('#btn-login-light').on('click', function (e) {
                    $('body').attr('class', 'login-layout light-login');
                    $('#id-text2').attr('class', 'grey');
                    $('#id-company-text').attr('class', 'blue');

                    e.preventDefault();
                });
                $('#btn-login-blur').on('click', function (e) {
                    $('body').attr('class', 'login-layout blur-login');
                    $('#id-text2').attr('class', 'white');
                    $('#id-company-text').attr('class', 'light-blue');

                    e.preventDefault();
                });

            });
        </script>
        
    </body>
</html>

<?php if(isset($_POST['LoginBtn'])){
    
    $num = $Db->num_rows("SELECT * FROM hrd_person WHERE username='".$_POST['username']."' AND password ='".md5($_POST['password'])." '");
    
        if ($num > 0) {
          
            $sql = $Db->query("SELECT *,concat('คุณ',h.fname,' ',h.lname) as fullname  FROM hrd_person h 
                LEFT OUTER JOIN hrd_prename p ON p.prename_id = h.prename_id
                LEFT OUTER JOIN hrd_department h2 on h2.department_id=h.department_id 
            	WHERE h.username='".$_POST['username']."' AND h.password ='".md5($_POST['password'])." '");
            foreach ($sql AS $row) {
                $_SESSION['loginname'] = $row['username'];
                $_SESSION['person_id'] = $row['person_id'];
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['lname'] = $row['lname'];
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['department_id'] = $row['department_id'];
                $_SESSION['department_name'] = $row['department_name'];
            }
        echo "<script language='javascript'>";
        echo "window.location.replace('index.php') </script>" ; 
        }
     else {
         
        echo "<script language='javascript'>";
        echo "swal({
            type: 'error',
            title: 'ผิดพลาด',
            text: 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง!',
            showConfirmButton: false,
            timer:1500
          });";
        echo "</script>";
    } 
    
 } ?>