<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách sản phẩm</h1>
    <form action="index.php?act=listsize" method="post">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="float-right">
                    <div class="input-group">
                        <input type="text" name="kyw" class="form-control" placeholder="Nhập tên sản phẩm..." aria-label="Search product" aria-describedby="button-search">
                        <select name="iddm" id="" class="form-select">
                            <option value="0" selected>Tất cả</option>
                            <?php 
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                            ?>
                        </select>
                        <input type="submit" name="listok" class="btn btn-primary" value="Tìm kiếm">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>id</th>
                        <th>Tên tài khoản</th>
                        <th>sản phẩm</th>
                    
                        <th>Nội dung bình luận</th>
                       
                        <th>Ngày bình luận</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <?php 
                     $bl = loadall_binhluan2();
                    foreach ($bl as $binhluan) {
                        extract($binhluan);
                     
                        $xoabl = "index.php?act=xoabl&id=$idbl";
                      
                        echo '<tr>
                            <td>' . $id . '</td>
                            <td>' . $tendangnhap . '</td>
                            <td>' . $tensp . '</td>
                          
                            <td>' . $noidung . '</td>
                            <td>' . $ngaybinhluan . '</td>
                           
                            <td>
                              
                                  <a href="' . $xoabl . '" class="btn btn-danger btn-sm" onclick="return confirmDelete()">Xóa</a>
                            </td>
                        </tr>';
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function confirmDelete() {
        return confirm('Bạn có chắc chắn muốn xóa bình luận này không?');
    }
</script>
