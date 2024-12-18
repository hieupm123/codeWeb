<!-- Main layout -->
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <title>Hệ Thống Quản Lý Thời Khóa Biểu</title>
</head>

<body>
    <header id="header">
        <div class="header-container">
            <div class="header-left">
                <img src="../../../web/images/logo-hus.jpg" alt="Logo" class="logo">
                <span class="header-title lato-bold">Nhóm No.2</span>
            </div>
            <div class="header-right">
                <p>Tên login: <span></span></p>
                <p>Thời gian login: <span></span></p>
            </div>
        </div>
    </header>
    <main id="content">

        <?php require_once "./app/views/" . $data["view"] . ".php" ?>
    </main>
    <footer id="footer"></footer>

    <script src="../../../web/js/enums.js"></script>
</body>

</html>