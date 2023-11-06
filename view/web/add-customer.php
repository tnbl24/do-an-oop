<?php
include("../layout/header.php");
?>
  <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="./customer.php"> Danh sách khách hàng</a></li>
        <li class="breadcrumb-item"><a href="#">Thêm khách hàng</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">Tạo mới khách hàng</h3>
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i
                      class="fas fa-folder-plus"></i> Tạo  mới</b></a>
              </div>

            </div>
            <form class="row">
              <div class="form-group col-md-4">
                <label class="control-label">Mã khách hàng</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Họ và tên</label>
                <input class="form-control" type="text" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ</label>
                <input class="form-control" type="text" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Ngày sinh</label>
                <input class="form-control" type="date">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giới tính</label>
                <select class="form-control" id="exampleSelect2" required>
                  <option>-- Chọn giới tính --</option>
                  <option>Nam</option>
                  <option>Nữ</option>
                </select>
              </div>
              <div class="form-group  col-md-4">
                <label class="control-label">Số điện thoại</label>
                <input class="form-control" type="number" required>
              </div>
              
              <div class="form-group  col-md-3">
                <label class="control-label">Email</label>
                <input class="form-control" type="text" required>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">TKNH</label>
                <input class="form-control" type="number" required>
              </div>
          </div>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" href="./customer.php">Hủy bỏ</a>
        </div>

  </main>


  <!--
  MODAL
-->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Tạo mới</h5>
              </span>
            </div>
            
          </div>
          <BR>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
          <BR>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!--
  MODAL
-->


<?php
include("./customer.php");
?>