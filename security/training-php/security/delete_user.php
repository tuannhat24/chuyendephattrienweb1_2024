<?php
session_start();
require_once 'models/UserModel.php';

$userModel = new UserModel();
$user = NULL; // Người dùng được thêm mới
$id = NULL;

// Kiểm tra người dùng đăng nhập chưa
if (!isset($_SESSION['id'])) {
    die("Bạn phải đăng nhập mới được thao tác");
}

// Lấy id từ tham số GET    
if (!empty($_GET['id'])) {
    $id = intval($_GET['id']);

    // Kiểm tra xem người dùng hiện tại có phải người xóa ko
    if ($_SESSION['id'] != $id) {
        die("Bạn không có quyền xóa người dùng này");
    }

    // Xóa người dùng
    $userModel->deleteUserById($id);
}

// Chuyển hướng về danh sách người dùng
header('location: list_users.php');
exit;
?>
