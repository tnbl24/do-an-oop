<?php

include("../layout/header.php");

?>

<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="./add-product.php" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới chó</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>Mã chó</th>
                                <th>Tên danh mục</th>
                                <th>Ảnh</th>
                                <th>Ngày sinh</th>
                                <th>Giới tính</th>
                                <th>Màu sắc</th>
                                <th>Cân nặng</th>
                                <th>Giá tiền</th>
                                <th>Tình trạng tiêm chủng</th>
                                <th>Tình trạng sức khỏe</th>
                                <th>Mô tả</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71309005</td>
                                <td>husky</td>
                                <td><img src="/img-sanpham/theresa.jpg" alt="" width="100px;"></td>
                                <td>1/1/2022</td>
                                <td>đực</td>
                                <td>Đen trắng</td>
                                <td>5kg</td>
                                <td>30.000.000 vnđ</td>
                                <td>đã tiêm 1 mũi</td>
                                <td><span class="badge bg-success">tốt</span></td>

                                <td></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71309005</td>
                                <td>husky</td>
                                <td><img src="/img-sanpham/theresa.jpg" alt="" width="100px;"></td>
                                <td>1/1/2022</td>
                                <td>đực</td>
                                <td>Đen trắng</td>
                                <td>5kg</td>
                                <td>30.000.000 vnđ</td>
                                <td>đã tiêm 1 mũi</td>
                                <td><span class="badge bg-success">tốt</span></td>

                                <td></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71309005</td>
                                <td>husky</td>
                                <td><img src="/img-sanpham/theresa.jpg" alt="" width="100px;"></td>
                                <td>1/1/2022</td>
                                <td>đực</td>
                                <td>Đen trắng</td>
                                <td>5kg</td>
                                <td>30.000.000 vnđ</td>
                                <td>đã tiêm 1 mũi</td>
                                <td><span class="badge bg-success">tốt</span></td>

                                <td></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71309005</td>
                                <td>husky</td>
                                <td><img src="/img-sanpham/theresa.jpg" alt="" width="100px;"></td>
                                <td>1/1/2022</td>
                                <td>đực</td>
                                <td>Đen trắng</td>
                                <td>5kg</td>
                                <td>30.000.000 vnđ</td>
                                <td>đã tiêm 1 mũi</td>
                                <td><span class="badge bg-success">tốt</span></td>

                                <td></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71309005</td>
                                <td>husky</td>
                                <td><img src="/img-sanpham/theresa.jpg" alt="" width="100px;"></td>
                                <td>1/1/2022</td>
                                <td>đực</td>
                                <td>Đen trắng</td>
                                <td>5kg</td>
                                <td>30.000.000 vnđ</td>
                                <td>đã tiêm 1 mũi</td>
                                <td><span class="badge bg-success">tốt</span></td>

                                <td></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71309005</td>
                                <td>husky</td>
                                <td><img src="/img-sanpham/theresa.jpg" alt="" width="100px;"></td>
                                <td>1/1/2022</td>
                                <td>đực</td>
                                <td>Đen trắng</td>
                                <td>5kg</td>
                                <td>30.000.000 vnđ</td>
                                <td>đã tiêm 1 mũi</td>
                                <td><span class="badge bg-success">tốt</span></td>

                                <td></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71309005</td>
                                <td>husky</td>
                                <td><img src="/img-sanpham/theresa.jpg" alt="" width="100px;"></td>
                                <td>1/1/2022</td>
                                <td>đực</td>
                                <td>Đen trắng</td>
                                <td>5kg</td>
                                <td>30.000.000 vnđ</td>
                                <td>đã tiêm 1 mũi</td>
                                <td><span class="badge bg-success">tốt</span></td>

                                <td></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71309005</td>
                                <td>husky</td>
                                <td><img src="/img-sanpham/theresa.jpg" alt="" width="100px;"></td>
                                <td>1/1/2022</td>
                                <td>đực</td>
                                <td>Đen trắng</td>
                                <td>5kg</td>
                                <td>30.000.000 vnđ</td>
                                <td>đã tiêm 1 mũi</td>
                                <td><span class="badge bg-success">tốt</span></td>

                                <td></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71309005</td>
                                <td>husky</td>
                                <td><img src="/img-sanpham/theresa.jpg" alt="" width="100px;"></td>
                                <td>1/1/2022</td>
                                <td>đực</td>
                                <td>Đen trắng</td>
                                <td>5kg</td>
                                <td>30.000.000 vnđ</td>
                                <td>đã tiêm 1 mũi</td>
                                <td><span class="badge bg-success">tốt</span></td>

                                <td></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71309005</td>
                                <td>husky</td>
                                <td><img src="/img-sanpham/theresa.jpg" alt="" width="100px;"></td>
                                <td>1/1/2022</td>
                                <td>đực</td>
                                <td>Đen trắng</td>
                                <td>5kg</td>
                                <td>30.000.000 vnđ</td>
                                <td>đã tiêm 1 mũi</td>
                                <td><span class="badge bg-success">tốt</span></td>

                                <td></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71309005</td>
                                <td>husky</td>
                                <td><img src="/img-sanpham/theresa.jpg" alt="" width="100px;"></td>
                                <td>1/1/2022</td>
                                <td>đực</td>
                                <td>Đen trắng</td>
                                <td>5kg</td>
                                <td>30.000.000 vnđ</td>
                                <td>đã tiêm 1 mũi</td>
                                <td><span class="badge bg-success">tốt</span></td>

                                <td></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71309005</td>
                                <td>husky</td>
                                <td><img src="/img-sanpham/theresa.jpg" alt="" width="100px;"></td>
                                <td>1/1/2022</td>
                                <td>đực</td>
                                <td>Đen trắng</td>
                                <td>5kg</td>
                                <td>30.000.000 vnđ</td>
                                <td>đã tiêm 1 mũi</td>
                                <td><span class="badge bg-success">tốt</span></td>

                                <td></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71309005</td>
                                <td>husky</td>
                                <td><img src="/img-sanpham/theresa.jpg" alt="" width="100px;"></td>
                                <td>1/1/2022</td>
                                <td>đực</td>
                                <td>Đen trắng</td>
                                <td>5kg</td>
                                <td>30.000.000 vnđ</td>
                                <td>đã tiêm 1 mũi</td>
                                <td><span class="badge bg-success">tốt</span></td>

                                <td></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>71309005</td>
                                <td>husky</td>
                                <td><img src="/img-sanpham/theresa.jpg" alt="" width="100px;"></td>
                                <td>1/1/2022</td>
                                <td>đực</td>
                                <td>Đen trắng</td>
                                <td>5kg</td>
                                <td>30.000.000 vnđ</td>
                                <td>đã tiêm 1 mũi</td>
                                <td><span class="badge bg-success">tốt</span></td>

                                <td></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></button>
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
                            <h5>Chỉnh sửa thông tin chó</h5>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="control-label">Mã chó </label>
                        <input class="form-control" type="number" value="71309005">
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="exampleSelect1" class="control-label">Danh mục</label>
                        <select class="form-control" id="exampleSelect1">
                            <option>-- Chọn danh mục --</option>
                            <option>Còn hàng</option>
                            <option>Hết hàng</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Ngày sinh</label>
                        <input class="form-control" type="date" value="15/03/2000">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Giới tính</label>
                        <select class="form-control" id="exampleSelect2" required>
                            <option>-- Chọn giới tính --</option>
                            <option>Đực</option>
                            <option>Cái</option>
                        </select>
                    </div>

                    <div class="form-group  col-md-6">
                        <label class="control-label">Màu sắc</label>
                        <input class="form-control" type="text" value="Nâu đỏ">
                    </div>
                    <div class="form-group  col-md-6">
                        <label class="control-label">Cân nặng</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Giá tiền</label>
                        <input class="form-control" type="text" value="5.600.000">
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="exampleSelect1" class="control-label">Tình trạng tiêm chủng</label>
                        <select class="form-control" id="exampleSelect1">
                            <option>-- Chọn tình trạng --</option>
                            <option>Còn hàng</option>
                            <option>Hết hàng</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="exampleSelect1" class="control-label">Tình trạng sức khỏe</label>
                        <select class="form-control" id="exampleSelect1">
                            <option>-- Chọn tình trạng --</option>
                            <option>Còn hàng</option>
                            <option>Hết hàng</option>
                        </select>
                    </div>

                    

                    </div>
                    <div class="form-group col-md-13">
                        <label class="control-label">Mô tả </label>
                        <textarea class="form-control" name="mota" id="mota"></textarea>
                        <script>
                            CKEDITOR.replace('mota');
                        </script>
                    </div>
                    <div class="form-group col-md-13">
                        <label class="control-label">Ảnh </label>
                        <div id="myfileupload">
                            <input type="file" id="uploadfile" name="ImageUpload" onchange="readURL(this);" />
                        </div>
                        <div id="thumbbox">
                            <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                            <a class="removeimg" href="javascript:"></a>
                        </div>
                        <div id="boxchoice">
                            <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a>
                            <p style="clear:both"></p>
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
<?php include("../layout/footer.php");
?>