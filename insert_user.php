<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$des = $_POST['des'];
$precio = $_POST['precio'];


$sql = "INSERT INTO prod VALUES('$id','$name','$des','$precio')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>