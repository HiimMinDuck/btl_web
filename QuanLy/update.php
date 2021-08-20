<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../CSS/update.css">
</head>
<?php
    require "connect.php";
    session_start();
    if (isset($_SESSION['email']) and $_SESSION['email'] == "traveltripmanager@gmail.com") {
        
    }else {
        header ('location: ../QuanLy/DangNhap.php');
    }
?>
<body>
    <?php
        require "connect.php";

        $id = $_REQUEST["id"];

        $sql = "SELECT * FROM users WHERE id = '$id'";

        $result = $conn->query($sql);
        if ($result ->num_rows >0 ) {
            while ($row = $result->fetch_assoc()) {
                $name = $row["name"];
                $phone = $row["phoneNumber"];
                $email = $row["email"];
                $pass = $row["password"];
            }
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
                <li><a href="../QuanLy/index.php" ><i class="fa fa-home" style="font-size:24px"></i>Trang Chủ</a></li>
                <li><a href="../html/gioiThieu.php">Giới Thiệu</a></li>
                <li><a href="../html/tourDuLich.php">Tour Du lịch</a></li>
                <li><a href="../html/News.php">Tin Tức</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="container">
    <p>
        <a href="./QuanLy.php ">&larr; Quản lý</a> / <a id="active" href='./update.php?id=<?php echo $id;?>'>Edit</a>
    </p>
    <form class="login" action="" method='POST'>
        <h3>Sửa thông tin khách hàng</h3>
        <label>Họ & tên:</label> 
        <input type="text" name="name" value="<?php echo "$name"; ?>">
        <label>Số điện thoại:</label>
        <input type="text" name="phone" value="<?php echo "$phone"; ?>">
        <label>E-mail:</label>
        <input type="text" name="email" value="<?php echo "$email"; ?>">
        <label>Mật khẩu:</label>
        <input type="text" name="pass" value="<?php echo "$pass"; ?>">

        <input class="btn" type="submit" name="update" value="Cập Nhật">
    </form>
</div>

    <?php
        if (isset($_POST["update"])) {
            
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $pass = $_POST["pass"];

            $sql = "UPDATE users SET name = '$name', phoneNumber = '$phone', email = '$email', password = '$pass' WHERE id = '$id'";

            if ($conn->query($sql) == TRUE) {
                header ('location: ./QuanLy.php');
            }else {
                echo "Error: ".$conn->error;
            }
        }
        $conn->close();
    ?>
</body>
</html>