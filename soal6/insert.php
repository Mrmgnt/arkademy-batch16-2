<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="soal6\bootstrap.min.css">
    <title>Insert Data</title>
</head>
<body>

    <nav class="navbar navbar-light bg-light">
         <a href="6b.php" class="navbar-brand"><img src="soal6\asset\logo.png " width="100" height="50" alt=""></a>
        <form class="form-inline">

        <a href="insert.php" class="btn btn-warning my-2">+</a>

   
        </form>
    </nav>


    <div class="container mt-4">
        

            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Cashier</label>
                    <input type="name" name="cashier" class="form-control" id="cashier" placeholder="masukkaan nama cashier..">
                   
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Produk</label>
                    <input type="name" name="produk" class="form-control" id="cashier" placeholder="masukkaan nama Product..">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <input type="name" name="category" class="form-control" id="cashier" placeholder="masukkaan Category">
                   
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="name" name="price" class="form-control" id="cashier" placeholder="masukkaan Harga">
                    
                </div>

                <button type="submit" name="submit" class="btn btn-warning">Submit</button>
            </form>
        </div>
        <?php
         include "koneksi.php"; 
        if (isset($_POST['submit'])) {
            $cashier = $_POST['cashier'];
            $produk = $_POST['produk'];
            $category = $_POST['category'];
            $price = $_POST['price'];
        $query = "INSERT INTO `cashier` (`name`) VALUES ('$cashier')";
        $query .= "INSERT INTO `product` (`name`, `price`, `id_category`, `id_cashier`) VALUES ('$produk', '$price', '', '' '')";
            if ($query) { 
                echo "data berhasil";
            }else{
                echo mysqli_error($conn);
            }
        }
            
        
    
 
        
   ?>
        

</body>
</html>
