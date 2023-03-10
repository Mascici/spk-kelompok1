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
                <li><i class="fa fa-list-ol"></i><a href="penilaian.php"> Penilaian</a></li>
              </ol>
            </div>
          </div>

          <!--START SCRIPT INSERT-->
          <?php

          include 'koneksi.php';

          if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $ram = substr($_POST['ram'], 1, 1);
            $rom = substr($_POST['rom'], 1, 1);
            $layar = substr($_POST['layar'], 1, 1);
            $kamerabl = substr($_POST['kamerabl'], 1, 1);
            $kameradp = substr($_POST['kameradp'], 1, 1);
            $baterai = substr($_POST['baterai'], 1, 1);
            $processor = substr($_POST['processor'], 1, 1);
            $koneksi = substr($_POST['koneksi'], 1, 1);
            $harga = substr($_POST['harga'], 1, 1);
            if ($nama == "" || $ram == "" || $rom == "" || $layar == "" || $kamerabl == "" || $kameradp == "" || $baterai == "" || $processor == "" || $koneksi == "" || $harga == "") {
              echo "<script>
              alert('Tolong Lengkapi Data yang Ada!');
              </script>";
            } else {
              $sql = "SELECT*FROM saw_penilaian WHERE nama='$nama'";
              $hasil = $conn->query($sql);
              $rows = $hasil->num_rows;
              if ($rows > 0) {
                $row = $hasil->fetch_row();
                echo "<script>
                alert('Aplikasi $nama sudah ada!');
                </script>";
              } else {
                //insert name
                $sql = "INSERT INTO saw_penilaian(
                nama,ram,rom,layar,kamerabl,kameradp,baterai,processor,koneksi,harga)
                values ('" . $nama . "',
                '" . $ram . "',
                '" . $rom . "',
                '" . $layar . "',
                '" . $kamerabl . "',
                '" . $kameradp . "',
                '" . $baterai . "',
                '" . $processor . "',
                '" . $koneksi . "',
                '" . $harga . "')";
                $hasil = $conn->query($sql);
                echo "<script>
                alert('Penilaian Berhasil di Tambahkan!');
                </script>";
              }
            }
          }
          ?>
          <!-- END SCRIPT INSERT-->

          <!--start inputan-->
          <form method="POST" action="">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Alternatif</label>
              <div class="col-sm-4">
                <select class="form-control" name="nama">
                  <?php
                  //load nama
                  $sql = "SELECT * FROM saw_aplikasi";
                  $hasil = $conn->query($sql);
                  $rows = $hasil->num_rows;
                  if ($rows > 0) {
                    while ($row = mysqli_fetch_array($hasil)) :; {
                      } ?> <option><?php echo $row[0]; ?></option>
                  <?php endwhile;
                  } ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">RAM</label>
              <div class="col-sm-4">
                <select class=" form-control" name="ram">
                  <option>(1) Sangat Ringan</option>
                  <option>(2) Ringan</option>
                  <option>(3) Sedang</option>
                  <option>(4) Berat</option>
                  <option>(5) Sangat Berat</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">ROM</label>
              <div class="col-sm-4">
                <select class=" form-control" name="rom">
                  <option>(1) Sangat Ringan</option>
                  <option>(2) Ringan</option>
                  <option>(3) Sedang</option>
                  <option>(4) Berat</option>
                  <option>(5) Sangat Berat</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">LAYAR</label>
              <div class="col-sm-4">
                <select class=" form-control" name="layar">
                  <option>(1) Sangat Ringan</option>
                  <option>(2) Ringan</option>
                  <option>(3) Sedang</option>
                  <option>(4) Berat</option>
                  <option>(5) Sangat Berat</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">KAMERA BELAKANG</label>
              <div class="col-sm-4">
                <select class=" form-control" name="kamerabl">
                  <option>(1) Sangat Ringan</option>
                  <option>(2) Ringan</option>
                  <option>(3) Sedang</option>
                  <option>(4) Berat</option>
                  <option>(5) Sangat Berat</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">KAMERA DEPAN</label>
              <div class="col-sm-4">
                <select class=" form-control" name="kameradp">
                  <option>(1) Sangat Ringan</option>
                  <option>(2) Ringan</option>
                  <option>(3) Sedang</option>
                  <option>(4) Berat</option>
                  <option>(5) Sangat Berat</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">BATERAI</label>
              <div class="col-sm-4">
                <select class=" form-control" name="baterai">
                  <option>(1) Sangat Ringan</option>
                  <option>(2) Ringan</option>
                  <option>(3) Sedang</option>
                  <option>(4) Berat</option>
                  <option>(5) Sangat Berat</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Processor</label>
              <div class="col-sm-4">
                <select class=" form-control" name="processor">
                  <option>(1) Sangat Ringan</option>
                  <option>(2) Ringan</option>
                  <option>(3) Sedang</option>
                  <option>(4) Berat</option>
                  <option>(5) Sangat Berat</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Koneksi</label>
              <div class="col-sm-4">
                <select class=" form-control" name="koneksi">
                  <option>(1) Sangat Ringan</option>
                  <option>(2) Ringan</option>
                  <option>(3) Sedang</option>
                  <option>(4) Berat</option>
                  <option>(5) Sangat Berat</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Harga</label>
              <div class="col-sm-4">
                <select class=" form-control" name="harga">
                  <option>(1) Sangat Ringan</option>
                  <option>(2) Ringan</option>
                  <option>(3) Sedang</option>
                  <option>(4) Berat</option>
                  <option>(5) Sangat Berat</option>
                </select>
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
                <th><i class="fa fa-arrow-down"></i> Alternatif</th>
                <th><i class="fa fa-arrow-down"></i> RAM</th>
                <th><i class="fa fa-arrow-down"></i> ROM</th>
                <th><i class="fa fa-arrow-down"></i> layar</th>
                <th><i class="fa fa-arrow-down"></i> Kamera Belakang</th>
                <th><i class="fa fa-arrow-down"></i> Kamera Depan</th>
                <th><i class="fa fa-arrow-down"></i> Baterai</th>
                <th><i class="fa fa-arrow-down"></i> Processor</th>
                <th><i class="fa fa-arrow-down"></i> Koneksi</th>
                <th><i class="fa fa-arrow-down"></i> harga</th>
                <th><i class="fa fa-cogs"></i> Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $b = 0;
              $sql = "SELECT*FROM saw_penilaian ORDER BY nama ASC";
              $hasil = $conn->query($sql);
              $rows = $hasil->num_rows;
              if ($rows > 0) {
                while ($row = $hasil->fetch_row()) {
              ?>
                  <tr>
                    <td align="center"><?php echo $b = $b + 1; ?></td>
                    <td><?= $row[0] ?></td>
                    <td align="center"><?= $row[1] ?></td>
                    <td align="center"><?= $row[2] ?></td>
                    <td align="center"><?= $row[3] ?></td>
                    <td align="center"><?= $row[4] ?></td>
                    <td align="center"><?= $row[5] ?></td>
                    <td align="center"><?= $row[6] ?></td>
                    <td align="center"><?= $row[7] ?></td>
                    <td align="center"><?= $row[8] ?></td>
                    <td align="center"><?= $row[9] ?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" href="penilaian_hapus.php?nama=<?= $row[0] ?>">
                          <i class="fa fa-close"></i></a>
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