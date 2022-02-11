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

    <?php
      include_once("connect.php");
      $smartphones = mysqli_query($mysqli, "SELECT * FROM barang_dijual JOIN id_kategori ON barang_dijual.id_kategori = id_kategori.id_kategori");
      $laptops = mysqli_query($mysqli, "SELECT * FROM barang_dijual JOIN id_kategori ON barang_dijual.id_kategori = id_kategori.id_kategori");
      $accessories = mysqli_query($mysqli, "SELECT * FROM barang_dijual JOIN id_kategori ON barang_dijual.id_kategori = id_kategori.id_kategori");
     ?>

    <div class="container-fluid">
      <div class="row margin-title">
        <div class="col-lg-2 mid-nav">
          <a href="index.php"><h2>TokoShop</h2></a>
        </div>
        <div class="col-lg-6 bar-nav item-nav text-center">
          <ul>
            <li class="list-nav"><a href="#smartphones">Smartphones</a></li>
            <li class="list-nav"><a href="#laptops">Laptops</a></li>
            <li class="list-nav"><a href="#accessories">Accessories</a></li>
          </ul>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-lg-3 button-navbar text-center">
          <a href="add.php">Tambah Barang</a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row main-post">
        <div class="col-md">
          <div class="main-post-content">
            <p class="p1">Launching Promo</p>
            <p class="p2">Diskon Hingga Rp 300.000</p>
            <p class="p3">1 Februari 2022 - 20 Februari 2022</p>
          </div>
        </div>
        <div class="col-md">
          <img src="https://asset.kompas.com/crops/J4iQ4vwaFn2WAEDMgMnbnWSsidg=/68x0:932x576/750x500/data/photo/2021/11/03/6181eb3394389.jpg"
           alt="main-post" class="img-main-post">
        </div>
      </div>
    </div>


      <div class="container-fluid content-margin">

      <section id="smartphones">
        <p class="judul-kategori">Smartphones</p>
        <div class="row text-center kelompok-kategori">
          <?php
            while($smartphone = mysqli_fetch_array($smartphones)){
              if ($smartphone['nama_kategori'] == "smartphones"){
              echo"
                <div class='col-sm-6 col-lg-3 item-div'>
                  <a href='barang.php?id=".$smartphone['id']."'>
                  <img src='".$smartphone['link_gambar']."' alt='".$smartphone['nama']."' class='img-smartphones'>
                  <p class='p-nama'>".$smartphone['nama']."</p>
                  <p class='p-varian'>".$smartphone['varian']."</p>
                  <p class='p-harga'>Rp ".number_format($smartphone['harga'])."</p>
                    <a href='barang.php?id=".$smartphone['id']."' class='btn btn-outline-dark'>Detail Produk</a>
                  </a>
                  </div>
                    ";
            }}
          ?>
        </div>
    </section>

    <section id="laptops">
      <p class="judul-kategori">Laptops</p>
      <div class="row text-center kelompok-kategori">
        <?php
          while($laptop = mysqli_fetch_array($laptops)){
            if ($laptop['nama_kategori'] == "laptops"){
            echo"
              <div class='col-sm-6 col-xl-3 item-div'>
                <a href='barang.php?id=".$laptop['id']."'>
                <img src='".$laptop['link_gambar']."' alt='".$laptop['nama']."' class='img-laptops hover-zoom'>
                <p class='p-nama'>".$laptop['nama']."</p>
                <p class='p-varian'>".$laptop['varian']."</p>
                <p class='p-harga'>Rp ".number_format($laptop['harga'])."</p>
                  <a href='barang.php?id=".$laptop['id']."' class='btn btn-outline-dark'>Detail Produk</a>
                </a>
                </div>
                  ";
          }}
        ?>
      </div>
    </section>

    <section id="accessories">
      <p class="judul-kategori">Accessories</p>
      <div class="row text-center kelompok-kategori">
        <?php
          while($accessory = mysqli_fetch_array($accessories)){
            if ($accessory['nama_kategori'] == "accessories"){
            echo"
              <div class='col-sm-6 col-xl-3 item-div'>
                <a href='barang.php?id=".$accessory['id']."'>
                <img src='".$accessory['link_gambar']."' alt='".$accessory['nama']."' class='img-accessories hover-zoom'>
                <p class='p-nama'>".$accessory['nama']."</p>
                <p class='p-varian'>".$accessory['varian']."</p>
                <p class='p-harga'>Rp ".number_format($accessory['harga'])."</p>
                  <a href='barang.php?id=".$accessory['id']."' class='btn btn-outline-dark'>Detail Produk</a>
                </a>
                </div>
                  ";
          }}
        ?>
      </div>
    </section>

    </div>

    <hr>

    <div class="container footer">
      <div class="row">
        <div class="col-md-6">
          <p class="footer-title">Products</p>
          <a href="#smartphones" class="footer-content">Smartphones</a><br>
          <a href="#laptops" class="footer-content">Laptops</a><br>
          <a href="#accessories" class="footer-content">Accessories</a><br>
        </div>
        <div class="col-md-6" style="vertical-align: middle;">
          <br><br>
          <p>© 2022 TokoShop Indonesia</p>
        </div>
      </div>
    </div>

  </body>
</html>
