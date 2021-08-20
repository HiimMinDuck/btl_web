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
    <link rel="stylesheet" href="../CSS/addTour.css">
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>
    <style>
      .main h1{
          margin-top: 20px;
      }
    </style>
    <title>Trang quản lí web</title>
</head>
<body>
<?php
    require "ketnoi.php";
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
                <li><a href="../QuanLy/index.php" id="active"><i class="fa fa-home" style="font-size:24px"></i>Trang Chủ</a></li>
                <li><a href="../html/gioiThieu.php">Giới Thiệu</a></li>
                <li><a href="../html/tourDuLich.php">Tour Du lịch</a></li>
                <li><a href="../html/News.php">Tin Tức</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="main" style="padding-top: 100px; padding-left:5%;width: 500px;" name='addtour'>
  <h1>Thêm Tour du lịch mới</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <p style="margin-top:20px">Mã tour:</p>         <input type="text" name="maTour"><br>
    <p style="margin-top:20px">Tên tour:</p>        <input type="text" name="tenTour"><br>
    <p style="margin-top:20px">Điểm đến tour:</p>

      <?php
        require "ketnoi.php";
        $sql="SELECT dDen FROM loaitour";
        if ($conn->query($sql) == TRUE){
          $result = $conn->query($sql);
          $rowcount= mysqli_num_rows($result);
          if ($rowcount > 0 )
          {
            echo"<select name='dDen'>";
            while($row = $result->fetch_assoc())
            {
              echo "<option name='dDen' value='".$row['dDen']."'>".$row['dDen']."</option>";
            }
            echo "</select>";
          }
        }
       ?>

    <p style="margin-top:20px">Chi tiết tour:</p>   <input type="text" name="ctTour"><br>
    <p style="margin-top:20px">Giá tour:  </p>      <input type="text" name="giaTour" onkeypress='return event.charCode >= 48 && event.charCode <= 57'><br>
    <p style="margin-top:20px">Trạng Thái:  </p>
  <p><input type="radio" name="tThai" value="Hiện" checked> Hiện</p>
  <p>  <input type="radio" name="tThai" value="Ẩn"> Ẩn</p>
    <p style="margin-top:20px">Ảnh Tour:</p>        <input type="file" name="fileUpload"><br><br>
    <input type="submit" name="submit" value="Thêm mới">
  </form>
  <?php
  if(isset($_POST["submit"])){
    $maTour=$_POST["maTour"];
    $tenTour=$_POST["tenTour"];
    $ctTour=$_POST["ctTour"];
    $giaTour=$_POST["giaTour"];
    $tThai=$_POST["tThai"];
    $dDen=$_POST["dDen"];
    $picture = $_FILES["fileUpload"]["name"];
    if ($picture !=null) {
        $target_dir="../images/"; //thu muc luu tru tam thoi
        $tmp_name = $_FILES["fileUpload"]["tmp_name"]; //dia chi luu tru file tam thoi
        $picture = $_FILES["fileUpload"]["name"]; //ten file
        move_uploaded_file($tmp_name,$target_dir.basename($picture));
        $sql = "INSERT INTO tour(maTour,tenTour,ctTour,giaTour,dDen,anhTour,tThai) VALUES ('$maTour','$tenTour','$ctTour','$giaTour','$dDen','$picture','$tThai')";
      }
    else{
      $sql = "INSERT INTO tour(maTour,tenTour,ctTour,dDen,giaTour,tThai) VALUES ('$maTour','$tenTour','$ctTour','$dDen','$giaTour','$tThai')";
    }
        if ($conn->query($sql) == TRUE){
          echo"";
          header("Location:addTour.php");
        }else{
          echo"$conn->error";
        }
      }
   ?>
</div>
<div class="main" style="position: absolute;left:600px;top:120px;">
  <h1> Tên 1 số tour hiện có. </h1>
  <p style="margin-left:20px">Chi tiết xem tại:<a href="../html/DSTour.php"><button>Danh sách tour hiện có</button></a></p>

  <?php
  $sql="SELECT tenTour FROM tour LIMIT 7";
  if ($conn->query($sql) == TRUE){
    $result = $conn->query($sql);
    $rowcount= mysqli_num_rows($result);
    if($rowcount>0){
      while($row = $result->fetch_assoc()){
        echo "<h2 style='margin-top:10px;margin-left:20px'>".$row["tenTour"]."</h2><br>";
      }
    }
  }
   ?>
</div>
<div style='padding-bottom:50px'>
  </body>
</html>
