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
    <link rel="stylesheet" href="../CSS/DangKy.css">
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>
    
    <title>Đăng ký</title>
</head>
<body>
<!-- menuBar -->
<div class="fixed-top">
    <nav class="line-down">
        <div class="navbar-1">
            <span>Chào mừng bạn đến với Website trực tuyến của chúng tôi!</span>
            <ul>
                <li><a href="../QuanLy/DangNhap.php" id="n-border">Đăng nhập</a></li>
                <li><a href="../QuanLy/DangKy.php">Đăng ký</a></li>
            </ul>
            <form class="search">
                <input type="text" placeholder="Từ khóa tìm kiếm...">
                <i class="fa fa-search"></i>
            </form>
        </div>
    </nav>
    <nav class="line-up sticky-top">
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

<!-- login -->
    <div class="container">
        <form class="login" action="DangKy-post.php" method="POST">
            <h3>Đăng ký tài khoản</h3>

            <label>Họ & tên:</label>
            <input id="name" name="name" type="text" required>
            <label>Số điện thoại:</label>
            <input id="phone" name="phonenumber" type="text" required>
            <label>E-mail:</label>
            <input id="mail" name="email" type="email" required>
            <label>Mật khẩu:</label>
            <input id="pass" name="password" type="password" required>
            <label>Nhập lại mật khẩu:</label>
            <input id="passAgain" name="passagain" type="password" required>

            <input class="btn" type="submit" value="Đăng ký">
            <p class="span">Đã có tài khoản đăng nhập <a href="../QuanLy/DangNhap.php">tại đây</a></p>
            <p>Đăng nhập bằng Facebook hoặc Google:</p>

            <img src="../icon/login-facebook.png" width="40px" height="40px" alt="facebook">
            <img src="../icon/login-gg.png" width="40px" height="40px" alt="google">
        </form>
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
        //check name.
        document.querySelector('#name').oninput = function(){
            var inputName = document.querySelector('#name').value;
            if (isNaN(inputName)) {
                document.querySelector('#name').style.borderColor = "green";
            }else{
                document.querySelector('#name').style.borderColor = "red";
                return false;
            }
        }
        // check phoneNumber.
        document.querySelector('#phone').oninput = function(){
            var inputPhone = document.querySelector('#phone').value;
            if (isNaN(inputPhone)) {
                document.querySelector('#phone').style.borderColor = "red";
                return false;
            }else{
                document.querySelector('#phone').style.borderColor = "green";
            }
        }
        // check email.
        document.querySelector('#mail').oninput = function(){
            var inputMail = document.querySelector('#mail').value;
            var check_mail = inputMail.indexOf('@');
            var check_mail = inputMail.indexOf('.com');
            if (check_mail < 1) {
                document.querySelector('#mail').style.borderColor = "red";
            }else{
                document.querySelector('#mail').style.borderColor = "green";
            }
        }
        // check password.
        document.querySelector('#pass').oninput = function(){
            var inputPassword = document.querySelector('#pass').value;
            if(inputPassword.length > 6){
                document.querySelector('#pass').style.borderColor = "green";
            }else{
                document.querySelector('#pass').style.borderColor = "red";
                return false;
            }
        }
        document.querySelector('#passAgain').oninput = function(){
            var inputPassAgain = document.querySelector('#passAgain').value;
            var inputPassword = document.querySelector('#pass').value;
            if(inputPassAgain === inputPassword){
                document.querySelector('#passAgain').style.borderColor = "green";
            }else{
                document.querySelector('#passAgain').style.borderColor = "red";
                return false;
            }
        }
        // mail dang ky nhan tin.
        document.querySelector('.email').oninput = function(){
                var mail = document.querySelector('.email').value;
                var checkMail_1 = mail.indexOf('@');
                var checkMail_1 = mail.indexOf('.com');
                if (checkMail_1 < 1) {
                    document.querySelector('.email').style.color = "red";
                    return false;
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