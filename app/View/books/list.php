<?php

include_once 'app/Model/DBConnect.php';
include_once 'app/Model/BookModel.php';

$scm = new \App\Model\BookModel();

$scms = $scm->getAll();
?>
<div class="card-deck">
    <?php foreach ($scms as $index => $scm): ?>
    <div class="col-sm-3">
        <div class="card">
                <div class="card-body justify-content-center" >
                    <div style="width: 200px;">
                        <img class="card-img-top" src="images/<?php echo $scm['bImage'] ?>" alt=""></td>
                        <a href="index.php?page=detail&id=<?php echo $scm['bID'] ?>" class="btn btn-success">Xem mô
                            tả</a>
<!--                        <a href="index.php?page=update&id=--><?php //echo $scm['bID'] ?><!--" class="btn btn-primary">Chinh sua</a>-->
                        <a onclick="return confirm('Are you sure?')"
                           href="index.php?page=delete&id=<?php echo $scm['bID'] ?>"
                           class="btn btn-danger">Xoá</a>
                    </div>
                </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<!--<div class="card">-->
<!--    <h5 class="card-header">Danh sách truyện</h5>-->
<!--    <div class="card-body">-->
<!--        <a class="btn btn-success" href="index.php?page=create">New</a>-->
<!--        <table class="table table-striped">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <td>STT</td>-->
<!--                <td>Tên truyện</td>-->
<!--                <td>Giá (VNĐ)</td>-->
<!--                <td>Thể loại</td>-->
<!--                <td>Ảnh</td>-->
<!--                <td></td>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            --><?php //foreach ($scms as $index => $scm): ?>
<!--                <tr>-->
<!--                    <td>--><?php //echo $scm['bID'] ?><!--</td>-->
<!--                    <td>--><?php //echo $scm['bName'] ?><!--</td>-->
<!--                    <td>--><?php //echo number_format($scm['bPrice']) ?><!--</td>-->
<!--                    <td>--><?php //echo $scm['bCategory'] ?><!--</td>-->
<!--                    <td><img width="50" src="images/--><?php //echo $scm['bImage'] ?><!--" alt=""></td>-->
<!--                    <td>-->
<!--                        <a href="index.php?page=detail&id=--><?php //echo $scm['bID'] ?><!--">Xem mô tả</a>-->
<!--                        <a onclick="return confirm('Are you sure?')" href="index.php?page=delete&id=--><?php //echo $scm['bID'] ?><!--">Xoá</a>-->
<!--                    </td>-->
<!--                </tr>-->
<!--            --><?php //endforeach; ?>
<!--            </tbody>-->
<!--        </table>-->
<!--    </div>-->
<!--</div>-->
<!---->

