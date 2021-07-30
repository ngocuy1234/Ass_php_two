<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../.././bootrap/bootrap.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Giỏ hàng của bạn</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class=""><a href="http://localhost/ASS_PHP_2/home.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        
                    <li><a href="/product.html">Sản phẩm</a></li>
                    <li><a href="/collection.html">Bộ sưa tập</a></li>
                    <li><a href="#">Cửa hàng</a></li>
                    <li><a href="#">3D shopping</a></li>
                    <li><a href="/contact.html">Liên hệ</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-search"></span> Tìm Kiếm</a></li>
                    <li><a href="/product__detail__one.html"><span class="glyphicon glyphicon-log-in"></span> Back</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--  -->
        <div class="container-fluid">
            <div class="panel panel-primary" style="margin-top: 20px;">
                <div class="panel-heading">Giỏ hàng của bạn</div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên Sản phẩm</th>
                                <th scope="col">Size</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Đơn vị</th>
                                <th scope="col">Xóa sản phẩm</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include_once "../config/open_close_sql.php";
                        include_once "../config/helper.php";

                        if($_SERVER['REQUEST_METHOD'] == "POST"){
                        $product_id = $_POST['product_id'];
                        $size = $_POST['size'];
                        $product_number = $_POST['number'];

                        $data_input[] = [$product_id , $size , $product_number];
                        $data_input[] = ['SP01' , 'size L' , 5];
                        
                        setcookie('data_input' , "uy nguyen" , time()+86400 , "/");
                        var_dump($_COOKIE['data_input']);
                        // die();

                        if($product_id == '' || $size == '' || $product_number == ''){
                            // header("location: /ASS_PHP_2/product__detail__one.html");
                            // break;
                        }else{
                            $query = "SELECT * FROM data_product WHERE '".$product_id."' = product_id AND product_size = '".$size."'";
                            $data_product = return_array($query);
                            $index=1;
                        foreach($data_product as $key){
                            echo 
                            '<tr>
                                <td>'.$index++.'</td>
                                <td>'.$key['product_name'].'</td>
                                <td>'.$key['product_size'].'</td>
                                <td>'.$key['product_price'].'</td>
                                <td>'.$product_number.'</td>
                                <td>'.$key['product_price']*$product_number.'</td>
                                <td>'.$key['product_unit'].'</td>
                                <td><button class="btn btn-danger">Delete</button></td>
                             </tr>';
                        }
                        };
                        };
                        ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>
</body>

</html>