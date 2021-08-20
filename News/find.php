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
    <title>Tin Tức</title>
	<style>
	
	 .col-xl-9 {
		 background-color:#D8FFB0;
	 }
	 .col-xl-9 tr td img{
    width:95px;
	height:95px;
	 }
	 .col-xl-3 .aa{
	width:100%;
	height:100vh;
	background-color: #1ECBFF;
}
	.col-xl-3 .aa h1{
		font-size:20px;
		
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


<!-- News -->
<div class="news">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                 <table class="table ">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Content</th>
		<th>Picture</th>
      </tr>
    </thead>
	<?php
	require "Connect.php";
	$id = $_GET["id"];
	  $sql = "SELECT * FROM upload WHERE id LIKE '$id%' OR title like '$id%' ";
		$result = $conn->query($sql);
		if ($result ->num_rows > 0) {
		 while ($row = $result-> fetch_assoc()) {
	?>
    <tbody>
      <tr>
        <td><?php
		$id= $row["id"];
		echo $row['id'];
		
		?></td>
        <td><?php echo $row['title'];
		?></td>
        <td><?php echo $row['content'];
		?></td>
		<td><?php  echo "<img src=./images/".$row['picture'].">";
		?></td>
      </tr>
    </tbody>
	<?php
		}
	}
	?>
  </table>
  </div>
	<div class="col-xl-3">
		<div class="aa">
			<h1>Sửa tin tức:</h1>
			<form action="update.php" method="get">
				<input type="text" name="update"><br>
				<input type="submit" value="update"><br>
			</form>
			<h1>Xóa tin tức:</h1>
			<form action="delete.php" method="get">
					<input type="text" name="id"><br>
					<input type="submit" value="delete">
			</form>
			<h1>Thêm tin tức:</h1>
			<form action="file-upload.php" method="get">
					<input type="submit" value="insert">
			</form>
			 <h1>Tìm kiếm tin tức:</h1>
			<form action="find.php" method="get">
				<input type="text" name="id"><br>
				<input type="submit" value="submit">
			</form>
		</div>
    </div>
  </div>
 </div>
</div>





</body>

</html>