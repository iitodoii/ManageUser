<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
</head>

<?php include 'connector.php';
// session_start();
// if ($_SESSION['username'] == null) {
//     header("location: _nologin.php");
// }
// $result = $conn->query("select * from master_user where username='" . $_SESSION['username'] . "'");
// $obj = mysqli_fetch_object($result)
?>

<body>
    <!------ Include the above in your HEAD tag ---------->
    <?php $sql = "SELECT * FROM `tbl_m_user`";
    $result = $conn->query($sql);
    $myJson2 = json_encode($result);

    ?>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
                In</label>
            <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Forgot
                Password</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" onclick=login() value="Sign In">
                    </div>
                    <div class="hr"></div>
                </div>
                <div class="for-pwd-htm">
                    <div class="group">
                        <label for="user" class="label">Username or Email</label>
                        <input id="user" type="text" class="input">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Reset Password">
                    </div>
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    function loginPass(role) {
        swal({
            title: "ยินดีต้อนรับ!",
            text: "เข้าสู่ระบบสำเร็จ!",
            icon: "success",
            button: false,
        });

        if(role=="baby")
        {
            setTimeout(
            function() {
                window.location.href = "hbd.html";
            }, 1000);
        }else if(role=="trader"){
            setTimeout(
            function() {
                window.location.href = "overview.php";
            }, 1000);
        }else if(role=="accountant"){
            setTimeout(
            function() {
                window.location.href = "account.php";
            }, 1000);
        }
    }

    function login() {
        var user = $('#user').val();
        var pass = $('#pass').val();
        $.ajax({
            type: 'POST',
            url: '_checkLogin.php',
            data: {
                user: user,
                pass: pass
            },
            dataType: 'json',
            success: function(response) {
                if (response.status) {
                    loginPass(response.role);
                } else {
                    swal("ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง !", {
                        icon: "error",
                    });
                }
            },
            error: function(e) {}
        });
    }
</script>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>

<Style>
    body {
        margin: 0;
        color: #edf3ff;
        background: #c8c8c8;
        background: url(dist/img/login_background.jpg) fixed;
        background-size: cover;
        font: 600 16px/18px 'Open Sans', sans-serif;
    }

    :after,
    :before {
        box-sizing: border-box
    }

    .clearfix:after,
    .clearfix:before {
        content: '';
        display: table
    }

    .clearfix:after {
        clear: both;
        display: block
    }

    a {
        color: inherit;
        text-decoration: none
    }

    .login-wrap {
        width: 100%;
        margin: auto;
        max-width: 510px;
        min-height: 510px;
        position: relative;
        /* background: url(dist/img/loginbox.jpg) no-repeat center; */
        background-size: cover;
        box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
        /* margin-top: %; */
        top: 20%;
        -ms-transform: translateY(20%);
        transform: translateY(20%);
    }

    .login-html {
        width: 100%;
        height: 100%;
        position: absolute;
        padding: 90px 70px 50px 70px;
        background: rgba(0, 0, 0, 0.5);
        /* margin-top: 25%; */
        /* top:50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%); */
    }

    .login-html .sign-in-htm,
    .login-html .for-pwd-htm {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        -webkit-transform: rotateY(180deg);
        transform: rotateY(180deg);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: all .4s linear;
        transition: all .4s linear;
    }

    .login-html .sign-in,
    .login-html .for-pwd,
    .login-form .group .check {
        display: none;
    }

    .login-html .tab,
    .login-form .group .label,
    .login-form .group .button {
        text-transform: uppercase;
    }

    .login-html .tab {
        font-size: 22px;
        margin-right: 15px;
        padding-bottom: 5px;
        margin: 0 15px 10px 0;
        display: inline-block;
        border-bottom: 2px solid transparent;
    }

    .login-html .sign-in:checked+.tab,
    .login-html .for-pwd:checked+.tab {
        color: #fff;
        border-color: #1161ee;
    }

    .login-form {
        min-height: 345px;
        position: relative;
        -webkit-perspective: 1000px;
        perspective: 1000px;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .login-form .group {
        margin-bottom: 15px;
    }

    .login-form .group .label,
    .login-form .group .input,
    .login-form .group .button {
        width: 100%;
        color: #fff;
        display: block;
    }

    .login-form .group .input,
    .login-form .group .button {
        border: none;
        padding: 15px 20px;
        border-radius: 25px;
        background: rgba(255, 255, 255, .1);
    }

    .login-form .group input[data-type="password"] {
        /* text-security: circle; */
        -webkit-text-security: circle;
    }

    .login-form .group .label {
        color: #aaa;
        font-size: 12px;
    }

    .login-form .group .button {
        /* background: linear-gradient(rgb(78, 49, 132) 0%, rgb(0, 0, 0) 75%); */
        background: linear-gradient(rgb(245, 184, 210) 0%, rgb(78, 49, 132) 70%);
    }

    .login-form .group label .icon {
        width: 15px;
        height: 15px;
        border-radius: 2px;
        position: relative;
        display: inline-block;
        background: rgba(255, 255, 255, .1);
    }

    .login-form .group label .icon:before,
    .login-form .group label .icon:after {
        content: '';
        width: 10px;
        height: 2px;
        background: #fff;
        position: absolute;
        -webkit-transition: all .2s ease-in-out 0s;
        transition: all .2s ease-in-out 0s;
    }

    .login-form .group label .icon:before {
        left: 3px;
        width: 5px;
        bottom: 6px;
        -webkit-transform: scale(0) rotate(0);
        transform: scale(0) rotate(0);
    }

    .login-form .group label .icon:after {
        top: 6px;
        right: 0;
        -webkit-transform: scale(0) rotate(0);
        transform: scale(0) rotate(0);
    }

    .login-form .group .check:checked+label {
        color: #fff;
    }

    .login-form .group .check:checked+label .icon {
        background: #1161ee;
    }

    .login-form .group .check:checked+label .icon:before {
        -webkit-transform: scale(1) rotate(45deg);
        transform: scale(1) rotate(45deg);
    }

    .login-form .group .check:checked+label .icon:after {
        -webkit-transform: scale(1) rotate(-45deg);
        transform: scale(1) rotate(-45deg);
    }

    .login-html .sign-in:checked+.tab+.for-pwd+.tab+.login-form .sign-in-htm {
        -webkit-transform: rotate(0);
        transform: rotate(0);
    }

    .login-html .for-pwd:checked+.tab+.login-form .for-pwd-htm {
        -webkit-transform: rotate(0);
        transform: rotate(0);
    }

    .hr {
        height: 2px;
        margin: 60px 0 50px 0;
        background: rgba(255, 255, 255, .2);
    }

    .foot-lnk {
        text-align: center;
    }
</Style>