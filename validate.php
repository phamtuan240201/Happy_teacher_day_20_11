<?php
    // kết nối database
    $conn=mysqli_connect("localhost","root","","teacher_day") or die("Không thể kết nối database");
    // nhận dữ liệu gửi từ ajax
    $name=$_POST['name'];
    $class=$_POST['class'];
    $course=$_POST['course'];
    $content=$_POST['content'];
    //lấy thời gian tại thời điểm gửi
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date_current = '';
    $date_current = date("Y-m-d H:i:sa");
    // khai báo biến lỗi
    $err="";
    //kiểm tra xem dữ liệu gửi từ ajax đã nhận được chưa
    if(!$name||!$class||!$course||!$content){
        //nếu chưa thì gán biến lỗi là lỗi ajax
        $err="ajax error!";
    }
    else{
        //nếu đã nhận đủ thì thêm dữ liệu vào database
        $sql="INSERT INTO student(`name`,`class`,`course`,`content`,`add_date`) VALUES('$name','$class','$course','$content','$date_current')";
        mysqli_query($conn,$sql);
        //thêm dữ liệu xong thì gán biễn lỗi là gửi thành công
        $err="Gửi thành công";
    }
    // convert biến lỗi sang dạng json để xử lí bằng js
    die(json_encode($err));
?>