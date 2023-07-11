<?php
include "config.php";
$id=$_GET['updateid'];
$sql="SELECT * from `rekodpekerja` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$nama_pekerja=$row['nama_pekerja'];
$no_kp=$row['no_kp'];
$no_hp=$row['no_hp'];
$jantina=$row['jantina'];

if (isset($_POST['submit'])){
      $id=$_POST['id'];
      $nama_pekerja=$_POST['nama_pekerja'];
      $no_kp=$_POST['no_kp'];
      $no_hp=$_POST['no_hp'];
      $jantina=$_POST['jantina'];

      $sql="UPDATE `rekodpekerja` set id=$id,nama_pekerja='$nama_pekerja',no_kp='$no_kp',no_hp='$no_hp',jantina='$jantina' where id=$id";
      $result=mysqli_query($con,$sql);
      if($result){
        header('location:main.php');
      }else{
      die(mysqli_error($con));
      }
} 

?>

<!--HTML-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="ilp.png">
    <title>SISTEM PEKERJA ILP KUALA LANGAT</title>
    <link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body >
<div class="container">
  <div class="info_pekerja mt-4">
     <h4 class="text-center text-striped">KEMASKINI MAKLUMAT PEKERJA ILP KUALA LANGAT</h4>
 </div>

   <div class="container my-5">
    <form method="post">

    <div class="form-group">
         <label>ID</label>
         <input type="text" class="form-control" readonly placeholder="ID Pekerja" name="id" autocomplete="off" value=<?php echo $id;?>>       
    </div>

    <br>

    <div class="form-group">
         <label>NAMA PEKERJA</label>
         <input type="text" class="form-control" placeholder="Nama Pekerja" name="nama_pekerja" autocomplete="off" value=<?php echo $nama_pekerja;?>>
    </div>

    <br>

    <div class="form-group">
         <label>NO KAD PENGENALAN</label>
         <input type="text" class="form-control" readonly placeholder="No Kad Pengenalan Pekerja" name="no_kp" autocomplete="off" value=<?php echo $no_kp;?>>        
    </div>

    <br>

    <div class="form-group">
         <label>NO TELEFON</label>
         <input type="text" class="form-control" placeholder="No Telefon Pekerja" name="no_hp" autocomplete="off" value=<?php echo $no_hp;?>>   
    </div>

    <br>

    <label>JANTINA</label><br>
    <input required="required"  type="radio" name="jantina"autocomplete="off" value="LELAKI"> Lelaki<br>
    <input required="required"  type="radio" name="jantina" autocomplete="off" value="PEREMPUAN"> Perempuan      
    
    <br>
    <br>

    <button type="submit" class="btn btn-primary" name="submit">Kemaskini</button>
    </form>
  </div>


</body>

</html>