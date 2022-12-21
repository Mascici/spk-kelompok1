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
                        $kamera = $_POST['kamera'];
                        $baterai = $_POST['baterai'];
                        $processor = $_POST['processor'];
                        $harga = $_POST['harga'];
                        if (($nama == "") or ($ram == "")) {
                            echo "<script>
                            alert('Tolong lengkapi data yang ada!');
                            </script>";
                        } else {
                            $sql = "UPDATE saw_aplikasi SET nama='$nama',ram='$ram', kamera='$kamera', baterai='$baterai', processor='$processor', harga='$harga'
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
                            $kamera = $row[2];
                            $baterai = $row[3];
                            $processor = $row[4];
                            $harga = $row[5];
                        ?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama HP</label>
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
                                <label class="col-sm-2 col-form-label">Kamera</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="kamera" value="<?= $kamera ?>">
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