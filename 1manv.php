<?php
session_start();
if (!(isset($_SESSION['role']) && $_SESSION['role'] == 'baby')) {
    $access = 'no';
    echo "<script>
            alert('cannot access this page!');
            window.location.href = 'index.php';
        </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>
<style>
    .font-th {
        font-family: 'Itim', cursive;
    }

    a,
    img,
    p,
    h2,
    h3,
    h4,
    h5,
    h6,
    strong,
    b,
    span {
        font-family: 'Itim', cursive;
    }

    .eng {
        font-family: 'Pacifico', 'Mitr', cursive;
    }

    .img_her_right {
        background-position: right;
        background-size: contain;
        background-repeat: no-repeat;
        /* opacity: 100%; */
    }

    .img_her_left {
        background-position: left;
        background-size: contain;
        background-repeat: no-repeat;
        /* opacity: 80%; */
    }

    .img_body {
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        z-index: 0 !important;
    }

    .no-op {
        color: white;
        opacity: 100%;
    }

    .left {
        margin-left: 10vw;
        margin-right: auto;
    }

    .right {
        margin-right: 10vw;
        margin-left: auto;
    }
</style>

<body class="img_body" style="background-image: url('images/anv/7.jpg');">
    <div class="img_her_right mb-4" style="height: 50vh;background-image: url('images/anv/2.jpg');">
        <div class="no-op left align-content-center" style="padding-top:25vh;">
            <h1 class="eng">H a p p y</h1>
        </div>
    </div>
    <div class="img_her mt-4 mb-4" style="height: 50vh;background-color: black;">
        <div class="no-op text-center align-content-center" style="padding-top:25vh;">
            <h1 class="eng">A n i v e r s a r y</h1>
        </div>
    </div>
    <div class="img_her_left mt-4" style="height: 50vh;background-image: url('images/anv/3.jpg');">
        <div class="no-op text-right right align-content-center" style="padding-top:25vh;">
            <h1 class="eng">O n e &nbsp;&nbsp; M o n t h</h1>
        </div>
    </div>

    <div class="img_her mt-4 mb-4" style="background-color:thistle;">
        <div class="no-op text-center align-content-center" style="padding:10vh;">
            <h4>?????????????????? 1 ???????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????
                ?????????????????????????????????
                ?????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????? 5 5 5 1 ??????????????????????????????????????????????????????????????????????????????????????????
                ?????????????????????????????????????????????????????????????????????????????????
                ????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????????
                ?????????????????????????????????????????????????????????????????????
                ?????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????? ????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????
                ???????????????????????????????????????
                ??????????????????????????? ??????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????????
                ????????????????????????????????????????????? ????????????
                ???????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????? ???????????????????????????????????????????????????
                ?????????????????????????????????????????????????????????????????????????????????????????????
                ?????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????????
                ????????????????????????????????????????????????????????? ????????????????????????????????????????????????
                ?????????????????????????????????????????????????????? Perfect ????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????
                ????????????????????????????????????????????????
                ??????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????? ???????????????????????????????????????????????????
            </h4>
        </div>
    </div>
    <div class="img_her mt-4" style="background-color: lightblue;">
        <div class="no-op text-center align-content-center" style="padding:5vh;">
            <a href="2manv.html">Second month coming soon . . .</a><br>
            <a href="index.html" class="btn btn-sm btn-primary">Back</a>
        </div>
    </div>
</body>

</html>