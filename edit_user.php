<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$name = $_POST['name'];
$des = $_POST['des'];
$precio = $_POST['precio'];


$sql="UPDATE prod SET name='$name', des='$des', precio='$precio' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>