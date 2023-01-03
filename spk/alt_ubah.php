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
                                <li><i class="fa fa-edit"></i><a href=""> Edit</a></li>
                            </ol>
                        </div>
                    </div>

                    <!--START SCRIPT UPDATE-->
                    <?php
                    include 'koneksi.php';

                    if (isset($_POST['edit'])) {
                        $first_nama = $_GET['nama'];
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
                        if (($nama == "") or ($ram == "") or ($rom == "") or ($layar == "") or ($kamerabl == "") or ($kameradp == "") or ($baterai == "") or ($processor == "") or ($koneksi == "") or ($harga == "")) {
                            echo "<script>
                            alert('Tolong lengkapi data yang ada!');
                            </script>";
                        } else {
                            $sql = "UPDATE saw_aplikasi SET nama='$nama', ram='$ram', rom='$rom', layar='$layar', kamerabl='$kamerabl', kameradp='$kameradp', baterai='$baterai', processor='$processor', koneksi='$koneksi', harga='$harga'
                                    WHERE nama='$first_nama'";
                            $hasil = $conn->query($sql);
                            if ($hasil) {
                                echo "<script>
                                alert('berhasil di update !');
                                window.location.href='index.php'; 
                                </script>";
                            }
                        }
                    }
                    ?>
                    <!-- END SCRIPT UPDATE-->

                    <!--start inputan-->
                    <form method="POST" action="">
                        <?php
                        $nama = $_GET['nama'];
                        $sql = "SELECT * FROM saw_aplikasi WHERE nama = '$nama'";
                        $hasil = $conn->query($sql);
                        $rows = $hasil->num_rows;
                        if ($rows > 0) {
                            $row = $hasil->fetch_row();
                            $nama = $row[0];
                            $ram = $row[1];
                            $rom = $row[2];
                            $layar = $row[3];
                            $kamerabl = $row[4];
                            $kameradp = $row[5];
                            $baterai = $row[6];
                            $processor = $row[7];
                            $koneksi = $row[8];
                            $harga = $row[9];
                        ?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nama" value="<?= $nama ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">RAM</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="ram" value="<?= $ram ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">ROM</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="rom" value="<?= $rom ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">layar</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="layar" value="<?= $layar ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">kamerabl</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="kamerabl" value="<?= $kamerabl ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kameradp</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="kameradp" value="<?= $kameradp ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Baterai</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="baterai" value="<?= $baterai ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Processor</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="processor" value="<?= $processor ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">koneksi</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="koneksi" value="<?= $koneksi ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-5">
                                    <input type="number" class="form-control" name="harga" value="<?= $harga ?>">
                                </div>
                            </div>
                            <div>
                                <button type="button" class="btn btn-outline-danger mr-3"><a href="index.php"><i class="fa fa-close"></i> Cancel</a></button>
                                <button type="edit" name="edit" class="btn btn-outline-primary"><i class="fa fa-edit"></i> Edit</button>
                            </div>
                    </form>
                <?php } ?>
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