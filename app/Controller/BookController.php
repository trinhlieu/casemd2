<?php

namespace App\Controller;

use App\Model\BookModel;

class BookController
{
    private $bookModel;

    public function __construct()
    {
        $this->bookModel = new BookModel();
    }

    public function index()
    {
        $books = $this->bookModel->getAll();
        include 'app/View/books/list.php';
    }

    public function showDetail($id)
    {
        $books = $this->bookModel->showDetail($id);
        include 'app/View/books/detail.php';
    }

    public function delete($id)
    {
        $this->bookModel->delete($id);
        include 'app/View/books/list.php';
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once 'app/View/books/create.php';
        } else {
            $data = [
                'name' => $_REQUEST['name'],
                'price' => $_REQUEST['price'],
                'category' => $_REQUEST['category'],
                'description' => $_REQUEST['description'],
                'image' => $_REQUEST['image'],
            ];
            $this->bookModel->add($data);
//            header('location:index.php');
            echo '<script type="text/javascript"> alert("Thêm thành công"); window.location.href = "index.php"  </script>';
        }
    }

    public function category($ctg)
    {
        $books = $this->bookModel->category($ctg);
        include 'app/View/books/category.php';
    }

    public function login($email, $password)
    {
        if ($this->bookModel->login($email, $password)) {
            $_SESSION['islogin'] = true;
            header('location:index.php?page=default');
            echo "Đăng nhâp thành công";
        } else {
            $_SESSION['islogin'] = "Tài khoản sai";
        }
    }

    public function showLogin()
    {
        include 'login.php';
    }

    public function update($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $book = $this->bookModel->showDetail($id);
            include 'app/View/books/update.php';
        } else {
            $data = [
                'name' => $_REQUEST['name'],
                'price' => $_REQUEST['price'],
                'category' => $_REQUEST['category'],
                'description' => $_REQUEST['description'],
                'image' => $_REQUEST['image']

            ];
            $this->bookModel->update($id, $data);
            echo '<script type="text/javascript"> alert("Sửa thành công"); window.location.href = "index.php"  </script>';
        }
    }

    public function search($keyword) {
        $books = $this->bookModel->search($keyword);
        include 'app/View/books/list.php';
    }
}
