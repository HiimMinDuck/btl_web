<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="../CSS/gioiThieu.css">
    <!--CSS only-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>

    <title>Giới Thiệu</title>
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
                <li><a href="../QuanLy/index.php" id="active"><i class="fa fa-home" style="font-size:24px"></i>Trang Chủ</a></li>
                <li><a href="../html/gioiThieu.php">Giới Thiệu</a></li>
                <li><a href="../html/tourDuLich.php">Tour Du lịch</a></li>
                <li><a href="../html/News.php">Tin Tức</a></li>
            </ul>
        </div>
    </nav>
</div>

<!--about us-->
    <div class="main-page">
        <div class="line-1">
        <h1 class="one">VỀ CHÚNG TÔI</h1>
        </div>
        <div class="line">
        <h2 class="two"> Kính gửi Quý khách hàng!</h2>
        </div>
        <div class="line">
        <p class="three">Trước hết Vietnam Tourist xin gửi lời chào trân trọng và lời cảm ơn tới quý khách hàng gần xa đã ghé thăm Website, sử dụng dịch vụ <p1 class="three-1">du lịch</p1> của chúng tôi trong suốt thời gian vừa qua.</p>
        </div>
        <div class="line">
        <p class="four">Để có được thành công, uy tín và chỗ đứng trên thị trường như hiện nay là nhờ sự cố gắng không ngừng nghỉ của toàn thể CBNV Trung Tâm, chúng tôi đã đồng sức đồng lòng để xây dựng các sản phẩm tour du lịch phù hợp với khách hàng, thiết lập mối quan hệ chặt chẽ với các nhà cung cấp như khách sạn, vé máy bay,... để mang đến cho quý khách những dịch vụ tốt nhất với giá rẻ nhất.</p>
        </div>
        <div class="line">
        <p class="five">Với chúng tôi, <p1 class="five-1">DU LỊCH</p1> không chỉ là để nghỉ ngơi thư giãn mà còn là dịp để kết nối các mối quan hệ với nhau, tăng cường sự đoàn kết của đồng nghiệp, gia đình gắn bó, bạn bè thấu hiểu.</p>
        </div>
        <div class="line">
        <p class="six">Công ty bạn đang kinh doanh rất tốt, nhưng bạn muốn xây dựng một tổ chức có văn hóa riêng đoàn kết, gắn bó. Hãy gọi cho chúng tôi ngay để được tư vấn.</p>
        </div>
        <div class="line">
        <p class="six">Bạn đang trong guồng quay của công việc, cuộc sống, không có nhiều thời gian chăm sóc gia đình, bạn muốn bù đắp cho những người thân yêu bằng 1 kỷ nghỉ ngắn, một buổi đi chơi xa, đừng ngần ngại, hãy gọi cho chúng tôi.</p>
        </div>
        <div class="line">
        <p class="seven">Với nhiều năm kinh nghiệm và đội ngũ nhân viên năng động, nhiệt tình <p1 class="seven-1">TravelKit</p1> sẽ luôn là một người bạn đồng hành đáng tin cậy cho quý khách.</p>
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

    
<!--Back to Top Button -->
    <script>
        jQuery(document).ready(function() {
            var offset = 100; /*Giá trị xuất hiện*/
            var duration = 500;
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > offset) {
                jQuery('.back-to-top').fadeIn(duration);} else {
                    jQuery('.back-to-top').fadeOut(duration);
                }
            });
            jQuery('.back-to-top').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, duration);
                return false;
            })
        });
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
            display: none;
        }
        .btt{
            border-radius: 100px;
        }
        .back-to-top:hover {
                text-decoration: none;
        }
    </style>
    
    <a href="#" class="back-to-top"><img class="btt" src="https://www.upsieutoc.com/images/2020/10/09/btt.png" alt="Back to Top" /></a>
    <!--Back to Top Button-->
</body>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        document.querySelector('.email').oninput = function(){
            var mail = document.querySelector('.email').value;
            var checkMail_1 = mail.indexOf('@');
            var checkMail_1 = mail.indexOf('.com');
            if (checkMail_1 < 1) {
                document.querySelector('.email').style.color = "red";
            }else{
                document.querySelector('.email').style.color = "green";
            }
        }
        document.querySelector('.bt').onclick = function(){
            alert("WebSite đang trong quá trình xây dựng!")
        }
    })
</script>
</html>
