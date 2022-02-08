<?php
  include_once("connect.php");

  $id = $_GET['id'];
  $delete = mysqli_query($mysqli, "DELETE FROM barang_dijual WHERE id='$id' ");

  header("Location:index.php");
 ?>
