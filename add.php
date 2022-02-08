<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jual Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <?php
      include_once("connect.php");
      $array_kategori = mysqli_query($mysqli, "SELECT * FROM id_kategori");
     ?>

     <div class="container-fluid">
       <div class="row margin-title">
         <div class="col-md-2 mid-nav">
           <a href="index.php"><h2>TokoShop</h2></a>
         </div>
         <div class="col-md-6 bar-nav item-nav text-center">
           <ul>
             <li class="list-nav"><a href="index.php#smartphones">Smartphones</a></li>
             <li class="list-nav"><a href="index.php#laptops">Laptops</a></li>
             <li class="list-nav"><a href="index.php#accessories">Accessories</a></li>
           </ul>
         </div>
         <div class="col-md-4">
         </div>
         <div class="col-md-10">
         </div>
         <div class="col-md-2 barang-atas-margin">
           <span class="back-button" onclick="history.back()">&#8592; back</span>
         </div>
       </div>
     </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h3>Tambah Barang</h3>
        </div>
      </div>
    </div>

      <div class="row" style="margin: 50px 100px;">
        <div class="col-md-12">
          <form class="" action="add.php" method="post" name="form1">
            <table width="100%" class="table-bordered" cellpadding="10" border="0">
              <tr>
                <td>Kategori Barang</td>
                <td>
                  <select class="form-control" name="id_kategori">

                    <?php
                      while($kategori = mysqli_fetch_array($array_kategori)){
                        echo "<option value=".$kategori['id_kategori'].">".$kategori['nama_kategori']."</option>";
                      }
                     ?>

                   </select>
                </td>
              </tr>
              <tr>
                <td>Nama Barang</td>
                <td><input type="text" class="form-control" name="nama" autocomplete="off" ></td>
              </tr>
              <tr>
                <td>Harga Barang (Rp)</td>
                <td><input type="text" class="form-control" name="harga" autocomplete="off" ></td>
              </tr>
              <tr>
                <td>Spesifikasi</td>
                <td><textarea class="form-control" name="spek" maxlength="900" rows="4" autocomplete="off" ></textarea></td>
              </tr>
              <tr>
                <td>Link Gambar</td>
                <td><input type="text" class="form-control" name="link_gambar" autocomplete="off" placeholder="Contoh = https://google.com"></td>
              </tr>
              <tr>
                <td></td>
                <td><input type="submit" class="form-control btn btn-primary" name="submit" value="Tambah Item"></td>
              </tr>
            </table>
          </form>

        </div>
      </div>
    </div>

    <div class="container footer">
      <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
          <br><br>
          <p>© 2022 TokoShop Indonesia</p>
        </div>
      </div>
    </div>

  </body>
</html>

<?php
  if (isset($_POST['submit'])){
    $id_kategori = $_POST['id_kategori'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $spek = $_POST['spek'];
    $ljnk_gambar = $_POST['link_gambar'];

    $insert = mysqli_query($mysqli, "INSERT INTO `barang_dijual`(`id_kategori`, `nama`, `harga`, `spek`, `link_gambar`)
              VALUES('$id_kategori', '$nama', '$harga', '$spek', '$link_gambar'); ");

    header("Location:index.php");
  }
 ?>
