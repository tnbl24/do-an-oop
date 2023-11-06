<?php

include("../layout/header.php");

?>
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="../web/category.php">Quản lý danh mục</a></li>
                <li class="breadcrumb-item"><a href="#">Tạo mới</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Tạo mới danh mục</h3>
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
                                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i class="fas fa-folder-plus"></i> Tạo mới</b></a>
                            </div>

                        </div>
                        <form class="row">
                            <div class="form-group col-md-4">
                                <label class="control-label">Mã danh mục</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">Tên danh mục</label>
                                <input class="form-control" type="text">
                            </div>
                            
                            <div class="tile-footer">
                            </div>
                    </div>
                    <button class="btn btn-save" type="button">Lưu lại</button>
                    <a class="btn btn-cancel" href="../web/category.php">Hủy bỏ</a>
                </div>
    </main>

    <!--
  MODAL
-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row">
                        <div class="form-group  col-md-12">
                            <span class="thong-tin-thanh-toan">
                                <h5>Tạo mới</h5>
                            </span>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Nhập tình trạng</label>
                            <input class="form-control" type="text" required>
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
include_once("../layout/footer.php")
?>