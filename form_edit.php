<?php

include('connect.php');
/** @var mysqli $conn */
$pro_id = $_GET['pro_id'];
$pro_name = $_GET['pro_name'];
$remark = $_GET['remark'];

if ($pro_name == "") {
    echo "ສະລຸນາປ້ອນເບີຫ້ອງ";
} else {
    $sql = "update province set pro_name = '$pro_name' , 
    remark = '$remark' 
    where pro_id = '$pro_id';
    ";
    $update = mysqli_query($conn, $sql);
    if ($update) {
        echo "
        
        <script>

        alert ('ແກ້ໄຂຂໍ້ມູນສຳເຫຼັດ');
        location = 'select.php';
        
        </script>
        ";
    } else {
        echo "ຜິດພາດ" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
