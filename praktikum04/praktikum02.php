<?php 
require_once 'header.php';
require_once 'sidebar.php';

?>

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tugas Praktikum</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Praktikum 02</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 mt-5">
                <!----form---->
                <h3>Belanja Online</h3>
                <hr>
                <form method="POST" action="praktikum02.php">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Nama Customer</label>
                        <div class="col-8">
                            <input id="name" name="name" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="Tv">
                                <label for="radio_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Kulkas">
                                <label for="radio_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Mesin cuci">
                                <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="batal" type="batal" class="btn btn-danger">Batal</button>
                            <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-4">
                <!---daftar harga--->
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">Kulkas : 3.100.000</li>
                    <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                    <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat

                </ul>
            </div>
        </div>
    </div>

    <hr>
    <?php
    if (isset($_POST['submit']) && isset($_POST['radio'])) : ?>
        Nama Customer :<?= $_POST['name'] ?>
        <br>
        Produk Pilihan :<?= $_POST['radio'] ?>
        <br>
        Jumlah Beli :<?= $_POST['jumlah'] ?>

        <br>
        <?php
        if ($_POST['radio'] == "Tv" && $_POST['jumlah'] >= 1) {
            $harga = 4200000 * $_POST['jumlah'];
            echo 'Total Harga :' . $harga;
        } elseif ($_POST['radio'] == "Kulkas" && $_POST['jumlah'] >= 1) {
            $harga = 3100000 * $_POST['jumlah'];
            echo 'Total Harga :' . $harga;
        } elseif ($_POST['radio'] == "Mesin cuci" && $_POST['jumlah'] >= 1) {
            $harga = 3800000 * $_POST['jumlah'];
            echo 'Total Harga :' . $harga;
        }
        ?>
    <?php endif ?>


</body>

</html>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 
require_once 'footer.php';
?>