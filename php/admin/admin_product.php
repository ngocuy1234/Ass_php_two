<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="padding:20px 0px">
        <h3 style="text-align:center">Quản lý sản phẩm</h3>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Size</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Đơn vị</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include_once "../config/open_close_sql.php"; 
                    
                    $query = "SELECT * FROM data_product";
                    
                    $data_product = return_array($query);
                    $index = 1;
                    foreach($data_product as $key){
                        echo 
                            '<tr>
                                <td>'.$index++.'</td>
                                <td>'.$key['product_id'].'</td>
                                <td>'.$key['product_name'].'</td>
                                <td>'.$key['product_size'].'</td>
                                <td>'.$key['product_number'].'</td>
                                <td>'.$key['product_price'].'</td>
                                <td>'.$key['product_unit'].'</td>
                                <td><button class="btn btn-warning">Edit</button></td>
                                <td><button class="btn btn-danger">Delete</button></td>
                             </tr>';
                             
                        }
                    ?>             
                </tbody>
            </table>
            <button class="btn btn-success">Update</button>
        </div>
    </div>
</body>

</html>