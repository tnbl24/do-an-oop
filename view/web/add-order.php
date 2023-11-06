<?php

include("../layout/header.php");

?>
    <main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="../web/order.php">Danh sách đơn hàng</a></li>
          <li class="breadcrumb-item"><a href="#">Thêm đơn hàng</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Tạo mới đơn hàng</h3>
            <div class="tile-body">
              <form class="row">
                <div class="form-group  col-md-4">
                  <label class="control-label">Mã đơn hàng </label>
                  <input class="form-control" type="text">
                </div>
                <div class="form-group  col-md-4">
                  <label class="control-label">khách hàng</label>
                  <input class="form-control" type="text" >
                </div>
                <div class="form-group  col-md-4">
                  <label class="control-label">Mã chó</label>
                  <input class="form-control" type="text" >
                </div>
                <div class="form-group  col-md-4">
                  <label class="control-label">Số lượng</label>
                  <input class="form-control" type="number" >
                </div>
               
                <div class="form-group  col-md-4">
                  <label class="control-label">Ngày lập hóa đơn</label>
                  <input class="form-control" type="date" >
                </div>
                <div class="form-group col-md-4">
                  <label for="exampleSelect1" class="control-label">Phương thức thanh toán</label>
                  <select class="form-control" id="exampleSelect1">
                    <option>-- Chọn phương thức thanh toán --</option>
                    <option>Tiền mặt</option>
                    <option>Vnpay</option>
                    
                  </select>
                </div>
                <div class="form-group  col-md-4">
                  <label class="control-label">Tổng tiền</label>
                  <input class="form-control" type="text">
                </div>
                <div class="form-group  col-md-4">
                  <label class="control-label">Ghi chú</label>
                  <input class="form-control" type="text">
                </div>
               
                <div class="form-group col-md-4">
                  <label for="exampleSelect1" class="control-label">Tình trạng đơn hàng</label>
                  <select class="form-control" id="exampleSelect1">
                    <option>-- Chọn tình trạng --</option>
                    <option>Đã xử lý</option>
                    <option>Đang chờ</option>
                    <option>Đã hủy</option>
                  </select>
                </div>
              
                
          </div>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" href="../web/order.php">Hủy bỏ</a>
        </div>
    </main>
<?php
include("../layout/footer.php");
?>