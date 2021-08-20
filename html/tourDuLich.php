<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" href="../CSS/tourDuLich.css">
  <!--CSS only-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>
  <title>Tour Du Lịch</title>
</head>
  <body>

<!-- menuBar -->
<div class="fixed-top">
    <nav class="line-down">
        <div class="navbar-1">
            <?php
                session_start();
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
                <li><a href="../html/tourDuLich.php" id="active">Tour Du lịch</a></li>
                <li><a href="../News/News.php">Tin Tức</a></li>
            </ul>
        </div>
    </nav>
</div>


<!--Tour Du lịch-->
<div class="tour">
  <aside class="filter">
    <div class="title-left">
      <div class="line-2">
        <p>Danh mục </p>
      </div>
      <div class="dm">
        <ul>
            <li><a href="../html/index.html">Trang chủ</a><hr></li>
            <li><a href="../html/gioiThieu.html">Giới thiệu</a><hr></li>
            <li><a href="../html/tourDuLich.html">Tour du lịch</a><hr></li>
            <li><a href="../html/News.html">Tin tức</a><hr></li>
        </ul>
      </div>
      <div class="line-2">
        <p>Khoảng giá</p>
      </div>
      <div class="kg">
        <form action="tourDuLich1.php" method="get">
          <ul>
            <li><input type="checkbox" class="ck" name="Gia[]" value="giaTour between 0 and 4000000"><label>Giá dưới 4.000.000đ</li>
            <li><input type="checkbox" class="ck" name="Gia[]" value="giaTour between 4000000 and 6000000"><label>4.000.000đ - 6.000.000đ</li>
            <li><input type="checkbox" class="ck" name="Gia[]" value="giaTour between 6000000 and 8000000"><label>6.000.000đ - 8.000.000đ</li>
            <li><input type="checkbox" class="ck" name="Gia[]" value="giaTour > 8000000"><label>Giá trên 8.000.000đ</li>
          </ul>
          <input type="submit" value="Lọc">
        </form>
      </div>
    </div>
  </aside>
  <div class="containe">
    <?php
    require 'ketnoi.php';

    $db = mysqli_select_db($conn, '223524');
    if ($db == null)
    echo "<br>Khong chon duoc database";
    $sql= "select count(idT) as total from tour";
      $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];

        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 9;

        $total_page = ceil($total_records / $limit);

        if ($current_page > $total_page){
            $current_page = $total_page;
          }
        elseif ($current_page < 1){
               $current_page = 1;
             }
        $start = ($current_page - 1) * $limit;
        $sql="SELECT * FROM tour LIMIT $start, $limit";
          $result = $conn->query($sql);
          ?>
    <div class="title-right">
      <div class="">
        <div class="line">
          <h1 class="line-1">Tất cả Tour</h1>
          <hr>
        </div>
        <?php
        $i=1;
        while ($row = mysqli_fetch_assoc($result)){
          if($i=='1'){
            echo "<div class='card-deck'>";
            echo "<div class='card'>";
            echo "<img src= ../images/".$row['anhTour'].">";
            echo "<div class='card-body'>";
            echo "<h3><a href='#'>".$row['ctTour']."</a></h3><hr><p>".$row['giaTour']."</p></div></div>";
            $i++;
          }
          elseif ($i=='2') {
            echo "<div class='card'>";
            echo "<img src= ../images/".$row['anhTour'].">";
            echo "<div class='card-body'>";
            echo "<h3><a href='#'>".$row['ctTour']."</a></h3><hr><p>".$row['giaTour']."</p></div></div>";
            $i++;
          }
          elseif ($i=='3') {
            echo "<div class='card'>";
            echo "<img src= ../images/".$row['anhTour'].">";
            echo "<div class='card-body'>";
            echo "<h3><a href='#'>".$row['ctTour']."</a></h3><hr><p>".$row['giaTour']."</p></div></div></div>";
            $i='1';
          }
        }
        if($i!=1){
          if ($i=='2') {
            echo "<div class='card' style='box-sizing: border-box;
            box-shadow: 0 0 0 rgba(0, 0, 0, 0);
            border: 0px solid rgba(0, 0, 0, 0);
            overflow: hidden;'>";
            echo "</div>";
            echo "<div class='card' style='box-sizing: border-box;
            box-shadow: 0 0 0 rgba(0, 0, 0, 0);
            border: 0px solid rgba(0, 0, 0, 0);
            overflow: hidden;'>";
            echo "</div>";
          }
          elseif ($i=='3') {
            echo "<div class='card' style='box-sizing: border-box;
            box-shadow: 0 0 0 rgba(0, 0, 0, 0);
            border: 0px solid rgba(0, 0, 0, 0);
            overflow: hidden;'>";
            echo "</div>";
          }
          echo "</div>";
          }
        
         ?>
         <div>
    <?php
    if ($current_page > 1 && $total_page > 1){
               echo '<a href="tourDuLich.php?page='.($current_page-1).'">Prev</a> | ';
           }
    for ($i = 1; $i <= $total_page; $i++){
      if ($i == $current_page){
                   echo '<span>'.$i.'</span> | ';
               }
               else{
                   echo '<a href="tourDuLich.php?page='.$i.'">'.$i.'</a> | ';
               }
           }
           if ($current_page < $total_page && $total_page > 1){
                           echo '<a href="tourDuLich.php?page='.($current_page+1).'">Next</a> | ';
                       }
     ?>
   </div>
    </div>
  </div>
  </div>
