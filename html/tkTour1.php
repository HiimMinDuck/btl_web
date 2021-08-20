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
  <?php
  session_start();
  require 'ketnoi.php';
  if (isset($_SESSION['email']) and $_SESSION['email'] == "traveltripmanager@gmail.com") {
        
    }else {
        header ('location: ../QuanLy/DangNhap.php');
    }

  $db = mysqli_select_db($conn, 'traveltrip');
  if ($db == null)
  echo "<br>Khong chon duoc database";

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
                <li><a href="../QuanLy/index.php" id="active"><i class="fa fa-home" style="font-size:24px"></i>Trang Chủ</a></li>
                <li><a href="../html/gioiThieu.php">Giới Thiệu</a></li>
                <li><a href="../html/tourDuLich.php">Tour Du lịch</a></li>
                <li><a href="../html/News.php">Tin Tức</a></li>
            </ul>
        </div>
    </nav>
</div>

<div style="padding-top: 100px; padding-left: 5%">
<h1> Kết quả tìm kiếm</h1></div>
<?php
if(isset($_POST["submit"])){
  $tk=$_POST["search"];
  $ndtk=$_POST["search1"];
  if($tk=='dDen'){
    $sql="SELECT tour.maTour, loaitour.madDen, tour.dDen, tour.tenTour,tour.ctTour, tour.giaTour,tour.anhTour
          FROM tour, loaitour
          WHERE tour.dDen=loaitour.dDen and tour.dDen='$ndtk'";
    }
    else{
      $sql="SELECT tour.maTour, loaitour.madDen, tour.dDen, tour.tenTour,tour.ctTour, tour.giaTour,tour.anhTour
            FROM tour, loaitour
            WHERE tour.dDen=loaitour.dDen and tour.$tk='$ndtk'";
    }
          if ($conn->query($sql) == TRUE){
            $result = $conn->query($sql);
            $rowcount= mysqli_num_rows($result);
            if ($rowcount > 0 )
            {
              echo "<table id='tour'>";
              echo"<tr>
              <th>Mã Tour</th>
              <th>Mã điểm đến</th>
              <th>Điểm đến
              <th>Tên Tour</th>
              <th>Chi tiết Tour</th>
              <th>Giá Tour</th>
              <th>Ảnh Tour</th>
              </tr>";
              while($row = $result->fetch_assoc())
              {
                echo "
                <tr><td style='width:80px'>".$row["maTour"]."</td>
                <td>".$row["madDen"]."</td>
                <td>".$row["dDen"]."</td>
                <td>".$row["tenTour"]."</td>
                <td>".$row["ctTour"]."</td>
                <td>".$row["giaTour"]."</td>
                <td style='text-align:center'><a href='../images/".$row['anhTour']."'><img src= ../images/".$row['anhTour']." style='height:100px'></a>"."</td>";
              }
              echo "</table>";
            }else {
              echo"<h2 style='margin-top:20px;margin-left:10px'>Hiện tại không có tour</h2>";
            }
          }
}
 ?>

  </body>
</html>
