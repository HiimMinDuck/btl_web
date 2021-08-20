<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../CSS/DSTour.css">
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>

    <title>Trang quản lí web</title>
</head>
<body>
<!-- menuBar -->
<?php
    require "ketnoi.php";
    session_start();
    if (isset($_SESSION['email']) and $_SESSION['email'] == "traveltripmanager@gmail.com") {
        
    }else {
        header ('location: ../QuanLy/DangNhap.php');
    }
  ?>
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
                <li><a href="../QuanLy/index.php" id="active"><i class="fa fa-home" style="font-size:24px"></i>Trang Chủ</a></li>
                <li><a href="../html/gioiThieu.php">Giới Thiệu</a></li>
                <li><a href="../html/tourDuLich.php">Tour Du lịch</a></li>
                <li><a href="../html/News.php">Tin Tức</a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- ------------ -->
<div class="main" style="padding-top: 100px">
  <h1 style="text-align:center">Danh sách tất cả tour hiện có</h1><br>
    <a href="../html/CSuaTour.php"><button  style='width: 200px; margin-left:40%;margin-bottom:20px'>Chỉnh sửa</button></a>
  <?php
  require "ketnoi.php";
  $sql="SELECT maTour,tenTour,dDen,ctTour,giaTour,anhTour,tThai FROM tour";
  if ($conn->query($sql) == TRUE){
    $result = $conn->query($sql);
    $rowcount= mysqli_num_rows($result);
    if ($rowcount > 0 )
    {
      echo "<table id='tour'>";
      echo"<tr>
      <th>Mã Tour</th>
      <th>Tên Tour</th>
      <th>Điểm đến</th>
      <th>Chi tiết Tour</th>
      <th>Giá Tour</th>
      <th >Ảnh Tour</th>
      <th>Trạng thái</th>
      </tr>";
      while($row = $result->fetch_assoc())
      {
        echo "
        <tr><td style='width:80px'>".$row["maTour"]."</td>
        <td>".$row["tenTour"]."</td>
        <td>".$row["dDen"]."</td>
        <td>".$row["ctTour"]."</td>
        <td>".$row["giaTour"]."</td>
        <td style='text-align:center'><a href='../images/".$row['anhTour']."'><img src= ../images/".$row['anhTour']." style='height:100px'></a>"."</td>
        <td style='width:100px'>".$row['tThai']."</td></tr>";
      }
      echo "</table>";
    }else {
      echo"<h2 style='margin-top:20px;margin-left:10px'>Hiện tại không có tour</h2>";
    }
  }
   ?>
</div>
  </body>
</html>
