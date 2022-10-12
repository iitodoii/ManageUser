<!DOCTYPE HTML>
<!--
	Overflow by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
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
<head>
    <title>Y O U A N D M E </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<style>
    .font-th {
        font-family: 'Itim', cursive;
    }

    a,
    img,
    p,
    h1,
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

    #myBtn {
        display: block;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: slateblue;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

    #myBtn:hover {
        background-color:plum;
    }
</style>
<!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->


<body class="is-preload">
    <script>
        AOS.init();
    </script>
    <!-- Header -->
    <section id="header">
        <header>
            <h1>Y O U A N D M E</h1>
            <p>S T O R Y</p>
        </header>

        <footer>
            <audio controls>
                <source src="audio/MoreAndMore.mp3" type="audio/mpeg">
            </audio><br>
            <a href="#banner" class="button style2 scrolly-middle font-th">🤍จุดเริ่มการเดินทางของเรา🤍</a>
        </footer>
        <a href="yourview.html" style="right: 0;bottom: 0; position: absolute;">เรื่องเราของเรา ในมุมมองของคุณ > > >
        </a>
    </section>

    <!-- Banner -->
    <section id="banner">
        <header>
            <h2 class="font-th">Reply Story</h2>
        </header>
        <p>ใครจะไปคิดหละเนาะ ว่ารักเราจะเกิดจากการ Reply Story </p>
        <p>ตอนแรกก็คือจะเลื่อนแชทไอจีเพื่อจะหาสตอรี่นั้นแหละ </p>
        <p>แต่เลื่อนจนโทรศัพท์ค้างก็ไม่ถึงซักที งอแงแน้ววว แต่ก็ไม่เป็นไรเนาะ </p>
        <p>ยังไงมันก็อยู่ในความทรงจำของเราทั้งสองคน เลี่ยนอ่ะ 555555</p>
        <footer>
            <a href="#first" class="button style2 scrolly font-th">แล้วเราก็รู้จักกันมากขึ้น</a>
        </footer>
    </section>

    <!-- Feature 1 -->
    <article id="first" class="container box style1 right">
        <a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
        <div class="inner">
            <header>
                <h2>เริ่มวีคแรกกันเล้ยยย<br /> </h2>
            </header>
            <p>เป็นวีคที่ทำตัวไม่ถูกเลยค้าบบบ 5555555 เพราะเป็นอาทิตย์แรก</p>
            <span>ที่เราได้เจอกันหลังจากที่คุยกันจริงๆจังๆ</span>
            <span>เอาจริงๆตอนนั้นก็ชอบกันแล้วนะ</span>
            <p>
                </br><strong style="color:plum"> ช ม ต น ล </strong>คำนี้ที่หนูใช้กับพี่
                ไม่คิดเลยนะว่าเราจะมีความคิดเหมือนกัน</br>
            </p>
            <span>เพราะพี่ก็ชอบหนูมาตั้งนานแล้วเหมือนกันนะ</span>
            <span>ย้อนไปคิดถึงตอนที่เราแอบชอบกันที่ไร ก็เป็นเรื่องให้คุยกัน ให้ใจฟูได้ตลอดเลยเนาะ 🤍</span>
            <h2 style="color: crimson;">ปล. วีคแรกไม่มีรูป !!</h2>
        </div>
    </article>

    <!-- Feature 2 -->
    <article class="container box style1 left">
        <a href="#week2" class="image scrolly fit" data-aos="fade-left" data-aos-easing="linear"
            data-aos-duration="1000"><img src="images/noina/2nd_0.jpg" alt="" /></a>
        <div class="inner" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
            <header>
                <h2>วีคที่สองของเรา<br />
                </h2>
            </header>
            <p>เป็นสัปดาห์ที่เราจับมือกันครั้งแรกแหละ รูปคู่รูปแรกด้วย</p>
            <h2 style="color: palevioletred;">งื้อออออออออ ~ ~</h2>
            <p>เป็นสัปดาห์ที่เขินมากกกกก ได้จับมือได้มีเวลาอยู่ด้วยกันครั้งแรกแหละ</p>
            <div>
                <p>กินข้าวด้วยกันโด้ยยยยยย</p>
            </div>
            <p>เป็นอาทิตย์ที่มีโมเม้นดีมากๆเลยนะ ตอนหนูนอนแล้วพี่ก็นั่งลูบหัวหนู แล้วก็หลับจริงซะด้วย</p>
            <h2 style="color: powderblue;">น่ารักมากๆโลยยย</h2>
            <p>ผ่านไปอีกสัปดาห์นะ ที่เราคิดว่าไม่อยากปล่อยเวลาให้ผ่านไปเฉยๆ <span style="color:crimson;">🤍🤍🤍</span>
            </p>
        </div>
    </article>

    <!-- Portfolio -->
    <article id="week2" class="container box style3" data-aos="zoom-in-up" data-aos-easing="linear"
        data-aos-duration="500">
        <div class="inner gallery">
            <div class="row gtr-0">
                <div class="col-3 col-6-mobile">
                    <a href="images/noina/2nd_1.jpg" class="image fit"><img src="images/noina/2nd_1.jpg" alt=""
                            title="หลงเค้าแล้วมั้ง" /></a>
                </div>
                <div class="col-3 col-6-mobile">
                    <a href="images/noina/2nd_3.jpg" class="image fit"><img src="images/noina/2nd_3.jpg" alt=""
                            title="รูปแรกของเรา" /></a>
                </div>
                <div class="col-3 col-6-mobile">
                    <a href="images/noina/2nd_4.jpg" class="image fit"><img src="images/noina/2nd_4.jpg" alt=""
                            title="ขยับมาหน่อย เขินหรอ" /></a>
                </div>
                <div class="col-3 col-6-mobile">
                    <a href="images/noina/2nd_6.jpg" class="image fit"><img src="images/noina/2nd_6.jpg" alt=""
                            title="เค้าพิงเองก็ได้ -//-" /></a>
                </div>
            </div>
            <!-- <div class="row gtr-0">
            </div> -->
        </div>
    </article>

    <article class="container box style3 right" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
        <a href="#week3" class="image scrolly-middle"><img src="images/noina/3rd_7.jpg" alt="" /></a>
        <div class="inner">
            <header>
                <h2>วีคที่สามแล้วนะค้าบ <br />
                </h2>
            </header>
            <p>อาทิตย์นี้หนูสอบแหละ</p>
            <p>แต่ดูไม่ค่อยตั้งใจสอบเลยนะคะเนี่ย ตั้งใจอยู่กับพี่มากกว่าอีก</p>
            <p>ว่างให้พี่ได้ตลอดเวลาเยยยย</p>
            <p>ติดพี่เหมือนกันนะคะเนี่ย </p>
            <p>เป็นวีคที่ได้อยู่ด้วยกันมากๆ ขึ้นไปอี๊กก</p>
            <p style="color:darksalmon;">ติดมากๆเลยนะ</p>
            <p>เอาหัวมาหอมหน่อยยยยยย </p>
        </div>
    </article>

    <article id="week3" class="container box style2">
        <div class="inner gallery">
            <div class="row gtr-0">
                <div class="col-4 col-4-mobile" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                    <a href="images/noina/3rd_1.jpg" class="image fit"><img src="images/noina/3rd_1.jpg" alt=""
                            title="หอมหัวหน่อย" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <a href="images/noina/3rd_2.jpg" class="image fit"><img src="images/noina/3rd_2.jpg" alt=""
                            title="ขอถ่ายโด้ย" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <a href="images/noina/3rd_3.jpg" class="image fit"><img src="images/noina/3rd_3.jpg" alt=""
                            title="หอมหัวอีกก" /></a>
                </div>
            </div>
            <div class="row gtr-0">
                <div class="col-4 col-4-mobile" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                    <a href="images/noina/3rd_4.jpg" class="image fit"><img src="images/noina/3rd_4.jpg" alt=""
                            title="เขิงงงงง" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <a href="images/noina/3rd_5.jpg" class="image fit"><img src="images/noina/3rd_5.jpg" alt=""
                            title="เท่จัดๆ" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                    <a href="images/noina/3rd_6.jpg" class="image fit"><img src="images/noina/3rd_6.jpg" alt=""
                            title="เท่เกินต้าน 555" /></a>
                </div>
            </div>
        </div>
    </article>

    <article class="container box style1 right">
        <a href="#week4" class="image scrolly-middle" data-aos="fade-left" data-aos-easing="linear"
            data-aos-duration="1000"><img src="images/noina/4_1.jpg" alt="" /></a>
        <div class="inner" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
            <header>
                <h2>วีคที่สี่ของเรา <br />
                </h2>
            </header>
            <p>ผ่านมาครึ่งทางแล้วนะค้าบบบ </p>
            <p>เป็นวีคที่หนูนอนเก่งมากมากกก</p>
            <p>นอนได้ตลอดเลย 55555 </p>
            <p>ส่วนใหญ่ก็อยู่แต่ข้างล่างกันแหละ </p>
            <p>วีคนี้เป็นวีคที่ ได้ไปหาดแล้วก็คุยเปิดใจกับน้องๆแหละ</p>
            <p>มีคนเมาแหละ เมามากกกก เมาเป็นหมาเลย โทษๆ </p>
            <p>แต่เมาแค่ไหนขอแค่ไปกับพี่นะ</p>
            <p>พี่จะดูแลหนูเอง เด็กน้อยของพี่</p>
            <p>เป็นวีคที่หนูได้นอนตักพี่ที่หาดด้วย</p>
            <p>โมเม้นที่หนูชอบ คงจะเป็นตอนที่พี่ล้างเท้าให้หละมั้ง</p>
            <p style="color: darkviolet;">พี่ทำทุกอย่างให้หนูด้วยใจของพี่จริงๆนะคะ</p>
            <p>ไม่ว่าจะตอนนั้น หรือว่าตอนนี้ก็พี่ไม่ได้เปลี่ยนไปนะ</p>
            <p style="color:deeppink;">รัก🤍</p>
        </div>
    </article>

    <article id="week4" class="container box style2">
        <div class="inner gallery">
            <div class="row gtr-0">
                <div class="col-4 col-4-mobile" data-aos="zoom-out-up" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="images/noina/4_2.jpg" class="image fit"><img src="images/noina/4_2.jpg" alt=""
                            title="กอดคอหน่อย" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="zoom-out-up" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="images/noina/4_3.jpg" class="image fit"><img src="images/noina/4_3.jpg" alt=""
                            title="มาเคลียร์ 555" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="zoom-out-up" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="images/noina/4_4.jpg" class="image fit"><img src="images/noina/4_4.jpg" alt=""
                            title="นอนตักเค้าแหละ" /></a>
                </div>
            </div>
            <div class="row gtr-0">
                <div class="col-4 col-4-mobile" data-aos="zoom-out-down" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="images/noina/4_5.jpg" class="image fit"><img src="images/noina/4_5.jpg" alt=""
                            title="ชอบมุมนี้น่าเอ็นดูมาก" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="zoom-out-down" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="images/noina/4_6.jpg" class="image fit"><img src="images/noina/4_6.jpg" alt=""
                            title="แอบจับมือเค้าหรอ" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="zoom-out-down" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="images/noina/4_7.jpg" class="image fit"><img src="images/noina/4_7.jpg" alt=""
                            title="จับมือเค้าไปนานๆนะ" /></a>
                </div>
            </div>
        </div>
    </article>

    <article class="container box style3 left" data-aos="zoom-out-down" data-aos-easing="linear"
        data-aos-duration="1000">
        <a href="#week5" class="image scrolly"><img src="images/noina/5_5.jpg" alt="" /></a>
        <div class="inner">
            <header>
                <h2>วีคนี้วีคที่ห้า <br />
                </h2>
            </header>
            <p>วีคนี้มีอะไรพิเศษไหมน้าาาา </p>
            <p>แต่สำหรับพี่อ่ะ พิเศษทุกวีคเลยยยย</p>
            <p>วีคนี้พี่ปริ้นรูปเจ้าปัญหาไปให้หนูแหละ</p>
            <p>แหะๆ คิดว่าเค้าจะขอเป็นแฟนหยอ </p>
            <p>ขอโทษที่ทำให้ผิดหวังนะคะ </p>
            <p style="color: firebrick;">แต่ทำด้วยใจจริงๆนะ </p>
            <p>เค้าอยากให้รูปที่บันทึกความทรงจำของเรา</p>
            <p>ไว้ให้หนูดูตอนที่หนูคิดถึงพี่นะคะ</p>
            <p>ขอโทษที่ต้องทำเป็นโค้ด 55555</p>
            <p>แต่มันก็ไม่ยากเกินจะแปลหรอกน่าาาเนาะ</p>
            <p style="color:deepskyblue;">ผ่านไปอีกวีคที่มีความสุขไม่แพ้วีคไหนๆเลย</p>
        </div>
    </article>

    <article id="week5" class="container box style2">
        <div class="inner gallery">
            <div class="row gtr-0">
                <div class="col-3 col-3-mobile" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="2000">
                    <a href="images/noina/5_1.jpg" class="image fit"><img src="images/noina/5_1.jpg" alt=""
                            title="ยิ้มหน่อยเบ้บบบ" /></a>
                </div>
                <div class="col-3 col-3-mobile" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
                    <a href="images/noina/5_2.jpg" class="image fit"><img src="images/noina/5_2.jpg" alt=""
                            title="มาให้เค้าอ้อนหน่อยดิ" /></a>
                </div>
                <div class="col-3 col-3-mobile" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000">
                    <a href="images/noina/5_3.jpg" class="image fit"><img src="images/noina/5_3.jpg" alt=""
                            title="ชีสสสสสส" /></a>
                </div>
                <div class="col-3 col-3-mobile" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="2000">
                    <a href="images/noina/5_4.jpg" class="image fit"><img src="images/noina/5_4.jpg" alt=""
                            title="เอาหน้าชนกันนน" /></a>
                </div>
            </div>
        </div>
    </article>


    <article class="container box style3 right" data-aos="zoom-in-right" data-aos-easing="linear"
        data-aos-duration="1000">
        <a href="#week6" class="image scrolly-middle"><img src="images/noina/6_7.jpg" alt="" /></a>
        <div class="inner">
            <header>
                <h2>วีคที่หกแน้ววว<br />
                </h2>
            </header>
            <p>วีคนี้เป็นวีคที่น้องกลับบ้านแหละ </p>
            <p>เรามีเวลาอยู่ด้วยกันมากขึ้น </p>
            <p>มีเวลาอยู่ด้วยกันเยอะมากๆ </p>
            <p>เยอะจนชินกับการที่เราเป็นแบบนี้ไปแล้ว</p>
            <p>เยอะจนไม่อยากให้เวลาเหล่านี้หายไปไหนเลย</p>
            <p>เยอะจนอยากจะใช้เวลาอยู่ในห้วงเวลานี้เรื่อยไป</p>
            <p>แต่ก็นั่นแหละ เวลาสุขมักผ่านไปไว</p>
            <p style="color:navy;">ได้ไปเที่ยวไปเดินหาด</p>
            <p>ไปคุยด้วยกันเปิดใจกัน พี่มีความสุขมากๆเลยนะ</p>
            <p>ขอบคุณนะน้อยหน่า ที่เข้ามาเป็นความสุขให้พี่</p>
            <p>อยู่เป็นความสุขของพี่ไปนานๆนะเด็กน้อย</p>
            <p>จริงๆวีคนี้มีอีกเยอะมากกก แต่เดี๋ยวที่ไม่พอเนาะ</p>
            <p>ไปวีคถัดไปดีกว่า ฟิ้วววว ~~~</p>
        </div>
    </article>

    <article id="week6" class="container box style2">
        <div class="inner gallery">
            <div class="row gtr-0">
                <div class="col-4 col-4-mobile" data-aos="zoom-in-right" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="images/noina/6_9.jpg" class="image fit"><img src="images/noina/6_9.jpg" alt=""
                            title="สูงเกินอ่ะ ย่อหน่อย 5555" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="zoom-in-right" data-aos-easing="linear"
                    data-aos-duration="2000">
                    <a href="images/noina/6_2.jpg" class="image fit"><img src="images/noina/6_2.jpg" alt=""
                            title="พ่อ แม่ ลูก" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="zoom-in-right" data-aos-easing="linear"
                    data-aos-duration="3000">
                    <a href="images/noina/6_3.jpg" class="image fit"><img src="images/noina/6_3.jpg" alt=""
                            title="หน้าอ้อนจังเลยนะคะเนี่ย" /></a>
                </div>
            </div>
            <div class="row gtr-0">
                <div class="col-4 col-4-mobile" data-aos="zoom-in-left" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="images/noina/6_4.jpg" class="image fit"><img src="images/noina/6_4.jpg" alt=""
                            title="หน้าชนกันอีกแน้ว" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="zoom-in-left" data-aos-easing="linear"
                    data-aos-duration="2000">
                    <a href="images/noina/6_5.jpg" class="image fit"><img src="images/noina/6_5.jpg" alt=""
                            title="ยิ้มตาปิดไปเลย" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="zoom-in-left" data-aos-easing="linear"
                    data-aos-duration="3000">
                    <a href="images/noina/6_6.jpg" class="image fit"><img src="images/noina/6_6.jpg" alt=""
                            title="มีฟามสุขจังเลยค้าบ" /></a>
                </div>
            </div>
        </div>
    </article>


    <article class="container box style1 left">
        <a href="#week7" class="image scrolly-middle" data-aos="flip-left" data-aos-easing="linear"
            data-aos-duration="1000"><img src="images/noina/7_7.jpg" alt="" /></a>
        <div class="inner" data-aos="flip-right" data-aos-easing="linear" data-aos-duration="1000">
            <header>
                <h2>วีคที่เจ็ด ไฟวิบวับ<br />
                </h2>
            </header>
            <p>เป็นวีคที่พี่ซื้อไฟมาให้หนู </p>
            <p>แล้วก็หนูเปลี่ยนผ้าปูแหละ</p>
            <p>เจอกันบ่อยมาก อย่าพึ่งเบื่อพี่ไปซะก่อนหละ</p>
            <p>บรรยากาศในห้องดีมาก </p>
            <p>น่านอนมากๆเลยนะ แสงสลัวๆ</p>
            <p>แงงงง้ แพ้บรรยากาศแบบนี้มาก</p>
            <p>มันจะดีมากเลยนะ ถ้าเราได้นอนหลับไปพร้อมกัน งอแงแน้ว</p>
            <p>วีคนี้พี่ใส่รีแล้วนะ ยังไม่ค่อยชินเท่าไหร่</p>
            <p>ทั้งหนูแล้วก็พี่เลย 5555555</p>
            <p>แต่ไปเรื่อยๆเดี๋ยวก็ชินแหละเนาะ </p>

        </div>
    </article>

    <article id="week7" class="container box style2">
        <div class="inner gallery">
            <div class="row gtr-0">
                <div class="col-4 col-4-mobile" data-aos="zoom-in-down" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="images/noina/7_1.jpg" class="image fit"><img src="images/noina/7_1.jpg" alt=""
                            title="แปรงฟันโด้ย" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="zoom-in-down" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="images/noina/7_2.jpg" class="image fit"><img src="images/noina/7_2.jpg" alt=""
                            title="ขอจับมือได้ไหม" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="zoom-in-down" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="images/noina/7_3.jpg" class="image fit"><img src="images/noina/7_3.jpg" alt=""
                            title="ไปทะเลด้วยกันอีกนะ" /></a>
                </div>
            </div>
            <div class="row gtr-0">
                <div class="col-4 col-4-mobile" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000">
                    <a href="images/noina/7_4.jpg" class="image fit"><img src="images/noina/7_4.jpg" alt=""
                            title="ถ่ายกับเค้าหน่อย" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000">
                    <a href="images/noina/7_5.jpg" class="image fit"><img src="images/noina/7_5.jpg" alt=""
                            title="มาซบเค้าบ่อยๆได้ไหม" /></a>
                </div>
                <div class="col-4 col-4-mobile" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000">
                    <a href="images/noina/7_6.jpg" class="image fit"><img src="images/noina/7_6.jpg" alt=""
                            title="บอกให้จุ้บ ไม่ได้เอาแก้มชน" /></a>
                </div>
            </div>
        </div>
    </article>


    <article class="container box style1 right">
        <a href="#week8" class="image scrolly-middle" data-aos="fade-right" data-aos-easing="linear"
            data-aos-duration="1000"><img src="images/noina/8_9.jpg" alt="" /></a>
        <div class="inner" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000">
            <header>
                <h2>วีคที่แปด <br>วีคที่แล้วนี่เอง<br />
                </h2>
            </header>
            <p>จะว่าไปก็นานเหมือนกันเนาะ จนถึงตอนนี้ก็ 3 เดือนแล้วนะที่เราคุยกันมา จะว่าไปก็นานเหมือนกันเนาะ
                แต่อยากให้มันนานๆแบบนี้ไปเรื่อยๆนะ</p>
            <p style="color: palevioletred;">พี่รักหนูไม่มีเบื่อเลยนะคะ</p>
            <p>วีคนี้ก็เป็นอีกวีคที่น้องยอมรับบ้างแล้ว แล้วเราก็ออกไปหาอะไรกินด้วยกันบ่อยมาก
                ได้ไปวอคกิ้งสตรีทด้วยกันด้วยแหละ</p>
            <p style="color: skyblue;">อ๋อ แล้วก็ไปนั่งหาดบางแสนด้วยกันด้วย</p>
            <p>เพราะมาไม่ทันน้องแหละ เลยได้อยู่ด้วยกันสองคน งื้อออออ โรแมนติกป่ะะะะะ ตอนนั้นคุยกันเรื่องความรักอีกแล้ว
                หวานมากเลยนะคะเนี่ย อยากให้หวานแบบนี้ไปเรื่อยๆนะ อย่าพึ่งเบื่อกันนะคะ ยังไม่ทันคบกันเลยยย</p>

        </div>
    </article>

    <article id="week8" class="container box style2" data-aos="zoom-in-down" data-aos-easing="linear"
        data-aos-duration="1000">
        <div class="inner gallery">
            <div class="row gtr-0">
                <div class="col-3 col-3-mobile">
                    <a href="images/noina/8_1.jpg" class="image fit"><img src="images/noina/8_1.jpg" alt=""
                            title="ดึงจัดๆ" /></a>
                </div>
                <div class="col-3 col-3-mobile">
                    <a href="images/noina/8_2.jpg" class="image fit"><img src="images/noina/8_2.jpg" alt=""
                            title="คือรูปมุมเดียวกัน" /></a>
                </div>
                <div class="col-3 col-3-mobile">
                    <a href="images/noina/8_3.jpg" class="image fit"><img src="images/noina/8_3.jpg" alt=""
                            title="แคปชั่นเดียวกัน" /></a>
                </div>
                <div class="col-3 col-3-mobile">
                    <a href="images/noina/8_4.jpg" class="image fit"><img src="images/noina/8_4.jpg" alt=""
                            title="ได้ป่ะวะ" /></a>
                </div>
            </div>
        </div>
    </article>
    <article id="week9" class="container box style3" data-aos="zoom-in-up" data-aos-easing="linear"
        data-aos-duration="1000">
        <div class="inner gallery">
            <div class="row gtr-0">
                <div class="col-3 col-3-mobile">
                    <a href="images/noina/8_5.jpg" class="image fit"><img src="images/noina/8_5.jpg" alt=""
                            title="ชอบหน้าหนูมาก" /></a>
                </div>
                <div class="col-3 col-3-mobile">
                    <a href="images/noina/8_6.jpg" class="image fit"><img src="images/noina/8_6.jpg" alt=""
                            title="มีคนเอารูปนี้ไปลงแหละ" /></a>
                </div>
                <div class="col-3 col-3-mobile">
                    <a href="images/noina/8_7.jpg" class="image fit"><img src="images/noina/8_7.jpg" alt=""
                            title="ขอโทษที่ยิ้ม" /></a>
                </div>
                <div class="col-3 col-3-mobile">
                    <a href="images/noina/8_8.jpg" class="image fit"><img src="images/noina/8_8.jpg" alt=""
                            title="แหนะ จะทำไรเค้าา" /></a>
                </div>
            </div>
        </div>
    </article>

    <article class="container box style3 right" data-aos="flip-down" data-aos-easing="linear" data-aos-duration="1500">
        <!-- <a href="#week8" class="image scrolly-middle"><img src="images/noina/8_9.jpg" alt="" /></a> -->
        <div class="inner">
            <header>
                <p style="font-size: 100pt;top: 50%;"> สุดท้ายแล้วค้าบ</p>
                <p style="font-size: 100pt;top: 50%;"> 🥺</p>
            </header>
        </div>
    </article>
    <article class="container box style4 right">
        <!-- <a href="#week8" class="image scrolly-middle"><img src="images/noina/8_9.jpg" alt="" /></a> -->
        <div class="inner">
            <header>
                <br>
                <p style="text-align: center;color:navy; font-size: 60pt;top: 50%;"> มีคำถามนึงที่หนูถามพี่</p>
                <br>
                <br>
                <br>
                <p style="text-align: center;color:tomato; font-size: 40pt;top: 50%;"> พี่รักหนูเพราะอะไร?</p>
            </header>
        </div>
    </article>


    <article class="container box style3 right">
        <!-- <a href="#week8" class="image scrolly-middle"><img src="images/noina/8_9.jpg" alt="" /></a> -->
        <div class="inner">
            <header>
                <p> พี่รู้ว่าคำถามนี้ของหนู ก็อยากได้ยินคำตอบอยู่บ่อยๆ ถึงบางทีจะรู้อยู่แล้วก็เถอะเนาะ </p>
                <p>พี่รักหนูก็เพราะว่าหนูเป็นคนที่รับฟังพี่ พี่สามารถสบายใจเวลาได้อยู่ได้คุยด้วย ได้ใช้เวลาร่วมกัน</p>
                <p>รับในตัวพี่ที่เป็นตัวพี่ได้ คอยเป็นความสดใสเป็นเสียงหัวเราะให้พี่เสมอ </p>
                <p style="color: palevioletred;">พี่มีความสุขมากจริงๆนะ เวลาที่พี่ได้อยู่กับหนู</p>
                <p>บางทีเวลาหนูถามพี่ว่าพี่รักหนูเพราะอะไร จริงๆพี่ก็บอกไปหมดแล้วแหละ</p>
                <p>แต่เอาจริงๆนะ พี่ว่าความรักมันไม่จำเป็นตัองมีเหตุผลเสมอหรอก </p>
                <p>พี่รักหนู ด้วยทุกๆอย่างที่เป็นหนู </p>
                <p>จริงๆไม่ต้องหาเหตุผล</p>
                <p>สำหรับความรักของพี่หรอก</p>
                <p style="margin: 5vh;"></p>
                <p style="text-align: center;color:burlywood; font-size: 30pt;top: 50%;">
                    เพราะพี่ก็รักหนูด้วยทั้งหมดของหัวใจของพี่</p>
                <p style="margin: 20vh;"></p>
                <p style="text-align: center;color:peru; font-size: 60pt;top: 50%;"> ไม่เหลือเผื่อให้ใครแล้วนะ</p>
                <p style="margin: 30vh;"></p>
                <p style="text-align: center;color:salmon; font-size: 80pt;top: 50%;"> เด็กน้อยของเค้า</p>
            </header>
        </div>
    </article>

    <article class="container box style4 right">
        <!-- <a href="#week8" class="image scrolly-middle"><img src="images/noina/8_9.jpg" alt="" /></a> -->
        <div class="inner">
            <header>
                <p style="margin: 50vh;"></p>
                <p style="text-align: center;color:slateblue; font-size: 60pt;top: 50%;"> พี่</p>
                <p style="margin: 60vh;"></p>
                <p style="text-align: center;color:slateblue; font-size: 80pt;top: 50%;"> รัก</p>
                <p style="margin: 70vh;"></p>
                <p style="text-align: center;color:slateblue; font-size: 140pt;top: 50%;"> หนู</p>
                <p style="margin: 80vh;"></p>
                <p style="text-align: center;color:slateblue; font-size: 180pt;top: 50%;"> นะ</p>
                <p style="margin: 100vh;"></p>
                <p style="text-align: center;color:slateblue; font-size: 200pt;top: 50%;"> 🤍</p>
                <p style="margin: 200vh;"></p>
                <p style="text-align: center;color:cornflowerblue; font-size: 250pt;top: 50%;"> เป็น </p>
                <p style="margin: 30vh;"></p>
                <p style="text-align: center;color:cornflowerblue; font-size: 250pt;top: 50%;"> แฟน </p>
                <p style="margin: 30vh;"></p>
                <p style="text-align: center;color:cornflowerblue; font-size: 250pt;top: 50%;"> กับ </p>
                <p style="margin: 30vh;"></p>
                <p style="text-align: center;color:cornflowerblue; font-size: 250pt;top: 50%;"> พี่ </p>
                <p style="margin: 30vh;"></p>
                <p style="text-align: center;color:cornflowerblue; font-size: 250pt;top: 50%;"> นะ </p>
                <p style="margin: 30vh;"></p>
                <p style="text-align: center;color:cornflowerblue; font-size: 250pt;top: 50%;"> คะ </p>
                <p style="margin: 30vh;"></p>
                <p style="text-align: center;color:darksalmon; font-size: 60pt;top: 50%;"> เป็นแฟนกับพี่นะคะ </p>
                <p style="margin: 30vh;"></p>
            </header>
        </div>
    </article>
    <button onclick="topFunction()" id="myBtn" title="Go to footer">aniversary</button>
    <section id="footer">
        <ul class="icons">
            <li><a href="#"><span>W</span=></a></li>
            <li><a href="#"><span>U</span=></a></li>
            <li><a href="#"><span>B</span=></a></li>
            <li><a href="#"><span>M</span></a></li>
            <li><a href="#"><span>G</span></a></li>
            <li><a href="#"><span>F</span></a></li>
        </ul>
        <div class="copyright">
            <ul class="menu">
                <li>Will you be my girlfriend?</li>
                <li><a style="color:purple" href="1manv.html">first month</a></li>
                <li><a style="color:purple" href="2manv.html">second month</a></li>
                <li><a style="color:purple" href="hbd.html">Birthday</a></li>
            </ul>
        </div>
        <!-- <audio controls autoplay> -->

    </section>
    <script>
        function topFunction() {
            window.location.href = "#footer";
        }
    </script>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.poptrox.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>