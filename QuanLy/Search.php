<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../CSS/QuanLy.css">
</head>
<body>
<?php
    require "connect.php";
    session_start();
    if (isset($_SESSION['email']) and $_SESSION['email'] == "traveltripmanager@gmail.com") {
        
    }else {
        header ('location: ../QuanLy/DangNhap.php');
    }
  ?>
<!-- menuBar -->
<div class="fixed-top">
    <nav class="line-down">
        <div class="navbar-1">
            <?php
                if (isset($_SESSION['email'])) {
                    echo "
                        <span>Xin Chào " .$_SESSION['email']. "</span>
                        <ul>
                            <li><a href='../QuanLy/DangXuat.php' id='n-border'>Đăng xuất</a></li>
                            <li><a href='../html/admin.php'> Quản lý</a></li>
                        </ul>
                    ";
                }else {
                    echo "
                        <span>Chào mừng bạn đến với Website trực tuyến của chúng tôi!</span>
                        <ul>
                            <li><a href='../QuanLy/DangNhap.php' id='n-border'>Đăng nhập</a></li>
                            <li><a href='../QuanLy/DangKy.php'>Đăng ký</a></li>
                        </ul>
                    ";
                }
            ?>
            <form class="search">
                <input type="text" placeholder="Từ khóa tìm kiếm...">
                <i class="fa fa-search"></i>
            </form>
        </div>
    </nav>
    <nav class="line-up">
        <div class="navbar-2">
            <!-- mobile-menu -->
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <a class="navbar-brand" href="../QuanLy/index.php">
                <h2>Travel<small>Kit</small></h2>
            </a>
            <ul>
                <li><a href="../QuanLy/index.php"><i class="fa fa-home" style="font-size:24px"></i>Trang Chủ</a></li>
                <li><a href="../html/gioiThieu.php">Giới Thiệu</a></li>
                <li><a href="../html/tourDuLich.php">Tour Du lịch</a></li>
                <li><a href="../html/News.php">Tin Tức</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="box">
            <form action="addCustomer.php">
                <button><i class="fa fa-plus"></i> Khách Hàng</button>
            </form>
            <!--  -->
            <form action="Search.php" method="GET">
                <label><i class='fas fa-search'></i> Tìm kiếm</label>
                <input type="text" name="search" placeholder="Theo tên, sđt...">
                <!-- <input type="text" name="search" placeholder="Theo id..."> -->
                <input class="sub" type="submit" value="Xem">
            </form>
            
        </div>
    </div>
    <div class="col-md-9">
        <a href="./QuanLy.php">&larr; Quản lý</a> / <a id="active" href="./Search.php">Tìm kiếm</a>

        <h2>Khách Hàng</h2>

        <form action="delete-checkbox.php" method="POST">
            <div class="container">
                <?php
                    require "connect.php";
                    
                    $search = $_GET["search"];
                    if ($search == '') {
                        header('location: QuanLy.php');
                    }
                    $sql = "SELECT * FROM users WHERE name LIKE '%$search%' OR  phoneNumber LIKE '%$search%' ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo"<table class='table'>
                            <thead>
                            <tr>
                                <th>Check</th>
                                <th>ID</th>
                                <th>Họ & Tên</th>
                                <th>Email</th>
                                <th>Sđt</th>
                                <th>Mật Khẩu</th>
                                <th><button name='delete'><i class='fas fa-trash-alt'></i> Xóa</button></th>
                            </tr>
                            </thead>";
                        while ($row = $result->fetch_assoc()) {
                            $id = $row["id"];
                            echo "
                            <tbody>
                                <tr>
                                    <td> <input type='checkbox' name='checkbox[]' value='". $row["id"] . "'>" . "</td>".
                                    "<td>". $row["id"] ."</td>".
                                    "<td>". $row["name"] ."</td>".
                                    "<td>". $row["phoneNumber"] ."</td>".
                                    "<td>". $row["email"] ."</td>".
                                    "<td>". $row["password"] ."</td>".
                                    "<td> <a href='./delete.php?id=$id'>Delete</a> | <a href='./update.php?id=$id'>Edit</a></td>
                                </tr>
                            </tbody>";
                        }
                    }else {
                        echo "Không tìm thấy '$search'. <a href='./QuanLy.php'>&larr; Quay lại</a>";
                    }
                    
                ?>
                </table>
            </div>
        </form>
    </div>
</div>
<?php
    $conn->close();
?>
</body>
</html>
