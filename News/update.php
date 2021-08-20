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
    <title>file update</title>
	<style>
        .box{
            padding-top: 130px;
            width: 500px;
            margin: auto;
        }
	</style>
</head>>
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
            <a class="navbar-brand" href="../html/index.html">
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
<?php

    require "Connect.php";
		$id=$_GET['update'];

    $sql = "SELECT * FROM upload WHERE id = '$id' ";

    $result = $conn->query($sql);
    if ($result ->num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
            $title = $row["title"];
            $content = $row["content"];
            $picture = $row["picture"];
        }
    }
?>
<style>
    form img{
        width: 200px;
        height: 180px;
    }
    .sub{
        margin-bottom: 30px;
    }
</style>
<!-- tao form update -->
<form class="box" method="POST" enctype="multipart/form-data">
<!--  -->
    <center><h2>Chỉnh sửa tin tức</h2></center>
    <h4>Title</h4>
	<textarea name="title" id="" cols="40" rows="2" placeholder=""  ><?php echo"$title"; ?></textarea><br>
    <h4>Content</h4>
   <textarea name="content" id="" cols="60" rows="10" placeholder="" ><?php echo"$content" ?></textarea><br>
    <h4>Picture</h4>
	<?php
	 echo "<img src=./images/".$picture."><br>";
	?>
    <input type="file" name="fileUpload" value="chon file"> <br>
<!--  -->

    <input class="sub" type="submit" name="sub" value="Update">

</form>

<!-- update -->
<?php
    if (isset($_POST["sub"])) {
        $title = $_POST["title"];
        $content = $_POST["content"];
        $picture = $_FILES["fileUpload"]["name"];
        
		if ($picture =!null) {
			$target_dir="images/"; //thu muc luu tru tam thoi
			$tmp_name = $_FILES["fileUpload"]["tmp_name"]; //dia chi luu tru file tam thoi
			$picture = $_FILES["fileUpload"]["name"]; //ten file
			move_uploaded_file($tmp_name,$target_dir.basename($picture)); // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
		        $sql = "UPDATE upload SET title='$title', content='$content', picture='$picture' WHERE id = '$id' ";
		}
		else
		{
			    $sql = "UPDATE upload SET title='$title', content='$content' WHERE id = '$id' ";
		}
        
        if ($conn->query($sql) == TRUE) {
             header("location:news.php");
        }else {
            echo "error: ".$conn->error;
        }
    }

    $conn->close();
?>