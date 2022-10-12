<!-- Content Wrapper. Contains page content -->
<?php include '_header.php'; ?>
<style>
    .circle-icon {
        background: white;
        padding: 5%;
        border-radius: 50%;
    }

    .circle-currency {
        background: white;
        border-radius: 50%;
    }

    .ver-center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }
</style>
<div class="content-wrapper">
    <!-- <div class="d-none d-sm-block" style="background-color:#00cba9;height:200px;width:100%;position:absolute"></div> -->
    <section class="content-header mt-0 pt-0">
        <div style="width:100%;position:absolute;left:0px;">
            <!-- <div style="background-color:#00cba9;height:200px;width:100%;"></div> -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#ffd700" fill-opacity="1" d="M0,128L26.7,112C53.3,96,107,64,160,80C213.3,96,267,160,320,181.3C373.3,203,427,181,480,154.7C533.3,128,587,96,640,96C693.3,96,747,128,800,144C853.3,160,907,160,960,133.3C1013.3,107,1067,53,1120,53.3C1173.3,53,1227,107,1280,112C1333.3,117,1387,75,1413,53.3L1440,32L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
</svg>
        </div>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1>Fixed Navbar Layout</h1> -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#"></a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <!-- <div class="row"> -->
                <div class="form-group col-12 text-center">
                    <h1>ข้อมูลภาพรวม</h1>
                </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                
                </div>
            </div>
        </div>
    </section>
</div>


<script type="text/javascript">
    var data;
    var marketPriceData;
    var thb;
    $(document).ready(function() {

        thb = getCurrencyRate();
        $('#inputusd').val(1);
        $('#inputthb').val(thb.THB_USDT.last);
        $('#inputusd').keydown(function() {
            $('#inputthb').val($('#inputusd').val() * thb.THB_USDT.last);
        });
        $('#inputusd').keyup(function() {
            $('#inputthb').val($('#inputusd').val() * thb.THB_USDT.last);
        });
        var a = getTopten();
        var toptendata = dynamicSort(a);
        //tranfromdatatopten();
        for (let i = 0; i <= 8; i++) {
            console.log(toptendata[i]);
            $('#top_' + i + ' .symbol').text(toptendata[i].symbol);
            $('#top_' + i + ' .price').text('฿' + parseFloat(toptendata[i].lastPrice * thb.THB_USDT.last).toFixed(2));
            $('#top_' + i + ' .price-dollar').text('$' + parseFloat(toptendata[i].lastPrice));
        }
    });
</script>

<?php include '_footer.php'; ?>