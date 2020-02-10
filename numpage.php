<?php
//kết nối database
    $conn=mysqli_connect("localhost","root","","teacher_day") or die("Không thể kết nối database");
    //đếm xem trong bảng trong database có bao nhiêu dòng( bao nhiêu đối tượng hoặc phần tử)
    $count=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM student "));
    //bắt số trang hiện tại trên url thông qua get
    $current=$_GET['page'];
    //biến trở về bằng số trang hiện tại trừ đi 1
    $previous=$_GET['page']-1;
    //biến next bằng số trang hiện tại cộng 1
    $next=$_GET['page']+1;
    //giới hạn( số phần tử cần lấy ra kể từ start hoặc có thể hiểu là số phần tử tối đa được
    // hiển thị trong 1 trang)
    $limit=5;
    //số trang bằng hàm trần của tổng số phần tử chia cho giới giạn phần tử cần hiển thị
    $numpage=ceil($count/$limit);

//bắt trường hợp nếu trang hiện tại nhỏ hơn 1 và lớn hơn số trang 
    if($current<1){
        $current=1;
    }
    else if($current>$numpage){
        $current=$numpage;
    }
    else{
        $current=$current;
    }    

//bắt trường hợp số trang đang ở 1 mà click bào previous thì sẽ giữ nguyên là 1
//còn nếu số trang hiện tại đang lớn hơn số trang mà click vào previous thì sẽ trả về số trang lớn nhất có thể
    if($previous<1){
        $previous=1;
    }
    else if($previous>$numpage){
        $previous=$numpage;
    }

//bắt trường hợp số trang hiện tại lớn hơn số trang tối đa mà click vào next thì sẽ trả về số trang tối đa
//con nếu số trang hiện tại nhỏ hơn 1 mà click vào next thì sẽ trả về số trang là 1
    if($next>$numpage){
        $next=$numpage;
    }
    else if($next<1){
        $next=1;
    }
?>