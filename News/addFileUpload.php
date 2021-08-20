<?php
    require 'Connect.php';
    $title = $_POST["title"];
	$content = $_POST["content"];
    $picture = $_FILES["fileUpload"]["name"];
	
    if ($picture !=null) {
        $target_dir="images/"; //thu muc luu tru tam thoi
        $tmp_name = $_FILES["fileUpload"]["tmp_name"]; //dia chi luu tru file tam thoi
        $picture = $_FILES["fileUpload"]["name"]; //ten file
        move_uploaded_file($tmp_name,$target_dir.basename($picture)); // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
        $sql = "INSERT INTO upload (title,content,picture) VALUES ('$title','$content','$picture')";
		if($conn->query($sql) == TRUE){
			header("location:news.php");	
		}
		else{
			echo 'fail'.$conn->error;
		}
		}else{
        echo "0 results";
    }
    
    $conn->close();
?>

