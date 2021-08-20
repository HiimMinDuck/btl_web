<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>
    <title>Travel Trip</title>
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
                <li><a href="../html/News.html">Tin Tức</a></li>
            </ul>
        </div>
    </nav>
</div>

<!-- slide show -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../image/slider_1.jpg" alt="Luxury Home">
                <div class="carousel-caption">
                    <h3>Luxury Home</h3>
                    <p>Bạn yêu thích sự mới lạ? Luxury Home sự lựa chọn hoàn hảo!</p>
                </div>   
            </div>
            <div class="carousel-item">
                <img src="../image/slider_2.jpg" alt="Scotland" >
                <div class="carousel-caption">
                    <h3>Scotland</h3>
                    <p>Trải nghiệm những quả bóng bay khổng lồ trên thành phố Scotland xinh đẹp!</p>
                </div>   
            </div>
            <div class="carousel-item">
                <img src="../image/slider_3.jpg" alt="Hoi An" >
                <div class="carousel-caption">
                    <h3>Hội An</h3>
                    <p>Hứa hẹn là địa điểm du lịch thú vị cùng Gia Đình!</p>
                </div>   
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


<!-- title-1-->
    <div class="container">
        <div class="title-1">
            <h2><a href="#">Tour trong nước</a></h2>
            <p>
                Sale off tất cả các tour trong tháng này.Nhanh tay đặt tour để cho gia đình mình cùng quây quần bên nhau.
            </p>
            <center><hr></center>
        </div>
        <div class="card-deck">
            <div class="card ">
                <img src="../image/tour-1.jpg" alt="">
                <div class="card-body ">
                    <h3><a href="#">Siem Reap - Phnom Penh (Khách sạn 3*, Tour Tiết Kiệm)</a></h3>
                    <hr>
                    <p>2.850.000₫ <small><s>6.000.000₫</s></small> <span>-70%</span></p>
                </div>
            </div>
            <div class="card ">
                <img src="../image/tour-2.jpg" alt="">
                <div class="card-body ">
                    <h3><a href="#">Miền Tây - Đồng Tháp - Tràm Chim - Thiền Viện Trúc Lâm Chánh Giác</a></h3>
                    <hr>
                    <p>6.400.000₫ <small><s>7.500.000₫</s></small> <span>-81%</span></p>
                </div>
            </div>
            <div class="card ">
                <img src="../image/tour-3.jpg" alt="">
                <div class="card-body ">
                    <h3><a href="#">Chào hè : Du lịch Phan Thiết - Mũi Né 3 ngày (Giá sốc)</a></h3>
                    <hr>
                    <p>2.000.000₫</p>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card ">
                <img src="../image/tour-4.jpg" alt="">
                <div class="card-body ">
                    <h3><a href="#">Tour du lịch Hà Nội - biển Nha Trang 4 ngày 3 đêm</a></h3>
                    <hr>
                    <p>6.500.000₫</p>
                </div>
            </div>
            <div class="card ">
                <img src="../image/tour-5.jpg" alt="">
                <div class="card-body ">
                    <h3><a href="#">Tour Du Lịch Đà Lat bao vé máy bay khứ hồi (3 Ngày 2 Đêm)</a></h3>
                    <hr>
                    <p>4.000.000₫ <small><s>5.000.000₫</s></small> <span>-70%</span></p>
                </div>
            </div>
            <div class="card ">
                <img src="../image/tour-6.jpg" alt="">
                <div class="card-body ">
                    <h3><a href="#">Du Lịch Đà Nẵng - Hà Nội - Hạ Long - Tuần Châu - Hoa Lư - Tam Cốc - 5 Ngày 4 Đêm</a></h3>
                    <hr>
                    <p>6.000.000₫</p>
                </div>
            </div>
        </div>
    </div>

    
