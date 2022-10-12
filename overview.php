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
      <div style="background-color:#00cba9;height:200px;width:100%;"></div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#00cba9" fill-opacity="1" d="M0,224L40,213.3C80,203,160,181,240,192C320,203,400,245,480,234.7C560,224,640,160,720,149.3C800,139,880,181,960,197.3C1040,213,1120,203,1200,202.7C1280,203,1360,213,1400,218.7L1440,224L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
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
            <li class="breadcrumb-item"><a href="#">Trade Overview</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    <!-- <div class="row"> -->
    <form>
      <div class="form-row d-flex justify-content-center" style="z-index: 10;">
        <div class="form-group col-12 text-center">
          <h1>Currency Converter</h1>
        </div>
        <div class="form-group col-3">
          <label for="inputusd">USD</label>
          <input type="text" id="inputusd" class="form-control">
        </div>
        <div class="form-group col-3 text-center mt-4">
          <i class="fas fa-exchange-alt fa-2x circle-icon"></i>
        </div>
        <div class="form-group col-3">
          <label for="inputthb">THB</label>
          <input type="text" id="inputthb" class="form-control">
        </div>
      </div>
    </form>
    <!-- </div> -->
    <div class="row">
      <div class="col-md-3 col-sm-6 col-12" id="top_0">
        <div class="info-box shadow">
          <span class="info-box-icon bg-warning"><i class="fab fa-bitcoin"></i></span>
          <div class="info-box-content">
            <span class="symbol">00</span>
            <span><span class="price">00</span> <span class="small price-dollar">00</span></span>
            <span class="percentchange">00 <small class="small vol">00</small> </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-12" id="top_1">
        <div class="info-box shadow">
          <span class="info-box-icon bg-warning"><i class="fab fa-bitcoin"></i></span>
          <div class="info-box-content">
            <span class="symbol">00</span>
            <span><span class="price">00</span> <span class="small price-dollar">00</span></span>
            <span class="percentchange">00 <small class="small vol">00</small> </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-12" id="top_2">
        <div class="info-box shadow">
          <span class="info-box-icon bg-warning"><i class="fab fa-bitcoin"></i></span>
          <div class="info-box-content">
            <span class="symbol">00</span>
            <span><span class="price">00</span> <span class="small price-dollar">00</span></span>
            <span class="percentchange">00 <small class="small vol">00</small> </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-12" id="top_3">
        <div class="info-box shadow">
          <span class="info-box-icon bg-warning"><i class="fab fa-bitcoin"></i></span>
          <div class="info-box-content">
            <span class="symbol">00</span>
            <span><span class="price">00</span> <span class="small price-dollar">00</span></span>
            <span class="percentchange">00 <span class="small vol">00</span> </span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Title</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div id="showData"></div>
              <!-- <div id="chart"></div>
                  <div id="chart-container"></div> -->
              <!-- <div id="chartContainer" style="height: 450px; width: 100%;"></div> -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
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
      $('#top_' + i + ' .price').text('฿'+parseFloat(toptendata[i].lastPrice*thb.THB_USDT.last).toFixed(2));
      $('#top_' + i + ' .price-dollar').text('$'+parseFloat(toptendata[i].lastPrice));
    }
  });
</script>

<?php include '_footer.php'; ?>