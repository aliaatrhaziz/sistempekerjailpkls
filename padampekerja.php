<?php 
include 'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE from `rekodpekerja` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       echo "Padam berjaya";
       header('location:main.php');
    }else{
        die(mysqli_error($con));   
    }
}

?>