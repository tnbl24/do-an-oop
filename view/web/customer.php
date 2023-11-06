<?php

include("../layout/header.php");

?>

<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách khách hàng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="./add-customer.php" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới khách hàng</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>Mã khách hàng</th>
                                <th width="150">Họ và tên</th>
                                <th width="300">Địa chỉ</th>
                                <th>Ngày sinh</th>
                                <th>Giới tính</th>
                                <th>SĐT</th>
                                <th>Email</th>
                                <th>TKNH</th>
                                <th width="100">Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>#CD12837</td>
                                <td>Hồ Thị Thanh Ngân</td>
                                <td>155-157 Trần Quốc Thảo, Quận 3, Hồ Chí Minh </td>
                                <td>12/02/1999</td>
                                <td>Nữ</td>
                                <td>0926737168</td>
                                <td>sad@gmail.com</td>
                                <td>0926737168</td>
                                <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>#CD12837</td>
                                <td>Hồ Thị Thanh Ngân</td>
                                <td>155-157 Trần Quốc Thảo, Quận 3, Hồ Chí Minh </td>
                                <td>12/02/1999</td>
                                <td>Nữ</td>
                                <td>0926737168</td>
                                <td>sad@gmail.com</td>
                                <td>0926737168</td>
                                <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>#CD12837</td>
                                <td>Hồ Thị Thanh Ngân</td>
                                <td>155-157 Trần Quốc Thảo, Quận 3, Hồ Chí Minh </td>
                                <td>12/02/1999</td>
                                <td>Nữ</td>
                                <td>0926737168</td>
                                <td>sad@gmail.com</td>
                                <td>0926737168</td>
                                <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>#CD12837</td>
                                <td>Hồ Thị Thanh Ngân</td>
                                <td>155-157 Trần Quốc Thảo, Quận 3, Hồ Chí Minh </td>
                                <td>12/02/1999</td>
                                <td>Nữ</td>
                                <td>0926737168</td>
                                <td>sad@gmail.com</td>
                                <td>0926737168</td>
                                <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>#CD12837</td>
                                <td>Hồ Thị Thanh Ngân</td>
                                <td>155-157 Trần Quốc Thảo, Quận 3, Hồ Chí Minh </td>
                                <td>12/02/1999</td>
                                <td>Nữ</td>
                                <td>0926737168</td>
                                <td>sad@gmail.com</td>
                                <td>0926737168</td>
                                <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>#CD12837</td>
                                <td>Hồ Thị Thanh Ngân</td>
                                <td>155-157 Trần Quốc Thảo, Quận 3, Hồ Chí Minh </td>
                                <td>12/02/1999</td>
                                <td>Nữ</td>
                                <td>0926737168</td>
                                <td>sad@gmail.com</td>
                                <td>0926737168</td>
                                <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<!--
  MODAL
-->
<div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="form-group  col-md-12">
                        <span class="thong-tin-thanh-toan">
                            <h5>Chỉnh sửa thông tin khách hàng</h5>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="control-label">Mã khách hàng</label>
                        <input class="form-control" type="text" required value="#CD2187" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Họ và tên</label>
                        <input class="form-control" type="text" required value="Võ Trường">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Địa chỉ </label>
                        <input class="form-control" type="text" required value="truong.vd2000@gmail.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Ngày sinh</label>
                        <input class="form-control" type="date" value="15/03/2000">
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label">Giới tính</label>
                        <select class="form-control" id="exampleSelect2" required>
                            <option>-- Chọn giới tính --</option>
                            <option>Nam</option>
                            <option>Nữ</option>
                        </select>
                    </div>
                    <div class="form-group  col-md-6">
                        <label class="control-label">Số điện thoại</label>
                        <input class="form-control" type="number" required value="09267312388">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Email </label>
                        <input class="form-control" type="text" required value="truong.vd2000@gmail.com">
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
include("../layout/footer.php");
?>