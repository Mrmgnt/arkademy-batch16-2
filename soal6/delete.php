<?php
include "koneksi.php";

$kode = $_GET[''];

if (isset($_POST['delete'])) {
      $query = "delete FROM nama where id='$kode'";
      if(!$conn->query($query)){
        echo "<script type='text/javascript'> alert('Error Query!') </script>";
        echo '<script type="text/javascript"> window.location.replace("index.php") </script>';
      }else{
        echo "<script type='text/javascript'> alert('Berhasil Menghapus Data!') </script>";
        echo '<script type="text/javascript"> window.location.replace("index.php") </script>';
      }
}
 ?>