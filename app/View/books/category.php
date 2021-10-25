<?php
include_once 'app/Model/DBConnect.php';
include_once 'app/Model/BookModel.php';

$scm = new \App\Model\BookModel();

$scms = $scm->getAll();
?>
<div class="row">
    <?php foreach ($scms as $index => $scm): ?>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body justify-content-center" >
                    <div style="width: 184px;">
                        <img class="card-img-top" width="50" src="images/<?php echo $scm['bImage'] ?>" alt=""></td>
                        <a href="index.php?page=detail&id=<?php echo $scm['bID'] ?>" class="btn btn-success">Xem mô
                            tả</a>
                        <a onclick="return confirm('Are you sure?')"
                           href="index.php?page=delete&id=<?php echo $scm['bID'] ?>"
                           class="btn btn-danger">Xoá</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>