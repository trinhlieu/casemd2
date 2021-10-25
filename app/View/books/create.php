<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<div class="card">-->
<!--    <h5 class="card-header">Thêm truyện</h5>-->
<!--    <div class="card-body">-->
<!--        <form method="post">-->
<!--            <div class="form-group">-->
<!--                <label for="book-name">Tên truyện</label>-->
<!--                <input name="name" type="text" class="form-control" id="book-name">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label for="book-price">Giá</label>-->
<!--                <input name="price" type="text" class="form-control" id="book-price">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label for="book-category">Thể loại</label>-->
<!--                <input name="category" type="text" class="form-control" id="book-category">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label for="book-description">Mô tả</label>-->
<!--                <input name="description" type="text" class="form-control" id="book-description">-->
<!--            </div>-->
<!--            <form>-->
<!--                <div class="form-group">-->
<!--                    <label for="book-image">Ảnh</label>-->
<!--                    <input name="image" type="file" class="form-control-file" id="book-image">-->
<!--                </div>-->
<!--            </form>-->
<!--            <button type="submit" class="btn btn-primary">Submit</button>-->
<!--            <a href="index.php" type="button" class="btn btn-danger">Cancel</a></td>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->
<!---->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Thêm mặt hàng</title>
</head>
<body>
<h2>Thêm mặt hàng</h2>
<form method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td><label for="product-name">Tên truyện</label></td>
            <td><input type="text" id="book-name" name="name"></td>
        </tr>
        <tr>
            <td><label for="product-price">Giá</label></td>
            <td><input type="text" id="book-price" name="price"></td>
        </tr>
        <tr>
            <td><label for="product-sector">Thể loại</label></td>
            <td><select style="width: 210px;" id="book-category" name="category">
                    <option>chọn thể loại...</option>
                    <option>Truyện tranh Nhật Bản</option>
                    <option>Truyện tranh Trung Quốc</option>
                    <option>Truyện tranh Việt Name</option
            </td>
        </tr>
        <tr>
            <td><label for="product-color">Mô tả</label></td>
            <td><textarea type="text" id="book-description" name="description" cols="21"></textarea></td>
        </tr>
        <tr>
            <td>
                <label for="exampleFormControlFile1">Ảnh</label>
                <input type="file" id="book-image" name="image">
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: right">
                <button type="submit" class="btn btn-success">Nhập mặt hàng</button>
                <a href="index.php" type="button" class="btn btn-danger">Thoát</a></td>
        </tr>
    </table>
</form>
</body>
</html>
