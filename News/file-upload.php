<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/News.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>
    <title>File Upload</title>
    <style>
        h2{
            margin-top: 130px;
        }
        .upload{
            width: 500px;
            margin: auto;
        }
    </style>
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
                <li><a href="../News/News.php">Tin Tức</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="upload">
    <h2>Upload File</h2>
    <form action="addFileUpload.php" method="POST" enctype="multipart/form-data">
		title <br>
		<textarea name="title" id="" cols="40" rows="2" placeholder=""></textarea><br>
       
        content <br>
		<textarea name="content" id="" cols="40" rows="4" placeholder=""></textarea>
        <h3>picture</h3> <br>
        <input type="file" name="fileUpload"><br><br>
        <input type="submit" value="Upload">
    </form>
</div>
</body>
</html>
