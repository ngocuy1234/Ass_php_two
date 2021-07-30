<?php
require_once ("define.php");

// Hàm mở đóng kết nối sql;
function open_close_sql($sql){
    $connect = new mysqli(HOST , USERNAME , PASSWORD , DATABASE);

    // Chuyển đổi về lấy giá trị tiếng việt
    mysql_set_charset($connect , 'utf8');
    
    // Hàm kêt lỗi
    mysqli_query($connect , $sql);

    // Đóng kết lỗi
    mysqli_close($connect);
}

// Hàm trả về một mảng 
function return_array($sql){
    $connect = new mysqli(HOST , USERNAME , PASSWORD , DATABASE);
    
    // Hàm kêt lỗi
    $result = mysqli_query($connect , $sql);
    $data_list =[];
    while($row = mysqli_fetch_array($result ,1)){
        $data_list[] = $row;
    };

    // Đóng kết lỗi
    mysqli_close($connect);

    return $data_list;
};
