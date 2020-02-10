<?php
    if(!$_GET['page']){
        header('Location:index.php?page=1');
    }
    require_once "numpage.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Teacher's day</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="happy_tea_day">
            <header>
                <a href="index.php?page=1">
                    <img src="images/REACH logo nen trong.png" alt="REACH logo nen trong.png" width="200">
                </a>
                <h1 class="main_title">Tri ân các thầy cô trung tâm<span class="reach"> REACH</span> Hà Nội nhân dịp ngày nhà giáo Việt Nam 20-11</h1>
            </header>
            <div class="row">
                <!-- start display -->
                    <div class="col-xl-6 col-xl-6 col-md-12 col-sm-12 col-12 col">
                        <div class="column-left">   
                            <h2>happy teacher day</h2>
                            <div class="rectangle1"></div>
                            <div id="content">
                            <div class="display">
                                <h6 class="name_student">Học sinh: 
                                    <p id="get_name_student_1"></p>
                                </h6>
                                <h6 class="class">Lớp: 
                                    <p id="get_class_1"></p>
                                </h6>
                                <h6 class="name_course">Khóa: 
                                    <p id="get_name_course_1"></p>
                                </h6>
                                <h6 class="show_wishes">Chúc các thầy cô : 
                                    <p id="get_wishes_1"></p>
                                </h6>
                            </div>
                            <div class="rectangle2"></div>
                           
                            <div class="display">
                                <h6 class="name_student">Học sinh: 
                                    <p id="get_name_student_2"></p>
                                </h6>
                                <h6 class="class">Lớp: 
                                    <p id="get_class_2"></p>
                                </h6>
                                <h6 class="name_course">Khóa: 
                                    <p id="get_name_course_2"></p>
                                </h6>
                                <h6 class="show_wishes">Chúc các thầy cô : 
                                    <p id="get_wishes_2"></p>
                                </h6>
                            </div>
                            <div class="rectangle2"></div>

                            <div class="display">
                                <h6 class="name_student">Học sinh: 
                                    <p id="get_name_student_3"></p>
                                </h6>
                                <h6 class="class">Lớp: 
                                    <p id="get_class_3"></p>
                                </h6>
                                <h6 class="name_course">Khóa: 
                                    <p id="get_name_course_3"></p>
                                </h6>
                                <h6 class="show_wishes">Chúc các thầy cô : 
                                    <p id="get_wishes_3"></p>
                                </h6>
                            </div>
                            <div class="rectangle2"></div>

                            <div class="display">
                                <h6 class="name_student">Học sinh: 
                                    <p id="get_name_student_4"></p>
                                </h6>
                                <h6 class="class">Lớp: 
                                    <p id="get_class_4"></p>
                                </h6>
                                <h6 class="name_course">Khóa: 
                                    <p id="get_name_course_4"></p>
                                </h6>
                                <h6 class="show_wishes">Chúc các thầy cô : 
                                    <p id="get_wishes_4"></p>
                                </h6>
                            </div>
                            <div class="rectangle2"></div>

                            <div class="display">
                                <h6 class="name_student">Học sinh: 
                                    <p id="get_name_student_5"></p>
                                </h6>
                                <h6 class="class">Lớp: 
                                    <p id="get_class_5"></p>
                                </h6>
                                <h6 class="name_course">Khóa: 
                                    <p id="get_name_course_5"></p>
                                </h6>
                                <h6 class="show_wishes">Chúc các thầy cô : 
                                    <p id="get_wishes_5"></p>
                                </h6>
                            </div>
                            <div class="rectangle2"></div>

                            <div class="display">
                                <h6 class="name_student">Học sinh: 
                                    <p id="get_name_student_6"></p>
                                </h6>
                                <h6 class="class">Lớp: 
                                    <p id="get_class_6"></p>
                                </h6>
                                <h6 class="name_course">Khóa: 
                                    <p id="get_name_course_6"></p>
                                </h6>
                                <h6 class="show_wishes" >Chúc các thầy cô : 
                                    <p id="get_wishes_6"></p>
                                </h6>
                            </div>
                            <div class="rectangle-last"></div>
                            </div>
                        <!-- start navbar to next pages -->

                            <div class="navbar">
                                <ul class="pagination navbar-next">
                                    <li class="page-item">
                                        <a class="page-link next_prev" href="index.php?page=<?php echo $previous; ?>"><img src="images/prev.png" alt="prev_icon" width="13"></a>
                                    </li>
                                    <!-- <li class="page-item ">
                                        <a class="page-link page" href="index.php?page=<//?php echo $previous; ?>"><//?php echo $previous; ?></a>
                                    </li> -->
                                    <li class="page-item ">
                                        <a class="page-link page" id="page1"  href="index.php?page=<?php echo $current; ?>"><?php echo $current; ?></a>
                                    </li>
                                    <!-- <option id="page" value="<//?php echo $current; ?>"></option> -->
                                    <!-- <li class="page-item ">
                                        <a class="page-link page" href="index.php?page=<//?php echo $next; ?>"><//?php echo $next; ?></a>
                                    </li> -->
                                    <li class="page-item">
                                        <a class="page-link next_prev" href="index.php?page=<?php echo $next; ?>"><img src="images/next.png" alt="next_icon" width="13"></a>
                                    </li>
                                </ul>
                            </div>

                        <!-- end navbar to next pages -->
                        </div>
                    </div>
                <!-- end display -->

                <!-- start send greetings to teacher -->
                    <div class="col-xl-6 col-xl-6 col-md-12 col-sm-12 col-12 col">
                        <div class="column-right">
                            <h3>Cùng nhau gửi những lời chúc tốt đẹp nhất đến các thầy cô nhân dịp ngày nhà giáo Việt Nam 20-11 !</h3>
                            <!-- start form  -->
                                <form action="" method="POST">
                                    <!-- <div align="center" id="showerr" class="alert-danger"></div> -->
                                    <div class="input-group form-send-wishes">
                                        <div class="input-group-prepend name-group">
                                            <div class="input-group-text name-prepend">Mời nhập tên<span class="required">*</span></div>
                                        </div>
                                        <input type="text" name="name" id="name" class="your_name">
                                    </div>

                                    <div class="input-group form-send-wishes">
                                        <div class="input-group-prepend name-group">
                                            <div class="input-group-text name-prepend">Lớp<span class="required">*</span></div>
                                        </div>
                                        <input type="text" name="class" id="select_class" class="your_class">
                                    </div>

                                    <div class="input-group form-send-wishes">
                                        <div class="input-group-prepend name-group">
                                            <div class="input-group-text name-prepend">Khóa học<span class="required">*</span></div>
                                        </div>
                                        <input type="text" name="course" id="select_course" class="your_course">
                                    </div>

                                    <div class="input-group form-send-wishes">
                                        <div class="input-group-prepend name-group">
                                            <div class="input-group-text name-prepend">Nhập lời chúc<span class="required">*</span></div>
                                        </div>
                                        <textarea name="wishes" id="send_wishes" class="your_wishes"></textarea>
                                    </div>
                                <form>
                            <!-- end form -->
                            <!-- <div> -->
                                <a class="btn send_to_teacher" id="send_to_teachers" style="color:#f0f1ec; margin:0 auto;">Gửi lời chúc</a>    
                            <!-- </div> -->
                            <div class="img-footer">
                                <img src="images/2222222222.png">
                            </div>
                            <div class="donater">
                                <p class="title-footer"><img src="images/next.png" alt="next_icon" width="13"> Một số doanh nghiệp xã hội của trung tâm REACH</p>
                                <img src="images/koi_bento_logo.png" alt="koi_bento_logo.png" width="70">
                                <img src="images/EM_hair_salon logo.png" alt="EM_hair_salon logo" width="70">
                                <img src="images/logo-tre-01.png" alt="EM_hair_salon logo" width="70">
                            </div>
                            <div class="designer">
                                <p class="name_designer"><img src="images/next.png" alt="next_icon" width="13">  Được xây dựng bởi học viên<a class="pat" href="#"> lớp CODE k45 </a></p>
                            </div>
                        </div>
                    </div>
                <!-- end send greetings to teacher -->
                
            </div>
        </div>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/myjs.js"></script>
</body>
</html>
