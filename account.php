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

    table.dataTable tbody th,
    table.dataTable tbody td {
        padding: 6px 10px;
    }

    tr.selected {
        background-color: rgba(255, 207, 74, 0.8) !important;

    }

    .tran_h {
        font-weight: bold;
    }

    .bold {
        font-weight: bold;
    }

    /* @media only screen and (max-width: 1024px) { */
    td.dtr-control.sorting_1 {
        background: url('images/icon/down-arrow.png') no-repeat center center;
        background-size: 20px 20px;
        cursor: pointer;
    }

    tr.shown td.dtr-control.sorting_1 {
        background: url('images/icon/up-arrow.png') no-repeat center center;
        background-size: 20px 20px;
    }

    /* } */
</style>
<div class="content-wrapper">
    <!-- <div class="d-none d-sm-block" style="background-color:#00cba9;height:200px;width:100%;position:absolute"></div> -->
    <section class="content-header mt-0 pt-0">
        <div style="width:100%;position:absolute;left:0px;">
            <!-- <div style="background-color:#00cba9;height:200px;width:100%;"></div> -->
        </div>
        <div class="container-fluid">
            <h1 class="pt-2 text-center">ข้อมูลลูกค้า<span class="details-control"></h1>
        </div><!-- /.container-fluid -->
        <!-- <div class="row"> -->
    </section>
    <!-- Main content -->
    <?php $sql = "SELECT * FROM `tbl_t_user`";
    $result = $conn->query($sql);
    $myJson2 = json_encode($result);
    ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-info mb-4" data-toggle="modal" data-target="#modal-lg">
                        เพิ่มผู้ใช้งาน
                    </button>
                    <table id="tbl_user" class="table table-bordered table-striped table-hover display nowrap" style="width: 100%; overflow-x:auto">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="d-none text-nowrap">id</th>
                                <th class="text-nowrap">ชื่อผู้ใช้งาน</th>
                                <th class="text-nowrap">ชื่อ</th>
                                <th class="text-nowrap">นามสกุล</th>
                                <th class="text-nowrap">เบอร์โทรศัพท์</th>
                                <th class="text-nowrap">เลขบัญชี</th>
                                <th class="text-nowrap">ธนาคาร</th>
                                <th class="text-nowrap">แก้ไข</th>
                                <th class="text-nowrap">ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $myArray = array();
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $myArray[] = $row;
                                    echo "<tr>" .
                                        "<td></td>" .
                                        "<td class='d-none'>" . $row["id"] . "</td>" .
                                        "<td>" . $row["username"] . "</td>" .
                                        "<td>" . $row["name"] . "</td>" .
                                        "<td>" . $row["lastname"] . "</td>" .
                                        "<td>" . $row["phone_number"] . "</td>" .
                                        "<td>" . $row["account_number"] . "</td>" .
                                        "<td>" . $row["account_name"] . "</td>";
                                    if ($row["username"] == $_SESSION['username']) {
                                        echo
                                        "<td>" . "<a href=\"javascript:bindData('" . $row["id"] . "')\" > <i class='fas fa-user-edit'></i> </a> " . "</td>" .
                                            "<td>" . "<p class='text-secondary' > <i class='fas fa-user-minus'></i> </p> " . "</td>";
                                    } else {
                                        echo
                                        "<td>" . "<a href=\"javascript:bindData('" . $row["id"] . "')\" > <i class='fas fa-user-edit'></i> </a> " . "</td>" .
                                            "<td>" . "<a href=\"javascript:deleteUser('" . $row["id"] . "')\" class='text-danger' > <i class='fas fa-user-minus'></i> </a> " . "</td>";
                                    }
                                    echo "</tr>";
                                }
                            } else {
                                echo "0 result";
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th class="d-none text-nowrap">id</th>
                                <th class="text-nowrap">ชื่อผู้ใช้งาน</th>
                                <th class="text-nowrap">ชื่อ</th>
                                <th class="text-nowrap">นามสกุล</th>
                                <th class="text-nowrap">เบอร์โทรศัพท์</th>
                                <th class="text-nowrap">เลขบัญชี</th>
                                <th class="text-nowrap">ธนาคาร</th>
                                <th class="text-nowrap">แก้ไข</th>
                                <th class="text-nowrap">ลบ</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row mt-2" id="trans_tab">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">ข้อมูลการฝาก-ถอนของ User : <span id="tran_header"></span></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-lg-8 col-md-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <span class="tran_h">ชื่อ</span> <span id="tran_name">xx</span>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <span class="tran_h">นามสกุล</span> <span id="tran_lastname">xx</span>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <span class="tran_h">เบอร์โทรศัพท์</span> <span id="tran_tel">xx</span>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <span class="tran_h">เลขบัญชี</span> <span id="tran_account_no">xx</span>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <span class="tran_h">ธนาคาร</span> <span id="tran_account_bank">xx</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-8">
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="button" id="deposit" class="btn-sm btn-block btn-success" data-toggle="modal" data-target="#modal-deposit-withdraw">
                                                ฝาก
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" id="withdraw" class="btn-sm btn-block btn-danger" data-toggle="modal" data-target="#modal-deposit-withdraw">
                                                ถอน
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <table id="tbl_dw" class="table table-bordered table-striped table-hover display nowrap" style="width: 100%; overflow-x:auto">
                                        <thead>
                                            <tr>
                                                <th class="text-nowrap">id</th>
                                                <th class="text-nowrap">สถานะ</th>
                                                <th class="text-nowrap">จำนวน</th>
                                                <th class="text-nowrap">เวลาฝาก/ถอน</th>
                                                <th class="text-nowrap">แก้ไข</th>
                                                <th class="text-nowrap">ลบ</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th class="text-nowrap">id</th>
                                                <th class="text-nowrap">สถานะ</th>
                                                <th class="text-nowrap">จำนวน</th>
                                                <th class="text-nowrap">เวลาฝาก/ถอน</th>
                                                <th class="text-nowrap">แก้ไข</th>
                                                <th class="text-nowrap">ลบ</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <span class="font-weight-bold">ยอดรวมการฝาก </span><span class="text-success" id="total_deposit"></span>
                                        </div>
                                        <div class="col-12">
                                            <span class="font-weight-bold">ยอดรวมการถอน </span><span class="text-danger" id="total_withdraw"></span>
                                        </div>
                                        <div class="col-12">
                                            <span class="font-weight-bold">ยอดรวมสุทธิ </span><span id="total_all"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            ..
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>


<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">เพิ่มข้อมูลผู้ใช้งาน</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id='adduserform' style="overflow-y: scroll">
                <div class="modal-body">
                    <!-- <div class="row" style="overflow-y:scroll;height:40vh"> -->
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="InputUsername">ผู้ใช้งาน <span class="text-danger">*</span></label>
                            <input type="text" name="username" class="form-control" id="InputUsername" placeholder="ผู้ใช้งาน">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="InputFirstname">ชื่อ <span class="text-danger">*</span></label>
                            <input type="text" name="firstname" class="form-control" id="InputFirstname" placeholder="ชื่อ">
                        </div>
                        <div class="form-group col-6">
                            <label for="InputLastname">นามสกุล <span class="text-danger">*</span></label>
                            <input type="text" name="lastname" class="form-control" id="InputLastname" placeholder="นามสกุล">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="InputPhone">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                            <input type="text" name="phone" class="form-control" id="InputPhone" placeholder="เบอร์โทรศัพท์">
                        </div>
                        <div class="form-group col-6">
                            <label for="InputAccountNo">เลขที่บัญชี <span class="text-danger">*</span></label>
                            <input type="text" name="account_no" class="form-control" id="InputAccountNo" placeholder="เลขที่บัญชี">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="checkboxaccountname">บัญชี</label>
                            <div class="form-check">
                                <div class="row">
                                    <div class="col-4 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-6">
                                        <input class="form-check-input account-check" id="scb" type="radio" value="ไทยพานิชย์" name="account_name" checked>
                                        <label for="scb" class="form-check-label">ไทยพานิชย์</label>
                                    </div>
                                    <div class="col-4 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-6">
                                        <input class="form-check-input  account-check" id="kbank" type="radio" value="กสิกรไทย" name="account_name">
                                        <label for="kbank" class="form-check-label">กสิกรไทย</label>
                                    </div>
                                    <div class="col-4 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-6">
                                        <input class="form-check-input account-check" id="tmb" type="radio" value="ทหารไทย" name="account_name">
                                        <label for="tmb" class="form-check-label">ทหารไทย</label>
                                    </div>
                                    <div class="col-4 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-6">
                                        <input class="form-check-input account-check" id="bbl" type="radio" value="กรุงเทพ" name="account_name">
                                        <label for="bbl" class="form-check-label">กรุงเทพ</label>
                                    </div>
                                    <div class="col-4 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-6">
                                        <input class="form-check-input account-check" id="ktb" type="radio" value="กรุงไทย" name="account_name">
                                        <label for="ktb" class="form-check-label">กรุงไทย</label>
                                    </div>
                                    <div class="col-4 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-6">
                                        <input class="form-check-input account-check" id="bay" type="radio" value="กรุงศรี" name="account_name">
                                        <label for="bay" class="form-check-label">กรุงศรี</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="checkboxaccountname"></label>
                            <div class="form-check">
                                <div class="row">
                                    <div class="col-2">
                                        <input class="form-check-input" id="account_checkbox" type="checkbox" value="other" name="other">
                                        <label for="account_checkbox" class="form-check-label">อื่นๆ</label>
                                    </div>
                                    <div class="col-10">
                                        <input type="text" name="account_name_other" class="form-control" id="InputAccountName" placeholder="บัญชีอื่นๆ" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">เพิ่ม</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<div class="modal fade" id="modal-update">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">แก้ไขข้อมูลผู้ใช้งาน</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id='edituserform' style="overflow-y: scroll">
                <div class="modal-body">
                    <!-- <div class="row" style="overflow-y:scroll;height:40vh"> -->
                    <div class="form-group d-none">
                        <label for="e_InputId">รหัสผู้ใช้งาน</label>
                        <input type="text" name="e_id" class="form-control" id="e_InputId" placeholder="รหัสผู้ใช้งาน">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="e_InputUsername">ผู้ใช้งาน <span class="text-danger">*</span></label>
                            <input type="text" name="e_username" class="form-control" id="e_InputUsername" placeholder="ผู้ใช้งาน">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="e_InputFirstname">ชื่อ <span class="text-danger">*</span></label>
                            <input type="text" name="e_firstname" class="form-control" id="e_InputFirstname" placeholder="ชื่อ">
                        </div>
                        <div class="form-group col-6">
                            <label for="e_InputLastname">นามสกุล <span class="text-danger">*</span></label>
                            <input type="text" name="e_lastname" class="form-control" id="e_InputLastname" placeholder="นามสกุล">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="e_InputPhone">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                            <input type="text" name="e_phone" class="form-control" id="e_InputPhone" placeholder="เบอร์โทรศัพท์">
                        </div>
                        <div class="form-group col-6">
                            <label for="e_InputAccountNo">เลขที่บัญชี <span class="text-danger">*</span></label>
                            <input type="text" name="e_account_no" class="form-control" id="e_InputAccountNo" placeholder="เลขที่บัญชี">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="checkboxaccountname">บัญชี</label>
                            <div class="form-check">
                                <div class="row">
                                    <div class="col-4 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-6">
                                        <input class="form-check-input e-account-check" id="e_scb" type="radio" value="ไทยพานิชย์" name="e_account_name" checked>
                                        <label for="e_scb" class="form-check-label">ไทยพานิชย์</label>
                                    </div>
                                    <div class="col-4 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-6">
                                        <input class="form-check-input  e-account-check" id="e_kbank" type="radio" value="กสิกรไทย" name="e_account_name">
                                        <label for="e_kbank" class="form-check-label">กสิกรไทย</label>
                                    </div>
                                    <div class="col-4 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-6">
                                        <input class="form-check-input e-account-check" id="e_tmb" type="radio" value="ทหารไทย" name="e_account_name">
                                        <label for="e_tmb" class="form-check-label">ทหารไทย</label>
                                    </div>
                                    <div class="col-4 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-6">
                                        <input class="form-check-input e-account-check" id="e_bbl" type="radio" value="กรุงเทพ" name="e_account_name">
                                        <label for="e_bbl" class="form-check-label">กรุงเทพ</label>
                                    </div>
                                    <div class="col-4 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-6">
                                        <input class="form-check-input e-account-check" id="e_ktb" type="radio" value="กรุงไทย" name="e_account_name">
                                        <label for="e_ktb" class="form-check-label">กรุงไทย</label>
                                    </div>
                                    <div class="col-4 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-6">
                                        <input class="form-check-input e-account-check" id="e_bay" type="radio" value="กรุงศรี" name="e_account_name">
                                        <label for="e_bay" class="form-check-label">กรุงศรี</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="checkboxaccountname"></label>
                            <div class="form-check">
                                <div class="row">
                                    <div class="col-2">
                                        <input class="form-check-input" id="e_account_checkbox" type="checkbox" value="e_other" name="e_other">
                                        <label for="e_account_checkbox" class="form-check-label">อื่นๆ</label>
                                    </div>
                                    <div class="col-10">
                                        <input type="text" name="e_account_name_other" class="form-control" id="e_InputAccountName" placeholder="บัญชีอื่นๆ" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">แก้ไข</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
</div>

<div class="modal fade" id="modal-deposit-withdraw">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ข้อมูลการ<span id="dw_header"></span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id='dwform' style="overflow-y: scroll">
                <div class="modal-body">
                    <!-- <div class="row" style="overflow-y:scroll;height:40vh"> -->
                    <div class="form-row">
                        <div class="form-group d-none">
                            <label for="dw_InputId">รหัสผู้ใช้งาน</label>
                            <input type="text" name="dw_id" class="form-control" id="dw_InputId" placeholder="รหัสผู้ใช้งาน">
                        </div>
                        <div class="form-group d-none">
                            <label for="dw_InputStatus">สถานะ <span class="text-danger">*</span></label>
                            <input type="text" name="dw_status" class="form-control" id="dw_InputStatus">
                        </div>
                        <div class="form-group col-12">
                            <label for="dw_InputUsername">ผู้ใช้งาน <span class="text-danger">*</span></label>
                            <input type="text" name="dw_username" class="form-control" id="dw_InputUsername" placeholder="ผู้ใช้งาน" disabled>
                        </div>
                        <div class="form-group col-12">
                            <label for="dw_InputAmount">จำนวน <span class="text-danger">*</span></label>
                            <input type="number" name="dw_amount" class="form-control" id="dw_InputAmount" placeholder="จำนวน">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">เพิ่ม</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
</div>

<div class="modal fade" id="modal-edit-deposit-withdraw">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ข้อมูลการ<span id="edit_dw_header"></span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id='editdwform' style="overflow-y: scroll">
                <div class="modal-body">
                    <!-- <div class="row" style="overflow-y:scroll;height:40vh"> -->
                    <div class="form-row">
                        <div class="form-group d-none">
                            <label for="edw_InputId">รหัสการฝากถอน</label>
                            <input type="text" name="edw_id" class="form-control" id="edw_InputId" placeholder="รหัสการฝากถอน">
                        </div>
                        <div class="form-group d-none">
                            <label for="edw_InputStatus">สถานะ <span class="text-danger">*</span></label>
                            <input type="text" name="edw_status" class="form-control" id="edw_InputStatus">
                        </div>
                        <div class="form-group col-12">
                            <label for="edw_InputUsername">ผู้ใช้งาน <span class="text-danger">*</span></label>
                            <input type="text" name="edw_username" class="form-control" id="edw_InputUsername" placeholder="ผู้ใช้งาน" disabled>
                        </div>
                        <div class="form-group col-12">
                            <label for="edw_InputAmount">จำนวน <span class="text-danger">*</span></label>
                            <input type="number" name="edw_amount" class="form-control" id="edw_InputAmount" placeholder="จำนวน">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">แก้ไข</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var table = $("#tbl_user").DataTable({
            "ordering": true,
            "scrollX": false,
            responsive: true,
            columnDefs: [{
                className: 'dtr-control',
                orderable: false,
                targets: 0
            }],
            "paging": true,
            "searching": true,
            "info": false,
            "lengthChange": true,
            "sScrollX": "100%",
            "sScrollXInner": "110%",
            "bScrollCollapse": true,
            selector: true,
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
        });
        $("#tbl_user").DataTable().columns.adjust();
        table.columns.adjust().draw();


        $('#trans_tab').hide();

        $('#tbl_user tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            bindDataTable(data[1]);
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                $('#trans_tab').fadeOut();
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
                $('#trans_tab').fadeIn();
            }
        });

        $('#tbl_user tbody').on('click', 'td.dtr-control', function() {
            var tr = $(this).closest('tr');
            var row = table.row(tr);

            if (row.child.isShown()) {
                tr.addClass('shown');
            } else {
                tr.removeClass('shown');
            }
        });

        $('#account_checkbox').click(function(e) {
            if ($('#account_checkbox').prop("checked")) {
                $('.account-check').attr('disabled', true);
                $('#InputAccountName').attr('disabled', false);
            } else {
                $('.account-check').attr('disabled', false);
                $('#InputAccountName').attr('disabled', true);
            }
        });

        $('#e_account_checkbox').click(function(e) {
            if ($('#e_account_checkbox').prop("checked")) {
                $('.e-account-check').attr('disabled', true);
                $('#e_InputAccountName').attr('disabled', false);
            } else {
                $('.e-account-check').attr('disabled', false);
                $('#e_InputAccountName').attr('disabled', true);
            }
        });

        $('#deposit').click(function(e) {
            $('#dw_InputStatus').val('ฝาก');
            $('#dw_header').text('ฝาก');
            $('#dw_InputAmount').val('');

        });

        $('#withdraw').click(function(e) {
            $('#dw_InputStatus').val('ถอน');
            $('#dw_header').text('ถอน');
            $('#dw_InputAmount').val('');
        });

        $.validator.setDefaults({
            submitHandler: function(form) {
                if (form.id == "adduserform") {
                    adduser();
                } else if (form.id == "edituserform") {
                    edituser();
                } else if (form.id == "dwform") {
                    depositandwithdraw();
                } else if (form.id == "editdwform") {
                    editdepositandwithdraw();
                }
            }
        });
        $('#adduserform').validate({
            // rules: {},
            // messages: {},
            // errorElement: 'span',
            // errorPlacement: function(error, element) {
            //     error.addClass('invalid-feedback');
            //     element.closest('.form-group').append(error);
            // },
            // highlight: function(element, errorClass, validClass) {
            //     $(element).addClass('is-invalid');
            // },
            // unhighlight: function(element, errorClass, validClass) {
            //     $(element).removeClass('is-invalid');
            // }
        });
        $('#edituserform').validate({
            // rules: {},
            // messages: {},
            // errorElement: 'span',
            // errorPlacement: function(error, element) {
            //     error.addClass('invalid-feedback');
            //     element.closest('.form-group').append(error);
            // },
            // highlight: function(element, errorClass, validClass) {
            //     $(element).addClass('is-invalid');
            // },
            // unhighlight: function(element, errorClass, validClass) {
            //     $(element).removeClass('is-invalid');
            // }
        });
        $('#dwform').validate({
            // rules: {},
            // messages: {},
            // errorElement: 'span',
            // errorPlacement: function(error, element) {
            //     error.addClass('invalid-feedback');
            //     element.closest('.form-group').append(error);
            // },
            // highlight: function(element, errorClass, validClass) {
            //     $(element).addClass('is-invalid');
            // },
            // unhighlight: function(element, errorClass, validClass) {
            //     $(element).removeClass('is-invalid');
            // }
        });
        $('#editdwform').validate({
            // rules: {},
            // messages: {},
            // errorElement: 'span',
            // errorPlacement: function(error, element) {
            //     error.addClass('invalid-feedback');
            //     element.closest('.form-group').append(error);
            // },
            // highlight: function(element, errorClass, validClass) {
            //     $(element).addClass('is-invalid');
            // },
            // unhighlight: function(element, errorClass, validClass) {
            //     $(element).removeClass('is-invalid');
            // }
        });
    });

    function bindDataTable(id) {
        var users = <?php echo json_encode($myArray); ?>;
        var user_data = users.filter(users => users.id == id)[0];

        $('#tran_header').text(user_data.username);
        $('#tran_name').text(user_data.name);
        $('#tran_lastname').text(user_data.lastname);
        $('#tran_tel').text(user_data.phone_number);
        $('#tran_account_no').text(user_data.account_number);
        $('#tran_account_bank').text(user_data.account_name);

        bindDataDeposit(user_data);
        generateDWTable(user_data.id);

    }
    function generateSummary(data){
        console.log(data);
        var deposit_array = data.filter(x => x.status=='ฝาก');
        var withdraw_array = data.filter(x => x.status=='ถอน');
        var sum_deposit =  deposit_array.map(x => parseFloat(x.amount)).reduce((a, b) => a + b, 0);
        var sum_withdraw =  withdraw_array.map(x => parseFloat(x.amount)).reduce((a, b) => a + b, 0);
        var sum_all = sum_deposit+sum_withdraw;
        $('#total_deposit').text(sum_deposit.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        $('#total_withdraw').text(sum_withdraw.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        $('#total_all').text(sum_all.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        if(sum_all>0){
            $('#total_all').removeClass('text-danger');
            $('#total_all').addClass('text-success');
        }else if(sum_all<0){
            $('#total_all').removeClass('text-success');
            $('#total_all').addClass('text-danger');
        }else{
            $('#total_all').removeClass('text-success');
            $('#total_all').removeClass('text-danger');
        }
    }

    function bindDataDeposit(user) {
        $('#dw_InputId').val(user.id);
        $('#dw_InputUsername').val(user.username);
    }

    function bindDwData(id) {
        var users_trans = $("#tbl_dw").DataTable().rows().data().toArray();
        var user_data = users_trans.filter(users_trans => users_trans.id == id)[0];
        var users_detail = <?php echo json_encode($myArray); ?>;
        var user_detail = users_detail.filter(users_detail => users_detail.id == user_data.user_id)[0];

        $('#edit_dw_header').text(user_data.status);
        $('#modal-edit-deposit-withdraw').modal('show');
        $('#edw_InputId').val(user_data.id);
        $('#edw_InputUsername').val(user_detail.username);
        $('#edw_InputStatus').val(user_data.status);
        $('#edw_InputAmount').val(user_data.amount);


    }
    function resetSummary(){
        $('#total_deposit').text('-');
        $('#total_withdraw').text('-');
        $('#total_all').text('-');
    }

    function generateDWTable(id) {
        var table = $("#tbl_dw").DataTable().destroy();
        table = $("#tbl_dw").DataTable({
            "ajax": ({
                url: '_tbl_statment.php',
                type: 'POST',
                data: {
                    id: id
                },
                dataType: 'Json',
                "dataSrc": function(data) {
                    if (data.length == 0) {
                        resetSummary();
                        return [];
                    } else {
                        generateSummary(data.data);
                        return data.data;
                    }
                }
            }),
            columns: [{
                    "data": "id",
                    className: "text-nowrap",
                    visible: false
                },
                {
                    "data": "status",
                    className: "text-nowrap"
                },
                {
                    "data": "amount",
                    className: "text-nowrap",
                    "render": function(data, type, row, meta) {
                        if (data < 0) {
                            return "<span class='text-danger'>" + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "</span>"
                        } else {
                            return "<span class='text-success'>" + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "</span>"
                        }
                        
                    }
                },
                {
                    "data": "timestamp",
                    className: "text-nowrap",
                    "render": function(data, type, row, meta) {
                        return "<span>" + data + "</span>"
                    }
                },
                {
                    "data": null,
                    "name": null,
                    "title": "แก้ไข",
                    "width": 5,
                    "render": function(data, type, row, meta) {
                        return "<a href='javascript:bindDwData(" + data.id + ")' > <i class='fas fa-edit'></i> </a>";
                    }
                },
                {
                    "data": null,
                    "name": null,
                    "title": "ลบ",
                    "width": 5,
                    "render": function(data, type, row, meta) {
                        return "<a href='javascript:deleteDepositandWithdraw(" + data.id + ")' class='text-danger' ><i class='fas fa-trash'></i> </a>";
                    }
                },

            ],
            "lengthChange": false,
            "searching": true,
            "info": false,
            language: {
                emptyTable: "ยังไม่มีข้อมูลการฝากถอน",
                loadingRecords: "กำลังโหลดข้อมูลการฝากถอน..."
            }
        });

    }

    function adduser() {
        var form_data = new FormData($('#adduserform')[0]);
        $.ajax({
            type: 'POST',
            url: '_addUser.php',
            data: form_data,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status >= 0) {
                    swal("เรียบร้อย เพิ่มข้อมูลเสร็จสิ้น!", {
                        icon: "success"
                    }).then((e) => {
                        $('#modal-lg').modal('hide');
                        window.location.href = "account.php"
                    });
                } else {
                    swal("เกิดข้อผิดพลาด ที่ฟังค์ชั่น!", {
                        icon: "error",
                    });
                }
            },
            error: function(e) {}
        });
    }

    function edituser() {

        // var data = getFormData($('#edituserform'));
        // var date = moment(data.u_birthdate, 'DD/MMM/YYYY').format('YYYY/MM/DD');
        // data.u_birthdate = date;
        var form_data = new FormData($('#edituserform')[0]);
        $.ajax({
            type: 'POST',
            url: '_editUser.php',
            data: form_data,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status >= 0) {
                    swal("เรียบร้อย แก้ไขข้อมูลเสร็จสิ้น!", {
                        icon: "success"
                    }).then((e) => {
                        $('#modal-update').modal('hide');
                        window.location.href = "account.php"
                    });
                } else {
                    swal("เกิดข้อผิดพลาด ในการอัพเดท!", {
                        icon: "error",
                    });
                }
            },
            error: function(e) {
                swal("เกิดข้อผิดพลาด ยังไม่ได้แก้ไขข้อมูล!", {
                    icon: "error",
                });
            }
        });
    }

    function deleteUser(id) {
        swal({
                title: "แน่ใจหรือไม่ ?",
                text: "คุณต้องการลบข้อมูลนี้ใช่หรือไม่!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: 'post', //วิธีการส่ง
                        url: '_deleteUser.php', //หน้าที่จะไป
                        data: {
                            id: id
                        }, //parameter ที่ส่งไป
                        dataType: 'json', //Type ข้อมูลที่ส่งกลับมา
                        success: function(response) {
                            if (response.status) {
                                swal("เรียบร้อย ลบข้อมูลเสร็จสิ้น!", {
                                    icon: "success"
                                }).then((e) => {
                                    window.location.href = "account.php"
                                });
                            } else {
                                swal("เกิดข้อผิดพลาด!", {
                                    icon: "error",
                                });
                            }
                        },
                        error: function(e) {}
                    });
                } else {
                    swal("ปฏิเสธ ข้อมูลของท่านยังไม่ถูกลบ!");
                }
            });
    }

    function bindData(id) {
        var all = <?php echo json_encode($myArray); ?>;
        $('#modal-update').modal('show');
        $.each(all, function(i, val) {
            if (val.id == id) {
                $('#e_InputId').val(val.id);
                $('#e_InputUsername').val(val.username);
                $('#e_InputFirstname').val(val.name);
                $('#e_InputLastname').val(val.lastname);
                $('#e_InputPhone').val(val.phone_number);
                $('#e_InputAccountNo').val(val.account_number);
                if ($('input:radio[name="e_account_name"]').filter('[value="' + val.account_name + '"]').length > 0)
                    $('input:radio[name="e_account_name"]').filter('[value="' + val.account_name + '"]').attr('checked', true);
                else {
                    $('#e_account_checkbox').attr('checked', true);
                    $('.e-account-check').attr('disabled', true);
                    $('#e_InputAccountName').attr('disabled', false);
                    $('#e_InputAccountName').val(val.account_name);

                }

            }
        });
        //edituserform

        // console.log(id);
    }

    function depositandwithdraw() {
        var form_data = new FormData($('#dwform')[0]);
        $.ajax({
            type: 'POST',
            url: '_depositandwithdraw.php',
            data: form_data,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status >= 0) {
                    swal("เรียบร้อย เพิ่มข้อมูลเสร็จสิ้น!", {
                        icon: "success"
                    }).then((e) => {
                        $('#modal-deposit-withdraw').modal('hide');
                        generateDWTable($('#dw_InputId').val());
                    });
                } else {
                    swal("เกิดข้อผิดพลาด ที่ฟังค์ชั่น!", {
                        icon: "error",
                    });
                }
            },
            error: function(e) {}
        });
    }

    function editdepositandwithdraw() {
        var form_data = new FormData($('#editdwform')[0]);
        $.ajax({
            type: 'POST',
            url: '_editDepositAndWithdraw.php',
            data: form_data,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status >= 0) {
                    swal("เรียบร้อย แก้ไขข้อมูลเสร็จสิ้น!", {
                        icon: "success"
                    }).then((e) => {
                        $('#modal-edit-deposit-withdraw').modal('hide');
                        generateDWTable($('#dw_InputId').val());
                    });
                } else {
                    swal("เกิดข้อผิดพลาด ในการอัพเดท!", {
                        icon: "error",
                    });
                }
            },
            error: function(e) {
                swal("เกิดข้อผิดพลาด ยังไม่ได้แก้ไขข้อมูล!", {
                    icon: "error",
                });
            }
        });
    }

    function editdepositandwithdraw() {
        var form_data = new FormData($('#editdwform')[0]);
        $.ajax({
            type: 'POST',
            url: '_editDepositAndWithdraw.php',
            data: form_data,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status >= 0) {
                    swal("เรียบร้อย แก้ไขข้อมูลเสร็จสิ้น!", {
                        icon: "success"
                    }).then((e) => {
                        $('#modal-edit-deposit-withdraw').modal('hide');
                        generateDWTable($('#dw_InputId').val());
                    });
                } else {
                    swal("เกิดข้อผิดพลาด ในการอัพเดท!", {
                        icon: "error",
                    });
                }
            },
            error: function(e) {
                swal("เกิดข้อผิดพลาด ยังไม่ได้แก้ไขข้อมูล!", {
                    icon: "error",
                });
            }
        });
    }


    function deleteDepositandWithdraw(id) {
        swal({
                title: "แน่ใจหรือไม่ ?",
                text: "คุณต้องการลบข้อมูลนี้ใช่หรือไม่!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: 'post', //วิธีการส่ง
                        url: '_deleteDepositandWithdraw.php', //หน้าที่จะไป
                        data: {
                            id: id
                        }, //parameter ที่ส่งไป
                        dataType: 'json', //Type ข้อมูลที่ส่งกลับมา
                        success: function(response) {
                            if (response.status) {
                                swal("เรียบร้อย ลบข้อมูลเสร็จสิ้น!", {
                                    icon: "success"
                                }).then((e) => {
                                    generateDWTable($('#dw_InputId').val());
                                    
                                });
                            } else {
                                swal("เกิดข้อผิดพลาด!", {
                                    icon: "error",
                                });
                            }
                        },
                        error: function(e) {}
                    });
                } else {
                    swal("ปฏิเสธ ข้อมูลของท่านยังไม่ถูกลบ!");
                }
            });
    }
</script>

<?php include '_footer.php'; ?>