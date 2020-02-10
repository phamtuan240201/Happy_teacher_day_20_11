$(document).ready(function(){
    //in dữ liệu database sau khi load xog
    var page=$('#page1').text();
    $.ajax({
        url:"json.php",
        type:'get',
        dataType:'json',
        data:{
            current:page
        },
        success:function(result){
            var html="";
                    $.each(result,function(key,value){
                        html+='<div class="display">';
                        //name
                            html+='<h6 class="name_student">Học sinh: ';
                                html+='<p>';
                                    html+=value['name'];
                                html+='</p>';
                            html+='</h6>';
                        //class
                            html+='<h6 class="class">Lớp: ';
                                html+='<p>';
                                    html+=value['class'];
                                html+='</p>';
                            html+='</h6>';
                        //course
                            html+='<h6 class="name_course">Khóa: ';
                                html+='<p>';
                                    html+=value['course'];
                                html+='</p>';
                            html+='</h6>';
                        //content
                            html+='<h6 class="show_wishes">Chúc các thầy cô : ';
                                html+='<p>';
                                    html+=value['content'];
                                html+='</p>';
                            html+='</h6>';
                        //date
                            html+='<h6 class="show_wishes">Thời gian : ';
                                html+='<p>';
                                    html+=value['date'];
                                html+='</p>';
                            html+='</h6>';
                        html+='</div>';
                        html+='<div class="rectangle2"></div>';
                    });
                    $('#content').html(html);
        }
    });
    //bắt sự kiên click để gửi dữ liệu người dùng nhập vào lên database
    $('#send_to_teachers').click(function(){
        $('#showerr').html("");
        //lấy dữ liệu người dùng nhập vào
        var name=$('#name').val();
        var clas=$('#select_class').val();
        var course=$('#select_course').val();
        var content=$('#send_wishes').val();
        //kiểm tra xem người dùng đã nhập đầy đủ chưa
        if(!name||!clas||!course||!content){
            //nếu chưa thì hiện thông báo nhập đầy đủ thông tin
            alert("Vui lòng nhập đầy đủ thông tin");
        }
        else{
            //nếu nhập đầy đủ rồi thì thực thi ajax gửi dữ liệu đi xử lí
            $.ajax({
                url:"validate.php",
                type:"post",
                dataType:"json",
                data:{
                    name:name,
                    class:clas,
                    course:course,
                    content:content,
                    
                },
                //xử lí thành công sẽ nhận về biến error báo thành công
                success:function(error){
                    alert(error);
                    location.reload();
                }
            });
        }
    });
});