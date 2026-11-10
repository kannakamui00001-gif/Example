<?php

include('connect.php');
/** @var mysqli $conn */
$a = $_GET['pro_name'] ?? ""; // ?? "" ຊ່ວຍໃຫ້ເວລາບໍ່ໄດ້ສ່ງຄ່າມາໃຫ້ມັນເປັນ ຄ່າວ່າງ "" ຊ່ວຍປ້ອງກັນ error warning Undefined array key
$d = $_GET['remark'] ?? "";
if ($a == "" and $d == "") {
    echo "ກະລຸນາປ້ອນຊື່ແຂວງ";
} else if ($a == "") {
    echo "ກະລຸນາປ້ອນເບີຫ້ອງ";
}else{
    $sql = "insert into province(pro_name , remark) values ('$a','$d')";
    $insert = mysqli_query($conn,$sql);
    if ($insert) {
        echo "
        <script>

        alert('ບັນທຶກຂໍ້ມູນສຳເລັດ');

        location='select.php';
        
        </script>
        ";
    } else {
        echo "ບັນທຶກຂໍ້ມູນລົ້ມເຫຼວ" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
