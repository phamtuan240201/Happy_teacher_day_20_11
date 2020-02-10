<?php
    //kết nối database
    $conn=mysqli_connect("localhost","root","","teacher_day") or die("Không thể kết nối database");
    //lấy số trang hiện tại trên url bằng get
    $current=$_GET['current'];
    //giới hạn( số phần tử cần lấy ra kể từ start hoặc có thể hiểu là lấy bao nhiêu dòng kể từ điểm bắt đầu)
    $limit=5;
    //điểm bắt đầu của LIMIT (bắt đầu lấy dữ liệu từ dòng nào trong tổng số nhũng dữ liệu đã lấy ra)
    $start=($current-1)*$limit;
    //câu lệnh sql được sắp xếp theo giời gian theo chiều giảm dần để hiển thị nội dung mới được update lên đầu
    //LIMIT để giới hạn dữ liệu cần lấy ra trong database bắt đầu từ dòng số($start) đến bao nhiêu dòng nữa($limit) kể từ start
    $sql="SELECT * FROM student ORDER BY add_date DESC LIMIT $start,$limit";
    $query=mysqli_query($conn,$sql);
    //khai báo biến mảng dùng để chứa dữ liệu lấy ra
    $data=array();
    //nếu có dữ liệu(số dòng trong bảng lớn hơn 0)
    if(mysqli_num_rows($query)>0){
        //chạy vòng lặp để đổ dữ liệu vào biến datas
        while($datas=mysqli_fetch_array($query,MYSQLI_ASSOC)){
            //lấy dữ liệu vào mảng kết hợp data để chuyển sang dạng json trả response về ajax
            $data[]=array(
                'name'=>$datas['name'],
                'class'=>$datas['class'],
                'course'=>$datas['course'],
                'content'=>$datas['content'],
                'date'=>$datas['add_date']
            );
        }
    }
    //convert dữ liệu về json để trả về ajax
    die(json_encode($data));
?>