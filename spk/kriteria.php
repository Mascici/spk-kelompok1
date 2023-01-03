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
                <li><i class="fa fa-sticky-note"></i><a href="kriteria.php"> Kriteria</a></li>
              </ol>
            </div>
          </div>

          <!--START SCRIPT HITUNG-->
          <script>
            function fungsiku() {
              var a = (document.getElementById("ram_param").value).substring(0, 1);
              var b = (document.getElementById("rom_param").value).substring(0, 1);
              var c = (document.getElementById("layar_param").value).substring(0, 1);
              var d = (document.getElementById("kamerabl_param").value).substring(0, 1);
              var e = (document.getElementById("kameradp_param").value).substring(0, 1);
              var f = (document.getElementById("baterai_param").value).substring(0, 1);
              var g = (document.getElementById("processor_param").value).substring(0, 1);
              var h = (document.getElementById("koneksi_param").value).substring(0, 1);
              var i = (document.getElementById("harga_param").value).substring(0, 1);
              var total = Number(a) + Number(b) + Number(c) + Number(d) + Number(e) + Number(f) + Number(g) + Number(h) + Number(i);
              document.getElementById("ram").value = (Number(a) / total).toFixed(2); //benefit
              document.getElementById("rom").value = (Number(b) / total).toFixed(2); //benefit
              document.getElementById("layar").value = (Number(c) / total).toFixed(2); //benefit
              document.getElementById("kamerabl").value = (Number(d) / total).toFixed(2); //benefit
              document.getElementById("kameradp").value = (Number(e) / total).toFixed(2); //benefit
              document.getElementById("baterai").value = (Number(f) / total).toFixed(2); //benefit
              document.getElementById("processor").value = (Number(g) / total).toFixed(2); //benefit
              document.getElementById("koneksi").value = (Number(h) / total).toFixed(2); //benefit
              document.getElementById("harga").value = (Number(i) / total).toFixed(2); //cost
            }
          </script>
          <!--END SCRIPT HITUNG-->


          <!--START SCRIPT INSERT-->
          <?php

          include 'koneksi.php';

          if (isset($_POST['submit'])) {
            $ram = $_POST['ram'];
            $rom = $_POST['rom'];
            $layar = $_POST['layar'];
            $kamerabl = $_POST['kamerabl'];
            $kameradp = $_POST['kameradp'];
            $baterai = $_POST['baterai'];
            $processor = $_POST['processor'];
            $koneksi = $_POST['koneksi'];
            $harga = $_POST['harga'];
            if (($ram == "") or
              ($rom == "") or
              ($layar == "") or
              ($kamerabl == "") or
              ($kameradp == "") or
              ($baterai == "") or
              ($processor == "") or
              ($koneksi == "") or
              ($harga == "")
            ) {
              echo "<script>
              alert('Tolong Lengkapi Data yang Ada!');
              </script>";
            } else {
              $sql = "SELECT * FROM saw_kriteria";
              $hasil = $conn->query($sql);
              $rows = $hasil->num_rows;
              if ($rows > 0) {
                echo "<script>
                alert('Hapus Bobot Lama untuk Membuat Bobot Baru');
                </script>";
              } else {
                $sql = "INSERT INTO saw_kriteria(
                  ram, rom, layar, kamerabl, kameradp, baterai, processor, koneksi, harga)
                  values ('" . $ram . "',
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
                alert('Bobot Berhasil di Inputkan!');
                </script>";
              }
            }
          }
          ?>
          <!-- END SCRIPT INSERT-->


          <!--start inputan-->
          <form class="form-validate form-horizontal" id="register_form" method="post" action="">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><b>Kriteria</b></label>
              <div class="col-sm-3">
                <label><b>Bobot</b></label>
              </div>
              <div class="col-sm-2">
                <label><b>Perbaikan Bobot</b></label>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Ram</label>
              <div class="col-sm-3">
                <select class="form-control" name="ram_param" id="ram_param">
                  <option>1. Sangat Rendah</option>
                  <option>2. Rendah</option>
                  <option>3. Cukup</option>
                  <option>4. Tinggi</option>
                  <option>5. Sangat Tinggi</option>
                </select>
              </div>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="ram" id="ram">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Rom</label>
              <div class="col-sm-3">
                <select class="form-control" name="rom_param" id="rom_param">
                  <option>1. Sangat Rendah</option>
                  <option>2. Rendah</option>
                  <option>3. Cukup</option>
                  <option>4. Tinggi</option>
                  <option>5. Sangat Tinggi</option>
                </select>
              </div>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="rom" id="rom">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Layar</label>
              <div class="col-sm-3">
                <select class="form-control" name="layar_param" id="layar_param">
                  <option>1. Sangat Rendah</option>
                  <option>2. Rendah</option>
                  <option>3. Cukup</option>
                  <option>4. Tinggi</option>
                  <option>5. Sangat Tinggi</option>
                </select>
              </div>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="layar" id="layar">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Kamera Belakang</label>
              <div class="col-sm-3"> 
                <select class="form-control" name="kamerabl_param" id="kamerabl_param">
                  <option>1. Sangat Rendah</option>
                  <option>2. Rendah</option>
                  <option>3. Cukup</option>
                  <option>4. Tinggi</option>
                  <option>5. Sangat Tinggi</option>
                </select>
              </div>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="kamerabl" id="kamerabl">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Kamera depan</label>
              <div class="col-sm-3">
                <select class="form-control" name="kameradp_param" id="kameradp_param">
                  <option>1. Sangat Rendah</option>
                  <option>2. Rendah</option>
                  <option>3. Cukup</option>
                  <option>4. Tinggi</option>
                  <option>5. Sangat Tinggi</option>
                </select>
              </div>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="kameradp" id="kameradp">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Baterai</label>
              <div class="col-sm-3">
                <select class="form-control" name="baterai_param" id="baterai_param">
                  <option>1. Sangat Rendah</option>
                  <option>2. Rendah</option>
                  <option>3. Cukup</option>
                  <option>4. Tinggi</option>
                  <option>5. Sangat Tinggi</option>
                </select>
              </div>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="baterai" id="baterai">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Processor</label>
              <div class="col-sm-3">
                <select class="form-control" name="processor_param" id="processor_param">
                  <option>1. Sangat Rendah</option>
                  <option>2. Rendah</option>
                  <option>3. Cukup</option>
                  <option>4. Tinggi</option>
                  <option>5. Sangat Tinggi</option>
                </select>
              </div>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="processor" id="processor">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Koneksi</label>
              <div class="col-sm-3">
                <select class="form-control" name="koneksi_param" id="koneksi_param">
                  <option>1. Sangat Rendah</option>
                  <option>2. Rendah</option>
                  <option>3. Cukup</option>
                  <option>4. Tinggi</option>
                  <option>5. Sangat Tinggi</option>
                </select>
              </div>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="koneksi" id="koneksi">
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Harga</label>
              <div class="col-sm-3">
                <select class="form-control" name="harga_param" id="harga_param">
                  <option>1. Sangat Rendah</option>
                  <option>2. Rendah</option>
                  <option>3. Cukup</option>
                  <option>4. Tinggi</option>
                  <option>5. Sangat Tinggi</option>
                </select>
              </div>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="harga" id="harga">
              </div>
              <div class="col-sm-2">
                <button class="btn btn-outline-success" type="button" id="hitung" onclick="fungsiku()" name="hitung"><i class="fa fa-calculator"></i> Hitung</button>
              </div>
            </div>
            <div class="mb-4">
              <button class="btn btn-outline-primary" type="submit" name="submit"><i class="fa fa-save"></i> Submit</button>
            </div>
          </form>
          <table class="table">
            <thead>
              <tr>
                <th><i class="fa fa-arrow-down"></i> Ram</th>
                <th><i class="fa fa-arrow-down"></i> Rom</th>
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
            <?php
            $b = 0;
            $sql = "SELECT * FROM saw_kriteria";
            $hasil = $conn->query($sql);
            $rows = $hasil->num_rows;
            if ($rows > 0) {
              while ($row = $hasil->fetch_row()) {
            ?>
                <tr>
                  <td Align="center"><?= $row[1] ?></td>
                  <td Align="center"><?= $row[2] ?></td>
                  <td Align="center"><?= $row[3] ?></td>
                  <td Align="center"><?= $row[4] ?></td>
                  <td Align="center"><?= $row[5] ?></td>
                  <td Align="center"><?= $row[6] ?></td>
                  <td Align="center"><?= $row[7] ?></td>
                  <td Align="center"><?= $row[8] ?></td>
                  <td Align="center"><?= $row[9] ?></td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-danger" href="kriteria_hapus.php?id=<?= $row[0] ?>"><i class="fa fa-close"></i></a>
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