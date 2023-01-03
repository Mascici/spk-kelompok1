<!doctype html>
<html lang="en">

<?php
include 'components/head.php';
?>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <?php
    include 'components/sidebar.php';
    ?>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <?php
      include 'components/navbar.php';
      ?>

      <section id="main-content">
        <section class="wrapper">
          <!--overview start-->
          <div class="row">
            <div class="col-lg-12">
              <ol class="breadcrumb">
                <li><i class="fa fa-user"></i><a href="index.php"> Alternatif</a></li>
              </ol>
            </div>
          </div>

          <!--START SCRIPT INSERT-->
          <?php
          include 'koneksi.php';

          if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $ram = $_POST['ram'];
            $rom = $_POST['rom'];
            $layar = $_POST['layar'];
            $kamerabl = $_POST['kamerabl'];
            $kameradp = $_POST['kameradp'];
            $baterai = $_POST['baterai'];
            $processor = $_POST['processor'];
            $koneksi = $_POST['koneksi'];
            $harga = $_POST['harga'];
            if (($nama == "") or ($ram == "")) {
              echo "<script>alert('Tolong Lengkapi Data yang Ada!');</script>";
            } else {
              $sql = "SELECT * FROM saw_aplikasi WHERE nama='$nama'";
              $hasil = $conn->query($sql);
              $rows = $hasil->num_rows;
              if ($rows > 0) {
                $row = $hasil->fetch_row();
                echo "<script>alert('Aplikasi $brand Sudah Ada!');</script>";
              } else {
                $sql = "INSERT INTO saw_aplikasi(nama,ram,rom,layar,kamerabl,kameradp,baterai,processor,koneksi,harga)
                values ('" . $nama . "','" . $ram . "','" . $rom . "','" . $layar . "','" . $kamerabl . "','" . $kameradp . "','" . $baterai . "','" . $processor . "','" . $koneksi . "','" . $harga . "')";
                $hasil = $conn->query($sql);
                echo "<script>alert('Data Barhasil diTambahkan!');</script>";
              }
            }
          }
          ?>
          <!-- END SCRIPT INSERT-->

          <!--start inputan-->
          <form method="POST" action="">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="nama">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">RAM</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="ram">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">ROM</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="rom">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Layar</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="layar">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Kamera Belakang</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="kamerabl">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Kamera Depan</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="kameradp">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Baterai</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="baterai">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Processor</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="processor">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Koneksi</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="koneksi">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Harga</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="harga">
              </div>
            </div>
    
            <div class="mb-4">
              <button type="submit" name="submit" class="btn btn-outline-primary"><i class="fa fa-save"></i> Submit</button>
            </div>
          </form>
          <table class="table">
            <thead>
              <tr>
                <th><i class="fa fa-arrow-down"></i> No</th>
                <th><i class="fa fa-arrow-down"></i> Nama</th>
                <th><i class="fa fa-arrow-down"></i> RAM</th>
                <th><i class="fa fa-arrow-down"></i> ROM</th>
                <th><i class="fa fa-arrow-down"></i> Layar</th>
                <th><i class="fa fa-arrow-down"></i> Kamera Belakang</th>
                <th><i class="fa fa-arrow-down"></i> Kamera Depan</th>
                <th><i class="fa fa-arrow-down"></i> Baterai</th>
                <th><i class="fa fa-arrow-down"></i> Processor</th>
                <th><i class="fa fa-arrow-down"></i> Koneksi</th>
                <th><i class="fa fa-arrow-down"></i> Harga</th>
                <th><i class="fa fa-cogs"></i> Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $b = 0;
              $sql = "SELECT*FROM saw_aplikasi ORDER BY nama ASC";
              $hasil = $conn->query($sql);
              $rows = $hasil->num_rows;
              if ($rows > 0) {
                while ($row = $hasil->fetch_row()) {
              ?>
                  <tr>
                    <td><?php echo $b = $b + 1; ?></td>
                    <td><?= $row[0] ?></td>
                    <td><?= $row[1] ?>GB</td>
                    <td><?= $row[2] ?>GB</td>
                    <td><?= $row[3] ?></td>
                    <td><?= $row[4] ?>MP</td>
                    <td><?= $row[5] ?>MP</td>
                    <td><?= $row[6] ?>mAh</td>
                    <td><?= $row[7] ?></td>
                    <td><?= $row[8] ?>G</td>
                    <td>Rp<?= $row[9] ?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-success" href="alt_ubah.php?nama=<?= $row[0] ?>"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="alt_hapus.php?nama=<?= $row[0] ?>"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
              <?php }
              } else {
                echo "<tr>
                    <td>Data Tidak Ada</td>
                <tr>";
              } ?>
            </tbody>
          </table>
        </section>
      </section>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>