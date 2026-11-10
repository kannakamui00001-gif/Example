<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <style>
        *{
            font-family: 'phetsarath ot';
        }
        body{
            background-color: #f1f4f7;

        }
        .page-center{
            min-height: 100hv;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px;

        }
        .form-box{
            width: 100%;
            max-width: 440px;
            
        }
    </style> 
</head>
<body>
    <?php 
    
    include('connect.php');
    /** @var mysqli $conn */
    $pro_id = $_GET['pro_id'] ?? "";
    $sql = "select * from province where pro_id = $pro_id";
    $select = mysqli_query($conn , $sql);
    $data = mysqli_fetch_array($select);

    ?>
    
    <div class="page-center">
        <div class="card form-box shadow-sm">
            <div class="card-header bg-white">
                <h4 class="text-ceter mb-0">ຟ້ອມແກ້ໄຂຂໍ້ມູນ</h4>
            </div>
            <form action="form_edit.php" method="get">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">ລະຫັດແຂວງ</label>
                        <input type="text" value="<?php echo $data['pro_id'] ?>" class="form-control" name="pro_id">
                    </div>
                    <div class="mb-3">
                        <label for="">ຊື່ແຂວງ</label>
                        <input type="text" value="<?php echo $data['pro_name'] ?>" class="form-control" name="pro_name">
                    </div>
                    <div>
                        <label for="">ໝາຍເຫດ</label>
                        <input type="text" value="<?php echo $data['remark']; ?>" name="remark" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-warning btn-blick ">ແກ້ໄຂ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>