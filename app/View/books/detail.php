<?php

include_once 'app/Model/DBConnect.php';
include_once 'app/Model/BookModel.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<table class="table table-striped">
    <thead>
    <tr>
        <td>STT</td>
        <td>Tên truyện</td>
        <td>Giá (VNĐ)</td>
        <td>Thể loại</td>
        <td>Mô tả</td>
        <td>Ảnh</td>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $books['bID'] ?></td>
            <td><?php echo $books['bName'] ?></td>
            <td><?php echo number_format($books['bPrice']) ?></td>
            <td><?php echo $books['bCategory'] ?></td>
            <td><?php echo $books['bDescription'] ?></td>
            <td><img width="50" src="images/<?php echo $books['bImage'] ?>" alt=""></td>
            <a href="index.php?page=update&id=<?php echo $books['bID'] ?>" class="btn btn-primary">Chỉnh sửa</a>
        </tr>
    </tbody>
</body>
</html>
