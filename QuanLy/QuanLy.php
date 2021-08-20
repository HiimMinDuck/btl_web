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
                <li><a href="../QuanLy/index.php" ><i class="fa fa-home" style="font-size:24px"></i>Trang Chủ</a></li>
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
                <!-- <input class="sub" type="submit" value="Xem"> -->
                <!-- <input type="text" name="id" placeholder="Theo id..."> -->
                <input class="sub" type="submit" value="Xem">
            </form>
            
        </div>
    </div>
    <div class="col-md-9">
        <h2>Danh Sách Khách Hàng</h2>

        <form action="delete-checkbox.php" method="POST">
            <div class="container">
                <?php
                    require "connect.php";
                    $sql = "SELECT COUNT(id) as total FROM users";
                    $result = $conn->query($sql);
                    $row = mysqli_fetch_assoc($result);
                //tong so records hien co
                    $total_records = $row['total'];
                //trang hien tai
                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                //so records hien thi
                    $limit = 10;

                // tổng số trang
                    $total_page = ceil($total_records / $limit);

                // Giới hạn 
                    if ($current_page > $total_page){
                        $current_page = $total_page;
                    }
                    else if ($current_page < 1){
                        $current_page = 1;
                    }
                // Tìm Start
                    $start = ($current_page - 1) * $limit;

                    $sql ="SELECT * FROM users LIMIT $start, $limit";
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
                }
            ?>
            </table>
            <style>
                .col-md-9 .page{
                    float: right;
                    font-size: 18px;
                    font-weight: bold;
                    margin-bottom: 40px;
                    padding-right: 20px;
                }
                .col-md-9 .page #active{
                    color: #32aad6;
                }
                .col-md-9 .page a,span{
                    padding: 0px 10px;
                }
            </style>
            <div class="page">
                <?php
                    // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                    if ($current_page > 1 && $total_page > 1){
                        echo '<a href="./QuanLy.php?page='.($current_page-1).'">&larr; Prev</a> | ';
                    }
                    // Lặp khoảng giữa
                    for ($i = 1; $i <= $total_page; $i++){
                        // Nếu là trang hiện tại thì hiển thị thẻ span
                        // ngược lại hiển thị thẻ a
                        if ($i == $current_page){
                            echo '<span id="active">'.$i.'</span> | ';
                        }
                        else{
                            echo '<a href="./QuanLy.php?page='.$i.'">'.$i.'</a> | ';
                        }
                    }
                // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                    if ($current_page < $total_page && $total_page > 1){
                        echo '<a href="./QuanLy.php?page='.($current_page+1).'">Next &rarr;</a> ';
                    }
                ?>
            </div>
        </div>
    </form>
    </div>
</div>

<?php
    $conn->close();
?>
</body>
</html>