</div>








        <!-- title-7 -->
            <div class="bg-email">
                <div class="container">
                    <div class="title-7">
                        <h2><a href="#">Đăng ký nhận tin</a></h2>
                        <p>Tổng hợp những chương trình tour theo tháng, du lịch vòng quanh thế giới với mức chi phí cực rẻ. Để nhận ngay những thông tin chương trình tour hot, Sale. Quý khách hàng vui lòng nhập thông tin email tại đây ! Thanks</p>
                        <center><hr></center>
                        <form class="input-email">
                            <input class="email" type="email" required placeholder="Email nhận tin">
                            <input class="bt" type="submit" value="Đăng ký">
                        </form>
                    </div>
                </div>
            </div>
            <!--Back to Top Button -->
            <script>
            jQuery(document).ready(function() {
              var offset = 100; /*Giá trị xuất hiện*/
              var duration = 500;
              jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > offset) {
                  jQuery('.back-to-top').fadeIn(duration);} else {
                    jQuery('.back-to-top').fadeOut(duration);}});
              jQuery('.back-to-top').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, duration);
            return false;})});
            </script>
            <style>
              .back-to-top {
                position: fixed;
                bottom: 2em;
                right: 20px;
                text-decoration: none;
                color: #000000;
                background-color: white;
                font-size: 12px;
                padding: 0em;
                border-radius: 100px;
                display: block;}
        .btt{
          border-radius: 100px;
        }
        .back-to-top:hover {
                text-decoration: none;}</style>
        <a href="#" class="back-to-top"><img class="btt" src="../icon/btt.png" alt="Back to Top" /></a>
</body>
        <!-- footer -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>LIÊN HỆ</h3>
                            <p><b>Địa chỉ:</b> <span>Doãn Kế Thiện, Cầu Giấy, Hà Nội, Vietnam</span></p>
                            <p><b>Điện thoại:</b><a href="tel: 0326492976"> + 084 6668699</a></p>
                            <p><b>Email:</b> <a href="mailto: ngthehiep10x@gmail.com">travle_trip@gmail.com</a></p>
                        </div>
                        <div class="col-md-3">
                            <h3>KẾT NỐI VỚI CHÚNG TÔI</h3>
                            <ul>
                                <li>
                                    <a href="#"><img src="../icon/facebook.png" width="30px" height="30px" alt="facebook"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="../icon/twitter.png" width="30px" height="30px" alt="twitter"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="../icon/ytb.png" width="30px" height="30px" alt="ytb"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="../icon/google.png" width="30px" height="30px" alt="google"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="../icon/pinterest.png" width="30px" height="30px" alt="pinterest"></a>
                                </li>
                            </ul>
                            <h3>CHẤP NHẬN THANH TOÁN</h3>
                            <ul>
                                <li>
                                    <a href="#"><img src="../icon/visa.png" width="51px" height="30px" alt="visa"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="../icon/master.png" width="51px" height="30px" alt="visa"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="../icon/jcb.png" width="51px" height="30px" alt="jcb"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="../icon/maestro.png" width="51px" height="30px" alt="jcb"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="../icon/unionPay.png" width="51px" height="30px" alt="jcb"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="../icon/payPal.png" width="51px" height="30px" alt="jcb"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="../icon/discover.png" width="51px" height="30px" alt="visa"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="../icon/ebay.png" width="51px" height="30px" alt="visa"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <h3>TRONG NƯỚC</h3>
                            <ul>
                                <li>
                                    <a href="#">Hạ Long</a>
                                </li>
                                <li>
                                    <a href="#">Ninh Bình</a>
                                </li>
                                <li>
                                    <a href="#">Nghệ  An</a>
                                </li>
                                <li>
                                    <a href="#">Đà Nẵng</a>
                                </li>
                                <li>
                                    <a href="#">Tam Đảo</a>
                                </li>
                                <li>
                                    <a href="#">Quảng Ninh</a>
                                </li>
                                <li>
                                    <a href="#">Thanh Hóa</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <h3>NGOÀI NƯỚC</h3>
                            <ul>
                                <li>
                                    <a href="#">Tây Ban Nha</a>
                                </li>
                                <li>
                                    <a href="#">Ý</a>
                                </li>
                                <li>
                                    <a href="#">Pháp</a>
                                </li>
                                <li>
                                    <a href="#">Anh</a>
                                </li>
                                <li>
                                    <a href="#">Thái Lan</a>
                                </li>
                                <li>
                                    <a href="#">Hàn Quốc</a>
                                </li>
                                <li>
                                    <a href="#">Mỹ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <h3>THÔNG TIN</h3>
                            <ul>
                                <li>
                                    <a href="#">Tin tức</a>
                                </li>
                                <li>
                                    <a href="#">Tạp chí du lịch</a>
                                </li>
                                <li>
                                    <a href="#">Cẩm nang du lịch</a>
                                </li>
                                <li>
                                    <a href="#">Kinh nghiệm du lịch</a>
                                </li>
                                <li>
                                    <a href="#">Liên hệ</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-bot">
                    <p>© 2020 Bản quyền được thực hiện bởi: nhóm 04</p>
                </div>
            </footer>
  </body>
</html>
