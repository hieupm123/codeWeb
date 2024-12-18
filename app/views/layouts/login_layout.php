<?php
require_once "app/commons/enums.php";
require_once 'app/views/components/confirm_popup.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../web/css/main.css">
    <title>Đăng Nhập | Hệ Thống Quản Lý Thời Khóa Biểu</title>

</head>

<body>

    <div class="wrapper">
        <?php require_once "./app/views/" . $data["view"] . ".php" ?>
    </div>

    <script src="../../../web/js/enums.js"></script>
</body>

</html>