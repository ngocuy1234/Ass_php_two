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
<style>
    .container_bag{
        width: 1350px;
        max-width: 100%;
        margin:auto;
    }
</style>
<body>
    <div class="container_bag" style="padding:20px 0px">
        <h3 style="text-align: center;">Quản lý khách hàng</h3>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Mã khách hàng</th>
                        <th>Tên khách hàng khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Giới tính</th>
                        <th>Email</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include_once "../config/open_close_sql.php";
                    
                    $query = "SELECT * FROM data_customer";
                    
                    $data_customer = return_array($query);

                    $index = 1;
                    foreach($data_customer as $key){
                        echo '<tr>
                                   <td>'.$index++.'</td>
                                   <td>'.$key['customer_id'].'</td>
                                   <td>'.$key['customer_name'].'</td>
                                   <td>'.$key['customer_phone'].'</td>
                                   <td>'.$key['customer_address'].'</td>
                                   <td>'.$key['customer_gender'].'</td>
                                   <td>'.$key['customer_email'].'</td>
                                   <td><button class="btn btn-warning">Edit</button></td>
                                   <td><button class="btn btn-danger">Xóa</button></td>
                              </tr>';
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>