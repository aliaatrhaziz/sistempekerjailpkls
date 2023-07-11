<?php
include "config.php"; 

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($username === 'admin' && $password === '2023') {
        header('location:main.php');
        
        }else{
        header('location:index.php');
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM PEKERJA ILP KUALA LANGAT</title>
    <link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body style="background-image: url('ilpfront2.jpg');">
    <br>
    <br>
    <h2 style="text-align:center;">SELAMAT DATANG KE SISTEM PEKERJA <br> INSTITUT LATIHAN PERINDUSTRIAN KUALA LANGAT</h2>
    <body>
   <div class="container my-5">
    <form method="post">

    <div class="form-group">
         <label for="username">Username</label>
         <input type="text" class="form-control" name="username" autocomplete="off" required>       
    </div>

    <br>

    <div class="form-group">
         <label for="password">Password</label>
         <input type="password" class="form-control" name="password" autocomplete="off" required>       
    </div>

    <br>

    <button type="submit" class="btn btn-primary" name="login">Login</button>

    <?php if (isset($error)) { ?>
        <div><?php echo $error; ?></div>
    <?php } ?>
    
    </form>
</body>
</html>