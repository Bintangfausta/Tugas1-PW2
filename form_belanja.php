<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Form Belanja</title>
</head>

<body>
  <div class="container">
    <h1>From Belanja</h1>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <form method="POST" action="form_belanja.php">
      <div class="form-group row">
        <label for="Nama Customer" class="col-4 col-form-label">Customer</label>
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-card"></i>
              </div>
            </div>
            <input id="Nama Customer" name="nama_customer" placeholder="Masukan Nama Customer" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Pilih Produk</label>
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="tv" type="radio" class="custom-control-input" value="tv">
            <label for="tv" class="custom-control-label">TV</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="kulkas" type="radio" class="custom-control-input" value="kulkas">
            <label for="kulkas" class="custom-control-label">Kulkas</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="mesin_cuci" type="radio" class="custom-control-input" value="mesin_cuci">
            <label for="mesin_cuci" class="custom-control-label">Mesin Cuci</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
          <input id="jumlah" name="jumlah" placeholder="Jumlah Beli" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
        </div>
      </div>
    </form>

    <?php if (isset($_POST['submit'])) {

      // tampung data menggunakan variabel
      $custname = $_POST["nama_customer"];
      $produk = $_POST["produk"];
      $jumlah_beli = $_POST["jumlah"];

      switch ($produk) {
        case "tv":
          $total = $jumlah_beli * 4200000;
          break;
        case "kulkas":
          $total = $jumlah_beli * 3100000;
          break;
        case "mesin_cuci":
          $total = $jumlah_beli * 3800000;
          break;
      }

      // Tampilkan data dari variabel
      echo '<br>Nama Customer : ' . $custname;
      echo '<br>Produk pilihan : ' . $produk;
      echo '<br>Jumlah beli : ' . $jumlah_beli;
      echo '<br>Total harga : ' . $total;
    }
    ?>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->



</body>

</html>