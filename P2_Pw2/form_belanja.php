<?php 
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$harga = 0;
if ($produk=="TV") {
  $harga=4200000*$jumlah;
} elseif ($produk=="Kulkas") {
  $harga=3100000*$jumlah;
} elseif ($produk=="Mesin Cuci") {
  $harga=3800000*$jumlah;
} else { 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<form action="form_belanja.php" method="POST" class="border border-primary col-12 ">
  <h1 class="text-info">Belanja Online</h1><br><br>
  <div class="form-group row col-4">
    <label for="customer" class="col-3 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row col-5">
    <label class="col-3">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row col-4">
    <label for="jumlah" class="col-3 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="jumlah" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row col-3">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div><br>
  <div class="position-relative py-5 mx-5 mt-2">
    <table class="table table-striped table-primary text-light col-4 float-right "> <br>
        <tr>
          <th class="text-center">Daftar Harga</th>
        </tr>
        <tr>
          <td>TV : 4.200.000</td>
        </tr>
        <tr>
        <td>Kulkas : 3.100.000</td>
        </tr>
        <tr>
        <td>Mesin Cuci : 3.800.000</td>
        </tr>
        <tr>
        <td class="text-center">Harga Dapat Berubah Setiap Saat</td>
        </tr>
    </table>
  </div>
</form><br><br>

<div class="container">
  <div class="card col-4 border border-primary pt-3 text-info">
    <h6>Nama Customer : <?php echo $customer ?></h6>
    <h6>Produk Pilihan : <?php echo $produk ?></h6>
    <h6>jumlah Beli : <?php echo $jumlah ?></h6>
    <h6>Total Belanja : <?php echo $harga ?></h6>
  </div>
</div>

</body>
</html>