<?php 

include('connect.php');
/** @var mysqli $conn */ 

$pro_id = $_GET['pro_id'];
$sql = "delete from province where pro_id = $pro_id"; 
$delete = mysqli_query($conn , $sql); 
if($delete){
    echo "
    
    <script>
    
    location = 'select.php';

    </script>
    ";
}else{


echo "ບໍ່ສາມາເດລົບຂໍ້ມຸນໄດ້";

}
mysqli_close($conn);
?>