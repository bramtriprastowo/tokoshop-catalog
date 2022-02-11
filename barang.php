<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Online Store | TokoShop</title>
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
            <li class="list-nav"><a href="#smartphones">Smartphones</a></li>
            <li class="list-nav"><a href="#laptops">Laptops</a></li>
            <li class="list-nav"><a href="#accessories">Accessories</a></li>
          </ul>
        </div>
         <div class="col-md-10">
         </div>
         <div class="col-md-2 barang-atas-margin">
           <span class="back-button" onclick="history.back()">&#8592; back</span>
         </div>
       </div>
     </div>

         <?php
           include_once("connect.php");
           $array_kategori = mysqli_query($mysqli, "SELECT * FROM id_kategori");

           $id = $_GET['id'];
           $item = mysqli_query($mysqli, "SELECT * FROM barang_dijual JOIN id_kategori ON barang_dijual.id_kategori = id_kategori.id_kategori
                                WHERE id='$id' ");

           while($item_data = mysqli_fetch_array($item)){
             $id = $item_data['id'];
             $id_kategori = $item_data['id_kategori'];
             $nama_kategori = $item_data['nama_kategori'];
             $nama= $item_data['nama'];
             $harga = number_format($item_data['harga']);
             $spek = $item_data['spek'];
             $varian = ($item_data['varian']);
             $link_gambar = $item_data['link_gambar'];
           }
          ?>

    <div class="container-fluid" style="margin-bottom: 12rem;">
      <div class="row">
        <div class="col-md-7 text-center">
          <img src="<?php echo $link_gambar; ?>" alt="<?php echo $nama; ?>" class="barang-img">
        </div>
        <div class="col-md-5">
          <p class="barang-kategori"><?php echo ucfirst($nama_kategori); ?></p>
          <p class="barang-nama"><?php echo $nama; ?></p>
          <p class="barang-varian"><?php echo $varian; ?></p><br>
          <p class="barang-harga"><?php echo "Rp $harga";?></p><br>
          <p class="barang-spek"><?php echo "$spek" ?></p><br><br><br>

          <a href="edit.php?id=<?php echo $id; ?>" class="btn btn-info barang-edit">Edit Item</a>
          <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $id; ?>)">Delete Item</a>
        </div>
      </div>
    </div>

    <hr>
    <div class="container footer">
      <div class="row">
        <div class="col-md-6">
          <p class="footer-title">Products</p>
          <a href="index.php#smartphones" class="footer-content">Smartphones</a><br>
          <a href="index.php#laptops" class="footer-content">Laptops</a><br>
          <a href="index.php#accessories" class="footer-content">Accessories</a><br>
        </div>
        <div class="col-md-6">
          <br><br>
          <p>© 2022 TokoShop Indonesia</p>
        </div>
      </div>
    </div>

  </body>
</html>

<script type="text/javascript">
  function confirmation(id){
    if (confirm('Apakah anda yakin akan menghapus data barang ini? (Barang dengan ID ' + id + ')'))
    {
        window.location.href = 'delete.php?id='+id;
    }
  }
</script>
