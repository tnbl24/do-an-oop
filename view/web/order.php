<?php

include("../layout/header.php");

?>

<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="../web/order.php"><b>Danh sách đơn hàng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="../web/add-order.php" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới đơn hàng</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>Mã đơn hàng</th>
                                <th>Khách hàng</th>
                                <th>Mã chó</th>
                                <th>Số lượng</th>
                                <th>Ngày lập hóa đơn</th>
                                <th>Phương thức thanh toán</th>
                                <th>Tổng tiền</th>
                                <th>Ghi chú</th>
                                <th>Tình trạng đơn hàng</th>
                                <th>Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>MD0837</td>
                                <td>Triệu Thanh Phú</td>
                                <td>sp001, sp005</td>
                                <td>2</td>
                                <td>11/11/2023</td>
                                <td>vnpay</td>
                                <td>9.400.000 đ</td>
                                <td></td>
                                <td><span class="badge bg-success">Hoàn thành</span></td>
                                <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>MD0837</td>
                                <td>Triệu Thanh Phú</td>
                                <td>sp001, sp005</td>
                                <td>2</td>
                                <td>11/11/2023</td>
                                <td>vnpay</td>
                                <td>9.400.000 đ</td>
                                <td></td>
                                <td><span class="badge bg-success">Hoàn thành</span></td>
                                <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>MD0837</td>
                                <td>Triệu Thanh Phú</td>
                                <td>sp001, sp005</td>
                                <td>2</td>
                                <td>11/11/2023</td>
                                <td>vnpay</td>
                                <td>9.400.000 đ</td>
                                <td></td>
                                <td><span class="badge bg-info">chờ thanh toán</span></td>
                                <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>MD0837</td>
                                <td>Triệu Thanh Phú</td>
                                <td>sp001, sp005</td>
                                <td>2</td>
                                <td>11/11/2023</td>
                                <td>vnpay</td>
                                <td>9.400.000 đ</td>
                                <td></td>
                                <td><span class="badge bg-danger">đã hủy</span></td>
                                <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>MD0837</td>
                                <td>Triệu Thanh Phú</td>
                                <td>sp001, sp005</td>
                                <td>2</td>
                                <td>11/11/2023</td>
                                <td>vnpay</td>
                                <td>9.400.000 đ</td>
                                <td></td>
                                <td><span class="badge bg-warning">đang giao hàng</span></td>
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
                            <h5>Chỉnh sửa thông tin đơn hàng</h5>
                        </span>
                    </div>


                    <div class="form-group col-md-6 ">
                        <label for="exampleSelect1" class="control-label">Tình trạng đơn hàng</label>
                        <select class="form-control" id="exampleSelect1">
                            <option>-- Chọn tình trạng --</option>
                            <option>đang giao</option>
                            <option>Hết hàng</option>
                        </select>
                    </div>



                </div>
                <div class="form-group col-md-13">
                    <label class="control-label">Ghi chú</label>
                    <textarea class="form-control" name="mota" id="mota"></textarea>
                    <script>
                        CKEDITOR.replace('mota');
                    </script>
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
<?php include("../layout/footer.php");
?>