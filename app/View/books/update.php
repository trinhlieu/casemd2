<?php

include_once 'app/Model/DBConnect.php';
include_once 'app/Model/BookModel.php';


?>
<div class="card">
    <h5 class="card-header">Sửa truyện</h5>
    <div class="card-body">
        <form method="post" action="in">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên truyện</label>
                <input name="name" type="text" class="form-control" id="name" value= <?php echo $book['bName'] ?>>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Giá</label>
                <input name="price" type="text" class="form-control" id="price" value= <?php echo $book['bPrice'] ?>>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Thể loại</label>
                <input name="category" type="text" class="form-control" id="category" value=<?php echo $book['bCategory'] ?>>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả</label>
                <input name="description" type="text" class="form-control" id="description" value= <?php echo $book['bDescription'] ?>>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Ảnh</label>
                    <input name="image" type="file" class="form-control-file" id="image" value= <?php echo $book['bImage'] ?>>
                </div>
            </form>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" type="button" class="btn btn-danger">Thoát</a></td>
        </form>
    </div>
</div>