<!-- title-2 -->
    <div class="container">
        <div class="title-2">
            <h2><a href="#">Điểm đến yêu thích</a></h2>
            <center><hr></center>
        </div>
    </div>
    <!-- box-local -->
    <div class="box-local">
        <div class="left">
            <div class="card-group">
                <div class="card card2">
                    <img src="../image/left.jpeg" alt="">
                    <div class="extra">
                        <h3>Khám Phá</h3><br>
                        <button>xem</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="card-group">
                <div class="card card2">
                    <img src="../image/halong.jpg" alt="">
                    <div class="extra">
                        <h3>Hạ Long</h3><br>
                        <button>xem</button>
                    </div>
                </div>
                <div class="card card2">
                    <img src="../image/ruongbacthang.jpg" alt="">   
                    <div class="extra">
                        <h3>Cao Bằng</h3><br>
                        <button>xem</button>
                    </div>
                </div>
                <div class="card card2">
                    <img src="../image/dalat.jpg" alt="">
                    <div class="extra">
                        <h3>Đà Lạt</h3><br>
                        <button>xem</button>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card card2">
                    <img src="../image/daNang.jpg" alt="">
                    <div class="extra">
                        <h3>Đà Nẵng</h3><br>
                        <button>xem</button>
                    </div>
                </div>
                <div class="card card2">
                    <img src="../image/chauAu.jpg" alt=""> 
                    <div class="extra">
                        <h3>Châu Âu</h3><br>
                        <button>xem</button>
                    </div>  
                </div>
                <div class="card card2">
                    <img src="../image/singapore.jpg" alt="">
                    <div class="extra">
                        <h3>Châu Á</h3><br>
                        <button>xem</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- title-3 -->
    <div class="container">
        <div class="title-3">
            <h2><a href="#">Tour ngoài nước</a></h2>
            <p>Bạn là người thích chinh phục, thử đếm xem bạn đã trải qua bao nhiêu quốc gia. Coca travel sẽ là đòn bẩy để đưa bạn đến mọi quốc gia trên thế giới.</p>
            <center><hr></center>
        </div>

        <div class="card-deck">
            <div class="card ">
                <img src="../image/tour-7.jpg" alt="">
                <div class="card-body ">
                    <h3><a href="#">Lịch trình Tour Ninh Chữ – Vịnh Vĩnh Hy - 3 ngày 2 đêm</a></h3>
                    <hr>
                    <p>3.200.000₫ <small><s>4.300.000₫</s></small> <span>-84%</span></p>
                </div>
            </div>
            <div class="card ">
                <img src="../image/tour-8.jpg" alt="">
                <div class="card-body ">
                    <h3><a href="#">Tour Du Lịch Phú Quốc 2 Ngày 1 Đêm - Đông Đảo</a></h3>
                    <hr>
                    <p>4.000.000₫</p>
                </div>
            </div>
            <div class="card ">
                <img src="../image/tour-9.jpg" alt="">
                <div class="card-body ">
                    <h3><a href="#">Tour Đặc Sắc Hàn Quốc 5 Ngày 4 Đêm cho mùa Lá Đỏ</a></h3>
                    <hr>
                    <p>23.000.000₫ <small><s>29.000.000₫</s> <span>-57%</span></small></p>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card ">
                <img src="../image/tour-10.jpg" alt="">
                <div class="card-body ">
                    <h3><a href="#">Tour du thuyền Singapore - Malaysia đẳng cấp 5 sao - 4 ngày 3 đêm</a></h3>
                    <hr>
                    <p>25.900.000₫</p>
                </div>
            </div>
            <div class="card ">
                <img src="../image/tour-11.jpg" alt="">
                <div class="card-body ">
                    <h3><a href="#">Du lịch Anh - Scotland [Lễ hội hoa Chelsea]</a></h3>
                    <hr>
                    <p>89.990.000₫ </p>
                </div>
            </div>
            <div class="card ">
                <img src="../image/tour-12.jpg" alt="">
                <div class="card-body ">
                    <h3><a href="#">Du lịch Ý [Rome - Pisa - Florence - Venice - Milan]</a></h3>
                    <hr>
                    <p>46.900.000₫</p>
                </div>
            </div>
        </div>
    </div>


<!-- title-4-News -->
    <div class="bg">
        <div class="container">
            <div class="title-4">
                <h2><a href="../html/News.html">Tin tức</a></h2>
                <p>Review, đánh giá và những trải nghiệm tuyệt vời của chúng tôi cùng khách hàng được cập nhật tại đây, giúp cho khách hàng cũ hay mới đều được có một cái nhìn khách quan khi tìm hiểu về tour du lịch của chúng tôi</p>
                <center><hr></center>
            </div>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="../image/news2.jpg" alt="news2">
                    <div class="card-body">
                        <h3 class="card-title">Đi tìm giấc mơ màu tím</h3>
                        <span>
                            Ngày đăng: 21/9/2020
                            <i class="far fa-comment-dots"> 2</i>
                        </span>
                    </div>
                </div>
                <div class="card" id="display-card">
                    <img class="card-img-top" src="../image/news3.jpg" alt="news3">
                    <div class="card-body">
                        <h3 class="card-title">Khu vườn thượng lưu</h3>
                        <span>
                            Ngày đăng: 21/9/2020
                            <i class="far fa-comment-dots"> 10</i>
                        </span>
                    </div>
                </div>
                <div class="card" id="display-card">
                    <img class="card-img-top" src="../image/news4.jpg" alt="news4">
                    <div class="card-body">
                        <h3 class="card-title">Phải lòng mùa đông nam bán cầu</h3>
                        <span>
                            Ngày đăng: 21/9/2020
                            <i class="far fa-comment-dots"> 6</i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- title-5-Album -->
    <div class="container">
        <div class="title-5">
            <h2><a href="#">Album ảnh</a></h2>
            <p>Wiew tuyệt đẹp ,nhưng khung hình đầy màu sắc cho các bạn trải nghiệm thế giới qua hình ảnh tại Coca travel</p>
            <center><hr></center>
        </div>
        <div class="card-deck">
            <div class="card" >
                <img class="hv-zoom" id="active-img" src="../image/pic-1.png" alt="pic-1">
            </div>
            <div class="card">
                <img class="hv-zoom" id="active-img" src="../image/pic-5.png" alt="pic-1">
            </div>
        </div>
        <div class="card-deck">
            <div class="card">
                <img class="hv-zoom" src="../image/pic-3.png" alt="pic-3">
            </div>
            <div class="card">
                <img class="hv-zoom" src="../image/pic-4.png" alt="pic-4">
            </div>
            <div class="card">
                <img class="hv-zoom" src="../image/tour-10.jpg" alt="pic-10">
            </div>
            <div class="card">
                <img class="hv-zoom" src="../image/pic-6.jpg" alt="pic-6">
            </div>
        </div>
    </div>

<!-- title-6 -->

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
                    <p><b>Địa chỉ:</b> <span>Số 18​ Phố Viên - Phường Đức Thắng - Q. Bắ​c Từ Liêm - Hà Nội​</span></p>
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