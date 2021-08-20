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
    <link rel="stylesheet" href="../CSS/CSuaTour.css">
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>

    <title>Trang quản lí web</title>
</head>
<body>
  <?php
  
  require 'ketnoi.php';
  session_start();
  
  if (isset($_SESSION['email']) and $_SESSION['email'] == "traveltripmanager@gmail.com") {
        
  }else {
      header ('location: ../QuanLy/DangNhap.php');
  }
// --------------------
  $db = mysqli_select_db($conn, 'traveltrip');
  if ($db == null)
  echo "<br>Khong chon duoc database";
  if(isset($_POST["up"])){
    $maTour=$_POST["maTour"];
    $tenTour=$_POST["tenTour"];
    $ctTour=$_POST["ctTour"];
    $giaTour=$_POST["giaTour"];
    $tThai=$_POST["tThai"];
    $picture = $_FILES["fileUpload"]["name"];
    if ($picture !=null) {
        $target_dir="../images/"; //thu muc luu tru tam thoi
        $tmp_name = $_FILES["fileUpload"]["tmp_name"]; //dia chi luu tru file tam thoi
        $picture = $_FILES["fileUpload"]["name"]; //ten file
        move_uploaded_file($tmp_name,$target_dir.basename($picture));

        $sql = "UPDATE tour SET tenTour='$tenTour',ctTour='$ctTour',giaTour='$giaTour',anhTour='$picture',tThai='$tThai' WHERE maTour='$maTour'";
        if($conn->query($sql) == TRUE){
          echo "";
          header("Location:CSuaTour.php");
        }else{
          echo "";
        }
    }else{
      $sql = "UPDATE tour SET tenTour='$tenTour',ctTour='$ctTour',giaTour='$giaTour',tThai='$tThai' WHERE maTour='$maTour'";
      if($conn->query($sql) == TRUE){
        echo "";
        header("Location:CSuaTour.php");
      }else{
        echo "";
      }
    }
  }

  if(isset($_GET["task"]) and $_GET["task"]=='delete')
  {
    $idT=$_GET["id"];
    $sql = "delete from tour where idT='$idT'";
    if($conn->query($sql) == TRUE){
      echo "";
      header("Location:CSuaTour.php");
    }else{
      echo "";
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
                <li><a href="../QuanLy/index.php" id="active"><i class="fa fa-home" style="font-size:24px"></i>Trang Chủ</a></li>
                <li><a href="../html/gioiThieu.php">Giới Thiệu</a></li>
                <li><a href="../html/tourDuLich.php">Tour Du lịch</a></li>
                <li><a href="../html/News.php">Tin Tức</a></li>
            </ul>
        </div>
    </nav>
</div>

<div style="padding-top: 100px">
  <h1 style="margin-left:40px"> Bảng quản trị Tour</h1>
  <?php
  $sql="SELECT idT,maTour,tenTour,dDen,ctTour,giaTour,anhTour,tThai FROM tour";
  if ($conn->query($sql) == TRUE){
    $result = $conn->query($sql);
    $rowcount= mysqli_num_rows($result);
    if ($rowcount > 0 )
    {
      echo "<table id='tour'>";
      echo"<tr>
      <th>Mã Tour</th>
      <th>Tên Tour</th>
      <th>Chi tiết Tour</th>
      <th>Giá Tour</th>
      <th >Ảnh Tour</th>
      <th>Trạng thái</th>
      <th>Hành động</th>
      </tr>";
      while($row = $result->fetch_assoc())
      {
          if(isset($_GET["task"]) and $_GET["task"]=='update')
          {
              if($_GET["id"]==$row["idT"])
              {
              echo "
              <tr><td style='width:80px'><form action='' method='post' enctype='multipart/form-data'>
              <input type='hidden'style='width:80px' name='maTour' value='".$row["maTour"]."'></td>";
              echo "<td>
              <input type='text' name='tenTour' value='".$row["tenTour"]."'></td>";
              echo "<td><input type='text' name='ctTour' value='".$row["ctTour"]."'></td>";
              echo "<td><input type='text' name='giaTour' onkeypress='return event.charCode >= 48 && event.charCode <= 57' value='".$row["giaTour"]."'></td>";
              echo "<td><input type='file' name='fileUpload' value='".$row["anhTour"]."'></td>";
              if($row["tThai"]=='Hiện'){
                echo "<td>Hiện<input type='radio' name='tThai' value='Hiện' checked>,Ẩn<input type='radio' name='tThai' value='Ẩn'>";
              }else{
                echo "<td>Hiện<input type='radio' name='tThai' value='Hiện'>,Ẩn<input type='radio' name='tThai' value='Ẩn'checked>";
              }
              echo "<td><input type='submit' name='up' class='btn btn-warning' value = 'cập nhật'>
              <a class='btn btn-danger' href='CSuaTour.php'>Hủy</a>
              </form></td></tr>";
              }else{
              echo "<tr><td style='width:80px'>".$row["maTour"]."</td>";
              echo "<td>".$row["tenTour"]."</td>

              <td>".$row["ctTour"]."</td>
              <td>".$row["giaTour"]."</td>
              <td style='text-align:center'><a href='../images/".$row['anhTour']."'><img src= ../images/".$row['anhTour']." style='height:100px'></a>"."</td>
              <td>".$row['tThai']."</td><td>";
              echo "<a class='btn btn-warning'style='margin-right:10px;' href='CSuaTour.php?task=update&id=".$row["idT"]."'>Cập nhật</a>";
              echo "<a class='btn btn-danger' href='CSuaTour.php?task=delete&id=".$row["idT"]."'>Xoá</a>";
            }
          }else{
        echo "<tr><td style='width:80px'>".$row["maTour"]."</td>";
        echo "<td>".$row["tenTour"]."</td>

        <td>".$row["ctTour"]."</td>
        <td>".$row["giaTour"]."</td>
        <td style='text-align:center'><a href='../images/".$row['anhTour']."'><img src= ../images/".$row['anhTour']." style='height:100px'></a>"."</td>
        <td>".$row['tThai']."</td><td>";
        echo "<a class='btn btn-warning'style='margin-right:10px;' href='CSuaTour.php?task=update&id=".$row["idT"]."'>Cập nhật</a>";
        echo "<a class='btn btn-danger' href='CSuaTour.php?task=delete&id=".$row["idT"]."'>Xoá</a>";
        }
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
