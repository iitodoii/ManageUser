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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
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
    .img_2m{
        max-width: 100%;
        height: auto;
    }
    
</style>

<body class="img_body" style="background-image: url('images/anv/pbg.jpg');">
    
    <!-- background-image: url('images/anv/2m_1.png'); -->
    <div class="img_2m mb-4">
        <img src="images/anv/2m_2.png" alt="Cinque Terre" width="100%" height="auto">
    </div>

    <div class="img_her mt-4 mb-4" style="background-color:thistle;">
        <div class="no-op text-center align-content-center" style="padding:10vh;">
            <h4>ครบรอบเดือนที่ 2 แน้วววว คือเดือนนี้อยู่ด้วยกันเยอะม๊ากกกกแบบ มากๆอ่ะ 55555 ตัวติดกันอะไรขนาดเน้้
            ขนาดอยู่ด้วยกันยังทะเลาะกันอะคิดดู๊ววววว ยอมพี่บ๊างงง เด็ๆนี่มันดื้อจริงๆเลยค้าบบบ ดื้อกับเค้าคนเดียวพอนะ
            เที่ยวด้วยกันบ่อยแล้วก็เยอะมากๆเลยค้าบบบ เที่ยวแบบไม่มีพัก หาเงินไม่ทันแล้ว 55555 
            อยู่ด้วยกันคือล้มละลายอ่ะจริงง แต่เดือนนี้ดีมากๆเลยแหละ ได้อยู่กับหนูเยอะมาก อยู่กับหนูตลอดเลย
            ไม่ว่าจะอยู่ไหนทำอะไรก็มีหนูอยู่ข้างๆแบบนี้ กลัวไม่ชินจังถ้าวันนึงจะห่างกันนานๆ 
            สุขสันต์วันครบรอบ 2 เดือนนะ รักมากๆเลยนะ อยู่น่ารักแบบนี้ไปนานๆนะ ไอเด็กน้อยของเค้า
            </h4>
        </div>
    </div>
    <div class="img_her mt-4" style="background-color: lightblue;">
        <div class="no-op text-center align-content-center" style="padding:5vh;">
            <a href="#">Third month coming soon . . .</a><br>
            <a href="index.html" class="btn btn-sm btn-primary">Back</a>
        </div>
    </div>
</body>

</html>