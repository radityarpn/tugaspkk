<?php
$db = mysqli_connect("localhost","root","","tbdatasiswa");

$result = mysqli_query($db, "SELECT * FROM datatables");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5 table-responsive text-center">
  <div class="d-grip gap-2 col-12">
  <table class="table table-light table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      <th scope="col">no</th>
      <th scope="col">nis</th>
      <th scope="col">nama</th>
      <th scope="col">kelas</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      <td><?=$row['nis'];?></td>
      <td><?=$row['nama'];?></td>
      <td><?=$row['kelas'];?></td>
      <td><a href="update.php?id=<?=$row['id'];?>" 
      class="btn btn-sm btn-dark ml-auto">update</a>
      <a href="delete.php?id=<?=$row['id'];?>" 
      class="btn btn-sm btn-danger ml-auto" onclick="return confirm('anda yakin ingin hapus')">delete</a>
    </td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    <div class=""></div>
    <a href="isidata.php"  class="btn btn-dark">Tambah Data</a>
    </div>
    </div>
</body>
</html>