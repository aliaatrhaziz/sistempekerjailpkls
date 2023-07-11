<?php
include 'config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM PEKERJA ILPKLS</title>
    <link rel="icon" type="image/x-icon" href="ilp.png">
    <link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container">
  <div class="rekodpekerja mt-4">
     <h4 class="text-center text-striped">SELAMAT DATANG KE SISTEM PEKERJA <br> INSTITUT LATIHAN PERINDUSTRIAN KUALA LANGAT</h4>
 </div>

 <br>

<div>

    <table class="table table-striped table-bordered text-center"">
         <thead>
             <tr>
               <th scope="col">ID</th>
               <th scope="col">NAMA PEKERJA</th>
               <th scope="col">NO KAD PENGENALAN</th>
               <th scope="col">NO TELEFON</th>
               <th scope="col">JANTINA</th>
             </tr>
         </thead>

  <tbody>

  <?php  
  
  $sql = "SELECT * FROM `rekodpekerja`";
  $result=mysqli_query($con,$sql);
  if($result){
    while($info_pekerja=mysqli_fetch_assoc($result)){
      $id=$info_pekerja['id'];
      $nama_pekerja=$info_pekerja['nama_pekerja'];
      $no_kp=$info_pekerja['no_kp'];
      $no_hp=$info_pekerja['no_hp'];
      $jantina=$info_pekerja['jantina'];
      echo '<tr>
      <th scope="rekodpekerja">'.$id.'</th>
      <td>'.$nama_pekerja.'</td>
      <td>'.$no_kp.'</td>
      <td>'.$no_hp.'</td>
      <td>'.$jantina.'</td>
     <td>
        <button class="btn btn-primary"><a href="kemaskinipekerja.php?updateid='.$id.'" class="text-light">Kemaskini</a></button>
        <button class="btn btn-danger"><a href="padampekerja.php?deleteid='.$id.'" class="text-light">Padam</a></button>
     </td>
    </tr>';
    }
 }
  ?>
  </tbody>

   </table>
</div>


<button class="btn btn-primary my-5"><a href="tambahpekerja.php" class="text-light"type="button" data-toggle="modal"data-target="#addNewUserModal">Tambah</a></button>
<button type="submit" class="btn btn-primary"><a href="logout.php" class="text-light">Logout</button>

</body>

</html>