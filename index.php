<?php
//session_start();
//if (!isset($_SESSION['islogin'])||empty($_SESSION['islogin'])) {
//    header('location:index.php');
//}
//?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<div id="header" class="container">
    <?php include_once 'app/View/layout/header.php'; ?>

    <?php
    require __DIR__ . '/vendor/autoload.php';

    use App\Controller\BookController;

    $page = $_GET['page'] ?? "";
    $category = $_GET['category'] ?? null;
//    $search = $_REQUEST['search'] ?? null;
    $bookController = new BookController();

    switch ($page) {
        case "detail":
            $id = $_GET['id'];
            $bookController->showDetail($id);
            break;
        case "delete":
            $id = $_GET['id'];
            $bookController->delete($id);
            break;
        case "create":
            $bookController->create();
            break;
        case "category":
            $ctg = $_GET['ctg'];
            $bookController->category($ctg);
            break;
        case "login":
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $bookController->showLogin();
            } else {
                $bookController->login($_REQUEST['email'], $_REQUEST['psw']);
            }
            break;
        case "update":
            $id = $_GET['id'];
            $bookController->update($id);
            break;
        default:
            if (isset($_GET['search'])) {
                $bookController->search($_GET['search']);
            } else {
                $bookController->index();
            }
    }

    ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
</body>

