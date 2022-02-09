<?php
  ob_start();
  include_once("connect.php");
  $array_kategori = mysqli_query($mysqli, "SELECT * FROM id_kategori");

  $id = $_GET['id'];
  $item = mysqli_query($mysqli, "SELECT * FROM barang_dijual WHERE id='$id' ");

  while($item_data = mysqli_fetch_array($item)){
    $id = $item_data['id'];
    $id_kategori = $item_data['id_kategori'];
    $nama= $item_data['nama'];
    $harga = $item_data['harga'];
    $spek = $item_data['spek'];
    $link_gambar = $item_data['link_gambar'];
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah Item</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

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
          <h3><?php echo $nama, " - No. ID ", $id; ?> - Edit</h3>
        </div>
      </div>
    </div>

      <div class="row" style="margin: 50px 100px;">
        <div class="col-md-12">
          <form class="" action="edit.php?id=<?php echo $id; ?>" method="post" name="form1">
            <table width="100%" class="table-bordered" cellpadding="10" border="0">
              <tr>
                <td>ID Barang</td>
                <td><input type="text" class="form-control" name="id" readonly="" value="<?php echo $id; ?>"></td>
              </tr>
              <tr>
                <td>Kategori Barang</td>
                <td>
                  <select class="form-control" name="id_kategori" value="<?php echo $harga; ?>">

                    <?php
                      while($kategori = mysqli_fetch_array($array_kategori)){
                        echo "<option ".($kategori['id_kategori'] == $id_kategori ? 'selected' : '')."
                        value=".$kategori['id_kategori'].">".$kategori['nama_kategori']."</option>";
                      }
                     ?>

                   </select>
                </td>
              </tr>
              <tr>
                <td>Nama Barang</td>
                <td><input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $nama; ?>"></td>
              </tr>
              <tr>
              <tr>
                <td>Harga Barang (Rp)</td>
                <td><input type="text" class="form-control" name="harga" autocomplete="off" value="<?php echo $harga; ?>"></td>
              </tr>
              <tr>
                <td>Spesifikasi</td>
                <td><input type="text" class="form-control" name="spek" autocomplete="off" value="<?php echo $spek; ?>"></td>
              </tr>
              <tr>
                <td>Link Gambar</td>
                <td><input type="text" class="form-control" name="link_gambar" autocomplete="off" value="<?php echo $link_gambar; ?>"></td>
              </tr>
              <tr>
                <td></td>
                <td><input type="submit" class="form-control btn btn-primary" name="submit" value="Edit"></td>
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
    $id = $_POST['id'];
    $id_kategori = $_POST['id_kategori'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $spek = $_POST['spek'];
    $link_gambar = $_POST['link_gambar'];

    $insert = mysqli_query($mysqli, "UPDATE barang_dijual SET id_kategori = '$id_kategori', nama = '$nama',
              harga = '$harga', spek = '$spek', link_gambar = '$link_gambar'
              WHERE id = '$id';");

            header("Location:index.php");
    }

    ob_end_flush();
 ?>
