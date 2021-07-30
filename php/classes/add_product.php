<?php
include_once "../config/open_close_sql.php";
include_once "../config/helper.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $product_id = $_POST['product_id'];
    $size = $_POST['size'];
    $product_number = $_POST['number'];

    if($product_id == '' || $size == '' || $product_number == ''){
        header("location: /ASS_PHP_2/product__detail__one.html");
    }else{
        $query = "SELECT * FROM data_product WHERE '".$product_id."' = product_id AND product_size = '".$size."'";
        $data_product = return_array($query);
        dd($data_product);

        foreach($data_product as $key){
           $product_name = $key['product_name'];
           var_dump($product_name);
        }
    };
};
