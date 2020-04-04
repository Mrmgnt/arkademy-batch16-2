<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="soal6\bootstrap.min.css">
    <title>Soal 6b</title>
</head>


<body>

    <nav class="navbar navbar-light bg-light">
         <a href="6b.php" class="navbar-brand"><img src="soal6\asset\logo.png " width="100" height="50" alt=""></a>
        <form class="form-inline">

        <a href="insert.php" class="btn btn-warning my-2">+</a>

   
        </form>
    </nav>
  <?php
  include "koneksi.php";
  $query = mysqli_query($conn, "SELECT product.id AS id, cashier.name AS cashier, product.name AS product, category.name AS category, product.price AS price FROM product INNER JOIN category ON category.id = product.id_category INNER JOIN cashier ON cashier.id = product.id_cashier")
  ?>
    <div class="container mt-4">

    <table class="table">
   
    
  <thead class="thead-thead-bordered table-warning">
    <tr>
      <th scope="col">no</th>
      <th scope="col">Cashier</th>
      <th scope="col">Product</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody class="tbody tbody-light">

  <?php while($row = mysqli_fetch_array($query))
  {?>
  <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['cashier']?></td>
    <td><?php echo $row['product']?></td>
    <td><?php echo $row['category']?></td>
    <td><?php echo $row['price']?></td>
    
    
    <td>
      <a href="edit.php?id="><img src="soal6\asset\edit.svg" width="33" height="40"></a>
      <a href=""><img src="soal6\asset\trash.svg" width="40" height="40"></a>

  <?php } ?>

  </td>
  </tr>
  </tbody>
    </div>
    




    
</body>
</html>
